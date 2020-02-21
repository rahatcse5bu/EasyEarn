<?php

include "config.php";
$sqlForTotalQuiz="SELECT SUM(quizCount) AS x FROM user";
$resultForTotalQuiz=$con->query($sqlForTotalQuiz);
if($resultForTotalQuiz){
while($row_t_qz=mysqli_fetch_assoc($resultForTotalQuiz)){
	echo $row_t_qz['x'];
	
}
}
?>