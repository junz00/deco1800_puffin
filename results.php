<?php
    if($_POST["submit"]) {
        $q1 = $_POST["q1"];
	    $q2 = $_POST["q2"];
	    $q3 = $_POST["q3"];
    
    if($q1=="" || $q2 =="" || $q3 =="") {
		echo "<h2>Please answer all the questions</h2>";
	} else {
        $result = 0;
        if($q1 == "a") {
            $result++;
            echo "<script>document.getElementById('Q1').style = 'background-color: green'; </script>";
        } else {
            echo "<script>document.getElementById('Q1').style = 'background-color: red';</script>";
        }
        if($q2 == "b") {
            $result++;
            echo "<script>document.getElementById('Q2').style = 'background-color: green';</script>";
        } else {
            echo "<script>document.getElementById('Q2').style = 'background-color: red';</script>";
        }
        if($q3 == "c") {
            $result++;
            echo "<script>document.getElementById('Q3').style = 'background-color: green'; </script>";
        } else {
            echo "<script>document.getElementById('Q3').style = 'background-color: red'; </script>";
        }
        echo "<h3> You got $result/3 <h3>";
        if($result != 3) {
            echo "<p> Try again <p>";
        } else {
            echo "<script>recordQuizComplete()</script>";
            echo "<div id='win'>
					<p>Congratualtions! You Passed</p>
					<a href='certificate.php'><div id='get_cert'> Click here to get your certificate!</div></a>
                    </div>"; 
            }
        }
    }
?>