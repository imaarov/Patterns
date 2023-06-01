<?php

namespace DesignPattern\Behavioral\State\Php\Service;

use DesignPattern\Behavioral\State\Php\Interface\FileUploadInterface;

class ImageUploadService implements FileUploadInterface {
    public function upload()
    {
        echo "\nTake action for uploading image file...\n";
    }
}