<?php

error_reporting(E_ALL);
     ini_set('display_errors', 1);

$ds          = DIRECTORY_SEPARATOR; 
 
$storeFolder = 'uploads';  
        
 
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;
	
    unlink($targetPath . $_GET['id']);
	
	
if (is_dir_empty($targetPath)) {
  echo "1"; 
}else{
  echo "0";
}	


function is_dir_empty($dir) {
  if (!is_readable($dir)) return NULL; 
  return (count(scandir($dir)) == 2);
}

?>