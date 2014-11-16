
<?php
function ListFolder($path)
{
    //using the opendir function
    $dir_handle = @opendir($path) or die("Unable to open $path");
    
    //Leave only the lastest folder name
    $dirname = end(explode("/", $path));
    
    
    //display the target folder. Pasta "uploads" Descomentar proxima linha para aparecerem as directorias
    //echo ("<li>$dirname\n");
    echo "<ul>\n";
    while (false !== ($file = readdir($dir_handle))) 
    {
        if($file!="." && $file!="..")
        {
            if (is_dir($path."/".$file))
            {
                //Display a list of sub folders.
                ListFolder($path."/".$file);
            }
            else
            {
                //Display a list of files.
                if(pathinfo($file, PATHINFO_EXTENSION) == "pdf")
                echo "<li>$file</li>";
            }
        }
    }
    echo "</ul>\n";
    echo "</li>\n";
    
    //closing the directory
    closedir($dir_handle);
}
?>

