<?php

class News{
    private $title;
    private $url;
    private $target_date;

    public function __construct($title, $url, $target_date){
        $this->title = $title;
        $this->url = $url;
        $this->target_date = $target_date;
    }

    /**
     * @return mixed
     */
    public function getTargetDate()
    {
        return $this->target_date;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }
}