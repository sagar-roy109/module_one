<?php

if (isset($_POST['submit'])) {
  
  $numbe_one = $_POST['numbe_one'];
  $numbe_two = $_POST['numbe_two'];
  $operation = $_POST['operation'];

  if ($operation == 'plus') {
    $result = $numbe_one + $numbe_two;
   
  } elseif ($operation == 'minus') {
    $result = $numbe_one - $numbe_two;
   
  } elseif ($operation == 'multi') {
    $result = $numbe_one * $numbe_two;
    
  } elseif ($operation == 'divide') {
    $result = $numbe_one / $numbe_two;
    
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <h2 class="text-center">Calculator</h2>
  <form action="simple_calculator.php" method="post">
    <div class="input-area">
      <label class="form-label" for="numbe_one">Enter Number 1</label>
      <input class="form-control" type="number" required id="numbe_one" name="numbe_one">
    </div>
    <div class="input-area">
      <label class="form-label" for="numbe_two">Enter Number 2</label>
      <input class="form-control" type="number" required id="numbe_two" name="numbe_two">
    </div>
    <div class="operation">
      <label for="conv_dir" class="form-label"> Select operation</label>
      <select name="operation" id="conv_dir" class="form-control" required>
        <option value="plus">Addition</option>
        <option value="minus">Substruct</option>
        <option value="multi">Multipication</option>
        <option value="divide">Division</option>
      </select>
    </div>
    <input type="submit" value="Calculate" name="submit">
    <h3 class="output mt-5">
      <?php
      echo isset($result) ? $result : '';
      ?>
    </h3>
  </form>






  <style>
    form {
      width: 60%;
      margin: 0 auto;
    }
  </style>
</body>

</html>