<?php
	// Customize Global Variable
	global $taxa;

    if(isset($_POST['submit'])){
        $to = $taxa['form_receiver_email'];
        $from = $_REQUEST['email'];
        $name = $_REQUEST['name'];
        $csubject = $_REQUEST['subject'];
        $cmessage = $_REQUEST['message'];
    
        $headers = "From: $from";
    	$headers = "From: " . $from . "\r\n";
    	$headers .= "Reply-To: ". $from . "\r\n";
    	$headers .= "MIME-Version: 1.0\r\n";
    	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
        $subject = $taxa['form_subject'];
    
        $logo = $taxa['header_logo']['url'];
        $link = esc_url(site_url());
    
    	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
    	$body .= "<table style='width: 100%;'>";
    	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
    	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
    	$body .= "</td></tr></thead><tbody><tr>";
    	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
    	$body .= "<td style='border:none;'><strong>E-mail:</strong> {$from}</td>";
    	$body .= "</tr>";
    	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
    	$body .= "<tr><td></td></tr>";
    	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
    	$body .= "</tbody></table>";
    	$body .= "</body></html>";
    
        if(mail($to, $subject, $body, $headers)){
            $success = $taxa['form_success_message'];
        }
    }

?>