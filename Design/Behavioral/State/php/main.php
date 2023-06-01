<?php

namespace DesignPattern\Behavioral\State\Php;

use DesignPattern\Behavioral\State\Php\Interface\FileUploadInterface;

class main {

    private FileUploadInterface $fileUploadInterface;

    /**
     * Set the service class to use it when we want to upload the file
     * 
     * @param FileUploadInterface $fileUploadInterface
     * @return void
     */
    public function setFileUploadService(FileUploadInterface $fileUploadInterface) : void {
        $this->fileUploadInterface = $fileUploadInterface;
    }

    /**
     * Get the file upload service class
     * 
     * @param void
     * @return FileUploadInterface $fileUploadInterface
     */
    public function getFileUploadService() : FileUploadInterface {
        return $this->fileUploadInterface;
    }

    /**
     * UploadFile Service take action BASE ON fileuplaod service
     * 
     * @param void
     * @return void 
     */
    public function action()
    {
        UploadFile::upload($this->fileUploadInterface);
    }
}