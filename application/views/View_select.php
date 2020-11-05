<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
    <link rel = "stylesheet" type = "text/css"
    href = "<?php echo base_url();?>css/traincss.css">
</head>
<body>
    <div class="button">
    <a href="../Welcome/index">เพิ่มรอบรถไฟ</a>
</div>
<table>
    <tr id="row1">
        <td rowspan=2>ขบวน</td>
        <td >ต้นทาง</td>
        <td >ห้วยราช</td>
        <td >ปลายทาง</td>
        <td rowspan=2>หมายเหตุ</td>
    </tr>
    <tr id="row2">
        <td>สถานี
        เวลาออก</td>
        <td>ถึง
        ออก</td>
        <td>สถานี
        ถึงเวลา</td>
    </tr>
    <?php
        foreach($AM as $row){
    ?>
    <tr>
        <td><?=$row->no_train;?></td>

        <td><?=$row->station?>
        <?=$row->time_out?></td>

        <td><?=$row->time_in?>
        <?=$row->time_out?></td>

        <td><?=$row->satation?>
        <?=$row->time_full?></td>
        
	    <td><?=$row->train_name	?></td>
    </tr>
    <?php
     }
    ?>
</table>

</body>
</html>