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
            echo "<script>document.getElementById('Q1').style = 'background-color: lightgreen'; </script>";
        } else {
            echo "<script>document.getElementById('Q1').style = 'background-color: salmon';</script>";
        }
        if($q2 == "d") {
            $result++;
            echo "<script>document.getElementById('Q2').style = 'background-color: lightgreen';</script>";
        } else {
            echo "<script>document.getElementById('Q2').style = 'background-color: salmon';</script>";
        }
        if($q3 == "c") {
            $result++;
            echo "<script>document.getElementById('Q3').style = 'background-color: lightgreen'; </script>";
        } else {
            echo "<script>document.getElementById('Q3').style = 'background-color: salmon'; </script>";
        }
        echo "<h3> You got $result/3 <h3>";
        if($result != 3) {
            echo "<p> Try again <p>";
        } else {
            echo "<script>recordQuizComplete()</script>";
            echo "<div id='win'>
					<p>Congratulations, you passed and recieved the final scrap of paper! Together, the papers combine to become a certificate with
                    your name on it.</p>
					<a href='certificate.php'><div id='get_cert'> Click here to get your certificate!</div></a>
                    </div> "; 
            }
        }
    }
?>