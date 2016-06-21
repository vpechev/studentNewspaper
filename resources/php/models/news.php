<?php
class News {
    private $id;
    private $text;
    private $publishDate;
    
    public function __construct($id, $text, $publishDate){
        $this->id = $id;
        $this->text = trim($text);
        $this->publishDate = $publishDate; 
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getText(){
        return $this->text;
    }
    
    public function getPublishDate(){
        return $this->publishDate;
    }
    
}
?>