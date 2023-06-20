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
          <p class="style10">FORECAST SELECT :</p>
          <form name="form2" method="post" action="forecast_result.php">
            <p class="style10">&nbsp;</p>
            <TABLE width="365" >
              <TR>
                <TD  width="156" align="right">Year : <span class="style29">
                  <select name="from_year" id="from_year">
                    <option value="" selected>--Select--</option>
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
                </span></TD>
                <TD width="193"  align="right" ><span class="style29"> To Year:
                      <select name="to_year" id="to_year">
                        <option value="" selected>--Select--</option>
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
                </span></TD>
              </TR>
              <TR>
                <TD align="right"><span class="style29">
                  <input type="radio" name="rbutton" value="ncr">
        NCR </span></TD>
                <TD align="right"><span class="style29">
        City
        <select name="cbcity" id="cbcity" >
          <option value="">--Select--</option>
          <option value="Manila">Manila</option>
          <option value="Quezon" selected>Quezon</option>
          <option value="Pasay">Pasay</option>
          <option value="Pasig">Pasig</option>
          <option value="Makati">Makati</option>
          <option value="Mandaluyong">Mandaluyong</option>
          <option value="Muntinlupa">Muntinlupa</option>
          <option value="Paranaque">Paranaque</option>
          <option value="Caloocan">Caloocan</option>
          <option value="Marikina">Marikina</option>
          <option value="Valenzuela">Valenzuela</option>
          <option value="Navotas">Navotas</option>
          <option value="Las Pinas">Las Pinas</option>
          <option value="Malabon">Malabon</option>
          <option value="Taguig">Taguig</option>
          <option value="Pateros">Pateros</option>
        </select>
                </span>          
              </TR>
              <TR>
                <TD>&nbsp;</TD>
                <TD>&nbsp;</TD>
              </TR>
              <TR>
                <TD>&nbsp;</TD>
                <TD align="right"><input name="FORECAST" type="submit" id="FORECAST" value="FORECAST"></TD>
              </TR>
            </TABLE>
            <?php
		
			
	 			/// forecast computation
	  //echo "<Table border=1>";
				//echo "<TR><TH>Year</TH><TH>Jan</TH><TH>Feb</TH><TH>Mar</TH><TH>Apr</TH><TH>May</TH><TH>Jun</TH><TH>Jul</TH><TH>Aug</TH><TH>Sep</TH><TH>Oct</TH><TH>Nov</TH><TH>Dec</TH></TR>";
				if ($submit==1)
	 { $year_range= $history_year+1;
	 	
	  $sum_data=$history_jan+$history_feb+$history_mar+$history_apr+$history_may+$history_jun+$history_jul+$history_aug+$history_sep+$history_oct+$history_nov+$history_dec;
	  $mean_data=$sum_data/12;
	  $mean_data=$sum_data/12;
	  $t_data=$history_jan+$history_feb*2+$history_mar*3+$history_apr*4+$history_may*5+$history_jun*6+$history_jul*7+$history_aug*8+$history_sep*9+$history_oct*10+$history_nov*11+$history_dec*12;	    
	  $b1=(12*$t_data-78*$sum_data)/7644;
	  $b0=$mean_data-$b1*6.5;	
	  
	  $forecast_jan=$b0+$b1*1;
	  $forecast_feb=$b0+$b1*2;
	  $forecast_mar=$b0+$b1*3;
	  $forecast_apr=$b0+$b1*4;
	  $forecast_may=$b0+$b1*5;
	  $forecast_jun=$b0+$b1*6;
	  $forecast_jul=$b0+$b1*7;
	  $forecast_aug=$b0+$b1*8;
	  $forecast_sep=$b0+$b1*9;
	  $forecast_oct=$b0+$b1*10; 
	  $forecast_nov=$b0+$b1*11;
	  $forecast_dec=$b0+$b1*12;
	  
		 $hjan= sprintf("%0.2f", $history_jan);
		 $hfeb= sprintf("%0.2f", $history_feb);	 
		 $hmar= sprintf("%0.2f", $history_mar);	 	 
	  	 $hapr= sprintf("%0.2f", $history_apr);	 
		 $hmay= sprintf("%0.2f", $history_may);	 
		 $hjun= sprintf("%0.2f", $history_jun);	 
		 $hjul= sprintf("%0.2f", $history_jul);	 
		 $haug= sprintf("%0.2f", $history_aug);	 
		 $hsep= sprintf("%0.2f", $history_sep);	 
		 $hoct= sprintf("%0.2f", $history_oct);
		 $hnov= sprintf("%0.2f", $history_nov);	 
		 $hdec= sprintf("%0.2f", $history_dec);	
		 $fjan= sprintf("%0.2f", $forecast_jan);
		 $ffeb= sprintf("%0.2f", $forecast_feb);	 
		 $fmar= sprintf("%0.2f", $forecast_mar);	 	 
	  	 $fapr= sprintf("%0.2f", $forecast_apr);	 
		 $fmay= sprintf("%0.2f", $forecast_may);	 
		 $fjun= sprintf("%0.2f", $forecast_jun);	 
		 $fjul= sprintf("%0.2f", $forecast_jul);	 
		 $faug= sprintf("%0.2f", $forecast_aug);	 
		 $fsep= sprintf("%0.2f", $forecast_sep);	 
		 $foct= sprintf("%0.2f", $forecast_oct);
		 $fnov= sprintf("%0.2f", $forecast_nov);	 
		 $fdec= sprintf("%0.2f", $forecast_dec);	 
		 $erjan=$hjan-$fjan;
		 $erfeb=$hfeb-$ffeb;
		 $ermar=$hmar-$fmar;
		 $erapr=$hapr-$fapr;
		 $ermay=$hmay-$fmay;
		 $erjun=$hjun-$fjun;
		 $erjul=$hjul-$fjul;
		 $eraug=$haug-$faug;
		 $ersep=$hsep-$fsep;
		 $eroct=$hoct-$foct;
		 $ernov=$hjnov-$fnov;
		 $erdec=$hdec-$fdec;
		 echo"City:&nbsp&nbsp&nbsp&nbsp$city";
		 echo"<br>";
		 echo"Year:&nbsp&nbsp&nbsp&nbsp$year_range";
		 echo"<br>";
		 echo"<br>";
		 echo"Month	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp		Forecast	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspError:";
		  echo"<br>";
		echo"January&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	$fjan	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$erjan";
		echo"<br>";
		echo"February&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	$ffeb&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$erfeb";
		echo"<br>";
		echo"March&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	$fmar&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$ermar";
		echo"<br>";
		echo"April&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	$fapr&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$erapr";
		echo"<br>";
		echo"May&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	$fmay&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$ermay";
		echo"<br>";
		echo"June&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	$fjun&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$erjun";
		echo"<br>";
		echo"July&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	$fjul&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$erjul";
		echo"<br>";
		echo"August&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	$faug&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$eraug";
		echo"<br>";
		echo"September&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	$fsep&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$ersep";
		echo"<br>";
		echo"Octuber&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	$foct&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$eroct";
		echo"<br>";
		echo"November&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	$fnov&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$ernov";
		echo"<br>";
		echo"December&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	$fdec&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$erdec";
		echo"<br>";
		}
		  ?>
          </form>
          <p>&nbsp;</p>
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
