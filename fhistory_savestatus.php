<html>
<body>
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
  <table width="761" border="">
    <tr background ="winter.jpg">
      <td height="132" colspan="2"><object classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000
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
      <td width="125" height="399" valign="top"><p><span class="style23"><span class="style24"><span class="style28"><strong><span class="style26"><span class="style20"><a href="mainpage.php" class="style10">Home</a></span></span></strong></span></span></span></p>
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
      <td width="621" valign="top"><div align="justify" class="style14">
        <p>
          <?php
	  	
	  $no_tourist=$_POST[no_tourist];
	  $cbpurpose=$_POST[cbpurpose];
	  $cbmonth=$_POST[cbmonth];
	  $cbyear=$_POST[cbyear];
	  $cbcity=$_POST[cbcity];
	  $ID=$cbcity."/".$cbyear."/".$cbmonth."/".$cbpurpose;
	  
			//select city
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
			
				//select month
				if ($cbmonth=='Jan')
				{$Month_numkey="1";}
				else if ($cbmonth=='Feb')
				{$Month_numkey="2";}
				else if ($cbmonth=='Mar')
				{$Month_numkey="3";}
				else if ($cbmonth=='Apr')
				{$Month_numkey="4";}
				else if ($cbmonth=='May')
				{$Month_numkey="5";}
				else if ($cbmonth=='Jun')
				{$Month_numkey="6";}
				else if ($cbmonth=='Jul')
				{$Month_numkey="7";}
				else if ($cbmonth=='Aug')
				{$Month_numkey="8";}
				else if ($cbmonth=='Oct')
				{$Month_numkey="10";}
				else if ($cbmonth=='Nov')
				{$Month_numkey="11";}
				else if ($cbmonth=='Dec')
				{$Month_numkey="12";}

	  
		  /// query from history table
			$db= mysql_pconnect("localhost","root","");
			if (!$db)
			{
			echo "ERROR: Could not connect to databse";
			exit;
			}
			
			mysql_select_db("dbforecast");
			
			//check for duplicate
			
			$query1= "Select * from tbcity_travelpurpose WHERE ID='".$ID."'";
			$result1= mysql_query($query1);
				
				if (!result1)
					echo"cannot execute sql";
				
				
				while($row=mysql_fetch_array($result1))
					{
						$Verify= htmlspecialchars(stripslashes($row["ID"]));
						
						if ($Verify==$ID)
							{echo "<p>The record for this month has already been recorded.<p>";
							echo "
							<table>
							<tr>
							<td valign=top><strong>City:</strong></td>
							<td valign=top>$cbcity</td>
							</tr>			
				
							<td valign=top><strong>Year: </strong></td>
							<td valign=top>$cbyear</td>
							</tr>
				
							<td valign=top><strong>Month:</strong></td>
							<td valign=top>$cbmonth</td>
							</tr>
							<tr>
				
							<tr>
							<td valign=top><strong>Purpose:</strong></td>
							<td valign=top>$cbpurpose</td>
							</tr>
							<tr>
				
							<tr>
							<td valign=top><strong>No.of tourist: </strong></td>
							<td valign=top>$no_tourist</td>
							</tr>
				
							";
							echo "</table>";
							}							
						}
					if ($Verify!=$ID)
						{
						//sql for add record into table city tavel purpose
							$strsql1= "INSERT INTO tbcity_travelpurpose VALUES ( '".$ID."','".$cbcity."', '".$cbyear."', '".$cbmonth."',  '".$Month_numkey."','".$cbpurpose."', '".$no_tourist."')";
						

							$result= mysql_query($strsql1);
						
							echo"<p>You have succesfully added a record!<p>";
						
							echo "
								<table>
								<tr>
								<td valign=top><strong>City:</strong></td>
								<td valign=top>$cbcity</td>
								</tr>			
				
								<td valign=top><strong>Year: </strong></td>
								<td valign=top>$cbyear</td>
								</tr>
				
								<td valign=top><strong>Month:</strong></td>
								<td valign=top>$cbmonth</td>
								</tr>
								<tr>
				
								<tr>
								<td valign=top><strong>Purpose:</strong></td>
								<td valign=top>$cbpurpose</td>
								</tr>
								<tr>
				
								<tr>
								<td valign=top><strong>No.of tourist: </strong></td>
								<td valign=top>$no_tourist</td>
								</tr>
				
								";
								echo "</table>";	
								
						//sql to add record	into table of selected city
							$ID=$Year."/".$Month;
							
							$sqlsum="SELECT  SUM( No_of_tourist ) FROM `tbcity_travelpurpose` WHERE MONTH =".$Month."AND Year =".$Year;
							
							
							$strsql2= "INSERT INTO".$scity." VALUES ('".$ID."','".$Year."','".$Month."','".$Month_no."','".$No_of_tourist."')";
															
							$resultsum= mysql_query($strsql2);
							echo "$resultsum";
							
							$result= mysql_query($strsql2);
							
						}
		 		 ?>
				 		
						
</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      </td>
	  
	</tr>
  </table>
  <p align="center" class="style20"><a href="mainpage.php">home,</a><a href="forecast.php"> forecast</a>,<a href="help.php"> help</a>,<a href="about.php"> about</a><a href="logger.php">..</a></p>
</div>

</body>
</html>