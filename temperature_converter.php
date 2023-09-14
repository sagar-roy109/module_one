<?php 

if(isset($_POST['submit'])){
  $input_temp = $_POST['input_temp'];
  $direction = $_POST['direction'];

  if($direction == 'c_to_f'){
    $output = ($input_temp * 1.8) + 32 . 'F';
  }else{
    $output = ($input_temp - 32) * .5556 ;
    $output = round($output, 2) . 'C';
  }


}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Temperature Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
  <h2 class="text-center">Convert Temperature</h2>
  <form action="temperature_converter.php" method="post">
    <div class="input-area">
      <label class="form-label" for="ent_tmp">Enter Temperature</label>
      <input class="form-control" type="number" required id="ent_tmp" name="input_temp">
    </div>
    <div class="convertion-direction">
      <label for="conv_dir" class="form-label"> Select Convertion Direction</label>
      <select name="direction" id="conv_dir" class="form-control" required>
        <option value="c_to_f">Celsius to Fahrenheit</option>
        <option value="f_to_c">Fahrenheit to Celsius</option>
      </select>
    </div>
    <input type="submit" value="Calculate" name="submit">
    <h3 class="output mt-5">
      <?php 
       echo isset($output)? $output : '';
      ?>
    </h3>
  </form>
  





  <style>
    form{
      width: 60%;
      margin: 0 auto;
    }
  </style>
</body>
</html>