<?php
	include_once "koneksi.php";

	 class usr{}
	
	 $email = $_POST["email"];
	 $password = $_POST["password"];
	 $confirm_password = $_POST["confirm_password"];
	
	 if ((empty($email))) { 
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Kolom email tidak boleh kosong"; 
	 	die(json_encode($response));
	 } else if ((empty($password))) { 
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Kolom password tidak boleh kosong"; 
	 	die(json_encode($response));
	 } else if ((empty($confirm_password)) || $password != $confirm_password) { 
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Konfirmasi password tidak sama"; 
	 	die(json_encode($response));
	 } else {
	 	if (!empty($email) && $password == $confirm_password){
	 		$query = mysqli_query($con, "INSERT INTO t_member (id_member, email, password) VALUES(0,'".$email."','".$password."')");
			
	 		if ($query){
	 			$response = new usr();
	 			$response->success = 1;
	 			$response->message = "Daftar berhasil, silahkan login.";
	 			die(json_encode($response));
				
	 		} else { 
	 			$response = new usr();
	 			$response->success = 0;
	 			$response->message = "Email sudah ada";
	 			die(json_encode($response));
	 		}
	 	}	
	 }

	 mysqli_close($con);

?>	