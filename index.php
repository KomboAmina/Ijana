<?php

defined('DS') || define('DS',DIRECTORY_SEPARATOR);

$configFiles=array("vendor".DS."autoload.php","src".DS."config".DS."basic.php");

$configErrors=array();

foreach($configFiles as $configFile){

    if(file_exists($configFile)){
        
        include_once $configFile;
    
    }

    else{

        $configErrors[]="file not found: ".$configFile;

    }

}

if(!empty($configErrors)){

    foreach($configErrors as $configError){

        echo "<h1>Errors</h1><ol>";

        foreach($configErrors as $configError){

            echo "<li>".$configError."</li>";

        }

        echo "</ol>";

    }

}

if(empty($configErrors)){

    $ijana=new \Ijana\Core\Ijana();
    
}

