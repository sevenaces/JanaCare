<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile-->
	<meta name="viewport" content="width=device-width" />

	<title>Jana Care</title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="stylesheets/foundation.css">
	<link rel="stylesheet" href="stylesheets/app.css">
	<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:400,700' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->
	<script src="javascripts/jquery.min.js"></script>
	<script src="javascripts/modernizr.foundation.js"></script>
	<script src="javascripts/foundation.js"></script>
	<script src="javascripts/jquery.qtip.js"></script>
	<script src="javascripts/app.js"></script>

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript">
	
	function scroll(scrollToId){
		p = $("#" + scrollToId);
		scrollTo = p.position().top;
		$('html,body').animate({scrollTop: scrollTo}, 600);		
	}
	
	$(function(){
	$('.full').css('min-height', (window.screen.availHeight) + "px");
    $('.fadein img:gt(0)').hide();
    setInterval(function(){
      $('.fadein :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.fadein');},2000);
	});

     $(window).load(function() {
         $('#slideshow').orbit({ animation: 'fade',bullets: true,bulletThumbs: true});
     });
	 
	$(document).ready(function() {

	//Select all anchor tag with rel set to tooltip
	$('a[rel=tooltip]').mouseover(function(e) {
		
		//Grab the title attribute's value and assign it to a variable
		var tip = $(this).attr('title');	
		
		//Remove the title attribute's to avoid the native tooltip from the browser
		$(this).attr('title','');
		
		//Append the tooltip template and its value
		$(this).append('<div id="tooltip"><div class="tipHeader"></div><div class="tipBody">' + tip + '</div><div class="tipFooter"></div></div>');		
				
		//Show the tooltip with faceIn effect
		$('#tooltip').fadeIn('500');
		$('#tooltip').fadeTo('10',0.9);
		
	}).mousemove(function(e) {

		//Keep changing the X and Y axis for the tooltip, thus, the tooltip move along with the mouse
		$('#tooltip').css('top', e.pageY + 10 );
		$('#tooltip').css('left', e.pageX + 20 );
		
	}).mouseout(function() {

		//Put back the title attribute's value
		$(this).attr('title',$('.tipBody').html());

		//Remove the appended tooltip template
		$(this).children('div#tooltip').remove();
		
	});

	});
	</script>

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-24560794-1']);
      _gaq.push(['_trackPageview']);
      
      (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
	  
	  $('a[rel=tooltip]').mouseover(function() {
		alert('asd');
		});
    </script>
	
	<script type="text/javascript">
		var cur = 2;
		var max = 5;
		function slideSwitch() {
		
		$('.intro-bg').css("background", "url('./images/home/intro-bg-" + cur + ".jpg') no-repeat");
		++cur;
		if(cur ==5)
			cur = 1;
	}

	$(function() {
		setInterval( "slideSwitch()", 5000 );
	});
	
	</script>
</head>
<body>
</div>
	<a name="home" id="home"></a>
	<div class="container header hide-on-phones">
		<div class="row">
			<div class="four columns janacare-logo-home"><a href="#home" onclick="scroll('home');"><img src="./images/janacare-logo-home.png" /></a></div>
			<div class="eight columns navbar">
				<ul class="nav-bar">
					<li><a class="main" href="#contact" onclick="scroll('contact');" >Contact</a></li>
					<li><a class="main" href="#who" onclick="scroll('who');" >Who?</a></li>
					<li><a class="main" href="#how" onclick="scroll('how');" >How?</a></li>	
					<li><a class="main" href="#why" onclick="scroll('why');" >Why?</a></li>	
				</ul>
			</div>
		</div>
	</div>
	<div class="container show-on-phones header-mobile" id="nav-bar-mobile" data-role="header" data-position="fixed">
		<div class="row">
			<div class="twelve columns">
			<a href="#home" onclick="scroll('home');"><img src="./images/janacare-logo-home.png" /></a>
				<div class="nav-bar-mobile">
					<a class="main" href="#why" onclick="scroll('why');" >Why</a> | <a class="main" href="#how" onclick="scroll('how');" >Why</a> | <a class="main" href="#who" onclick="scroll('who');" >Who?</a> | <a class="main" href="#contact" onclick="scroll('contact');" >Contact</a>
				</div>
			</div>
		</div>
	</div>
	<a name="what" id="what"></a>
	<div class="container what full hide-on-phones">
		<div class="row centered">
			<div class="twelve columns intro-bg">
				<div class="on-what"><br /><br />
				<p class="what-highlight">We are simplifying diabetes</p>
				<p align="center">by combining frugal engineering with human-centered design around the most ubiquitous device out there </p>
				<p align="center" style="font-size: large"><strong>the mobile phone</strong></p>
				<hr />
				<p class="what-highlight">Stay Informed</p><br />
				<form class="nice" action="./index.php" method="post">
				<?php
				if(!isset($_POST['contact']))
				{
				?>
					<center><input type="text" class="medium nice input-text" placeholder="Enter Email" name="contact"/><input type="submit" class="nice small radius white button" value="Submit"/></center>
				<?php
				}
				else
				{
					$contact = "contact.txt";
					$fh = fopen($contact, 'a') or die();
					fwrite($fh, $_POST['contact'] . " \n");
					fclose($fh);
				?>
					<center>Thank you.<br />We would keep you updated.</center>
				<?php
				}
				?>
				
				</form>
			</div>
			</div>
		</div>
		<br />		
	</div>
	<div class="container what show-on-phones">
		<div class="row centered">
			<div class="twelve columns">
				<p class="what-highlight" style="color: #333;">We are democratizing medical diagnostics</p>
				<p align="center">by combining frugal engineering with human-centered design around the most ubiquitous device out there </p>
				<p align="center" style="font-size: large"><strong>the mobile phone</strong></p>
				<hr />
				<p class="what-highlight" style="color: #333;">Stay Informed</p><br />
				<form class="nice">
					<center><input type="text" class="medium nice input-text" placeholder="Enter Email/Twitter"/><input type="submit" class="nice small radius white button" value="Submit"/></center>
				</form>
			</div>
		</div>
	</div>
	<a name="why" id="why"></a>
	<div class="container why hide-on-phones full">
		<div class="row">
			<div class="page-name twelve columns"><p>why?</p></div>
		</div>
		<div class="row centered">
			<div class="four columns"><img src='./images/why-1.jpg' /></div>		
			<div class="four columns"><img src='./images/why-2.jpg' /></div>		
			<div class="four columns"><img src='./images/why-3.jpg' /></div>		
		</div>
	<div class="row">
		<div class="four columns right-border">
			<p class="why-highlight">Because we are facing a Diabetes Epidemic</p>
			<p>No longer a disease of the wealthy, Diabetes is the one of the leading causes of death around the developing world. In India alone, there are nearly 50 million diabetic patients, a number that is expected to rise to 80 million by 2030, according to the World Health Organization</p>
		</div>
		<div class="four columns right-border">
			<p class="why-highlight">Driven by unhealthy lifestyles & a general lack awareness</p>
			<p>General awareness about managing a healthy lifestyle is extremely low. Moreover, there is an acute shortage of diabetes educators, nutritionists and nurses to help patients learn about eating at the right time, making the right food choices and exercising properly.</p>
		</div>
		<div class="four columns margin-fix">
			<p class="why-highlight">that is hurting our wallets and crippling our economy</p>
			<p>Insulin injections, glucose monitors, strips, and lancets simply cost a
		  lot of money. The vast majority of patients cannot afford regular blood glucose
		  monitoring and evidence-based lifestyle coaching.</p>
		</div>
	</div>
	</div>
	<div class="container why show-on-phones">
		<div class="row">
			<div class="page-name twelve columns"><p>why?</p></div>
		</div>
		<div class="row centered">
			<div class="six columns"><img src='./images/why-1.jpg' /></div>		
			<div class="six columns">
			<p class="why-highlight">Because we are facing a Diabetes Epidemic</p>
			<p>No longer a disease of the wealthy, Diabetes is the one of the leading causes of death around the developing world. In India alone, there are nearly 50 million diabetic patients, a number that is expected to rise to 80 million by 2030, according to the World Health Organization</p>
			</div>
		</div>
		<div class="row centered">
			<div class="six columns"><img src='./images/why-2.jpg' /></div>		
			<div class="six columns">
			<p class="why-highlight">Driven by unhealthy lifestyles & a general lack awareness</p>
			<p>General awareness about managing a healthy lifestyle is extremely low. Moreover, there is an acute shortage of diabetes educators, nutritionists and nurses to help patients learn about eating at the right time, making the right food choices and exercising properly.</p>
			</div>
		</div>
		<div class="row centered">
			<div class="six columns"><img src='./images/why-3.jpg' /></div>		
			<div class="six columns">
			<p class="why-highlight">That is hurting our wallets and crippling our economy</p>
			<p>Insulin injections, glucose monitors, strips, and lancets simply cost a lot of money. 80% of patients today cannot afford to monitor their glucose regularly or get</p>
			</div>
		</div>
	</div>
	
	<a name="how" id="how"></a>
	<div class="container how full hide-on-phones">
		<div class="row">
			<div class="page-name twelve columns"><p>how?</p></div>
		</div>
		
		<div class="row centered">
			<div class="four columns"><img src="./images/how-1.jpg"></div>
			<div class="four columns"><img src="./images/how-2.jpg"></div>
			<div class="four columns"><img src="./images/how-3.jpg"></div>
		</div>
		<div class="row centered">
			<div class="four columns"><p class="howp">We will combine the computing power of mobile phones.</p></div>
			<div class="four columns"><p class="howp">with our small and beautiful sensor platform</p></div>
			<div class="four columns"><p class="howp">To make diabetes management cheaper, simpler and significantly better</p></div>
		</div>
		<div class="row centered">
			<div class="twelve columns">
			<p class="how-highlight">We envision a world where your mobile phone becomes your personal vital signs monitor, your personal lifestyle coach, your personal health record and finally your personal gateway to your doctor</p>
			</div>
		</div>
	</div><div class="container how show-on-phones">
		<div class="row">
			<div class="page-name twelve columns"><p>how?</p></div>
		</div>
		<p class="how-highlight">We envision a world where your mobile phone becomes your personal vital signs monitor, your personal lifestyle coach, your personal health record and finally your personal gateway to your doctor</p>
		<div class="row centered">
			<div class="four columns"><img src="./images/how-1.jpg"><p class="howp">We will combine the computing power of mobile phones.</p></div>
			<div class="four columns"><img src="./images/how-2.jpg"><p class="howp">with our small and beautiful sensor platform</p></div>
			<div class="four columns"><img src="./images/how-3.jpg"><p class="howp">To make diabetes management cheaper, simpler and significantly better</p></div>
		</div>
		<div class="row centered">
			<div class="twelve columns">
			
			</div>
		</div>
	</div>
	
	<a name="who" id="who"></a>
	<div class="container who full">
		<div class="row">
			<div class="page-name twelve columns"><p>who?</p></div>
		</div>
		<div class="row">
			<div class="three columns"><p style="font-family:'Cabin Condensed', sans-serif;font-size:30px;color:red;"><br />Meet the team</p></div>
			<div class="nine columns"><p class="who-highlight">We are leveraging our experience in the emerging markets, medical device design and mobile technology to bring revolutionary products and services into the lives of patients.</p></div>
		</div>
		<div class="row">
			<a rel="tooltip" title="Sidhant really cares about making medical technology affordable, simple and available to the masses. He was previously a senior engineer at Medtronic and recently graduated from the Harvard Business School.">
			<div class="three columns">
			<img src="./images/sidhant_headshot.png">
			<p class='who-name'>Sidhant Jena</p>
			<p class="who-desig">Co-Founder & CEO</p>
			</div>
			</a>
			<a rel="tooltip" title="Michal's passion is to develop technology to solve large-scale health problems. Previously, he was a researcher at MIT's Computer Science and Artificial Intelligence Lab.">			
			<div class="three columns">
			<img src="./images/michal_headshot.png">
			<p class='who-name'>Michal Depa</p>
			<p class="who-desig">Co-Founder & CTO</p>
			</div>
			</a>
			<a rel="tooltip" title="Professor Tarun Khanna is the Jorge Paulo Lemann Professor at the Harvard Business School, where he has studied and worked with multinational and indigenous companies and investors in emerging markets worldwide.">			
			<div class="three columns">
			<img src="./images/tarun_headshot.jpg">
			<p class='who-name'>Prof. Tarun Khanna</p>
			<p class="who-desig">Advisor</p>
			</div>
			</a>
			<a rel="tooltip" title="Dr. Devi Shetty is a cardiac surgeon who pioneered low cost cardiac surgery for India's poor population and is fast expanding his hospital chain that will transform the way health care is delivered and accessed in India and other developing countries.">
			<div class="three columns">
			<img src="./images/devi_headshot.jpg">
			<p class='who-name'>Dr. Devi Shetty</p>
			<p class="who-desig">Advisor</p>
			</div>
			</a>
		</div>
	</div>
	
	<a name="contact" id="contact"></a>
	<div class="container contact">
		<br />
		<div class="row centered">
			<div class="four columns"><h3>Clinical Partners</h3>
			<p><a href="http://www.narayanahospitals.com/" target="_blank">Narayana Hrudayalaya Hospitals</a><br />
			<a href="http://www.aiims.edu/" target="_blank">All India Institute of Medical Sciences</a></p>
			</div>
			
			<div class="four columns"><h3>Say Hi!</h3>
			<p><a href="mailto:contact@janacare.com">contact@janacare.com</a>
			</p>
			</div>
			
			<div class="four columns"><h3><a href="http://g.co/maps/5ukd4" target="_blank"><img src="./images/Google-Maps-icon.png"></a>Drop in</h3><p><b>Technology Business Incubator</b><br />Narayana Hrudayalaya Health City<br/>Bangalore, India</p></div>
		</div>
	</div>
</body>
</html>
