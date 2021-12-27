<?php
require_once dirname(__FILE__).'/NewsDirector.php';
require_once dirname(__FILE__).'/RssNewsBuilder.php';

$builder = new RssNewsBuilder();
$url = 'https://www.php.net/news.rss';

$director = new NewsDirector($builder, $url);
foreach ($director->getNews() as $article) {
    echo $article->getUrl;
}
