<?php
	
		require("db.php");
		
		@$id 			= $_POST['deduction_id'];
		@$NHIF 	= $_POST['NHIF'];
		@$NSSF 			= $_POST['NSSF'];
		@$TAX			= $_POST['TAX'];
		@$LOANS 		= $_POST['LOANS'];


		$sql = mysqli_query($conn,"UPDATE deductions SET NSSF='$NSSF', TAX='$TAX', pag_ibig='$love', LOANS='$LOANS', NHIF='$NHIF' WHERE deduction_id='1'");

		if($sql)
		{
			?>
		        <script>
		            alert('Deductions successfully updated...');
		            window.location.href='home_deductions.php';
		        </script>
		    <?php 
		}
		else {
			echo "Not Successfull!"; 
		}
 ?>