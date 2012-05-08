<?
$path = "images/thumbs";
$dir_handle = @opendir($path) or die("Unable to open $path");

while ($file = readdir($dir_handle)) 
{
   if($file!="." && $file!="..")
   		echo "<div class=\"thumbnail\">
			<a href=\"images/$file\" rel=\"lightbox\" title=\"$file\"><img src=\"images/thumbs/$file\" height=\"125\" width=\"125\" alt=\"\"/><br />$file</a>
			<br /></div>";
}

closedir($dir_handle);
// used to use hoverbox
?>



			
