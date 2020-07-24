<?php 
class posts {
    public $id;
    public $category_id;
    public $title;
    public $intro;
    public $content;
    public $images;
    public $tag;
    public $description;
    public $count_conment;
    public $slug;
    public $active;
    
    function posts() {
        
    }
    
    function  __construct($id,$category_id,$title,$intro,$content,$images,$tag,$description,$count_conment,$slug,$active) {
        $this->id=$id;
        $this->category_id=$category_id;
        $this->title=$title;
        $this->intro=$intro;
        $this->content=$content;
        $this->images=$images;
        $this->tag=$tag;
        $this->count_conment=$count_conment;
        $this->description=$description;
        $this->slug=$slug;
        $this->active = $active;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getCategory_id()
    {   
        
        return $this->category_id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getIntro()
    {
        return $this->intro;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getImages()
    {
        return $this->images;
    }

    public function getTag()
    {
        return $this->tag;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getCount_conment()
    {
        return $this->count_conment;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setIntro($intro)
    {
        $this->intro = $intro;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setImages($images)
    {
        $this->images = $images;
    }

    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setCount_conment($count_conment)
    {
        $this->count_conment = $count_conment;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

    
    
    

    
}