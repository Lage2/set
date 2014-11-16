<html>

<body>
<?php
session_start();
if(!isset($_SESSION['utilizador'])){
  header("refresh:1;url=index.php");
  session_destroy();
  die();
}

if(!is_writable('./')) {
  echo 'The folder does not have write permissions.';
  session_destroy();
  die();
}

$zip = new ZipArchive();
$zip->open("curriculos.zip", ZipArchive::CREATE);
foreach (glob("uploads/*") as $file) {
  if(pathinfo($file, PATHINFO_EXTENSION) == "pdf")
  $zip->addFile($file, basename($file)); // zip sem directorias, apenas ficheiros 
}
$zip->close();

if(file_exists("curriculos.zip")){
  echo 'existe sim';
    header("Content-type: application/zip"); 
    header("Content-Disposition: attachment; filename=\"curriculos.zip\"");  
    header("Pragma: no-cache"); 
    header("Expires: 0"); 
    header("Content-Length: ".filesize("curriculos.zip"));
    ob_clean();
    flush();
    readfile("curriculos.zip");
}

if(file_exists("curriculos.zip")){
    unlink("curriculos.zip");

}

?>
</body>
</html>


