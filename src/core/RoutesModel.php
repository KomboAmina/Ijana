<?php

/**
 * Written by Amina Kombo <www.aminakombo.work>
 */

namespace Ijana\Core;

class RoutesModel{

    public array $validRoutes;

    public string $defaultRoute;

    public function __construct(){

        $this->validRoutes=$this->getValidRoutes();

        $this->defaultRoute=$this->getDefaultRoute();

    }

    public function isValidRoute(string $check):bool{

        return in_array($check,$this->validRoutes);

    }

    public function getValidRoutes():array{

        return array("home","timetable","spreadsheet","frame","about");

    }

    private function getDefaultRoute():string{

        return (!empty($this->validRoutes)) ? $this->validRoutes[0]:"home";

    }

}
