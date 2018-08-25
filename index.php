<!DOCTYPE html>
<html>
<head>
	<title>Shahad Mahmud</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="/portfolio/css/style.css">
	<script src="/portfolio/js/jquery-2.1.4.min.js"></script>
	<script src="/portfolio/js/skill.bars.jquery.js"></script>
</head>
<body>

<script>
function myFunction() {
    var testDiv = document.getElementById("test");
    document.getElementById("demo").innerHTML = testDiv.offsetTop;
}
</script>
	<div class="progress-container">
    	<div class="progress-bar" id="myBar"></div>
  	</div>

	<div id="about">
		
		<div id="left_split">
			<img src="/portfolio/res/round.png" > <br>
			
		</div>

		<div id="right_split">
			<div id="text">
				<h1>Shahad Mahmud</h1>
				<p id="ruet">Rajshahi University of Engineering & Technology<br>
				Web and Android applications Developer</p>
			</div>

		</div>
	</div>


	<div class="edu">
		<div class="text">
			<div style="font-size: 65px; text-align: center; margin: 30px 0; font-variant: small-caps; font-weight: bold;">
				Education	
			</div>

			<div class="timeline" style="text-align: justify;">
				<div class="container left">
					<div class="content">
						<h2 style="color: #263429;">2010</h2>
						<h3 style="font-variant: small-caps;color: #8E2607; margin: 14px 0;">Junior School Certificate (JSC)</h3>
						<p style="color: #000; font-variant: small-caps;">I attened JSC examination from <font style="font-weight: bold;">Dinajpur Zilla School</font> under <font style="font-weight: bold;">Dinajpur Eduction Board</font> and passed with a result of <font style="font-weight: bold;">GPA 5.00</font> in all the subjects.</p>
					</div>
				</div>

				<div class="container right">
					<div class="content">
						<h2 style="color: #263429">2013</h2>
						<h3 style="font-variant: small-caps;color: #8E2607;  margin: 14px 0;">Secondary School Certificate (SSC)</h3>
						<p style="color: #000; font-variant: small-caps;">I attened SSC examination from <font style="font-weight: bold;">Dinajpur Zilla School</font> under <font style="font-weight: bold;">Dinajpur Eduction Board</font> and passed with a result of <font style="font-weight: bold;">GPA 5.00</font> in all the subjects.</p>
					</div>
				</div>

				<div class="container left">
					<div class="content">
						<h2 style="color: #263429">2015</h2>
						<h3 style="font-variant: small-caps;color: #8E2607;  margin: 14px 0;">Higher Secondary Certificate (HSC)</h3>
						<p style="color: #000; font-variant: small-caps;">I attened HSC examination from <font style="font-weight: bold;">Dinajpur Government College</font> under <font style="font-weight: bold;">Dinajpur Eduction Board</font> and passed with a result of <font style="font-weight: bold;">GPA 5.00</font> in all the subjects.</p>
					</div>
				</div>

				<div class="container right">
					<div class="content">
						<h2 style="color: #263429">Current</h2>
						<h3 style="font-variant: small-caps;color: #8E2607;  margin: 14px 0;">Bachelor of Engineering (BE)</h3>
						<p style="color: #000; font-variant: small-caps;">At present, I study at <font style="font-weight: bold;">Rajshahi University of Engineering and Technology</font> in the department of <font style="font-weight: bold;">Computer Science and Engineering</font>. It is expected that I'll complete my graduation within January of 2020.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="skill" id="skill">

		<div style="font-size: 65px; text-align: center; margin: 30px 0; font-variant: small-caps; font-weight: bold;">
			Skills	
		</div>
		<link rel="stylesheet" type="text/css" href="/portfolio/css/barstyle.css">

		<div class="wrapper">
		    <div class="skillbar" data-percent="90">
		      <span class="skillbar-title" style="background: #d35400;">HTML5</span>
		      <p class="skillbar-bar" style="background: #e67e22;"></p>
		      <span class="skill-bar-percent"></span>
		    </div>
		    <!-- End Skill Bar -->
		    
		    <div class="skillbar" data-percent="60">
		      <span class="skillbar-title" style="background: #2980b9;">CSS3</span>
		      <p class="skillbar-bar" style="background: #3498db;"></p>
		      <span class="skill-bar-percent"></span>
		    </div>
		    <!-- End Skill Bar -->
		    
		    <div class="skillbar" data-percent="35">
		      <span class="skillbar-title" style="background: #9F8F28;">Javascript</span>
		      <p class="skillbar-bar" style="background: #D3BE35;"></p>
		      <span class="skill-bar-percent"></span>
		    </div>
		    <!-- End Skill Bar -->
		    
		    <div class="skillbar" data-percent="80">
		      <span class="skillbar-title" style="background: #46465e;">PHP</span>
		      <p class="skillbar-bar" style="background: #5a68a5;"></p>
		      <span class="skill-bar-percent"></span>
		    </div>
		    <!-- End Skill Bar -->

		    <div class="skillbar" data-percent="75">
		      <span class="skillbar-title" style="background: #87A953;">PL/SQL</span>
		      <p class="skillbar-bar" style="background: #AFDA6C;"></p>
		      <span class="skill-bar-percent"></span>
		    </div>
		    <!-- End Skill Bar -->
		</div>
		
	</div>

</body>
<script>
	// When the user scrolls the page, execute myFunction 
	window.onscroll = function() {
		myFunction()
	};

	function myFunction() {
		var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
		var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
		var scrolled = (winScroll / height) * 100;
		document.getElementById("myBar").style.height = scrolled + "%";
	}

	//the great (!!!) skill bar triger
	var triggered = false;
	window.onscroll = function() { IsInView()	};

	function IsInView(){
		var skillDiv = document.getElementById("skill");
		var skillDivHeight = skillDiv.offsetTop; //div's top offset
		var top_position = document.documentElement.scrollTop; //Document offset on the top viewport
		var window_heigth = window.innerHeight;
		var animation_tigger = skillDivHeight - (window_heigth/1.2);
		

		if(top_position >= animation_tigger && !triggered)
		{
			$('.skillbar').skillBars({
				from: 0,
				speed: 3000, 
				interval: 100,
				decimals: 0,
			});

			triggered = true;
		}

		//console.log(animation_tigger);
	}
</script>
</html>