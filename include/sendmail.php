<?php 
global $_REQUEST;
$contact_email = 'baiaswine@gmail.com';

var_dump($_REQUEST);

// type
//$type = $_REQUEST['type'];	
// parse
//parse_str($_POST['data'], $post_data);	
		

		$user_name = stripslashes(strip_tags(trim($_REQUEST['username'])));
		$user_email = stripslashes(strip_tags(trim($_REQUEST['email'])));
		$user_subject = (array_key_exists('subject', $_REQUEST) ? stripslashes(strip_tags(trim($_REQUEST['subject']))) : '');
		$user_msg = stripslashes(strip_tags(trim( $_REQUEST['message'])));
			
		if (trim($contact_email)!='') {
			$subj = 'Message from WineHouse';
			$msg = $subj." \r\nName: $user_name \r\nE-mail: $user_email \r\nSubject: $user_subject \r\nMessage: $user_msg";
		
			$head = "Content-Type: text/plain; charset=\"utf-8\"\n"
				. "X-Mailer: PHP/" . phpversion() . "\n"
				. "Reply-To: $user_email\n"
				. "To: $contact_email\n"
				. "From: $user_email\n";
		
			if (!@mail($contact_email, $subj, $msg, $head)) {
				$response['error'] = 'Error send message!';
			}
		} else 
				$response['error'] = 'Error send message!';	
		
		

	echo json_encode($response);
	die();
?>