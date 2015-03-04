<?php
$myitemfiles = scandir('uploads/');
foreach($myitemfiles as $file){ //get an array which has the names of all the files and loop through it 
        $obj['name'] = $file; //get the filename in array
        $obj['size'] = filesize("uploads/".$file); //get the flesize in array
        $result[] = $obj; // copy it to another array
      }
       header('Content-Type: application/json');
       echo json_encode($result); // now you have a json response which you can use in client side 
?>