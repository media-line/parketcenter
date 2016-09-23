jQuery(document).ready(function(){
								var AllSq = 0;	 
								var Plin = 0;
								var Res =0;

								jQuery(".ch_m2").append(" ");
								
								
								jQuery("#calc_head_ZeroZero").click(function() {
									jQuery("#ch1,#ch2,#ch3, #ch4, #ch5, #ch6, #ch7, #ch8, #ch9, #ch10, #ch11, #ch12, #ch13, #ch14, #ch15, #ch16, #ch17, #ch18, #ch19").attr("checked", false);
									 jQuery("#calc_head_Num").text("0");	
								});	 
								
															
								jQuery("#Plintus, #AllSquare").keyup(function(event) {
								  if ((event.keyCode < 48) || (event.keyCode > 57))
								  	 jQuery(this).css("border","2px solid red");
								  else
									 jQuery(this).css("border","2px solid green");
								});

							
								jQuery("#lh1").click(function() {
									if (!jQuery("#ch1").attr("checked"))			{jQuery("#ch1").attr("checked", true);}
									else 									jQuery("#ch1").attr("checked", false);		
								});		  
								jQuery("#lh2").click(function() {
									if (!jQuery("#ch2").attr("checked"))			{jQuery("#ch2").attr("checked", true);}
									else 									jQuery("#ch2").attr("checked", false);		
								});	
								jQuery("#lh3").click(function() {
									if (!jQuery("#ch3").attr("checked"))			{jQuery("#ch3").attr("checked", true); jQuery("#ch4").attr("checked", false); }
									else 									{jQuery("#ch3").attr("checked", false); }		
								});
								jQuery("#lh4").click(function() {
									if (!jQuery("#ch4").attr("checked"))			{jQuery("#ch4").attr("checked", true); jQuery("#ch3").attr("checked", false);}
									else 									{jQuery("#ch4").attr("checked", false);  }		
								});
								jQuery("#lh5").click(function() {
									if (!jQuery("#ch5").attr("checked"))			{jQuery("#ch5").attr("checked", true);}
									else 									jQuery("#ch5").attr("checked", false);		
								});
								  
								
								jQuery("#lh6").click(function() {
									if (!jQuery("#ch6").attr("checked"))			{jQuery("#ch6").attr("checked", true); jQuery("#ch7").attr("checked", false); jQuery("#ch8").attr("checked", false); jQuery("#ch9").attr("checked", false);}
									else 									{jQuery("#ch6").attr("checked", false);}		
								});
								jQuery("#lh7").click(function() {
									if (!jQuery("#ch7").attr("checked"))			{jQuery("#ch7").attr("checked", true); jQuery("#ch6").attr("checked", false); jQuery("#ch8").attr("checked", false); jQuery("#ch9").attr("checked", false);}
									else 									{jQuery("#ch7").attr("checked", false);}		
								});
								jQuery("#lh8").click(function() {
									if (!jQuery("#ch8").attr("checked"))			{jQuery("#ch8").attr("checked", true); jQuery("#ch7").attr("checked", false); jQuery("#ch6").attr("checked", false); jQuery("#ch9").attr("checked", false);}
									else 									{jQuery("#ch8").attr("checked", false);}
								});
								jQuery("#lh9").click(function() {
									if (!jQuery("#ch9").attr("checked"))			{jQuery("#ch9").attr("checked", true); jQuery("#ch8").attr("checked", false); jQuery("#ch7").attr("checked", false); jQuery("#ch6").attr("checked", false);}
									else 									{jQuery("#ch9").attr("checked", false);}
								});







								jQuery("#lh10").click(function() {
									if (!jQuery("#ch10").attr("checked"))			{jQuery("#ch10").attr("checked", true); jQuery("#ch11").attr("checked", false);}
									else 									{jQuery("#ch10").attr("checked", false);}
								});
								jQuery("#lh11").click(function() {
									if (!jQuery("#ch11").attr("checked"))			{jQuery("#ch11").attr("checked", true); jQuery("#ch10").attr("checked", false);}
									else 									{jQuery("#ch11").attr("checked", false);}
								});






								jQuery("#lh12").click(function() {
									if (!jQuery("#ch12").attr("checked"))			{jQuery("#ch12").attr("checked", true); jQuery("#ch18").attr("checked", false); jQuery("#ch17").attr("checked", false); jQuery("#ch16").attr("checked", false);jQuery("#ch15").attr("checked", false);jQuery("#ch14").attr("checked", false);jQuery("#ch13").attr("checked", false);}
									else 									{jQuery("#ch12").attr("checked", false);}
								});
								jQuery("#lh13").click(function() {
									if (!jQuery("#ch13").attr("checked"))			{jQuery("#ch13").attr("checked", true); jQuery("#ch18").attr("checked", false); jQuery("#ch17").attr("checked", false); jQuery("#ch16").attr("checked", false);jQuery("#ch15").attr("checked", false);jQuery("#ch14").attr("checked", false);jQuery("#ch12").attr("checked", false);}
									else 									{jQuery("#ch13").attr("checked", false);}
								});
								jQuery("#lh14").click(function() {
									if (!jQuery("#ch14").attr("checked"))			{jQuery("#ch14").attr("checked", true); jQuery("#ch18").attr("checked", false); jQuery("#ch17").attr("checked", false); jQuery("#ch16").attr("checked", false);jQuery("#ch15").attr("checked", false);jQuery("#ch13").attr("checked", false);jQuery("#ch12").attr("checked", false);}
									else 									{jQuery("#ch14").attr("checked", false);}
								});
								jQuery("#lh15").click(function() {
									if (!jQuery("#ch15").attr("checked"))			{jQuery("#ch15").attr("checked", true); jQuery("#ch18").attr("checked", false); jQuery("#ch17").attr("checked", false); jQuery("#ch16").attr("checked", false);jQuery("#ch14").attr("checked", false);jQuery("#ch13").attr("checked", false);jQuery("#ch12").attr("checked", false);}
									else 									{jQuery("#ch15").attr("checked", false);}
								});
								jQuery("#lh16").click(function() {
									if (!jQuery("#ch16").attr("checked"))			{jQuery("#ch16").attr("checked", true); jQuery("#ch18").attr("checked", false); jQuery("#ch17").attr("checked", false); jQuery("#ch15").attr("checked", false);jQuery("#ch14").attr("checked", false);jQuery("#ch13").attr("checked", false);jQuery("#ch12").attr("checked", false);}
									else 									{jQuery("#ch16").attr("checked", false);}
								});
								jQuery("#lh17").click(function() {
									if (!jQuery("#ch17").attr("checked"))			{jQuery("#ch17").attr("checked", true); jQuery("#ch18").attr("checked", false); jQuery("#ch16").attr("checked", false); jQuery("#ch15").attr("checked", false);jQuery("#ch14").attr("checked", false);jQuery("#ch13").attr("checked", false);jQuery("#ch12").attr("checked", false);}
									else 									{jQuery("#ch17").attr("checked", false);}
								});
								jQuery("#lh18").click(function() {
									if (!jQuery("#ch18").attr("checked"))			{jQuery("#ch18").attr("checked", true); jQuery("#ch17").attr("checked", false); jQuery("#ch16").attr("checked", false); jQuery("#ch15").attr("checked", false);jQuery("#ch14").attr("checked", false);jQuery("#ch13").attr("checked", false);jQuery("#ch12").attr("checked", false);}
									else 									{jQuery("#ch18").attr("checked", false);}
								});








								jQuery("#lh19").click(function() {
									if (!jQuery("#ch19").attr("checked"))			{jQuery("#ch19").attr("checked", true); jQuery("#Plintus").focus(); }
									else 										{jQuery("#ch19").attr("checked", false);}
								});

								jQuery("#ch1,#ch2,#ch3, #ch4, #ch5, #ch6, #ch7, #ch8, #ch9, #ch10, #ch11, #ch12, #ch13, #ch14, #ch15, #ch16, #ch17, #ch18, #ch19").click(function() {
									if (!jQuery(this).attr("checked"))			jQuery(this).attr("checked", true);
									else 									jQuery(this).attr("checked", false);		
								});	
									
								jQuery("#Plintus").click(function() {
									if (!jQuery("#ch19").attr("checked"))			jQuery("#ch19").attr("checked", true);
									else 									{jQuery("#ch19").attr("checked", false);	}
								});

								jQuery("#GoCalc").click(function(event) {
                                    event.preventDefault();
									if (jQuery("#AllSquare").val() != "")			{
										jQuery("#AllSquare").css("border","2px solid green"); AllSq =jQuery("#AllSquare").text();

										if (jQuery("#ch19").attr("checked"))
										  {
											  if (jQuery("#Plintus").val() != "") 		  {	  jQuery("#Plintus").css("border","1px solid green"); Plin =jQuery("#Plintus").val(); CALC(); }
											  else  								  {   jQuery("#Plintus").css("border","1px solid red");}
										  }
										  else {Plin=0; CALC();}
									}
									else
									{
										if (jQuery("#ch19").attr("checked"))
										  {
											  if (jQuery("#Plintus").val() != "") 		  {	  jQuery("#Plintus").css("border","1px solid green"); Plin =jQuery("#Plintus").val(); CALC(); }
											  else  								  {   jQuery("#Plintus").css("border","1px solid red");}
										  }
										  else {jQuery("#AllSquare").css("border","2px solid red"); jQuery("#calc_head_Num").text("0");}

									}
                                    jQuery.scrollTo(0,3000);

								});
								
								function CALC()
								{
									var MyArr = new Array();
									var MyArr1 =  new Array();
									var Sqer = 0;
									var i=0;
									var ps=0;
									var ps1='';


									if (jQuery("#AllSquare").val() !="") {	Sqer = parseInt(jQuery("#AllSquare").val());}
									Res = Plin*parseInt(jQuery("#lh19 .ch_m2").text());
									Res1 = Plin*parseInt(jQuery("#lh19 .ch_m2").text());



									var parent1 = jQuery("input:checked").parent().parent();

									MyArr = parent1.children('.ch_m2').text().split(' ');



                                    MyArr1 = new Array(parent1.children('.ch_m1').text().split(":").join('\n'));

									while (MyArr[i]!=null)
										 {ps = ps+MyArr[i]/1;
                                         if (MyArr1[i] != undefined){
                                           alert(MyArr1[i]);
                                          ps1 = ps1+MyArr1[i];  }
                                          i=i+1;
                                         }

									if (jQuery("#ch19").attr("checked"))			{ps = ps - parseInt(jQuery("#lh19 .ch_m2").text());
                                        ps1 = ps1 + ' плинтуса - ' + Plin + '\n';
                                     }

									Res = Res + ps*Sqer;
									jQuery("#calc_head_Num").text(Res+' руб.');
                                    jQuery("textarea.jftextarea").val(ps1 + "Стоимость: " + Res.toString());
								}

					});