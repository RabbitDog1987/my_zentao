<?php
helper::import('D:\github\my_zentao\module\file\model.php');
class extfileModel extends fileModel 
{
public function excludeHtml($content, $extra = '')
{
    return $this->loadExtension('excel')->excludeHtml($content, $extra);
}

public function setAreaStyle($excelSheet, $style, $area)
{
    return $this->loadExtension('excel')->setAreaStyle($excelSheet, $style, $area);
}
//**//
}