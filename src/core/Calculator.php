<?php
namespace Ijana\Core;

class Calculator{

    public function calculateTotalInvestment(float $initialAmount=1.00):float{

        $totalInvestment=0.00;

        //52 weeks savings challenge

        for($w=1; $w<=52; $w++){

            $totalInvestment+=$initialAmount*$w;

        }

        return $totalInvestment;

    }

}
