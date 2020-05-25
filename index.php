<!DOCTYPE html>
<html>
<head>
	<title>Display files</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1><center>*****Files present in the folder in which index.php is present*****</center></h1>
<?php
$path = ".";
$dh = opendir($path);
$i=1;
print("<center><TABLE border=1 id=customers cellpadding=9 cellspacing=0 class=whitelinks></center>\n");
print("<TR><TH>Name of File</TH><th>Thumbnail of File</th></TR>\n");
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        print("<TR><TD><a href='$path/$file'>$file</a></td>");
        $ext = substr($file, strrpos($file, '.', -1), strlen($file));
        // if($ext != ".png" || $ext != ".mkv"){
        print("<td>");echo "<a href='$path/$file'><img src=". $file ." width=100 height=100></a>";print("</td>");
        // else{
        // print("<td>");echo "<a href='$path/$file'><img src=". $file ." width=100 height=100></a>";print("</td>");}
        $i++;
    }
}
print("</TR>\n");                       
print("</TABLE>\n");
closedir($dh);
?> 
</body>
</html>
