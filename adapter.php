<?php

interface ProgrammInterface{
    public function getLabels();
}

class EngProgrammInterface implements ProgrammInterface{
    public $germInterf;
    public function __construct(){
        $this->germInterf = new GermanProgrammInterface();
    }
    public function getLabels(){
        echo "english labels";
    }
}

class GermanProgrammInterface{
    
    public function getLabels(){
        echo "german labels\n";
    }
}

$labels = (new EngProgrammInterface())->getLabels();