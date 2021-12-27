<?php
require_once dirname(__FILE__). '/News.php';
require_once dirname(__FILE__). '/NewsBuilderInterface.php';

class RssNewsBuilder implements NewsBuilder{

    public function parse($url){
        $data = simplexml_load_file($url);
        $list = [];
        foreach ($data->item as $item){
            $dc = $item->children('https://purl.org/dc/elements/1.1/');
            $list[] = new News($item->title,$item->link,$dc->date);
        }
        return $list;
    }
}
