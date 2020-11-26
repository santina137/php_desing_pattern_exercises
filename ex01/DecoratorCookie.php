<?php
include_once('Cookie.php');

class CookieMacadamia implements Cookie
{
    protected $cookie;

    public function __construct(Cookie $cookie){
        $this->cookie=$cookie;
    }
    public function getType(){
        return $this->cookie->getType().', macadamia';
    }
    public function getCalories(){
        return $this->cookie->getCalories()+10;
    }


}

class CookieWhiteChocolate implements Cookie
{
    protected $cookie;

    public function __construct(Cookie $cookie){
        $this->cookie=$cookie;
    } 
    public function getType(){
       return $this->cookie->getType().', white chocolate';
    }
    public function getCalories(){
        return $this->cookie->getCalories()+20;
    }

}
