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
          <blockquote><?php echo"<font size=5><p class=\"style10\">FORECASTED TOURIST ARRIVAL </p></font>"; ?>
              <p class="style10">
                <?php /// query from history table
				
			echo '<p align=right><a href=forecast.php>Back</a> </span></p>';
			echo'<form name="form1" method="post" action="forecast_save.php">';
			
			
			$from_year=$_POST[from_year];
			$to_year= $_POST[to_year];
			$city=$_POST[cbcity];
			$rbutton=$_POST[rbutton];
			
			If ((!$from_year)||(!$to_year)||(!$city))
				{echo"<font size=5>You have not entered all the required details.<br>Please go back and try again.</font>"; exit;}
			
			echo'<form action="forecast.php" method="post">';
			
			
			//echo" from: $from_year , to: $to_year ,  city: $city";
			
			//select city
			if ($city=='Manila')
				{$scity="tbmanila";}
			else if ($city=='Pasay')
				{$scity="tbpasay";}
			else if ($city=='Quezon')
				{$scity="tbquezon";}
			else if ($cbcity==Caloocan)
				{$scity="tbcaloocan";}
			else if ($city==Pasig)
				{$scity="tbpasig";}
			else if ($cbcity==Makati)
				{$scity="tbmakati";}
			else if ($city==Mandaluyong)
				{$scity="tbmandaluyong";}
			else if ($city==Muntinlupa)
				{$scity="tbmuntinlupa";}
			else if ($city==Paranaque)
				{$scity="tbparanaque";}
			else if ($city==Marikina)
				{$scity="tbmarikina";}
			else if ($city==Valenzuela)
				{$scity="tbvalenzuela";}
			else if ($city==Navotas)
				{$scity="tbnavotas";}
			else if ($city=='Las Pinas')
				{$scity="tblaspinas";}
			else if ($city==Malabon)
				{$scity="tbmalabon";}
			else if ($city==Taguig)
				{$scity="tbtaguig";}
			else if ($city==Pateros)
				{$scity="tbpateros";}
				
			
		
									
			///display
			$db= mysql_pconnect("localhost","root","");
			if (!$db)
				{
				echo"ERROR: Could not connect to database";
				exit;
				}
				
			mysql_select_db("dbforecast");


			$query= "Select * from ".$scity." WHERE Year='".$from_year."' ORDER BY Month_no";   		//"Select * from ".$scity." WHERE Year=".$from_year."ORDER BY num_key";
			$result= mysql_query($query);
			
			//echo"<br>$scity,  $from_year";
			
			if ((!$result)||empty($result))
			{
			echo "<br>The select year for ".$city." is not yet ON THE DATABASE";
			exit;
			}
			
			$num_results= mysql_num_rows($result);
				//echo"<p> Number of records found:".$num_results."<p>";
				//echo"<table border=1> <br> BASE YEAR:".$from_year;
				
				
		
		//SWITCH DOESNT STOP UNTIL CASE:
		switch($from_year) 
		{
			case '2006':
			{
			$a=1;
			$sum_no=0;
			
			while($row=mysql_fetch_array($result))
			{
			$No_of_tourist= htmlspecialchars(stripslashes($row["No_of_tourist"]));
			$Month= htmlspecialchars(stripslashes($row["Month"]));
			$Year= htmlspecialchars(stripslashes($row["Year"]));
							
				//SUMMATION OF NO_OF_TOURIST
				$sum_no+=$No_of_tourist;
							
				//ASSIGN VARIABLE FOR  BASE DATA
				$mo[$a]=$Month;
				$no[$a]=$No_of_tourist;
				$a++;
				
				
			
			}
			
			
			
			//FOR FORCASTING BASE YEAR
			echo" <br> FORCAST FOR : ".$city." City <br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp YEAR: ".$from_year." - ".$to_year;
			
			//CHECKS NO. OF RECORDS FOR TIME OF YEAR
			//SUMMING MONTH_NO
			$i=1;
			$mo_no_sum=0;
			$sum_data_time=0;
			while($i<=12)
				{	if(empty($no[$i]))
						{$x++;}
					else if(!empty($no[$i]))
						{$mo_no=$i;
						$mo_no_sum+= $mo_no;//SUM OF MONTH_NO
						$data_time[$i]=($mo_no*$no[$i]);//data*MONTH_NO '$data_time is an array'
						$sq_mo_no[$i]=($mo_no*$mo_no);//SQUARE OF MONTH_NO '$sq_mo_no is an array'
						$sum_data_time+=$data_time[$i];//SUM OF 'data*MONTH_NO is an array'
						$sum_sq_mo_no+=$sq_mo_no[$i];//SUM OF 'SQUARE OF MONTH_NO is an array
						
						}
					$i++;
				}
			$time=12-$x;
			
			////echo"<br>time:".$time;
			
			//FETCHING DATA OF FROM_YEAR
			//FETCHING OF DATA IS ON THE WHILE LOOP ABOVE IN THE SQL COMMAND
			$i=1;
			$sum_no=0;
			while($i<=12)
				{	//echo"<br>data :".$mo[$i];
					//echo" no :".$no[$i];
					$sum_no+=$no[$i];//SUM OF TOURIST_NO
					
					$i++;
				}
				
			$mean_data=($sum_no/$time);
			$mean_time_no=($mo_no_sum/$time);
					
			$b1=(($time*$sum_data_time)-($mo_no_sum*$sum_no)) / (($time*$sum_sq_mo_no)-($mo_no_sum*$mo_no_sum)) ;
			$b0=(($mean_data)-($b1*$mean_time_no));
			
			//FORMAT TO OUTPUT AT LEAST 2 DECIMAL PLACES
			$b1= sprintf("%0.3f", $b1);
			$b0= sprintf("%0.2f", $b0);
			
			
			$from_year+=1;//INCREMENT FOR NEXT YEAR
			$year=$from_year;//for next yir
			echo"<br><br>YEAR FORECAST: ".$from_year; 
			echo '<table border=1>
						<TR><TH valign=top><strong>Month</strong></TH><TH valign=top>No.</TH><TH valign=top>Error</TH><TH valign=top>Analysis</TH></tr>	';		
				
			
				$f=1;
				while($f<=12)
				{		
					//FORECASTING ALGORITHM
					$mo_no=$f;
					$F_no[$f]=($b0 + ($b1*$mo_no) );
					//FORMATTING 
					$F_no[$f]= sprintf("%0.2f", $F_no[$f]);
					
					switch($mo[$f])// FOR ERROR ANALYSIS
					{
						case 'Jan':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
					    case 'Feb':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Mar':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Apr':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'May':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Jun':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Jul':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Aug':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Sep':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Oct':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Nov':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Dec':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;												
					}
					$err[$f]= sprintf("%0.2f", $err[$f]);
					
					//analysis growth rate
					$neg1="There was minimal decrease in tourism arrival this month and the probabale reasson could be political issues that gives negative impression to the visitors from other countries";
			
					$neg2="Tourism arrival is even lesser this month and the decrease would be the the result of bad weather condition that may occur suc as strong typhoons that causes heavy floods and strong winds leaving the airports and travel agecy no other choice but to cancel their flights ";
			
					$neg3="Tourist arrival's growth rate as low  as this could only mean that there have been series of disastrs such as eruptions, earthquakes, typhoon, flashfloods and etc. ";
			
					$neg4="Tourist arrival's rate as worse as this would probably be due to extreme rate of crime in the locale or the presence of terroristic acts";
			
					switch($err[$f])
						{
						case (($err[$f]<=0)&&($err[$f]>=-5)):
							$ann[$f]=$neg1; 
							break;		
						case (($err[$f]<-5)&&($err[$f]>=-8)):
							$ann[$f]=$neg2;
							break;
						case (($err[$f]<-8)&&($err[$f]>=-10)):
							$ann[$f]=$neg3;
							break;
						case ($err[$f]<-10):
							$ann[$f]=$neg4;
							break;
						}
					
					 
					if(empty($mo[$f]))
						{$F_no[$f]=0;
							echo"<br>None ".$F_no[$f];
						}
					else if(!empty($mo[$f]))
						{	
							echo '
								<TR><TH valign=top><strong>'.$mo[$f].'</strong></TH><TH valign=top>'.$F_no[$f].'</TH><TH valign=top>'.$err[$f].'</TH><TH valign=top>'.$ann[$f].'</TH></tr>			
								';
						}
					
						
						
						
					$f++;
					
				}
		echo"</TABLE>
						";

										$n=1;
										while($n<=12)
										{	
											switch($mo[$n])// FOR MONTH CONVERTION 1='Jan' FOR EXAMPLE
												{	
												case 'Jan':
													$month='Jan';
													$Month_no="1";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
									 				break;
												case 'Feb':
													$month='Feb'; 
													$Month_no="2";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Mar':
													$month='Mar';
													$Month_no="3";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Apr':
													$month='Apr';
													$Month_no="4";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'May':
													$month='May';
													$Month_no="5";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Jun':
													$month='Jun';
													$Month_no="6";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Jul':
													$month='Jul';
													$Month_no="7";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Aug':
													$month='Aug';
													$Month_no="8";
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Sep':
													$month='Sep';
													$Month_no="9";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Oct':
													$month='Oct';
													$Month_no="10";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Nov':
													$month='Nov';
													$Month_no="11";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Dec':
													$month='Dec';
													$Month_no="12";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
													break;
												}
									
									if($from_year<=$to_year)
									{$foradd= "INSERT INTO forecast VALUES ('".$ID."','".$month."','".$Month_no."','".$No_of_tourist."','".$from_year."','".$error."','".$analysis."')";
									$result1=mysql_query($foradd);
										if(!$result1)
											{echo"cannot execute add."; mysql_error(); }
									}
									else if($from_year==$to_year)
										{
										
										echo '
										<TABLE>
					                	<TR><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH valign=top><input name="SAVE" type="submit" id="SAVE" value="SAVE" ></TH><TH valign=top><input name="CANCEL" type="submit" id="CANCEL" value="CANCEL" ></TH><TH>&nbsp;</TH></TR>
              							</form>
										</TABLE>
										';
										exit;}
									//echo"The record has been added";
									//echo"<br>".$ID;
									$n++;
								}
								
					
				}
			
				case '2007':
				{
						$select="SELECT * FROM forecast WHERE Year='".$from_year."' ORDER BY Month_no";
						echo "<br>";
						$result=mysql_query($select);
							if(!$result)
								{	echo"cannot execute select."; 
									
								}
							$a=1;
							$sum_no=0;
							while($row=mysql_fetch_array($result))
								{
								$Month= htmlspecialchars(stripslashes($row["Month"]));
								$No_of_tourist= htmlspecialchars(stripslashes($row["No_of_tourist"]));
								//SUMMATION OF NO_OF_TOURIST
								$sum_no+=$No_of_tourist;
							
								//ASSIGN VARIABLE FOR  BASE DATA
								$mo[$a]=$Month;
								$no[$a]=$No_of_tourist;
								$a++;
								
								////echo"<br>$Month : $No_of_tourist";
								}
								 
								 
								//CHECKS NO. OF RECORDS FOR TIME OF YEAR
								//SUMMING MONTH_NO
								$i=1;
								$mo_no_sum=0;
								$sum_data_time=0;
								$sum_sq_mo_no=0;
								while($i<=12)
									{	if(empty($no[$i]))
											{$x++;}
										else if(!empty($no[$i]))
											{$mo_no=$i;
											$mo_no_sum+= $mo_no;//SUM OF MONTH_NO
											$data_time[$i]=($mo_no*$no[$i]);//data*MONTH_NO '$data_time is an array'
											$sq_mo_no[$i]=($mo_no*$mo_no);//SQUARE OF MONTH_NO '$sq_mo_no is an array'
											$sum_data_time+=$data_time[$i];//SUM OF 'data*MONTH_NO is an array'
											$sum_sq_mo_no+=$sq_mo_no[$i];//SUM OF 'SQUARE OF MONTH_NO is an array
						
									}
									$i++;
									}
								$time=12-$x;
			
								//echo"<br>time:".$time;
			
							//FETCHING DATA OF FROM_YEAR
							//FETCHING OF DATA IS ON THE WHILE LOOP ABOVE IN THE SQL COMMAND
							$i=1;
							$sum_no=0;
							while($i<=12)
							{	//echo"<br>data :".$mo[$i];
								//echo" no :".$no[$i];
								$sum_no+=$no[$i];//SUM OF TOURIST_NO
					
								$i++;
							}
				
							$mean_data=($sum_no/$time);
							$mean_time_no=($mo_no_sum/$time);
					
							$b1=(($time*$sum_data_time)-($mo_no_sum*$sum_no)) / (($time*$sum_sq_mo_no)-($mo_no_sum*$mo_no_sum)) ;
							$b0=(($mean_data)-($b1*$mean_time_no));
			
							//FORMAT TO OUTPUT AT LEAST 2 DECIMAL PLACES
							$b1= sprintf("%0.3f", $b1);
							$b0= sprintf("%0.2f", $b0);
						
						
						$from_year+=1;//INCREMENT FOR NEXT YEAR
						$year=$from_year;//for next yir
						echo"<br><br>YEAR FORECAST: ".$from_year; 
						echo '<table border=1>
						<TR><TH valign=top><strong>Month</strong></TH><TH valign=top>No.</TH><TH valign=top>Error</TH><TH valign=top>Analysis</TH></tr>	';		
				
			
				$f=1;
				while($f<=12)
				{		
					//FORECASTING ALGORITHM
					$mo_no=$f;
					$F_no[$f]=($b0 + ($b1*$mo_no) );
					//FORMATTING 
					$F_no[$f]= sprintf("%0.2f", $F_no[$f]);
					
					switch($mo[$f])// FOR ERROR ANALYSIS
					{
						case 'Jan':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
					    case 'Feb':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Mar':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Apr':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'May':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Jun':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Jul':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Aug':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Sep':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Oct':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Nov':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Dec':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;												
					}
					$err[$f]= sprintf("%0.2f", $err[$f]);
					
					//analysis growth rate
					$neg1="There was minimal decrease in tourism arrival this month and the probabale reasson could be political issues that gives negative impression to the visitors from other countries";
			
					$neg2="Tourism arrival is even lesser this month and the decrease would be the the result of bad weather condition that may occur suc as strong typhoons that causes heavy floods and strong winds leaving the airports and travel agecy no other choice but to cancel their flights ";
			
					$neg3="Tourist arrival's growth rate as low  as this could only mean that there have been series of disastrs such as eruptions, earthquakes, typhoon, flashfloods and etc. ";
			
					$neg4="Tourist arrival's rate as worse as this would probably be due to extreme rate of crime in the locale or the presence of terroristic acts";
			
					switch($err[$f])
						{
						case (($err[$f]<=0)&&($err[$f]>=-5)):
							$ann[$f]=$neg1; 
							break;		
						case (($err[$f]<-5)&&($err[$f]>=-8)):
							$ann[$f]=$neg2;
							break;
						case (($err[$f]<-8)&&($err[$f]>=-10)):
							$ann[$f]=$neg3;
							break;
						case ($err[$f]<-10):
							$ann[$f]=$neg4;
							break;
						}
					
					
					if(empty($mo[$f]))
						{$F_no[$f]=0;
							echo"<br>None ".$F_no[$f];
						}
					else if(!empty($mo[$f]))
						{	
							echo '
								<TR><TH valign=top><strong>'.$mo[$f].'</strong></TH><TH valign=top>'.$F_no[$f].'</TH><TH valign=top>'.$err[$f].'</TH><TH valign=top>'.$ann[$f].'</TH></tr>			
								';
						}
						
						
						
						
					$f++;
					
				}
		echo"</TABLE>
						";

				
										$n=1;
										while($n<=12)
										{	
											switch($mo[$n])// FOR MONTH CONVERTION 1='Jan' FOR EXAMPLE
												{	
												case 'Jan':
													$month='Jan';
													$Month_no="1";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
									 				break;
												case 'Feb':
													$month='Feb'; 
													$Month_no="2";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Mar':
													$month='Mar';
													$Month_no="3";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Apr':
													$month='Apr';
													$Month_no="4";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'May':
													$month='May';
													$Month_no="5";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Jun':
													$month='Jun';
													$Month_no="6";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Jul':
													$month='Jul';
													$Month_no="7";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Aug':
													$month='Aug';
													$Month_no="8";
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Sep':
													$month='Sep';
													$Month_no="9";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Oct':
													$month='Oct';
													$Month_no="10";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Nov':
													$month='Nov';
													$Month_no="11";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Dec':
													$month='Dec';
													$Month_no="12";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
													break;
												}
									if($from_year<=$to_year)
									{$foradd= "INSERT INTO forecast VALUES ('".$ID."','".$month."','".$Month_no."','".$No_of_tourist."','".$from_year."','".$error."','".$analysis."')";
									$result1=mysql_query($foradd);
										if(!$result1)
											{echo"cannot execute add."; mysql_error(); }
									}
									else if($from_year==$to_year)
										{
										
										echo '
										<TABLE>
					                	<TR><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH valign=top><input name="SAVE" type="submit" id="SAVE" value="SAVE" ></TH><TH valign=top><input name="CANCEL" type="submit" id="CANCEL" value="CANCEL" ></TH><TH>&nbsp;</TH></TR>
              							</form>
										</TABLE>
										';
										exit;}
									//echo"The record has been added";
									//echo"<br>".$ID;
									$n++;
								}
						}
						
						case '2008':
				{
						$select="SELECT * FROM forecast WHERE Year='".$from_year."' ORDER BY Month_no";
						echo "<br>";
						$result=mysql_query($select);
							if(!$result)
								{	echo"cannot execute select."; 
									
								}
							$a=1;
							$sum_no=0;
							while($row=mysql_fetch_array($result))
								{
								$Month= htmlspecialchars(stripslashes($row["Month"]));
								$No_of_tourist= htmlspecialchars(stripslashes($row["No_of_tourist"]));
								//SUMMATION OF NO_OF_TOURIST
								$sum_no+=$No_of_tourist;
							
								//ASSIGN VARIABLE FOR  BASE DATA
								$mo[$a]=$Month;
								$no[$a]=$No_of_tourist;
								$a++;
								
								//echo"<br>$Month : $No_of_tourist";
								}
								 
								 
								//CHECKS NO. OF RECORDS FOR TIME OF YEAR
								//SUMMING MONTH_NO
								$i=1;
								$mo_no_sum=0;
								$sum_data_time=0;
								$sum_sq_mo_no=0;
								while($i<=12)
									{	if(empty($no[$i]))
											{$x++;}
										else if(!empty($no[$i]))
											{$mo_no=$i;
											$mo_no_sum+= $mo_no;//SUM OF MONTH_NO
											$data_time[$i]=($mo_no*$no[$i]);//data*MONTH_NO '$data_time is an array'
											$sq_mo_no[$i]=($mo_no*$mo_no);//SQUARE OF MONTH_NO '$sq_mo_no is an array'
											$sum_data_time+=$data_time[$i];//SUM OF 'data*MONTH_NO is an array'
											$sum_sq_mo_no+=$sq_mo_no[$i];//SUM OF 'SQUARE OF MONTH_NO is an array
						
									}
									$i++;
									}
								$time=12-$x;
			
								//echo"<br>time:".$time;
			
							//FETCHING DATA OF FROM_YEAR
							//FETCHING OF DATA IS ON THE WHILE LOOP ABOVE IN THE SQL COMMAND
							$i=1;
							$sum_no=0;
							while($i<=12)
							{	//echo"<br>data :".$mo[$i];
								//echo" no :".$no[$i];
								$sum_no+=$no[$i];//SUM OF TOURIST_NO
					
								$i++;
							}
				
							$mean_data=($sum_no/$time);
							$mean_time_no=($mo_no_sum/$time);
					
							$b1=(($time*$sum_data_time)-($mo_no_sum*$sum_no)) / (($time*$sum_sq_mo_no)-($mo_no_sum*$mo_no_sum)) ;
							$b0=(($mean_data)-($b1*$mean_time_no));
			
							//FORMAT TO OUTPUT AT LEAST 2 DECIMAL PLACES
							$b1= sprintf("%0.3f", $b1);
							$b0= sprintf("%0.2f", $b0);
						
						
						$from_year+=1;//INCREMENT FOR NEXT YEAR
						$year=$from_year;//for next yir
						echo"<br><br>YEAR FORECAST: ".$from_year; 
						echo '<table border=1>
						<TR><TH valign=top><strong>Month</strong></TH><TH valign=top>No.</TH><TH valign=top>Error</TH><TH valign=top>Analysis</TH></tr>	';		
				
			
				$f=1;
				while($f<=12)
				{		
					//FORECASTING ALGORITHM
					$mo_no=$f;
					$F_no[$f]=($b0 + ($b1*$mo_no) );
					//FORMATTING 
					$F_no[$f]= sprintf("%0.2f", $F_no[$f]);
					
					switch($mo[$f])// FOR ERROR ANALYSIS
					{
						case 'Jan':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
					    case 'Feb':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Mar':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Apr':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'May':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Jun':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Jul':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Aug':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Sep':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Oct':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Nov':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Dec':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;												
					}
					$err[$f]= sprintf("%0.2f", $err[$f]);
					
					//analysis growth rate
					$neg1="There was minimal decrease in tourism arrival this month and the probabale reasson could be political issues that gives negative impression to the visitors from other countries";
			
					$neg2="Tourism arrival is even lesser this month and the decrease would be the the result of bad weather condition that may occur suc as strong typhoons that causes heavy floods and strong winds leaving the airports and travel agecy no other choice but to cancel their flights ";
			
					$neg3="Tourist arrival's growth rate as low  as this could only mean that there have been series of disastrs such as eruptions, earthquakes, typhoon, flashfloods and etc. ";
			
					$neg4="Tourist arrival's rate as worse as this would probably be due to extreme rate of crime in the locale or the presence of terroristic acts";
			
					switch($err[$f])
						{
						case (($err[$f]<=0)&&($err[$f]>=-5)):
							$ann[$f]=$neg1; 
							break;		
						case (($err[$f]<-5)&&($err[$f]>=-8)):
							$ann[$f]=$neg2;
							break;
						case (($err[$f]<-8)&&($err[$f]>=-10)):
							$ann[$f]=$neg3;
							break;
						case ($err[$f]<-10):
							$ann[$f]=$neg4;
							break;
						}
					
					
					if(empty($mo[$f]))
						{$F_no[$f]=0;
							echo"<br>None ".$F_no[$f];
						}
					else if(!empty($mo[$f]))
						{	
							echo '
								<TR><TH valign=top><strong>'.$mo[$f].'</strong></TH><TH valign=top>'.$F_no[$f].'</TH><TH valign=top>'.$err[$f].'</TH><TH valign=top>'.$ann[$f].'</TH></tr>			
								';
						}
						
						
						
						
					$f++;
					
				}
		echo"</TABLE>
						";

				
										$n=1;
										while($n<=12)
										{	
											switch($mo[$n])// FOR MONTH CONVERTION 1='Jan' FOR EXAMPLE
												{	
												case 'Jan':
													$month='Jan';
													$Month_no="1";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
									 				break;
												case 'Feb':
													$month='Feb'; 
													$Month_no="2";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Mar':
													$month='Mar';
													$Month_no="3";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Apr':
													$month='Apr';
													$Month_no="4";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'May':
													$month='May';
													$Month_no="5";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Jun':
													$month='Jun';
													$Month_no="6";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Jul':
													$month='Jul';
													$Month_no="7";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Aug':
													$month='Aug';
													$Month_no="8";
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Sep':
													$month='Sep';
													$Month_no="9";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Oct':
													$month='Oct';
													$Month_no="10";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Nov':
													$month='Nov';
													$Month_no="11";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Dec':
													$month='Dec';
													$Month_no="12";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
													break;
												}
									if($from_year<=$to_year)
									{$foradd= "INSERT INTO forecast VALUES ('".$ID."','".$month."','".$Month_no."','".$No_of_tourist."','".$from_year."','".$error."','".$analysis."')";
									$result1=mysql_query($foradd);
										if(!$result1)
											{echo"cannot execute add."; mysql_error(); }
									}
									else if($from_year==$to_year)
										{
										
										echo '
										<TABLE>
					                	<TR><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH valign=top><input name="SAVE" type="submit" id="SAVE" value="SAVE" ></TH><TH valign=top><input name="CANCEL" type="submit" id="CANCEL" value="CANCEL" ></TH><TH>&nbsp;</TH></TR>
              							</form>
										</TABLE>
										';
										exit;}
									//echo"The record has been added";
									//echo"<br>".$ID;
									$n++;
								}
						}
						
						
						case '2009':
				{
						$select="SELECT * FROM forecast WHERE Year='".$from_year."' ORDER BY Month_no";
						echo "<br>";
						$result=mysql_query($select);
							if(!$result)
								{	echo"cannot execute select."; 
									
								}
							$a=1;
							$sum_no=0;
							while($row=mysql_fetch_array($result))
								{
								$Month= htmlspecialchars(stripslashes($row["Month"]));
								$No_of_tourist= htmlspecialchars(stripslashes($row["No_of_tourist"]));
								//SUMMATION OF NO_OF_TOURIST
								$sum_no+=$No_of_tourist;
							
								//ASSIGN VARIABLE FOR  BASE DATA
								$mo[$a]=$Month;
								$no[$a]=$No_of_tourist;
								$a++;
								
								////echo"<br>$Month : $No_of_tourist";
								}
								 
								 
								//CHECKS NO. OF RECORDS FOR TIME OF YEAR
								//SUMMING MONTH_NO
								$i=1;
								$mo_no_sum=0;
								$sum_data_time=0;
								$sum_sq_mo_no=0;
								while($i<=12)
									{	if(empty($no[$i]))
											{$x++;}
										else if(!empty($no[$i]))
											{$mo_no=$i;
											$mo_no_sum+= $mo_no;//SUM OF MONTH_NO
											$data_time[$i]=($mo_no*$no[$i]);//data*MONTH_NO '$data_time is an array'
											$sq_mo_no[$i]=($mo_no*$mo_no);//SQUARE OF MONTH_NO '$sq_mo_no is an array'
											$sum_data_time+=$data_time[$i];//SUM OF 'data*MONTH_NO is an array'
											$sum_sq_mo_no+=$sq_mo_no[$i];//SUM OF 'SQUARE OF MONTH_NO is an array
						
									}
									$i++;
									}
								$time=12-$x;
			
								////echo"<br>time:".$time;
			
							//FETCHING DATA OF FROM_YEAR
							//FETCHING OF DATA IS ON THE WHILE LOOP ABOVE IN THE SQL COMMAND
							$i=1;
							$sum_no=0;
							while($i<=12)
							{	//echo"<br>data :".$mo[$i];
								//echo" no :".$no[$i];
								$sum_no+=$no[$i];//SUM OF TOURIST_NO
					
								$i++;
							}
				
							$mean_data=($sum_no/$time);
							$mean_time_no=($mo_no_sum/$time);
					
							$b1=(($time*$sum_data_time)-($mo_no_sum*$sum_no)) / (($time*$sum_sq_mo_no)-($mo_no_sum*$mo_no_sum)) ;
							$b0=(($mean_data)-($b1*$mean_time_no));
			
							//FORMAT TO OUTPUT AT LEAST 2 DECIMAL PLACES
							$b1= sprintf("%0.3f", $b1);
							$b0= sprintf("%0.2f", $b0);
						
						
						$from_year+=1;//INCREMENT FOR NEXT YEAR
						$year=$from_year;//for next yir
						echo"<br><br>YEAR FORECAST: ".$from_year; 
						echo '<table border=1>
						<TR><TH valign=top><strong>Month</strong></TH><TH valign=top>No.</TH><TH valign=top>Error</TH><TH valign=top>Analysis</TH></tr>	';		
				
			
				$f=1;
				while($f<=12)
				{		
					//FORECASTING ALGORITHM
					$mo_no=$f;
					$F_no[$f]=($b0 + ($b1*$mo_no) );
					//FORMATTING 
					$F_no[$f]= sprintf("%0.2f", $F_no[$f]);
					
					switch($mo[$f])// FOR ERROR ANALYSIS
					{
						case 'Jan':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
					    case 'Feb':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Mar':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Apr':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'May':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Jun':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Jul':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Aug':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Sep':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Oct':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Nov':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;
						case 'Dec':
							$err[$f]=($F_no[$f]-$no[$f]);
							break;												
					}
					$err[$f]= sprintf("%0.2f", $err[$f]);
					
					//analysis growth rate
					$neg1="There was minimal decrease in tourism arrival this month and the probabale reasson could be political issues that gives negative impression to the visitors from other countries";
			
					$neg2="Tourism arrival is even lesser this month and the decrease would be the the result of bad weather condition that may occur suc as strong typhoons that causes heavy floods and strong winds leaving the airports and travel agecy no other choice but to cancel their flights ";
			
					$neg3="Tourist arrival's growth rate as low  as this could only mean that there have been series of disastrs such as eruptions, earthquakes, typhoon, flashfloods and etc. ";
			
					$neg4="Tourist arrival's rate as worse as this would probably be due to extreme rate of crime in the locale or the presence of terroristic acts";
			
					switch($err[$f])
						{
						case (($err[$f]<=0)&&($err[$f]>=-5)):
							$ann[$f]=$neg1; 
							break;		
						case (($err[$f]<-5)&&($err[$f]>=-8)):
							$ann[$f]=$neg2;
							break;
						case (($err[$f]<-8)&&($err[$f]>=-10)):
							$ann[$f]=$neg3;
							break;
						case ($err[$f]<-10):
							$ann[$f]=$neg4;
							break;
						}
					
					
					if(empty($mo[$f]))
						{$F_no[$f]=0;
							echo"<br>None ".$F_no[$f];
						}
					else if(!empty($mo[$f]))
						{	
							echo '
								<TR><TH valign=top><strong>'.$mo[$f].'</strong></TH><TH valign=top>'.$F_no[$f].'</TH><TH valign=top>'.$err[$f].'</TH><TH valign=top>'.$ann[$f].'</TH></tr>			
								';
						}
						
						
						
						
					$f++;
					
				}
		echo"</TABLE>
						";

				
										$n=1;
										while($n<=12)
										{	
											switch($mo[$n])// FOR MONTH CONVERTION 1='Jan' FOR EXAMPLE
												{	
												case 'Jan':
													$month='Jan';
													$Month_no="1";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
									 				break;
												case 'Feb':
													$month='Feb'; 
													$Month_no="2";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Mar':
													$month='Mar';
													$Month_no="3";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Apr':
													$month='Apr';
													$Month_no="4";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'May':
													$month='May';
													$Month_no="5";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Jun':
													$month='Jun';
													$Month_no="6";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Jul':
													$month='Jul';
													$Month_no="7";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Aug':
													$month='Aug';
													$Month_no="8";
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Sep':
													$month='Sep';
													$Month_no="9";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Oct':
													$month='Oct';
													$Month_no="10";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Nov':
													$month='Nov';
													$Month_no="11";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
									 				$error=$err[$n];
													$analysis=$ann[$n];
													break;
												case 'Dec':
													$month='Dec';
													$Month_no="12";
													$No_of_tourist=$F_no[$n];
													$ID=$from_year."/".$month;
													$error=$err[$n];
													$analysis=$ann[$n];
													break;
												}
									
									
									if($from_year<=$to_year)
									{$foradd= "INSERT INTO forecast VALUES ('".$ID."','".$month."','".$Month_no."','".$No_of_tourist."','".$from_year."','".$error."','".$analysis."')";
									$result1=mysql_query($foradd);
										if(!$result1)
											{echo"cannot execute add."; mysql_error(); }
									}
									else if($from_year==$to_year)
										{
										
										echo '
										<TABLE>
					                	<TR><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH valign=top><input name="SAVE" type="submit" id="SAVE" value="SAVE" ></TH><TH valign=top><input name="CANCEL" type="submit" id="CANCEL" value="CANCEL" ></TH><TH>&nbsp;</TH></TR>
              							</form>
										</TABLE>
										';
										exit ;}
									////echo"The record has been added";
									//echo"<br>".$ID;
									$n++;
								}
								
						}
						
						
				}// end switch
				
				
				echo '
					<TABLE>
                	<TR><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH>&nbsp;</TH><TH valign=top><input name="SAVE" type="submit" id="SAVE" value="SAVE" ></TH><TH valign=top><input name="CANCEL" type="submit" id="CANCEL" value="CANCEL" ></TH><TH>&nbsp;</TH></TR>
              		</form>
					</TABLE>
					';
		?>
              <p class="style10">
              
              <p class="style10">                                          
              <p class="style10">
            <p class="style10">
              <p class="style10">
              <p class="style10">
              <p class="style10">
              <p class="style10">
              <p class="style10">                                                                                                                
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
