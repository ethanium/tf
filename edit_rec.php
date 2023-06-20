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
      <td width="132" height="399" valign="top"><p><span class="style23"><span class="style24"><span class="style28"><strong><span class="style26"><span class="style20"><a href="mainpage.php" class="style10">Home</a></span></span></strong></span></span></span></p>
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
          <p class="style10">EDIT TOURIST ARRIVAL RECORD </p>
		  
		<form name="form2" method="post" action="edit_stat.php">  
          <p>SEARCH BY:</p>
		  <TABLE>
          <TR><TD valign=top><p><STRONG>Year:</STRONG></TD>
            	<TD valign=top>
				<select name="cbyear" id="cbyear">
              	<option value="\" selected>--Select--</option>
              	<option value="2006">2006</option>
	            <option value="2007">2007</option>
              	<option value="2008">2008</option>
              	<option value="2009">2009</option>
              	<option value="2010">2010</option>
              	<option value="2011">2011</option>
              	<option value="2012">2012</option>
              	<option value="2013">2013</option>
              	<option value="2014">2014</option>
              	<option value="2015">2015</option>
               	</select>
				</TD>
		</TR>
		<TR><TD><p><STRONG>City:</STRONG></TD>
				<TD>
				<select name="cbcity" id="cbcity" >
			  	<option value="\" selected>--Select--</option>
  				<option value="Manila">Manila</option>
  				<option value="Quezon">Quezon</option>
  				<option value="Pasay">Pasay</option>
  				<option value="Pasig">Pasig</option>
  				<option value="Makati">Makati</option>
  				<option value="Mandaluyong">Mandaluyong</option>
  				<option value="Muntinlupa">Muntinlupa</option>
  				<option value="Para&ntilde;aque">Paranaque</option>
  				<option value="Caloocan">Caloocan</option>
  				<option value="Marikina">Marikina</option>
  				<option value="Valenzuela">Valenzuela</option>
  				<option value="Navotas">Navotas</option>
  				<option value="Las Pi&ntilde;as">Las Pinas</option>
  				<option value="Malabon">Malabon</option>
  				<option value="Taguig">Taguig</option>
  				<option value="Pateros">Pateros</option>
				</select>
				</TD>
         </TR>
		 <TR><TD><p><STRONG>Month:</STRONG></TD>
		  		<p>
				<TD>
            	<select name="cbmonth" id="cbmonth">
              	<option value="\" selected>--Select--</option>
              	<option value="Jan">Jan</option>
              	<option value="Feb">Feb</option>
              	<option value="Mar">Mar</option>
              	<option value="Apr">Apr</option>
              	<option value="May">May</option>
              	<option value="Jun">Jun</option>
              	<option value="Jul">Jul</option>
              	<option value="Aug">Aug</option>
              	<option value="Sep">Sep</option>
              	<option value="Oct">Oct</option>
              	<option value="Nov">Nov</option>
              	<option value="Dec">Dec</option>
            	</select>
				</TD>
		</TR>
		<TR><TD><p><STRONG>No. of tourist:</STRONG></TD>
          <p> 	<TD>
            	<input name="no_tourist" type="text" id="no_tourist"> 
            	*in thousands
				</TD>
		</TR>
		
		<TR><TD><p><STRONG>Purpose:</STRONG></TD>
          	<TD>
            <select name="cbpurpose" id="cbpurpose">
            <option value="\" selected>--Select--</option>
            <option value="Business">Business</option>
            <option value="Vacation">Vacation</option>
            <option value="Education">Education</option>
            <option value="Official">Official</option>
            <option value="Visiting Friends/Relatives">Visiting Friends/Relatives</option>
            <option value="Unspecified purpose">Unspecified purpose</option>
            </select>  
        	</TD>
		</TR>
		
		</TABLE>
		  
          
			<input name="Save" type="submit" id="Save" value="OK" align=RIGHT>
			
        </form>      
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      </td>
	  
	</tr>
  </table>
  <p align="center" class="style20"><a href="mainpage.php">home,</a><a href="forecast.php"> forecast</a>,<a href="help.php"> help</a>,<a href="about.php"> about</a><a href="logger.php">..</a></p>
</div>
