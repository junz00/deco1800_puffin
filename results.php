<?php
    if($_POST["submit"]) {
        $q1 = $_POST["q1"];
	    $q2 = $_POST["q2"];
	    $q3 = $_POST["q3"];
    }
    if($q1=="" || $q2 =="" || $q3 =="") {
		echo "<h2>Please answer all the questions</h2>";
	} else {
        $result = 0;
        if($q1 == "a") {
            $result++;
        }
        if($q2 == "b") {
            $result++;
        }
        if($q3 == "c") {
            $result++;
        }
        echo "<h3> You got $result/3 <h3>";
        }
?>