<?php

namespace Imaarov\Patterns\Behavioral\State;

use Imaarov\Patterns\Behavioral\State\Enum\FileTypeEnum;
use Imaarov\Patterns\Behavioral\State\Interface\FileUploadInterface;

class UploadFile {
    
    public static function upload(FileUploadInterface $fileUploadInterface)
    {
        return $fileUploadInterface->upload();
    }


}