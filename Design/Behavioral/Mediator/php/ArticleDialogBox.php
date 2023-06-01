<?php

namespace DesignPattern\Behavioral\Mediator\Php;

use DesignPattern\Behavioral\Mediator\Php\Button;

class ArticleDialogBox extends DialogBox {

    private ListBox $articlesListBox;
    private TextBox $titleTextBox;
    private Button $saveButton;

    public function simulateUserInteraction()
    {
        $this->articlesListBox->setSelection("Article 1");
        $this->titleTextBox->setcontent("");
        $this->titleTextBox->setcontent("Article 2");
        echo "\nText Box " . $this->titleTextBox->getcontent();
        echo "\n Button " . $this->saveButton->getIsEnable();
    }
    
    public function __construct()
    {
        $this->articlesListBox = new ListBox($this);
        $this->titleTextBox = new TextBox($this);
        $this->saveButton = new Button($this);
        
    }

    public function change(UIControl $uIControl)
    {
        if($uIControl == $this->articlesListBox) 
            $this->articleSelection();
        else if($uIControl == $this->titleTextBox)
            $this->titleChange();
    }

    private function titleChange() : void {
        $content = $this->titleTextBox->getcontent();
        $isEmpty = ($content == null || empty($content));
        $this->saveButton->setIsEnable($isEmpty);
    }

    private function articleSelection() : void {
        $this->titleTextBox->setcontent($this->articlesListBox->getSelection());
        $this->saveButton->setIsEnable(true);
    }
}