<!DOCTYPE>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>FOR Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>FOR Quiz Grade</h1>
		
        <?php
            if ( isset($_POST['question-1-answers']) and isset($_POST['question-2-answers']) and  isset($_POST['question-3-answers']) and isset($_POST['question-4-answers']) and isset($_POST['question-5-answers'])  )
             {
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
             $Grade = 0;
            
            if ($answer1 == "D") { $Grade++; }
            if ($answer2 == "D") { $Grade++; }
            if ($answer3 == "C") { $Grade++; }
            if ($answer4 == "B") { $Grade++; }
            if ($answer5 == "A") { $Grade++; }
            
            echo "<div id='results'>$Grade / 5 correct</div>";
            if ($Grade == 5) {echo "<div id='results1'>Very Good!</div>";}
            if ($Grade == 4) {echo "<div id='results1'>Quite Good!</div>";}
            if ($Grade == 3) {echo "<div id='results1'>Just Fine!</div>";}
            if ($Grade == 2) {echo "<div id='results1'>Not Good enough!</div>";}
            if ($Grade == 1) {echo "<div id='results1'>Not Good at all!</div>";}
            if ($Grade == 0) {echo "<div id='results1'>Do you even read?</div>";}
        
            }
          else
          {
            echo "A question remains unasnwered<br>";
            echo "<a href='FOR_index.php'>Click here</a> to go back!";
          }
          
           
           

        ?>
	
	</div>
	
	<script type="text/javascript">
	document.write(unescape("%3Cscript src='" + Host + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
</body>

</html>