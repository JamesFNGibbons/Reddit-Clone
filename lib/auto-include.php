<?php
    /**
     * Class used to auto include class files from the lib 
     * folder for the program to use, as and when they called
     * without the need to require them all at once.
    */
    function __autoload($classname){
        require_once($classname . '.php');
    }