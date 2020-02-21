<?php
//header('Content-Type: text/html; charset=utf8_bin');
include "config.php";
include "GetQuizID.php";
mysqli_set_charset($con,'utf8');
ini_set('default_charset', 'utf-8');
$id=$num_quiz+1;
//$id=$_SESSION['id'];
$sqlForAdminControl="SELECT * FROM quiz WHERE id='$id'";
$resultForAdminControl=$con->query($sqlForAdminControl);
if($resultForAdminControl){
	
if($row = mysqli_num_rows($resultForAdminControl)){
	$r=mysqli_fetch_assoc($resultForAdminControl);
		$des=$r['description'];
		$quiz1=$r['quiz1'];
		$ans1=$r['ans1'];
		$quiz2=$r['quiz2'];
		$ans2=$r['ans2'];
		
	    $t1=explode(',',$r['t1']);
		$t2=explode(',',$r['t2']);
}

else{

$des=" No quiz..........";
		$quiz1="No Quiz ......";
		$ans1="";
		$quiz2="No Quiz......";
		$ans2="";
		
	    $t1=array("","","");
		$t2=array("","","");
//echo '<p class="text-primary" align="center">'."No Refer  data Yet !!!".'</p>';
      
}
}
else {
	//echo "error occured";
}
	
	
	
      ?>
	  
	  
	  
	  
<?php
/*
$quizes1=array("'<option>Select Correct Ans </option>
            <option value='.$t1[0].'>'.$t1[0].'</option>
			<option value='.$t1[1].'>'.$t1[1].'</option>
			<option value='.$ans1.'>'.$ans1.'</option>
			<option value='.$t1[2].'>'.$t1[2].'</option>",
			 '<option>Select Correct Ans </option>
            <option value="<?php  include "GetQuiz.php"; echo $t1[0];  ?>"><?php  include "GetQuiz.php"; echo $t1[0];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t1[2];  ?>"><?php  include "GetQuiz.php"; echo $t1[2];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $ans1;  ?>"><?php  include "GetQuiz.php"; echo $ans1;  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t1[1];  ?>"><?php  include "GetQuiz.php"; echo $t1[1];  ?></option>',
			'<option>Select Correct Ans </option>
            <option value="<?php  include "GetQuiz.php"; echo $t1[0];  ?>"><?php  include "GetQuiz.php"; echo $t1[0];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t1[1];  ?>"><?php  include "GetQuiz.php"; echo $t1[1];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t1[2];  ?>"><?php  include "GetQuiz.php"; echo $t1[2];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $ans1;  ?>"><?php  include "GetQuiz.php"; echo $ans1;  ?></option>',
			'<option>Select Correct Ans </option>
            <option value="<?php  include "GetQuiz.php"; echo $t1[2];  ?>"><?php  include "GetQuiz.php"; echo $t1[2];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t1[1];  ?>"><?php  include "GetQuiz.php"; echo $t1[1];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $ans1;  ?>"><?php  include "GetQuiz.php"; echo $ans1;  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t1[0];  ?>"><?php  include "GetQuiz.php"; echo $t1[0];  ?></option>',
			'<option>Select Correct Ans </option>
            <option value="<?php  include "GetQuiz.php"; echo $ans1;  ?>"><?php  include "GetQuiz.php"; echo $ans1;  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t1[2];  ?>"><?php  include "GetQuiz.php"; echo $t1[2];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t1[0];  ?>"><?php  include "GetQuiz.php"; echo $t1[0];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t1[1];  ?>"><?php  include "GetQuiz.php"; echo $t1[1];  ?></option>',
			'<option>Select Correct Ans </option>
            <option value="<?php  include "GetQuiz.php"; echo $t1[0];  ?>"><?php  include "GetQuiz.php"; echo $t1[0];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $ans1;  ?>"><?php  include "GetQuiz.php"; echo $ans1;  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t1[2];  ?>"><?php  include "GetQuiz.php"; echo $t1[2];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t1[1];  ?>"><?php  include "GetQuiz.php"; echo $t1[1];  ?></option>'
			
			);
			
$quizes2=array('<option>Select Correct Ans </option>
            <option value="<?php  include "GetQuiz.php"; echo $t2[0];  ?>"><?php  include "GetQuiz.php"; echo $t2[0];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t2[1];  ?>"><?php  include "GetQuiz.php"; echo $t2[1];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $ans2;  ?>"><?php  include "GetQuiz.php"; echo $ans2;  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t2[2];  ?>"><?php  include "GetQuiz.php"; echo $t2[2];  ?></option>',
			 '<option>Select Correct Ans </option>
            <option value="<?php  include "GetQuiz.php"; echo $t2[0];  ?>"><?php  include "GetQuiz.php"; echo $t2[0];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t2[2];  ?>"><?php  include "GetQuiz.php"; echo $t2[2];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $ans2;  ?>"><?php  include "GetQuiz.php"; echo $ans2;  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t2[1];  ?>"><?php  include "GetQuiz.php"; echo $t2[1];  ?></option>',
			'<option>Select Correct Ans </option>
            <option value="<?php  include "GetQuiz.php"; echo $t2[0];  ?>"><?php  include "GetQuiz.php"; echo $t2[0];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t2[1];  ?>"><?php  include "GetQuiz.php"; echo $t2[1];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t2[2];  ?>"><?php  include "GetQuiz.php"; echo $t2[2];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $ans2;  ?>"><?php  include "GetQuiz.php"; echo $ans2;  ?></option>',
			'<option>Select Correct Ans </option>
            <option value="<?php  include "GetQuiz.php"; echo $t2[2];  ?>"><?php  include "GetQuiz.php"; echo $t2[2];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t2[1];  ?>"><?php  include "GetQuiz.php"; echo $t2[1];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $ans2;  ?>"><?php  include "GetQuiz.php"; echo $ans2;  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t2[0];  ?>"><?php  include "GetQuiz.php"; echo $t2[0];  ?></option>',
			'<option>Select Correct Ans </option>
            <option value="<?php  include "GetQuiz.php"; echo $ans2;  ?>"><?php  include "GetQuiz.php"; echo $ans2;  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t2[2];  ?>"><?php  include "GetQuiz.php"; echo $t2[2];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t2[0];  ?>"><?php  include "GetQuiz.php"; echo $t2[0];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t2[1];  ?>"><?php  include "GetQuiz.php"; echo $t2[1];  ?></option>',
			'<option>Select Correct Ans </option>
            <option value="<?php  include "GetQuiz.php"; echo $t2[0];  ?>"><?php  include "GetQuiz.php"; echo $t2[0];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $ans2;  ?>"><?php  include "GetQuiz.php"; echo $ans2;  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t2[2];  ?>"><?php  include "GetQuiz.php"; echo $t2[2];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t2[1];  ?>"><?php  include "GetQuiz.php"; echo $t2[1];  ?></option>'
			
			);
			
			
			$_SESSION['op']="'<option>Select Correct Ans </option>
            <option value='.$t1[0].'>'.$t1[0].'</option>
			<option value='.$t1[1].'>'.$t1[1].'</option>
			<option value='.$ans1.'>'.$ans1.'</option>
			<option value='.$t1[2].'>'.$t1[2].'</option>";
			*/
?>
