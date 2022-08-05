<?php

include "export/contract/typeOfData.php";
include "export/filetypes/excel.php";
include "export/filetypes/pdf.php";
include "export/filetypes/word.php";


class export 
{
    private $data;
    private $filetype;

    public function generate($data,$filetype){
        $this->data = $data;
        $this->filetype = $filetype;
        $type = new $this->filetype;
        return  $type->excute();
    }
}