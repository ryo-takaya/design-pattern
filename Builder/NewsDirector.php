<?php

require_once dirname(__FILE__). '/NewsBuilderInterface.php';

class NewsDirector
{
    private $builder;
    private $url;

    public function __construct(NewsBuilder $builder, $url)
    {
        $this->builder = $builder;
        $this->url = $url;
    }

    public function getNews(){
        $newsList = $this->builder->parse($this->url);
        return $newsList;
    }
}