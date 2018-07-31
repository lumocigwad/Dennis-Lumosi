

    <?php
    $name="";
    $email="";
    $subject="";
if (isset($_POST['submit'])) {

    if(empty(trim($_POST["name"]))){
    	 echo"<script>alert('Name cannot be left blank')</script>";
    	 exit();
    	}
    	else{
    		$name=$_POST['name'];
    		echo name;
    	}
    	if(empty(trim($_POST["email"]))){
    	 echo"<script>alert('Please enter a valid email')</script>";
    	 exit();
    	}
    	else{
    		$email=$_POST['email'];
    		echo $email;
    	}
    	if(empty(trim($_POST["subject"]))){
    	 echo"<script>alert('subject field cannot be blank')</script>";
    	 exit();
    	}
    	else{
    		$subject=$_POST['subject'];
    		echo $subject;
    	}
    	if(empty(trim($_POST["message"]))){
    	 echo"<script>alert('message cannot be blank')</script>";
    	 exit();
    	}
    	else{
    		$message=$_POST['message'];
    		echo $message;
    	}

  $to = 'lumocigwad@gmail.com';

    $subject = $subject;

    $from = $email;

     

    // To send HTML mail, the Content-type header must be set

    $headers  = 'MIME-Version: 1.0' . "\r\n";

    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

     

    // Create email headers

    $headers .= 'From: '.$from."\r\n".

        'Reply-To: '.$from."\r\n" .

        'X-Mailer: PHP/' . phpversion();

     

    // Compose a simple HTML email message

    $message = '<html><body>';

    $message .= '<h1 style="color:#f40;">Hello Dennis</h1>';

    $message .= '<p style="color:#080;font-size:18px;">'$message'</p>';

    $message .= '</body></html>';

     

    // Sending email

    if(mail($to, $subject, $message, $headers)){

        echo 'Your mail has been sent successfully.';

    } else{

        echo 'Unable to send email. Please try again.';

    }
}
    ?>



