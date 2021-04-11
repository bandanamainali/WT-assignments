//file opening in php
<?php
$fileName = "/doc/myFile.txt";
$fp = fopen($fileName,"r");
if( $fp == false )
{
  echo ( "Error in opening file" );
  exit();
}
?>

//file reading in php
<?php
$fileName = "/doc/myFile.txt";
$fp = fopen($fileName,"r");
if( $fp == false )
{
  echo ( "Error in opening file" );
  exit();
}

$fileSize = filesize( $fileName );
$fileData = fread( $fp, $fileSize );
?>

//reading a file line by line
<?php
$fileName = "/doc/myFile.txt";
$fp = fopen($fileName,"r");
if( $fp == false )
{
  echo ( "Error in opening file" );
  exit();
}
  
while(!feof($fp))
{
  echo fgets($fp). "<br>";
}
?>


//file writing in php

<?php
$fileName = "/doc/myFile.txt";
$fp = fopen($fileName,"w");
if( $fp == false )
{
  echo ( "Error in opening file" );
  exit();
}
fwrite( $fp, "This is a sample text to write\n" );
?>

//file closing in php

<?php
$fileName = "/doc/myFile.txt";
$fp = fopen($fileName,"w");
if( $fp == false )
{
  echo ( "Error in opening file" );
  exit();
}
  
//some code to be executed
  
fclose( $fp );
?>