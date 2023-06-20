<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
<style type="text/css">
<!--
.style18 {	color: #CC9999;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style8 {color: #3333FF}
body {
	background-image: url(backgroundwow.JPG);
}
.style21 {color: #FFFFFF; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
</head>

<body>
<table width="761" border="">
  <tr background ="winter.jpg">
    <td height="132"><object classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000
codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,2,0
width=626
height=127>
        <param name=movie value=matrix.swf>
        <param name=quality value=high>
        <param name=BGCOLOR value=#32398D>
        <param name=SCALE value=showall>
        <embed src=matrix.swf
quality=high
pluginspage=http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash type=application/x-shockwave-flash
width=626
height=127
bgcolor=#32398D
scale= showall> </embed>
      </object>
        <img src="banner_side.JPG" width="113" height="128"> </td>
  </tr>
  <tr>
    <td height="399" valign="top"><p class="style18">
      <?php
	  
	  			$p1=$_POST[pass1];
				$p2=$_POST[pass2];
				$p3=$_POST[pass3];
				$p4=$_POST[pass4];
				
				$db=mysql_pconnect("localhost","root","");
				if (!$db)
				{echo "ERROR; Could not connect to database";exit;}
				
				mysql_select_db("dbforecast");
				$query="Select password from tblogger";
				
				$result= mysql_query($query);
				
				$num_results= mysql_num_rows($result);                   
					$i=0;
					
			while($row=mysql_fetch_array($result))
			{ 
			$pass[$i]= htmlspecialchars(stripslashes($row["password"]));
			//$name[$i]=htmlspecialchars(stripslashes($row["name"]));
						//echo"$pass[$i] <br>";
			
			$i++;}
			
			//echo"$pass[0], $p1";
			//echo"$pass[1], $p2";
			
			if(($pass[0]==$p1)&&($pass[1]==$p2)&&($pass[2]==$p3)&&($pass[3]==$p4))
			{
			 	echo "<p> <a href=\"chnge_pass.php\">Change Password</a></p>";
		      	echo "<p><a href=\"fhistory_save.php\">Update Database</a></p>";
			}
			else
				{echo"invalid user";}
	?>
      </p>
     
      
      </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
