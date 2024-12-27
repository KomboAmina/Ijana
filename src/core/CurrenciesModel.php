<?php
namespace Ijana\Core;

class CurrenciesModel{

    public function getCurrencies():array{

        $currencies=array();

        $json=file_get_contents("src/core/common-currency.json");

        if($json!==false){

            $currencies=json_decode($json, true);

        }

        return $currencies;

    }

}

