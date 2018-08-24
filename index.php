<!DOCTYPE html>
<html>
<head>
	<title>Shahad Mahmud</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="/portfolio/css/style.css">
</head>
<body>
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
			<div style="font-size: 65px; text-align: center; margin: 20px; margin-top: 30px; font-variant: small-caps; font-weight: bold;">
				Education	
			</div>

			<div class="timeline" style="text-align: justify;">
				<div class="container left">
					<div class="content">
						<h2 style="color: #263429">2010</h2>
						<h3 style="font-variant: small-caps;color: #8E2607;">Junior School Certificate (JSC)</h3>
						<p style="color: #000; font-variant: small-caps;">I attened JSC examination from <font style="font-weight: bold;">Dinajpur Zilla School</font> under <font style="font-weight: bold;">Dinajpur Eduction Board</font> and passed with a result of <font style="font-weight: bold;">GPA 5.00</font> in all the subjects.</p>
					</div>
				</div>

				<div class="container right">
					<div class="content">
						<h2 style="color: #263429">2013</h2>
						<h3 style="font-variant: small-caps;color: #8E2607;">Secondary School Certificate (SSC)</h3>
						<p style="color: #000; font-variant: small-caps;">I attened SSC examination from <font style="font-weight: bold;">Dinajpur Zilla School</font> under <font style="font-weight: bold;">Dinajpur Eduction Board</font> and passed with a result of <font style="font-weight: bold;">GPA 5.00</font> in all the subjects.</p>
					</div>
				</div>

				<div class="container left">
					<div class="content">
						<h2 style="color: #263429">2015</h2>
						<h3 style="font-variant: small-caps;color: #8E2607;">Higher Secondary Certificate (HSC)</h3>
						<p style="color: #000; font-variant: small-caps;">I attened HSC examination from <font style="font-weight: bold;">Dinajpur Government College</font> under <font style="font-weight: bold;">Dinajpur Eduction Board</font> and passed with a result of <font style="font-weight: bold;">GPA 5.00</font> in all the subjects.</p>
					</div>
				</div>

				<div class="container right">
					<div class="content">
						<h2 style="color: #263429">Current</h2>
						<h3 style="font-variant: small-caps;color: #8E2607;">Bachelor of Engineering (BE)</h3>
						<p style="color: #000; font-variant: small-caps;">At present, I study at <font style="font-weight: bold;">Rajshahi University of Engineering and Technology</font> in the department of <font style="font-weight: bold;">Computer Science and Engineering</font>. It is expected that I'll complete my graduation within January of 2020.</p>
					</div>
				</div>
			</div>
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
</script>
</html>