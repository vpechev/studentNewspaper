<?php
class Video {
    private $id;
    private $url;
    private $label;
    
    public function __construct($id, $url, $label){
        $this->id = $id;
        $this->url = $url;
        $this->label = $label;        
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getUrl(){
        return $this->url;
    }
    
    public function getLabel(){
        return $this->label;
    }
}
?>