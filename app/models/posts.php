<?php 
class Posts {
    private $id;
    private $category_id;
    private $title;
    private $intro;
    private $content;
    private $imaga;
    private $tag;
    private $description;
    private $count_conment;
    private $slug;
    private $active;
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

    public function getImaga()
    {
        return $this->imaga;
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

    public function setImaga($imaga)
    {
        $this->imaga = $imaga;
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