<?php
include_once("./model/newsModel.php");

class NewsController extends NewsModel 
{

    protected $id;
    protected $date_news;
    protected $tite_news;    
    protected $content_news;    
    protected $image_news;    

    public function news()
    {
        include("./view/templates/news.php");
    }

    public function showNews()
    {
        $news = $this->getNews();
        include("./view/templates/news.php");
    }
}