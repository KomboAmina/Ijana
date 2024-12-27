<?php
namespace Ijana\Core;

class IjanaView{

    public string $route;

    private object $routesModel;

    private array $routes;

    private object $currenciesModel;

    private array $currencies;

    public function __construct(string $route){

        $this->route=$route;

        $this->routesModel=new \Ijana\Core\RoutesModel();

        $this->routes=$this->routesModel->getValidRoutes();

        $this->currenciesModel=new \Ijana\Core\CurrenciesModel();

        $this->currencies=$this->currenciesModel->getCurrencies();

    }

    public function load(){

        $baseFile="src".DS.$this->route.DS."base.php";

        $txtAmount=(isset($_GET['txtamount'])) ? floatval($_GET['txtamount']):1;

        $startDate=(isset($_GET['startdate'])) ? date("Y-m-d",strtotime((urldecode($_GET['startdate'])))):date("Y-m-d");

        $curr=(isset($_GET['curr'])) ? $_GET['curr']:DEFAULTCURRENCY;

        $navLink="?txtamount=".$txtAmount."&startdate=".$startDate."&curr=".$curr;

        include_once "src".DS."common".DS."header.php";
        
        if(file_exists($baseFile)){

            include_once $baseFile;

        }

        else{

            $this->show404();

        }

        include_once "src".DS."common".DS."footer.php";

    }

    public function show404(){

        include_once "src".DS."common".DS."404.php";

    }

}
