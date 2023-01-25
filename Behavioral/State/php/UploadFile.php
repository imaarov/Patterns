<?php

namespace DesignPattern\Behavioral\State\Php;

use DesignPattern\Behavioral\State\Php\Enum\FileTypeEnum;
use DesignPattern\Behavioral\State\Php\Interface\FileUploadInterface;

class UploadFile {
    
    public static function upload(FileUploadInterface $fileUploadInterface)
    {
        return $fileUploadInterface->upload();
    }


}