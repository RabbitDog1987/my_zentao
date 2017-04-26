<?php
helper::import('D:\github\my_zentao\module\bug\model.php');
class extbugModel extends bugModel 
{
public function setListValue($productID, $branch = 0)
{
    return $this->loadExtension('excel')->setListValue($productID, $branch);
}

public function createFromImport($productID, $branch = 0)
{
    return $this->loadExtension('excel')->createFromImport($productID, $branch);
}
//**//
}