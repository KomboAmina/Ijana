<?php

$calcString="<h2>Your Total Will Appear Here...</h2><p>If you use the calculator below.</p>";

if(isset($_GET['txtamount'])){

    $calc=new \Ijana\Core\Calculator();

    $finalAmount=$calc->calculateTotalInvestment(floatval($_GET['txtamount']));

    $calcString="<p>Start at ".$curr." ".number_format(floatval($_GET['txtamount']))." and arrive at:</p>";

    $calcString.="<h2>".$curr." ".number_format($finalAmount,2)."</h2>";

    $calcString.="<p>in 52 weeks.</p>";

}

?>
<section class="p-4 rounded-5 bg-dark text-light mb-4">
<div class="m-4" id="calculator">

    <?php echo $calcString;?>

</div>

<form method="get" action="<?php echo URL."timetable/";?>" class="m-4">

    <input type="hidden" name="tab" value="timetable"/>

    <input type="hidden" name="curr" value="<?php echo $curr;?>"/>

    <div class="mb-4">

        <input type="number"
            name="txtamount" id="txtamount"
            min="1"
            step=".01"
            class="form-control rounded-4"
            value="<?php echo (isset($_GET['txtamount'])) ? floatval($_GET['txtamount']):1.00;?>"
             title="starting amount" required/>

    </div>

    <div class="mb-4">

        <input type="date"
            name="startdate" id="startdate"
            
            class="form-control rounded-4"
            value="<?php echo (isset($_GET['startdate'])) ? date("Y-m-d",strtotime(urldecode($_GET['startdate']))):date("Y-m-d");?>"
             title="starting date" required/>

    </div>

    <div class="d-grid">

        <button type="submit" class="btn btn-primary rounded-4">Calculate &rarr;</button>

    </div>

</form>

</section>
