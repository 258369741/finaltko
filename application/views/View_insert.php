<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <title>ADD Train</title>
  <link rel = "stylesheet" type = "text/css"
    href = "<?php echo base_url();?>css/regis.css">
</head>
<body>
    <form action="../Welcome/Add_train" method="POST">
        <h1> หมายเหตุ</h1>

        <label for="cars">เลือกชนิดรถไฟ</label>
        <br>
  <select name="note_id" id="note_id">
    <option value="1">รถธรรมดา</option>
    <option value="2">รถดีเซลราง</option>
    <option value="3">รถด่วนดีเซลราง</option>
  </select>

  <br><br>
        
  <h1> ต้นทาง </h1>
  <div class="toninput">
    <div class="form-group">
      <label> เลขขบวน</label><br>
      <input type="text" name="origin_no_train" id="td1">
    </div>
    <div class="form-group" style="margin-left:15px">
      <label>สถานี</label><br>
      <input type="text" name="origin_station" id="td2">
    </div>
    
    <div class="form-group" style="margin-left:15px">
      <label>เวลาออก</label><br>
      <input type="text" name="origin_time_out" id="td3">
    </div>
  </div>


  <h1> ห้วยราช </h1>
  <div class="toninput">
  <div class="form-group">
    <label>ถึง</label><br>
    <input type="text" name="huay_time_in" id="td4">
  </div>
  <br>
  <div class="form-group" style="margin-left:15px">
    <label>เวลาออก</label><br>
    <input type="text" name="huay_time_out"  id="td5">
  </div>
</div>
  <h1> ปลายทาง </h1>
  <div class="toninput">
  <div class="form-group">
    <label >สถานี</label><br>
    <input type="text" name="des_satation" id="td6">
  </div>
  <br>
  <div class="form-group" style="margin-left:15px">
    <label >เวลาถึง</label><br>
    <input type="text" name="des_time_full" id="td7">
  </div>
</div>
  <br>
  <br>
  <input type="submit" class="btn btn-primary">
  <div class="back">
    <a href="../welcome/showall">back</a>
  </div>
</form>
<br>
<br>

</body>
</html>