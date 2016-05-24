<?php
class Article {
    private $id;
    private $title;
    private $text;
    private $authorId;
    private $publishDate;
    private $category;
    private $likesCount;
    private $dislikesCount;
    private $rating;
    private $comments;
    
    public function __construct($id, $title, $text, $authorId, $publishDate, $category, $likesCount, $dislikesCount){
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
        $this->authorId = $authorId;
        $this->publishDate = $publishDate;
        $this->catgegory = $category;
        $this->likesCount = $likesCount;
        $this->dislikesCount = $dislikesCount;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getTitle(){
        return $this->title;
    }
    
    public function getText(){
        return $this->text;
    }
    
    public function getAuthorId(){
        return $this->authorId;
    }
    
    public function getPublishDate(){
        return $this->publishDate;
    }
        
    public function getCategory(){
        return $this->category;
    }
    
    public function getLikesCount(){
        return $this->likesCount;
    }
    
    public function getDislikesCount(){
        return $this->dislikesCount;
    }
    
    public function getRating(){
        $this->rating = (intval($this->likesCount) - intval($this->dislikesCount)) * 0.1;
        return $this->rating;
    }
    
    public function getComments(){
        return $this->comments;
    }
}
?>