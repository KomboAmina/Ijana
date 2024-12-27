<?php

$class=new \Ijana\Timetable\Timetable();

$timetable=$class->calculateSavingsTimetable($txtAmount, $startDate);

$totalRows=count($timetable);

//print_r($timetable);

$fullTotal=0;

?>
<h1 class="pb-2">The Journey to <?php echo $curr." ".number_format($timetable[$totalRows-1]['total'],2);?> in 52 weeks</h1>

<section class="scrollable-y">
<table class="table table-bordered mb-0">
    <thead>
        <tr><th width="15%">Date</th>
            <th width="10%" class="text-center">Week</th>
            <th class="text-end">Weekly Deposit Amount (<?php echo $curr;?>)</th>
            <th class="text-end">Total Deposit Amount (<?php echo $curr;?>)</th></tr>
    </thead>
</table>
</section>
<section class="h-50 scrollable-y mb-4 mt-0 table-responsive">
    
<table class="table table-bordered">
    <tbody>
        <?php foreach($timetable as $row){
            $fullTotal=$row['total'];
            ?>
            <tr <?php if(isset($row['paynow'])){?>class="paynow" id="now"<?php }?>>
                <td width="15%"><?php echo date("d/m/Y",strtotime($row['date']));?></td>
                <td width="10%" class="text-center"><?php echo $row['week'];?></td>
                <td class="text-end">
                    <?php echo (isset($row['paynow'])) ? "&rarr;":"";?>
                    <?php echo number_format($row['deposit'],2);?>
                    <?php echo (isset($row['paynow'])) ? "&larr;":"";?>
                </td>
                <td class="text-end"><?php echo number_format($row['total'],2);?></td>
            </tr>
        <?php }?>
    </tbody>
</table>
</section>
