<?php

$temparture = 10;

if($temparture < 6){
  echo "It's freezing!";
}elseif($temparture >=6 && $temparture <= 15 ){
  echo "It's cold";
}elseif($temparture >=16 && $temparture <= 30 ){
  echo "It's warm";
}