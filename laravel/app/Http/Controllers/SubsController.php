<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubsModel;



require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class SubsController extends Controller
{
    public function index()
    {
    	if (isset($_GET['email']) AND isset($_GET['nama'])) {
    		$subs = SubsModel::subs($_GET['nama'], $_GET['email']);
    		if ($subs == false) {
    			echo "<script>alert('kamu sudah sukreb')</script>";
    			echo "<script>window.location.href='".url('/') ."'</script>";

    		}else if($subs == true) {
    			$this->_sendEmail($_GET['nama'], $_GET['email']);
    			echo "<script>window.location.href='".url('/') ."'</script>";

    		}
    	}
    }
    private function _sendEmail($nama, $email)
    {
    	$mail = new PHPMailer(true);
    	try {
		    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
		    $mail->isSMTP();                                            // Send using SMTP
		    $mail->Host       = 'mail.devours.org';                    // Set the SMTP server to send through
		    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		    $mail->Username   = 'info@devours.org';                     // SMTP username
		    $mail->Password   = 'dandi129';                               // SMTP password
		    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		    //Recipients
		    $mail->setFrom('info@devours.org', 'Devours');
		    $mail->addAddress($email);     // Add a recipient

		    // Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = "Terima kasih ". $nama;
		    $mail->Body = "Hallow <b>". $nama . "</b> Terima kasih karena telah subrek. Dapatkan notifikasi setiap ada film baru di upload";

		    $mail->send();
		    return true;
		} catch (Exception $e) {
		    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
    }
}
