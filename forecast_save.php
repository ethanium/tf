<style type="text/css">
<!--
.style8 {color: #3333FF}
.style20 {font-size: x-small}
body {
	background-image: url(backgroundwow.JPG);
}
.style23 {font-family: Arial, Helvetica, sans-serif}
.style24 {font-weight: bold}
.style26 {font-size: small}
.style28 {font-size: small; color: #FFFFFF; }
.style10 {color: #FFFFFF; }
.style11 {color: #CC9999}
.style18 {	font-size: x-small;
	color: #000000;
}
.style29 {font-family: "Palatino Linotype"}
.style30 {font-size: x-small; font-family: "Palatino Linotype"; }
.style31 {font-weight: bold; color: #FFFFFF;}
.style14 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-size: small; }
-->
</style>
<div align="left">
  <table width="974" border="">
    <tr background ="winter.jpg">
      <td height="154" colspan="2"><object classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000
codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,2,0
width=812
height=127>
        <param name=movie value=matrix.swf>
        <param name=quality value=high>
        <param name=BGCOLOR value=#32398D>
        <param name=SCALE value=showall>
        <embed src=matrix.swf
quality=high
pluginspage=http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash type=application/x-shockwave-flash
width=812
height=127
bgcolor=#32398D
scale= showall> </embed>
      </object>        <img src="banner_side.JPG" width="140" height="128"> </td>
    </tr>
    <tr>
      <td width="132" height="1032" valign="top"><p>&nbsp;</p>
        <p align="center"><span class="style23"><span class="style24"><span class="style28"><strong><span class="style26"><span class="style20"><span class="style29"><a href="mainpage.php" class="style10"><font size=5>Home</font></a></span></span></span></strong></span></span></span></p>
        <p align="center" class="style30"><a href="forecast.php" class="style31"><font size=5>Forecaster</font></a></p>
          <p align="center" class="style30"><a href="help.php" class="style31"><font size=5>Help</font></a></p>
          <p align="center" class="style30"><a href="about.php" class="style31"><font size=5>About</font></a></p>
          <p class="style26">&nbsp;</p>
   	    <p class="style8"><img src="ad2.JPG" width="125" height="82"></p>
      <p class="style8"><span class="style11"><img src="ad3.JPG" width="129" height="67"></span></p>
      <p class="style8"><span class="style11"><img src="ad4.JPG" width="132" height="86"></span></p>
      <p class="style8"><span class="style18"><img src="ad5.JPG" width="130" height="96"></span></p>
      <p class="style8"><span class="style18"><img src="ad6.JPG" width="130" height="38"></span></p>
      <p class="style8"><span class="style18"><img src="ad7.JPG" width="127" height="109"></span></p>
      <p class="style8"><span class="style18"><img src="ad8.JPG" width="127" height="118"></span></p>
      <p class="style8">&nbsp;</p></td>
      <td width="826" valign="top"><div align="justify" class="style14">
        <div align="left">
          <p class="style10">&nbsp;</p>
        <blockquote>
          <blockquote>
            <p class="style10">
			<?php
			$SAVE=$_POST[SAVE];
			$CANCEL=$_POST[CANCEL];
			
			$db= mysql_pconnect("localhost","root","");
					if (!$db)
						{
						echo"ERROR: Could not connect to database";
						exit;
						}
				
			mysql_select_db("dbforecast");
					
			
				if($SAVE)
					{
					
					$sql= "SELECT * FROM forecast";
					$rs=mysql_query($sql);
					
					//SAVE TO NOTEPAD
					$savefile=fopen("C:\\Program Files\\xampp\\htdocs\TF\\forecast.txt","w+");
					fwrite($savefile,"FORECASTED YEAR:");
						
						
					while($row=mysql_fetch_array($rs))
						{
						$No_of_tourist= htmlspecialchars(stripslashes($row["No_of_tourist"]));
						$Month= htmlspecialchars(stripslashes($row["Month"]));
						$Year= htmlspecialchars(stripslashes($row["Year"]));
						$error= htmlspecialchars(stripslashes($row["Error"]));
						$analysis= htmlspecialchars(stripslashes($row["Analysis"]));
						
						$savefile=fopen("C:\\Program Files\\xampp\\htdocs\TF\\forecast.txt","a");
						fwrite($savefile,"(".$Year."/".$Month."|".$No_of_tourist."|".$error."|".$analysis."|".")");
						
						}	
					echo'<br><font size=5>SAVED: The Forcasted Year until '.$Year."<br></font>";
					echo'<font size=5>The Saved file location was on the directory C:\Program Files\xampp\htdocs\TF\forecast.txt </font>';
					//fclose($savefile);
					echo"<br>ALL done";
					}
				if($CANCEL)
					{
					//DELETION
					$sqldel="DELETE FROM FORECAST";
					$result=mysql_query($sqldel);
						if ($result)
							//echo "deleted";
							echo' <font size=5>The previous data was  lost after selecting CANCEL button, pls try again to forecast for data info </font>';
					}
			
			?>
			              <p> <span class="style14">
             
          </blockquote>
          <p>&nbsp;</p>
          <p class="style10">&nbsp;</p>
        </blockquote>
		
					
        <p>&nbsp;</p>
      <p>&nbsp;</p>
      </td>
	  
	</tr>
	  </table>

  <h1 align="center" class="style18"><a href="mainpage.php">home</a>|<a href="forecast.php">forecast</a>| <a href="help.php"> help</a>|<a href="about.php"> about</a>|<a href="admin_main.php">..</a></h1>
  <h1 align="center" class="style18">&copy;2006 Expert System TFAll rights reserved.</h1>
  <p align="center" class="style20">&nbsp;</p>
  <p align="center" class="style20">&nbsp;</p>
</div>
