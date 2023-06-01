<?php

namespace DesignPattern\Behavioral\State\Php\Service;

use DesignPattern\Behavioral\State\Php\Interface\FileUploadInterface;

class VideoUploadService implements FileUploadInterface {
    public function upload()
    {
        echo "\nTake action for uploading video file...\n";
    }
}