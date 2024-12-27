<?php
namespace Ijana\Core;

class Ijana{

    private object $routesModel;

    public string $route;

    public object $view;

    public function __construct(){

        $this->routesModel=new \Ijana\Core\RoutesModel();

        $this->route=$this->getRoute();

        $this->view=new \Ijana\Core\IjanaView($this->route);

        $this->view->load();

    }

    private function getRoute():string{

        $route=$this->routesModel->defaultRoute;

        if(!isset($_GET['route'])){

            header("Location: ".URL.$route."/");

        }

        else{

            $route=($this->routesModel->isValidRoute($_GET['route'])) ? $_GET['route']:$route;

        }

        return $route;

    }

}
