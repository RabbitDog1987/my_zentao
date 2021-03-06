<?php
helper::import(dirname(dirname(dirname(__FILE__))) . "/control.php");
class myfile extends file
{
    public $fileCount = 1;

    /**
     * init for excel data. 
     * 
     * @access public
     * @return void
     */
    public function xlsInit()
    {
        $this->phpExcel = $this->app->loadClass('phpexcel');
        $this->fields   = $this->post->fields;
        $this->rows     = $this->post->rows;

        $this->fieldsKey = array_keys($this->fields);
    }

    /**
     * Export data to Excel. This is main function.
     * 
     * @access public
     * @return void
     */
    public function export2Xls()
    {
        $this->xlsInit();
        $this->excelKey  = array();
        for($i = 0; $i < count($this->fieldsKey); $i++) $this->excelKey[$this->fieldsKey[$i]] = $this->setExcelXlsFiled($i);

        $excelProps = $this->phpExcel->getProperties();
        $excelProps->setCreator("ZenTao");
        $excelProps->setLastModifiedBy("ZenTao");
        $excelProps->setTitle("Office XLS Test Document");
        $excelProps->setSubject("Office XLS Test Document");
        $excelProps->setDescription("Test document, generated by PHPExcel.");
        $excelProps->setKeywords("office excel PHPExcel");
        $excelProps->setCategory("Test result file");

        $this->phpExcel->setActiveSheetIndex(0);
        $sheetTitle = isset($this->lang->excel->title->{$this->post->kind}) ? $this->lang->excel->title->{$this->post->kind} : $this->post->kind;
        $excelSheet = $this->phpExcel->getActiveSheet();
        if($sheetTitle) $excelSheet->setTitle($sheetTitle);
        foreach($this->fields as $key => $field) $excelSheet->setCellValue($this->excelKey[$key] . '1', $field);

        /* Write system data in excel.*/
        $this->writeXlsSysData();

        $i = 1;
        $excelData = array();
        foreach($this->rows as $num => $row)
        {
            $i++;
            $columnData = array();
            foreach($row as $key => $value)
            {
                if(isset($this->excelKey[$key]))
                {
                    /* Merge Cells.*/
                    if(isset($this->post->rowspan[$num]) and (strpos($this->post->rowspan[$num]['rows'], ",$key,") !== false))
                    {
                        $excelSheet->mergeCells($this->excelKey[$key] . $i . ":" . $this->excelKey[$key] . ($i + $this->post->rowspan[$num]['num'] - 1));
                    }
                    if(isset($this->post->colspan[$num]) and strpos($this->post->colspan[$num]['cols'], ",$key,") !== false)
                    {
                        $excelSheet->mergeCells($this->excelKey[$key] . $i . ":" . chr(ord($this->excelKey[$key]) + $this->post->colspan[$num]['num'] - 1) . $i);
                    }

                    /* Wipe off html tags.*/
                    if(isset($this->config->excel->editor[$this->post->kind]) and in_array($key, $this->config->excel->editor[$this->post->kind])) $value = $this->file->excludeHtml($value);
                    if($key == 'files')
                    {
                        $this->formatXlsFiles($excelSheet, $i, $value);
                        continue;
                    } 
                    if(($key == 'project' or $key == 'product') and isset($value[1])) $value = $value[1] == ':' ? substr($value, 2) : $value;
                    $excelSheet->setCellValue($this->excelKey[$key] . $i, $value);
                }

                /* Build excel list.*/
                if(!empty($_POST['listStyle']) and in_array($key, $this->post->listStyle)) $this->buildXlsList($excelSheet, $key, $i);
            }
        }

        $initField = isset($this->config->excel->{$this->post->kind}->initField) ? $this->config->excel->{$this->post->kind}->initField : array();
        if(!empty($_POST['extraNum']))
        {
            $i++;
            $extraNum = $i + $this->post->extraNum;
            for($i; $i < $extraNum; $i++)
            {
                foreach($this->fieldsKey as $field)
                {
                    if(isset($this->excelKey[$field]))
                    {
                        if(($field == 'project' or $field == 'product') and isset($_POST[$field])) $excelSheet->setCellValue($this->excelKey[$field] . $i, $_POST[$field]);
                        if($field == 'estStarted' or $field == 'deadline') $excelSheet->setCellValue($this->excelKey[$field] . $i, '0000-00-00');
                        if(isset($initField[$field])) $excelSheet->setCellValue($this->excelKey[$field] . $i, $initField[$field]);
                    }

                    /* Build excel list.*/
                    if(!empty($_POST['listStyle']) and in_array($field, $this->post->listStyle)) $this->buildXlsList($excelSheet, $field, $i);
                }
            }
        }
        /*Add help lang in end.*/
        if(isset($this->lang->excel->help->{$this->post->kind}) and !empty($_POST['extraNum'])) $excelSheet->setCellValue("A" . $i, $this->lang->excel->help->{$this->post->kind});
        $this->setXlsStyle($excelSheet, $i);

        /* urlencode the filename for ie. */
        $fileName = $this->post->fileName;
        if(strpos($this->server->http_user_agent, 'Trident') !== false) $fileName = urlencode($fileName);

        $obLevel = ob_get_level();
        for($i = 0; $i < $obLevel; $i++) ob_end_clean();    // clean the ob content to make sure no space or utf-8 bom output.

        setcookie('downloading', 1);
        header('Content-Type: application/vnd.ms-excel');
        header("Content-Disposition: attachment;filename=\"{$fileName}.xls\"");
        header('Cache-Control: max-age=0');

        $excelWriter = PHPExcel_IOFactory::createWriter($this->phpExcel, 'Excel5');
        $excelWriter->setPreCalculateFormulas(false);
        $excelWriter->save('php://output');
        exit;
    }

