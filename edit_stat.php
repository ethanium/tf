<style type="text/css">
<!--
.style14 {color: #000000; }
.style8 {color: #3333FF}
.style20 {font-size: x-small}
body {
	background-image: url(backgroundwow.JPG);
}
.style23 {font-family: Arial, Helvetica, sans-serif}
.style24 {font-weight: bold}
.style26 {font-size: small}
.style27 {
	color: #FFFFFF;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.style28 {font-size: small; color: #FFFFFF; }
.style10 {color: #FFFFFF; }
.style11 {color: #CC9999}
.style18 {	font-size: x-small;
	color: #000000;
}
-->
</style>
<div align="left">
  <table width="895" border="">
    <tr background ="winter.jpg">
      <td height="132" colspan="2"><object classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000
codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,2,0
width=691
height=127>
        <param name=movie value=matrix.swf>
        <param name=quality value=high>
        <param name=BGCOLOR value=#32398D>
        <param name=SCALE value=showall>
        <embed src=matrix.swf
quality=high
pluginspage=http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash type=application/x-shockwave-flash
width=691
height=127
bgcolor=#32398D
scale= showall> </embed>
      </object>        <img src="banner_side.JPG" width="166" height="128"></td>
    </tr>
    <tr>
      <td width="132" height="399" valign="top"><p>&nbsp;</p>
        <p><span class="style23"><span class="style24"><span class="style28"><strong><span class="style26"><span class="style20"><a href="mainpage.php" class="style10">Home</a></span></span></strong></span></span></span></p>
        <p class="style20"><a href="forecast.php" class="style27">Forecaster</a></p>
          <p class="style20"><a href="help.php" class="style27">Help</a></p>
          <p class="style26"><span class="style20"><a href="about.php" class="style27">About</a></span></p>
          <p class="style26">&nbsp;</p>
      <p class="style8"><img src="ad2.JPG" width="125" height="82"></p>
      <p class="style8"><span class="style11"><img src="ad3.JPG" width="129" height="67"></span></p>
      <p class="style8"><span class="style11"><img src="ad4.JPG" width="132" height="86"></span></p>
      <p class="style8"><span class="style18"><img src="ad5.JPG" width="130" height="96"></span></p>
      <p class="style8"><span class="style18"><img src="ad6.JPG" width="130" height="38"></span></p>
      <p class="style8"><span class="style18"><img src="ad7.JPG" width="127" height="109"></span></p>
      <p class="style8"><span class="style18"><img src="ad8.JPG" width="127" height="118"></span></p>
      <p class="style8">&nbsp;</p></td>
      <td width="747" valign="top"><div align="justify" class="style14">
        <div align="left">
          <p class="style10">&nbsp;</p>
          <p class="style10">SEARCH TOURIST ARRIVAL RECORD </p>
		  
		  
		  <?php
		  
		  $cbyear=$_POST[$cbyear];
		  $cbcity=$_POST[$cbcity];
		  $cbmonth=$_POST[$cbmonth];
		  $no_tourist=trim($_POST[$no_tourist]);
		  $cbpurpose=$_POST[$cbpurpose];
		  
		  //check for null search
		  if(empty($cbyear) || empty($cbcity) || empty($cbmonth) || empty($no_tourist) || empty($cbpurpose))
		  	{
				echo"You have not entered all the required details.<br>Please go back and try again.";
				exit;
					
			}
		  else
		  
		  {echo "pass"; }
		  
		  //select city table from the database
			switch($cbcity)
			{
				case 'Manila':
					$scity="tbmanila";break;					
				case 'Pasay':
					$scity="tbpasay";break;
				case 'Quezon':
					$scity="tbquezon";break;
				case 'Caloocan':
					$scity="tbcaloocan";break;
				case 'Pasig':
					$scity="tbpasig";break;
				case 'Makati':
					$scity="tbmakati";break;
				case 'Mandaluyong':
					$scity="tbmandaluyong";break;
				case 'Muntinlupa':
					$scity="tbmuntinlupa";break;
				case 'Paranaque':
					$scity="tbparanaque";break;
				case 'Marikina':
					$scity="tbmarikina";break;
				case 'Valenzuela':
					$scity="tbvalenzuela";break;
				case 'Navotas':
					$scity="tbnavotas";break;
				case 'Las Pinas':
					$scity="tblaspinas";break;
				case 'Malabon':
					$scity="tbmalabon";break;
				case 'Taguig':
					$scity="tbtaguig";break;
				case'Pateros':
					$scity="tbpateros";break;
			}			
		  
		  ///setting database connection
		  $cbyear=addslashes($_POST[$cbyear]);
		  $cbcity=addslashes($_POST[$cbcity]);
		  $cbmonth=addslashes($_POST[$cbmonth]);
		  $no_tourist=addslashes(trim($_POST[$no_tourist]));
		  $cbpurpose=addslashes($_POST[$cbpurpose]);
		  
		  
			$db= mysql_pconnect("localhost","root","");
			if (!$db)
			{
			echo "ERROR: Could not connect to databse";
			exit;
			}
			
			mysql_select_db("dbforecast");
			
			//sql update
			//UPDATE `tbcity_travelpurpose` SET `ID` = 'Manila/2006/Jan/Vacation' WHERE CONVERT( `ID` USING utf8 ) = '2006/Jan/Vacation' LIMIT 1 ;

			
			$sql_edit="SELECT * FROM ".$cbcity."WHERE Year=".$cbyear."OR Month=".$cbmonth."OR Purpose=".$cbpurpose;
			
			
		  ?>
		  
		        
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      </td>
	  
	</tr>
  </table>
  <p align="center" class="style20"><a href="mainpage.php">home,</a><a href="forecast.php"> forecast</a>,<a href="help.php"> help</a>,<a href="about.php"> about</a><a href="logger.php">..</a></p>
</div>
