<?php
namespace Ijana\Timetable;

class Timetable{

    public function calculateSavingsTimetable(float $initialAmount, string $startDate):array{

        $table=array();

        $totalAmount=0;

        $newDate=new \DateTime($startDate);

        $now=new \DateTime('now');

        for($week=1;$week<=52;$week++){

            $deposit=$initialAmount*$week;

            $totalAmount+=$deposit;

            $newDate->modify("+1 week");

            $arr=array(
                            "week"=>$week,
                            "date"=>$newDate->format("Y-m-d"),
                            "deposit"=>$deposit,
                            "total"=>$totalAmount
                        );

            $lowDate=($week>1) ? new \DateTime($table[($week-2)]['date']):$now;

            $lowDate->format("Y-m-d");

            $highDate=new \DateTime($arr['date']);

            if($lowDate<=$now && $now<=$highDate){
                
                $arr["paynow"]=true;
            
            }

            $table[]=$arr;

        }

        return $table;

    }

}
