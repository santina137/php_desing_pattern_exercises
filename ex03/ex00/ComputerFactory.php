<?php
include_once('Computer.php');
include_once('ComputerDell.php');

class ComputerFactory
{
    
    public static function makeComputer($brand): Computer
    {
        return new ComputerDell($brand);
    }
}