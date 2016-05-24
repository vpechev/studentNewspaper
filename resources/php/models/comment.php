<?php
class Comment {
    private $id;
    private $authorId;
    private $articleId;
    private $text;
    private $publishDate;
    
    public function __construct($id, $authorId, $articleId, $text, $publishDate){
        $this->id = $id;
        $this->authorId = $authorId;
        $this->articleId = $articleId;
        $this->text = $text;
        $this->publishDate = $publishDate; 
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getAuthorId(){
        return $this->authorId;
    }
    
    public function getArticleId(){
        return $this->articleId;
    }
    
    public function getText(){
        return $this->text;
    }
    
    public function getPublishDate(){
        return $this->publishDate;
    }
}
?>