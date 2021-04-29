<?php

class UrlHelper
{
    private $domain = 'http://127.0.0.1:8002/';
    private $url;

    public function __construct()
    {
        echo 'kazkas';
    }
    public function buildUrl($slug)
    {
        $this->url = $this->domain . $slug;
    }


    public function getUrl()
    {
        return $this->url;
    }

    public function setParams($params)
    {
        $i = 0;
        foreach ($params as $key => $value){
            $i == 0 ? $this->url .= '?' : $this->url .= '&';
            $this->url .= $key.'='.$value;
            $i++;
        }
    }



}
