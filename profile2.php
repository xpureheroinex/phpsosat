<?php
/*
  $userdata = array();
  $AllData = file_get_contents("profarray.txt");
  $AllData = explode(";\n", $AllData);

  foreach ($AllData as $Data)
  {
    list($login, $name, $surname, $birth, $description, $photo) = explode(",", $Data);
      $userdata[$login] = array('name' => $name, 'surname' => $surname, 'birth' => $birth, 'description' => $description, 'photo' => $photo,);
  }

  return $userdata;
*/

  $userdata['admin'] = array('name' => 'Daria', 'surname' => 'Shapovalova', 'birth' => '200-03-07', 'description' => '');
  return $userdata;



  ?>
