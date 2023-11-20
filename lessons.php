<? include ("blocks/bd.php");
	$result= mysqli_query($link,"SELECT title, meta_d, meta_k, text FROM settings WHERE page= 'lessons'");
    $row= mysqli_fetch_array($result); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta name="description" content="<? echo $row['meta_d'] ?> ">
    <meta name="keywords" content="<? echo $row['meta_k'] ?>">
    <link rel="stylesheet" href="style.css">
<title><? echo $row['title']?></title>

</head>
<body>	<table width="690" border="0" align="center" class="main_border">
  <tbody>
  	  <? include ("blocks/header.php");   ?>
    <tr> <? include ("blocks/lefttd.php");   ?>
        <td width="505" valign="top">
	     <? echo $row['text']	  ?>
	<?	$result= mysqli_query($link, "SELECT id,title,description,author,date FROM lessons ");
	$row= mysqli_fetch_array($result);
	do { printf("
   <table align='center' class='lesson'>
      <tbody><tr align='center'>
    <td class='lesson_title' scope='col'><p  class='lesson_name'>
	<a href='view_lesson.php?id=%s'>%s</a></p><p class='lesson_adds'>˜˜˜˜ ˜˜˜˜˜˜˜˜˜˜: %s</p><p class='lesson_adds'>      ˜˜˜˜˜ ˜˜˜˜˜ : %s</p></td>
     </tr>  <tr align='center'><td>%s</td></tr>
    </tbody></table>", $row["id"], $row["title"], $row["date"],$row["author"] ,$row["description"]);
	}
   while($row=mysqli_fetch_array($result));	
	?>	  
    </td>  </tr><tr><? include("blocks/footer.php"); ?>	 </tr>   </tbody></table></body></html>