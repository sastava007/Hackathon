<?php  
session_start();
require 'PHPMailerAutoload.php';

$conn = mysqli_connect("localhost","root","","data_gov");

$id=intval($_GET['id']);
$email=$_GET['email'];

$query=mysqli_query($conn,"UPDATE ideas SET status=1 WHERE id= '".$id."' ");
if($query)
{
					$mail = new PHPMailer;

					//$mail->SMTPDebug = 4;                               // Enable verbose debug output

					$mail->isSMTP();                                      // Set mailer to use SMTP
					$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
					$mail->SMTPAuth = true;                               // Enable SMTP authentication
					$mail->Username = 'data.govmail@gmail.com';                 // SMTP username
					$mail->Password = 'p@ssword@321';                           // SMTP password
					$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
					$mail->Port = 587;                                    // TCP port to connect to

					$mail->setFrom('data.govmail@gmail.com', 'Data Gov');
					$mail->addAddress($email);     // Add a recipient
					
					$mail->addReplyTo('data.govmail@gmail.com', 'Information');
					
					$mail->isHTML(true);                                  // Set email format to HTML

					$mail->Subject = 'Idea Accepted!';
					$mail->Body    = '

					<img src="data_gov.png">
					<b><h1 style="color:red;">Congratulations your idea has been accepted</h1></b><br> <?php echo htmlspecialchars($email) ; ?>   ';
					$mail->AltBody = '<?php echo htmlspecialchars($email) ; ?>';

					if(!$mail->send())
					{
					    echo 'Message could not be sent.';
					    echo 'Mailer Error: ' . $mail->ErrorInfo;
					} 
					else
					{
						header('Location: admin.php');
					}

}


?>