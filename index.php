<html>

	<head>

		<title>Parenting Nuggets</title>

		<style type="text/css">

			body {
				padding: 0;
				margin: 0;
				/*overflow: hidden; */
			}
			.clear {
				clear: both;
			}
			.btn {
				cursor: pointer;
			}
			#app_wrapper {
				position: relative;
				width: 810px;
				height: 2271px;
				background-image: url('img/bg.jpg');
			}
			#quote_count {
				color: #f70070;
				font-family: sans-serif;
				font-weight: bold;
				position: absolute;
				top: 360px;
				left: 540px;
			}
			.quotes {
				width: 404px;
				height: 404px;
				position: absolute;
				background-color: rgba(0,200,250,0.3);
				top: 395px;
				left: 200px;
				border: 1px solid #AAA;
				-webkit-border-radius: 15px;
				-moz-border-radius: 15px;
				border-radius: 15px;
			}
			#prev_quote {
				position: absolute;
				width: 35px;
				height: 35px;
				top: 555px;
				left: 110px;
			}
			#next_quote {
				position: absolute;
				width: 35px;
				height: 35px;
				top: 560px;
				left: 667px;
			}
			#comments {
				width: 650px;
				height: 200px;
				background-color: rgba(0, 200, 250, 0.3);
				position: absolute;
				top: 820px;
				left: 80px;
			}
			#poll {
				width: 470px;
				height: 275px;
				position: absolute;
				top: 1075px;
				left: 153px;
			}
			#poll #q {
				font-family: sans-serif;
				font-weight: bold;
				font-size: 18px;
				margin: 15px 0 0 15px;
			}
			#poll #sub {
				font-family: sans-serif;
				font-size: 14px;
				margin-left: 15px;
				margin-top: 5px;
				font-weight: bold;
				color: #555;
			}
			#poll #poll_img {
				position: absolute;
				width: 200px;
				height: 160px;
				top: 75px;
				left: 240px;
				border: 2px solid #f70070;
				background-color: rgba(0,200,250,0.3);
			}
			#poll ul {
				list-style: none;
				margin: 0;
				padding: 0;
				margin: 15px;
			}
			#poll ul li {
				margin-bottom: 7px;
				color: #555;
				width: 220px;
			}
			#poll ul li .amount {
				float: right;
				color: #f70070;
			}
			#poll #vote {
				position: absolute;
				background-color: #12acf2;
				padding: 5px 10px;
				color: #FFF;
				font-family: sans-serif;
				text-transform: uppercase;
				-webkit-border-radius: 20px;
				-moz-border-radius: 20px;
				border-radius: 20px;
				font-size: 13px;
				border: 4px solid #12acf2;
				left: 20px;
				top: 235px;
				z-index: 10;
			}
			#poll #vote:after {
				content: '';
				width: 100%;
				height: 100%;
				background-color: #12acf2;
				z-index: -5;
				position: absolute;
				top: -2px;
				left: -2px;
				-webkit-border-radius: 20px;
				-moz-border-radius: 20px;
				border-radius: 20px;
				border: 2px solid #FFF;
			}
			#results {
				position: absolute;
				top: 247px;
				left: 90px;
				font-family: sans-serif;
				font-size: 13px;
				color: #12acf2;
			}
			#quiz {
				position: absolute;
				width: 470px;
				height: 330px;
				top: 1410px;
				left: 155px;
			}
			#quiz #q {
				font-family: sans-serif;
				font-size: 18px;
				font-weight: bold;
				margin: 15px 0 0 15px;
			}
			#quiz #sub {
				font-family: sans-serif;
				font-size: 14px;
				margin: 15px;
				margin-top: 5px;
				font-weight: bold;
				color: #555;
			}
			#quiz #quiz_img {
				width: 200px;
				height: 160px;
				top: 60px;
				left: 250px;
				border: 2px solid #f70070;
				background-color: rgba(0, 200, 250, 0.3);
				float: right;
				margin: 0 15px;
			}
			#quiz #quiz_count {
				position: absolute;
				color: #f70070;
				font-family: sans-serif;
				font-weight: bold;
				top: 20px;
				right: 20px;
			}
			#quiz #quiz_q {
				color: #f70070;
				font-family: sans-serif;
				font-weight: bold;
				margin-left: 15px;
				width: 230px;
			}
			#quiz ul {
				list-style: none;
				margin: 0;
				padding: 0;
				margin: 15px;
				margin-top: 0;
			}
			#quiz ul li {
				margin-bottom: 7px;
				color: #555;
				font-size: 14px;
				max-width: 380px;
			}
			#quiz #next_q {
				width: 32px;
				height: 32px;
				background-color: rgba(0, 200, 250, 0.3);
				position: absolute;
				top: 270px;
				left: 420px;
			}
			#quiz #prev_q {
				width: 32px;
				height: 32px;
				background-color: rgba(0, 200, 250, 0.3);
				position: absolute;
				top: 270px;
				left: 380px;
			}
			#enter {
				width: 380px;
				height: 170px;
				position: absolute;
				top: 1860px;
				left: 200px;
			}
			#enter #month {
				position: absolute;
				top: 90px;
				left: 70px;
				width: 60px;
			}
			#enter #day {
				position: absolute;
				top: 90px;
				left: 140px;
				width: 60px;
			}
			#enter #year {
				position: absolute;
				top: 90px;
				left: 210px;
				width: 80px;
			}
			#enter #email {
				border: none;
				outline: none !important;
				position: absolute;
				font-size: 16px;
				top: 128px;
				left: 70px;
				width: 186px;
			}
			#signup {
				width: 100px;
				height: 30px;
				position: absolute;
				top: 125px;
				left: 260px;
			}

		</style>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="js/date.js"></script>
		
		<script src="js/quotes.js"></script>
		<script src="js/poll.js"></script>
		<script src="js/quiz.js"></script>
		<script src="js/enter.js"></script>
		
		<script type="text/javascript">
			var _gaq = _gaq || [];
  			_gaq.push(['_setAccount', 'UA-26400721-1']);
  			_gaq.push(['_trackPageview']);

  			(function() {
    			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  		})();
		</script>

	</head>

	<body>
	
		<!--INTIALIZE FB SDK-->
		<div id="fb-root"></div>
		<script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '409828155747904', //app id
		      channelURL : 'https://fbdev.me/channel.php', //channel file
		      status     : true, //check login status
		      cookie     : true, //enable cookies to allow the server to access the session
		      oauth      : true, //enable OAuth 2.0
		      xfbml      : true  //parse XFBML
		    });
		
		    //set canvas size
			FB.Canvas.setAutoGrow();
			
		  };
		
		  //load SDK asynchronously
		  (function(d){
		     var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
		     js = d.createElement('script'); js.id = id; js.async = true;
		     js.src = "//connect.facebook.net/en_US/all.js";
		     d.getElementsByTagName('head')[0].appendChild(js);
		   }(document));
		</script>


		<div id="app_wrapper">
			
			<div id="quote_count">1 of 10</div>
			<div id="quote_container"></div>
			<div class="btn" id="prev_quote"></div>
			<div class="btn" id="next_quote"></div>
			
			<div id="comments"></div>
			
			<div id="poll">
				<div id="q">Where do you get parenting advice?</div>
				<div id="sub">Where do you turn when you need a pearl of parenting wisdom?</div>
				<img src="" id="poll_img" />
				<ul>
					<li>
						<input type="radio" name="poll" id="p_1" rel="1" />
						<label for="p_1">Parenting Websites</label>
					</li>
					<li>
						<input type="radio" name="poll" id="p_2" rel="2" />
						<label for="p_2">Your Parents</label>
					</li>
					<li>
						<input type="radio" name="poll" id="p_3" rel="3" />
						<label for="p_3">Your Mommy Friends</label>
					</li>
					<li>
						<input type="radio" name="poll" id="p_4" rel="4" />
						<label for="p_4">Parenting Magazines</label>
					</li>
					<li>
						<input type="radio" name="poll" id="p_5" rel="5" />
						<label for="p_5">Your Pediatritian</label>
					</li>
					<li>
						<input type="radio" name="poll" id="p_6" rel="6" />
						<label for="p_6">Parenting Books</label>
					</li>
				</ul>
				<div class="btn" id="vote">vote</div>
				<div class="btn" id="results">view results</div>
			</div>
			
			<div id="quiz">
				<div id="q">What kind of school mom are you?</div>
				<div id="sub">Take this quiz and find out!</div>
				<div id="quiz_count">1 of 6</div>
				<img src="" id="quiz_img" />
				<div id="quiz_q">Question 1: It's time to leave for school. You:</div>
				<ul>
					<li>
						<input type="radio" name="quiz" id="q_1" rel="0" />
						<label for="q_1">This is an answer</label>
					</li>
					<li>
						<input type="radio" name="quiz" id="q_2" rel="1" />
						<label for="q_2">This is an answer</label>
					</li>
					<li>
						<input type="radio" name="quiz" id="q_3" rel="2" />
						<label for="q_3">This is an answer</label>
					</li>
					<li>
						<input type="radio" name="quiz" id="q_4" rel="3" />
						<label for="q_4">This is an answer</label>
					</li>
				</ul>
				<!-- <div class="btn" id="prev_q"></div> -->
				<div class="btn" id="next_q"></div>
			</div>
			
			<div id="enter">
				<select name="month" id="month"></select>
				<select name="day" id="day"></select>
				<select name="year" id="year"></select>
				<input type="text" id="email" />
				<div class="btn" id="signup"></div>
			</div>
			
		</div>
		
		<div id="terms-bottom" style="position: relative; width: 500px; padding-top: 10px; margin: 0 auto; clear: both; font-family: Arial; color: #333; font-size: 11px; text-align: center;">
			This promotion is in no way sponsored, endorsed or administered by, or associated with Facebook. You are providing your information to Tyson Foods and not to Facebook.
		</div>

	</body>

</html>