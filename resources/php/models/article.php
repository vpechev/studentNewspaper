<?php
include_once "category.php"; 

class Article {
    private $id;
    private $title;
    private $text;
    private $authorId;
    private $publishDate;
    private $category;
    private $categoryEntry;
    private $likesCount;
    private $dislikesCount;
    private $rating;
    private $comments;
    private $author; 
    
    public function __construct($id, $title, $text, $authorId, $publishDate, $category, $likesCount, $dislikesCount){
        $this->id = $id;
        $this->title = trim($title);
        $this->text = trim($text);
        $this->authorId = $authorId;
        $this->publishDate = $publishDate;
        $this->category = $category;
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
    
    public function getCategoryEntry(){
        $cat = new Category();
        $this->categoryEntry = $cat->getEntryByValue($this->category);
        return $this->categoryEntry;
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
    
    public function setComments($commentsList){
        $this->comments = $commentsList;
    }
    
    public function getAuthor(){
        return $this->author;
    }
    
    public function setAuthor($author){
        return $this->author = $author;
    }
}
?>