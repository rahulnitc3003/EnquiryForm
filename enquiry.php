<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "tag8";

	$connection = new mysqli($host, $user, $password, $database) or die("Error in connection");
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		
		/* -- File upload operation -- */
		$file_name = $_FILES['resume']['name'];
		$file_tmp = $_FILES['resume']['tmp_name'];
		$file_size = $_FILES['resume']['size'];
		$file_extension = explode('.', $file_name);
		$path = "uploads/".$file_name;
		$file_extension = strtolower(end($file_extension));
		
		if ($file_extension =='pdf' || $file_extension == 'doc' || $file_extension == 'docx') {
			if (file_exists($path)) {
				echo "<script>alert('File Already Exites')</script>";
				echo "<script>window.open('index.php','_self')</script>";
			}
			else if(move_uploaded_file($file_tmp, $path)){
				$query = "insert into enquiry (name,phone,address,email,resume) values('$name','$phone','$address','$email','$file_name')";
				if(mysqli_query($connection,$query)){
					echo "<script>alert('Thanks you! Your Application is submitted')</script>";
					echo "<script>window.open('index.php','_self')</script>";
				}
				else{
					echo "<script>alert('Data insertion Failed')</script>";
					echo "<script>window.open('index.php','_self')</script>";
				}
			}
		}
		else{
			echo "<script>alert('Select Only PDF or DOC Files')</script>";
			echo "<script>window.open('index.php','_self')</script>";	
		}	
	}
?>