    /**
     * Set excel style 
     * 
     * @param  int    $excelSheet 
     * @access public
     * @return void
     */
    public function setXlsStyle($excelSheet, $i)
    {
        $endColumn = $this->setExcelXlsFiled(count($this->excelKey) + $this->fileCount - 2);
        $i         = (isset($this->lang->excel->help->{$this->post->kind}) and !empty($_POST['extraNum'])) ? $i - 1 : $i;

        /* Set Auto Filter. */
        if($this->rows) $excelSheet->setAutoFilter("A1:$endColumn$i");
        /* Freeze column. */
        if(isset($this->config->excel->freeze->{$this->post->kind}))
        {
            $column = $this->excelKey[$this->config->excel->freeze->{$this->post->kind}];
            $excelSheet->FreezePane($column . '2');
        }

        $excelSheet->getRowDimension(1)->setRowHeight(20);

        /* Set content style for this table.*/
        $contentStyle = array(
            'font'    => array(
                'size' => 9
            ),
            'alignment' => array(
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                'wrap'     => true
            ),
            'borders' => array( 
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                    'color' => array( 'rgb' => '808080')
                )
            )
        );
        $this->file->setAreaStyle($excelSheet, $contentStyle, "A2:" . $endColumn . $i);

        /* Set header style for this table.*/
        $headerStyle = array(
            'borders' => array( 
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                    'color' => array( 'rgb' => '808080')
                )
            ),
            'font'    => array(
                'bold'      => true,
                'color'     => array( 'rgb' => 'ffffff')
            ),
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            ),
            'fill' => array(
                 'type'       => PHPExcel_Style_Fill::FILL_SOLID,
                 'startcolor' => array('rgb' => '343399')
            )
        );
        $this->file->setAreaStyle($excelSheet, $headerStyle, 'A1:' . $endColumn . '1');

        foreach($this->excelKey as $key => $letter)
        {
            $shortWidth = $this->config->excel->width->short;
            $titleWidth = $this->config->excel->width->middle;
            $contWidth  = $this->config->excel->width->long;

            if(strpos($key, 'Date') !== false) $excelSheet->getColumnDimension($letter)->setWidth(12);
            if(in_array($key, $this->config->excel->shortFields)) $excelSheet->getColumnDimension($letter)->setWidth($shortWidth);
            if(in_array($key, $this->config->excel->titleFields)) $excelSheet->getColumnDimension($letter)->setWidth($titleWidth);
            if(isset($this->config->excel->editor[$this->post->kind]) and in_array($key, $this->config->excel->editor[$this->post->kind])) $excelSheet->getColumnDimension($letter)->setWidth($contWidth);
            if(in_array($key, $this->config->excel->autoWidths)) $excelSheet->getColumnDimension($letter)->setAutoSize(true);
            if(isset($_POST['width'][$key])) $excelSheet->getColumnDimension($letter)->setWidth($_POST['width'][$key]);
            if(in_array($key, $this->config->excel->centerFields))
            {
                $centerStyle = array(
                    'font'    => array(
                        'size' => 9
                    ),
                    'alignment' => array(
                        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
                    ),
                    'borders' => array( 
                        'allborders' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                            'color' => array( 'rgb' => '808080')
                        )
                    )
                );
                $this->file->setAreaStyle($excelSheet, $centerStyle, $letter . "2:" . $letter . $i);
            }

            if(strpos($key, 'Date') !== false or in_array($key, $this->config->excel->dateField))
            {
                $numberFormat = array(
                    'font'    => array(
                        'size' => 9
                    ),
                    'alignment' => array(
                        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                        'wrap'     => true
                    ),
                    'numberformat' => array(
                        'code' => PHPExcel_Style_NumberFormat::FORMAT_DATE_YYYYMMDD2
                    ),
                    'borders' => array( 
                        'allborders' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                            'color' => array( 'rgb' => '808080')
                        )
                    )
                );
                $this->file->setAreaStyle($excelSheet, $numberFormat, $letter . "2:" . $letter . $i);
            }
        }

        /* Set interlaced color for this table. */
        if(!$this->post->nocolor)
        {
            for($row = 2; $row <= $i; $row++)
            {
                $excelSheet->getRowDimension($row)->setRowHeight($this->config->excel->cellHeight);

                $area  = "A$row:$endColumn$row";
                $color = $row % 2 == 0 ? 'FFB2D7EA' : 'FFdee6fb';
                $excelStyle = $excelSheet->getStyle($area);
                $excelFill  = $excelStyle->getFill();
                $excelFill->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
                $excelFill->getStartColor()->setARGB($color);
            }
        }
    }

    /**
     * Format files field.
     * 
     * @param  int    $excelSheet 
     * @param  int    $i 
     * @param  int    $content 
     * @access public
     * @return void
     */
    public function formatXlsFiles($excelSheet, $i, $content)
    {
        if(empty($content)) return;
        $content    = explode('<br />', $content);
        $fileCount  = 0;
        $fieldCount = count($this->excelKey);
        foreach($content as $key => $linkHtml)
        {
            if(empty($linkHtml)) continue;
            $fileCount ++;
            preg_match("/<a href='([^']+)'[^>]*>(.+)<\/a>/", $linkHtml, $out);
            $linkHref = $out[1];
            $linkName = $out[2];
            $fieldName = $this->setExcelXlsFiled($fieldCount + $key - 1);
            $excelSheet->setCellValue($fieldName . $i, $linkName);
            $excelSheet->getCell($fieldName  . $i)->getHyperlink()->setUrl($linkHref);
            $excelSheet->getCell($fieldName  . $i)->getHyperlink()->setTooltip('Navigate to website');
        }

        if($fileCount > $this->fileCount)
        {
            $this->fileCount = $fileCount;
            if(end($this->excelKey) != $fieldName) $excelSheet->mergeCells(end($this->excelKey) . 1 . ":" . $fieldName . 1);
        }
    }

    /**
     * Set excel filed name.
     * 
     * @param  int    $count 
     * @access public
     * @return void
     */
    public function setExcelXlsFiled($count)
    {
        $letter = 'A';
        for($i = 1; $i <= $count; $i++)$letter++;
        return $letter;
    }

    public function writeXlsSysData()
    {
        if(isset($_POST['storyList']))
        {
            $this->phpExcel->createSheet();
            $this->phpExcel->getSheet(1)->setTitle($this->lang->excel->title->sysValue);
            foreach($this->post->storyList as $key => $story) $this->phpExcel->getSheet(1)->setCellValue("A" . ($key + 1), $story);
        }
        if(isset($_POST['moduleList']))
        {
            if($this->phpExcel->getSheetCount() < 2)
            {
                $this->phpExcel->createSheet();
                $this->phpExcel->getSheet(1)->setTitle($this->lang->excel->title->sysValue);
            }
            foreach($this->post->moduleList as $key => $module) $this->phpExcel->getSheet(1)->setCellValue("B" . ($key + 1), $module);
        }
        if(isset($_POST['projectList']))
        {
            if($this->phpExcel->getSheetCount() < 2)
            {
                $this->phpExcel->createSheet();
                $this->phpExcel->getSheet(1)->setTitle($this->lang->excel->title->sysValue);
            }
            foreach($this->post->projectList as $key => $project) $this->phpExcel->getSheet(1)->setCellValue("C" . ($key + 1), $project);
        }
        if(isset($_POST['planList']))
        {
            if($this->phpExcel->getSheetCount() < 2)
            {
                $this->phpExcel->createSheet();
                $this->phpExcel->getSheet(1)->setTitle($this->lang->excel->title->sysValue);
            }
            foreach($this->post->planList as $key => $plan) $this->phpExcel->getSheet(1)->setCellValue("D" . ($key + 1), $plan);
        }
        if(isset($_POST['buildList']))
        {
            if($this->phpExcel->getSheetCount() < 2)
            {
                $this->phpExcel->createSheet();
                $this->phpExcel->getSheet(1)->setTitle($this->lang->excel->title->sysValue);
            }
            foreach($this->post->buildList as $key => $plan) $this->phpExcel->getSheet(1)->setCellValue("E" . ($key + 1), $plan);
        }
    }

    public function buildXlsList($excelSheet, $field, $row)
    {
        $listName = $field . 'List';
        $range = ($field == 'story' and isset($_POST['storyList'])) ? "{$this->lang->excel->title->sysValue}!\$A\$1:\$A\$" . count($this->post->storyList) :  (is_array($this->post->$listName) ? '' : '"' . $this->post->$listName . '"');
        $range = ($field == 'module' and isset($_POST['moduleList'])) ?  "{$this->lang->excel->title->sysValue}!\$B\$1:\$B\$" . count($this->post->moduleList)  : $range;
        $range = ($field == 'project' and isset($_POST['projectList'])) ? "{$this->lang->excel->title->sysValue}!\$C\$1:\$C\$" . count($this->post->projectList) : $range;
        $range = ($field == 'plan' and isset($_POST['planList'])) ? "{$this->lang->excel->title->sysValue}!\$D\$1:\$D\$" . count($this->post->planList) : $range;
        $range = ($field == 'openedBuild' and isset($_POST['buildList'])) ? "{$this->lang->excel->title->sysValue}!\$E\$1:\$E\$" . count($this->post->buildList) : $range;
        $objValidation = $excelSheet->getCell($this->excelKey[$field] . $row)->getDataValidation();
        $objValidation->setType(PHPExcel_Cell_DataValidation::TYPE_LIST)
            ->setErrorStyle(PHPExcel_Cell_DataValidation::STYLE_INFORMATION)
            ->setAllowBlank(false)
            ->setShowErrorMessage(true)
            ->setShowDropDown(true)
            ->setErrorTitle($this->lang->excel->errorTitle)
            ->setError($this->lang->excel->error)
            ->setFormula1($range);
    }
}
