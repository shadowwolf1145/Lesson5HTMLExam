<html>
	<head>
		<title>Rucker's</title>
		<style>
		input[type="number"]
		{
		  width: 100px;
		}

		input + span
		{
		  padding-right: 30px;
		}

		input:invalid+span:after
		{
		  position: absolute;
		  content: '✖';
		  padding-left: 5px;
		}

		input:valid+span:after
		{
		  position: absolute;
		  content: '✓';
		  padding-left: 5px;
		}
		</style>
	</head>
	<body>
		<h1 style="text-align:center;color: red;font-family:Arial;"> Rucker's </h1>
		<h2 style="text-align:center;"><i>The best steak in Scottsdale!</i></h2>
		
			<p style="text-align:center;">
			555 Mountainview Ave.
			Scottsdale, AZ 85260
			(602) 789-5672 </br>
			</br>
			Welcome to Rucker’s, which has been voted Best Steakhouse in Scottsdale four years running!</br>
			At Rucker’s you can enjoy a quality steak, amazing wine, and a quiet atmosphere in a mountain-themed restaurant.</br>
			Rucker’s has been a tradition in Scottsdale since 1975 and is an amazing place to dine.
			<p>
		<div style="width: 300px; margin: 0 auto;">
			
			<input id="date" type="date" value="2020-08-18"   onchange="UpdateTime(this.value)">
			<input id="time" type="time" min="11:00" max="22:00">
			<span class="validity"></span>
			<script>
				function UpdateTime(newVal)
				{
					var Time = document.getElementById("time");
          var newDate = (new Date(newVal))
          var CorrectDate = (newDate.getFullYear().toString()+"-0"+(newDate.getMonth()+1).toString()+"-"+newDate.getDate().toString())
          var WeekDay = (new Date(CorrectDate).getDay())
		  alert(WeekDay)
          //for some reason it wont return the correct day of the week
					
          if (WeekDay == 0)
					{
						Time.min = "12:00";
						Time.max = "20:00";
					}
					else
					{
						Time.min = "11:00";
						Time.max = "22:00";
					}
				}
			</script>
			
		</div>
	</body>
</html>