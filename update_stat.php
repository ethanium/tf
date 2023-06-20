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
      <td width="132" height="399" valign="top"><p>&nbsp;</p>
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
            <p class="style10"><font size=5>TOURIST ARRIVAL RECORD:</p>
            <p class="style10">UPDATE RECORD: </font></p>
            <p class="style10"><span class="style29">
			
			 
            <?php
	  	
	  
	  $cbpurpose=$_POST[cbpurpose];
	  $cbmonth=$_POST[cbmonth];
	  $cbyear=$_POST[cbyear];
	  $cbcity=$_POST[cbcity];
	  
	 
			
			//select city table from tha database
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
			
				//select month_numkey fro the database
				if ($cbmonth=='Jan')
				{$Month_numkey="1";
				 $Month_no="1";}
				else if ($cbmonth=='Feb')
				{$Month_numkey="2";
				 $Month_no="2";}
				else if ($cbmonth=='Mar')
				{$Month_numkey="3";
				 $Month_no="3";}
				else if ($cbmonth=='Apr')
				{$Month_numkey="4";
				 $Month_no="4";}
				else if ($cbmonth=='May')
				{$Month_numkey="5";
				 $Month_no="5";}
				else if ($cbmonth=='Jun')
				{$Month_numkey="6";
				 $Month_no="6";}
				else if ($cbmonth=='Jul')
				{$Month_numkey="7";
				 $Month_no="7";}
				else if ($cbmonth=='Aug')
				{$Month_numkey="8";
				 $Month_no="8";}
				else if ($cbmonth=='Oct')
				{$Month_numkey="10";
				 $Month_no="10";}
				else if ($cbmonth=='Nov')
				{$Month_numkey="11";
				 $Month_no="11";}
				else if ($cbmonth=='Dec')
				{$Month_numkey="12";
				 $Month_no="12";}
				 
				  // check for incomplete data then if yes not save
					if (($cbpurpose=="") || ($cbmonth=="") || ($cbyear=="") || ($cbcity==""))
					{
					echo"<font size=5>You have not entered all the required details.<br>Please go back and try again.</font>";
					echo'<form  method=post action=\'update_rec.php\'>';
					echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
					echo'<input name="BACK" type="submit" value="BACK" >';
					echo'</form>';
					exit;				
					}
					
				 echo '
				 
					<TABLE>
		  	 <TR>
              <TD valign=top>&nbsp;</TD>
              <TD valign=top>&nbsp;</TD>
              <TD valign=top>&nbsp;</TD>
              <TD valign=top>&nbsp;</TD>
			   <TD valign=top><p class=\"style29\"><STRONG><font size=4>Search By: </font></STRONG></TD>
			</TR>
            <TR>
              <TD valign=top>&nbsp;</TD>
              <TD valign=top>&nbsp;</TD>
              <TD valign=top>&nbsp;</TD>
              <TD valign=top>&nbsp;</TD>
              <TD valign=top><p class=\"style29\"><STRONG><font size=4>Year: </font></STRONG>
              </TD>
              <TD valign=top><span class=\"style29\">
                <select name=\"cbyear\" id=\"cbyear\">
                <option  value='.$cbyear.' selected> '.$cbyear.' </option>
                </select>
              </span> </TD>
              <TD valign=top>&nbsp;</TD>
            </TR>
            <TR>
              <TD>&nbsp;</TD>
              <TD>&nbsp;</TD>
              <TD>&nbsp;</TD>
              <TD>&nbsp;</TD>
              <TD><p class=\"style29\"><STRONG><font size=4>City:</font></STRONG></TD>
              <TD><span class=\"style29\">
                <select name=\"cbcity\" id=\"cbcity\" >
                  <option value='.$cbcity.'> '.$cbcity.' </option>
                 </select>
              </span> </TD>
              <TD>&nbsp;</TD>
            </TR>
            <TR>
              <TD>&nbsp;</TD>
              <TD>&nbsp;</TD>
              <TD>&nbsp;</TD>
              <TD>&nbsp;</TD>
              <TD><p class=\"style29\"><STRONG><font size=4>Month:</font></STRONG></TD>
              <p>
              <TD><span class=\"style29\">
                <select name=\"cbmonth\" id=\"cbmonth\">
                  <option value='.$cbmonth.'> '.$cbmonth.' </option>
                 </select>
              </span> </TD>
              <TD>&nbsp;</TD>
            </TR>
            <TR><TD>&nbsp;</TD>
              <TD>&nbsp;</TD>
              <TD>&nbsp;</TD>
              <TD>&nbsp;</TD>
              <TD><p class=\"style29\"><STRONG><font size=4>Purpose:</font></STRONG></TD>
              <TD><span class=\"style29\">
                <select name=\"cbpurpose\" id=\"cbpurpose\">
                  <font size=4>
	                 <option value='.$cbpurpose.'> '.$cbpurpose.' </option>
                  </font>
                </select>
                </TR>
				
			 <TR>
              <TD>&nbsp;</TD>
              <TD>&nbsp;</TD>
              <TD>&nbsp;</TD>
              <TD>&nbsp;</TD>
			  <TD>&nbsp;</TD>
              <TD>&nbsp;</TD>
            </TR>
			 	
             
			 <TR>
              <TD>&nbsp;</TD>
              <TD>&nbsp;</TD>
              <TD>&nbsp;</TD>
              <TD>&nbsp;</TD>
			  <TD>&nbsp;</TD>
                <span class=\"style29\">
                	<TD align="center"><p class=\"style29\"><STRONG><font size=4>  List of Record(s)  </font></STRONG> </TD>
				</span> </TD>
              <TD>&nbsp;</TD>
            </TR>
			 
			 
			 </table> 
			 
			 
			 
			 
			 
			 ';
					
	 
	  
		  /// query from history table
			$db= mysql_pconnect("localhost","root","");
			if (!$db)
			{
			echo "ERROR: Could not connect to databse";
			exit;
			}
			
			mysql_select_db("dbforecast");
			
			   
			
			?>
				
				
	        </span> </p>
        </blockquote>
		
					
         
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      </td>
	  
	</tr>
  </table>
  <p align="center" class="style20"><a href="mainpage.php">home,</a><a href="forecast.php"> forecast</a>,<a href="help.php"> help</a>,<a href="about.php"> about</a><a href="logger.php">..</a></p>
</div>
