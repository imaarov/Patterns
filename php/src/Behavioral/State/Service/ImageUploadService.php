<?php

namespace Imaarov\Patterns\Behavioral\State\Service;

use Imaarov\Patterns\Behavioral\State\Interface\FileUploadInterface;

class ImageUploadService implements FileUploadInterface {
    public function upload()
    {
        echo "\nTake action for uploading image file...\n";
    }
}