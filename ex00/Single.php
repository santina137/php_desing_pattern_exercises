<?php

final class Single
{
private static $instance;

public static function getInstance(){

    if(!self::$instance){
        self::$instance=new self(); 
    }
    return self::$instance;
}
}