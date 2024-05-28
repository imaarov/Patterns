<?php

namespace Imaarov\Patterns\Behavioral\State\Service;

use Imaarov\Patterns\Behavioral\State\Interface\FileUploadInterface;

class VideoUploadService implements FileUploadInterface {
    public function upload()
    {
        echo "\nTake action for uploading video file...\n";
    }
}