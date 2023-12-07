<?php
if (@$_POST['script_type'] == 'contactform') {

	if (trim($_POST['name']) == '') {
		echo 'Enter your name';
	} elseif (trim($_POST['title']) == '') {
		echo 'Enter your title';
	} elseif (trim($_POST['email']) == '') {
		echo 'Enter your e-mail';
	} elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", trim($_POST['email']))) {
		echo 'Enter your a valid email';
	} elseif (trim($_POST['company']) == '') {
		echo 'Enter your company';
	}

	//	elseif(trim($_POST['comments'])=='')
	//	{
	//	echo 'Enter some message';
	//	}

	else {

		$to = "pimanop524@gyxmz.com";
		$subject = "Cassia Contact form";
		$name = $_POST["name"];
		$title = $_POST["title"];
		$email = $_POST["email"];
		$company = $_POST["company"];
		//		$comments=$_POST["comments"];
		$message = "

	<table border='0' align='center' cellpadding='0' cellspacing='10' width='100%'>
	  <tr>
		<td><strong>Name:</strong>&nbsp;&nbsp;" . $name . "</td>
	  </tr>
	  
	  <tr>
		<td><strong>Title:</strong>&nbsp;&nbsp;" . $title . "</td>
	  </tr>
	  
	  <tr>
	    <td><strong>Email:</strong>&nbsp;&nbsp;" . $email . "</td>
  	  </tr>
	  
	   <tr>
	    <td><strong>Company:</strong>&nbsp;&nbsp;" . $company . "</td>
  	  </tr>
  	  </table>
";
		// $headers  = "MIME-Version: 1.0\r\n";
		// $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		// $headers .= "From: " . $name . ">\r\n";
		// mail($to, $subject, $message, $headers); {
		// 	echo 12;
		// }

		require 'sg/vendor/autoload.php'; // If you're using Composer (recommended)

		$email = new \SendGrid\Mail\Mail();
		$email->setFrom("noreply@cassia.ai", "Cassia-James");
		$email->setSubject($subject);
		$email->addTo($to, "Cassia-James");
		$email->addContent(
		    "text/html", $message
		);

		$sendgrid = new \SendGrid('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');
		try {
		    $response = $sendgrid->send($email);
		    echo "Thank you for contacting";
		} catch (Exception $e) {
		    echo 'Caught exception: '. $e->getMessage() ."\n";
		}

	}
}






if (@$_POST['script_type'] == 'footerform') {
	$pdfPath =  'images/Cassia.ai_Brochure.pdf';
	// $fileContent = file_get_contents($pdfPath);
	echo $fileContent;
	if (trim($_POST['name']) == '') {
		echo 'Enter your name';
	} elseif (trim($_POST['title']) == '') {
		echo 'Enter your title';
	} elseif (trim($_POST['email']) == '') {
		echo 'Enter your e-mail';
	} elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", trim($_POST['email']))) {
		echo 'Enter your a valid email';
	} elseif (trim($_POST['company']) == '') {
		echo 'Enter your company';
	}

	//	elseif(trim($_POST['comments'])=='')
	//	{
	//	echo 'Enter some message';
	//	}


	else {

		$to = "pimanop524@gyxmz.com";
		$subject = "Cassia Contact form";
		$name = $_POST["name"];
		$title = $_POST["title"];
		$email = $_POST["email"];
		$company = $_POST["company"];
		//		$comments=$_POST["comments"];
		$message = "

	<table border='0' align='center' cellpadding='0' cellspacing='10' width='100%'>
	  <tr>
		<td><strong>Name:</strong>&nbsp;&nbsp;" . $name . "</td>
	  </tr>
	  
	  <tr>
		<td><strong>Title:</strong>&nbsp;&nbsp;" . $title . "</td>
	  </tr>
	  
	  <tr>
	    <td><strong>Email:</strong>&nbsp;&nbsp;" . $email . "</td>
  	  </tr>
	  
	   <tr>
	    <td><strong>Company:</strong>&nbsp;&nbsp;" . $company . "</td>
  	  </tr>
	  <tr>
	  <td><a href =" . $pdfPath . " >Download Attachments</a></td>
	  </tr>
	</table>
";

		// $fileBase64 = base64_encode($fileContent);

		// $attachment = chunk_split($fileBase64);
		// $headers  = "MIME-Version: 1.0\r\n";
		// $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		// $headers .= "From: " . $name . ">\r\n";
		// mail($to, $subject, $message, $headers);


		$admin_email = new \SendGrid\Mail\Mail();
		$admin_email->setFrom("noreply@cassia.ai", "Cassia-James");
		$admin_email->setSubject($subject);
		$admin_email->addTo($to, "Cassia-James");
		$admin_email->addContent(
		    "text/html", $message
		);

		$sendgrid = new \SendGrid('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');
		try {
		    $response = $sendgrid->send($admin_email);
		    echo "Thank you for contacting";
		} catch (Exception $e) {
		    echo 'Caught exception: '. $e->getMessage() ."\n";
		}


		$userSubject = "Confirmation: Cassia Contact Form Submission";
		$userMessage = "Thank you for submitting the Cassia contact form. Here is the download link: <a href=" . $pdfPath . ">Download Attachments</a>";
		$userHeaders = "MIME-Version: 1.0\r\n";
		$userHeaders .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$userHeaders .= "From: Your Company Name <your_email@example.com>\r\n"; // Change this to your email address

		// mail($email, $userSubject, $userMessage, $userHeaders); {
		// 	echo 12;
		// }


		$user_email = new \SendGrid\Mail\Mail();
		$user_email->setFrom("noreply@cassia-james", "Cassia-James");
		$user_email->setSubject($userSubject);
		$user_email->addTo($to, "Cassia-James");
		$user_email->addContent(
		    "text/html", $userMessage
		);

		$sendgrid = new \SendGrid('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');
		try {
		    $response = $sendgrid->send($user_email);
		    echo "Thank you for contacting";
		} catch (Exception $e) {
		    echo 'Caught exception: '. $e->getMessage() ."\n";
		}






	}
}

?>
