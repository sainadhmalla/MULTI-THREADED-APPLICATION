<?php
 require '../../../assets/PHPMailer/PHPMailerAutoload.php';
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
function send_mail1($email,$name,$body,$subject){
   
    date_default_timezone_set('Etc/UTC');
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 0;
    
    //Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';
    
    //Set the hostname of the mail server
    $mail->Host = 'smtp.sendgrid.net';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;
    
    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';
    
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    
    $mail->Username = "apikey";
    
    //Password to use for SMTP authentication
    $mail->Password = "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";
    
    //Set who the message is to be sent from
    $mail->setFrom('internship@aicte-india.org', 'AICTE INTERNSHIP');
    
    //Set an alternative reply-to address
    $mail->addReplyTo('replyto@example.com', 'First Last');
    
    //Set who the message is to be sent to
    $mail->addAddress($email, $name);
    
    //Set the subject line
    $mail->Subject = $subject;
    $mail->Body = $body;
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    //Replace the plain text body with one created manually
    /* $mail->AltBody = 'Hello'; */
    
    //Attach an image file
    $mail->addAttachment('../../../assets/images3/aictelogo.png');
    //send the message, check for errors
    if (!$mail->send()) {
     return(false);
    } else {
        return(true);
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }
    }
    function send_mail($email,$name,$body){
        date_default_timezone_set('Etc/UTC');
        //Create a new PHPMailer instance
        $mail = new PHPMailer;
        
        //Tell PHPMailer to use SMTP
        $mail->isSMTP();
        
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;
        
        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';
        
        //Set the hostname of the mail server
        $mail->Host = 'smtp.sendgrid.net';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6
        
        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;
        
        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';
        
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        
        $mail->Username = "apikey";
        
        //Password to use for SMTP authentication
        $mail->Password = "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";
        
        //Set who the message is to be sent from
        $mail->setFrom('internship@aicte-india.org', 'AICTE Internship');
        
        //Set an alternative reply-to address
        $mail->addReplyTo('replyto@example.com', 'First Last');
        
        //Set who the message is to be sent to
        $mail->addAddress($email, $name);
        
        //Set the subject line
        $mail->Subject = 'Account Activation Link';
        $mail->Body = $body;
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        //Replace the plain text body with one created manually
        /* $mail->AltBody = 'Hello'; */
        
        //Attach an image file
        $mail->addAttachment('../../../assets/images3/aictelogo.png');
        //send the message, check for errors
        if (!$mail->send()) {
         return(false);
        } else {
            return(true);
            //Section 2: IMAP
            //Uncomment these to save your message in the 'Sent Mail' folder.
            #if (save_mail($mail)) {
            #    echo "Message saved!";
            #}
        }
        }
function send_reminder_mail($email,$name,$body){
    date_default_timezone_set('Etc/UTC');
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 0;
    
    //Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';
    
    //Set the hostname of the mail server
    $mail->Host = 'smtp.sendgrid.net';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;
    
    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';
    
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "apikey";
    
    //Password to use for SMTP authentication
    $mail->Password ="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";
    
    //Set who the message is to be sent from
    $mail->setFrom('internship@aicte-india.org', 'AICTE INTERNSHIP');
    /* $mail->AddCC('akashpandey.geu@gmail.com'); */
    
    //Set an alternative reply-to address
    $mail->addReplyTo('replyto@example.com', 'First Last');
    
    //Set who the message is to be sent to
    $mail->addAddress($email, $name);
    
    //Set the subject line
    $mail->Subject = 'AICTE Reminder Of the Internship';
    $mail->Body = $body;
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    //Replace the plain text body with one created manually
    /* $mail->AltBody = 'Hello'; */
    
    //Attach an image file
    $mail->addAttachment('../../assets/images3/aictelogo.png');
    //send the message, check for errors
    if (!$mail->send()) {
     return("False");
    } else {
        return("true");
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }
    }
function send_approval_mail($email,$name,$body){
    date_default_timezone_set('Etc/UTC');
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 0;
    
    //Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';
    
    //Set the hostname of the mail server
    $mail->Host = 'smtp.sendgrid.net';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;
    
    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';
    
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "apikey";
    
    //Password to use for SMTP authentication
    $mail->Password ="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";
    
    //Set who the message is to be sent from
    $mail->setFrom('internship@aicte-india.org', 'AICTE INTERNSHIP');
    
    //Set an alternative reply-to address
    /* $mail->addReplyTo('replyto@.com', 'First Last'); */

    //Set who the message is to be sent to
    $mail->addAddress($email,$name);
    
    //Set the subject line
    $mail->Subject = "Approval Update";
    $mail->Body = $body;
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    //Replace the plain text body with one created manually
    //Attach an image file
    $mail->addAttachment('../assets/images3/aictelogo.png');
    //send the message, check for errors
    if (!$mail->send()) {
     return(false);
    } else {
        return(true);
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }
    }
    function send_update_mail($email,$name,$body){
        date_default_timezone_set('Etc/UTC');
        //Create a new PHPMailer instance
        $mail = new PHPMailer;
        
        //Tell PHPMailer to use SMTP
        $mail->isSMTP();
        
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;
        
        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';
        
        //Set the hostname of the mail server
        $mail->Host = 'smtp.sendgrid.net';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6
        
        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;
        
        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';
        
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "apikey";
        
        //Password to use for SMTP authentication
        $mail->Password ="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";
        
        //Set who the message is to be sent from
        $mail->setFrom('internship@aicte-india.org', 'AICTE INTERNSHIP');
        
        //Set an alternative reply-to address
        /* $mail->addReplyTo('replyto@.com', 'First Last'); */
    
        //Set who the message is to be sent to
        $mail->addAddress($email,$name);
        
        //Set the subject line
        $mail->Subject = "Update On Internship";
        $mail->Body = $body;
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        //Replace the plain text body with one created manually
        //Attach an image file
        $mail->addAttachment('../assets/images3/aictelogo.png');
        //send the message, check for errors
        if (!$mail->send()) {
         return(false);
        } else {
            return(true);
            //Section 2: IMAP
            //Uncomment these to save your message in the 'Sent Mail' folder.
            #if (save_mail($mail)) {
            #    echo "Message saved!";
            #}
        }
        }
//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
/* function save_mail($mail) { */
    //You can change 'Sent Mail' to any other folder or tag
/*     $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail"; */

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
/*     $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}
 */