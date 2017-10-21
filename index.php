<!DOCTYPE html>
<html>
<head>
<style>
img.normal {
    width: auto;
}

img.big {
    width: 90%;
}

img.small {
    width: 10%;
}
</style>
</head>
<body>







<hr style="width: 100%; height: 2px;">

<div style="text-align: center;">
<span style="font-weight: bold;">

<br>
Minimalist PHP File Viewer, PHP coded by Spartrekus <br>
<br>

<hr style="width: 100%; height: 2px;"><br>
<div style="text-align: center;">
<?php
 if ($handle = opendir('.')) {
   while (false !== ($file = readdir($handle)))
      {
          if ($file != "." && $file != "..")
	  {
          	
          	$infofile=date("d.m.Y - H:m",filectime($file));
          	$thelist .= "<a href=\"" . $file ."\"> Item " . $file . "</a> <br> \n" ; 

                // <img class="big" src="logocss.gif" width="95" height="84"><br>
                //  <a href="https://www.wikipedia.org/">Link</a> ; https://www.wikipedia.org/<br>

          }
       }
  closedir($handle);
  }

// Return to homepage: 
// </span><a href="http://freebsd.org/"><span style="font-weight: bold;">http://freebsd.org/</span></a>
// <br>
?>

<P>List of files:</p>
<P><?=$thelist?></p>
</div>
</span>


<br>
<br>
<hr style="width: 100%; height: 2px;">
<br>



Return to Free GNU Softwares: 
</span><a href="https://github.com/spartrekus?tab=repositories"><span style="font-weight: bold;">GITHUB GNU Free Software, Spartrekus</span></a>



</body>
</html>

