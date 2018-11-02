<?php
  $name='Mostafa';
  function welcome(){
      global $name;
      echo 'welcome ' .$name;
  }
  welcome();