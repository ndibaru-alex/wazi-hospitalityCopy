<?php
    $secretKey = '6LdNsFQmAAAAAO6JfSWT4uc6eYBNKX9ZhZkcD3tD';
    $response = $_POST['g-recaptcha-response'];

    // Create cURL request
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'secret' => $secretKey,
        'response' => $response
    ]));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL request
    $result = curl_exec($ch);

    // Close cURL resource
    curl_close($ch);

    $json = json_decode($result);

    if($json->success){
        include_once("../models/Contact.php");
        include_once("../models/Sendmail/Sendmail.php");
        include_once("../admin/database/Database.php");
        // ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
    
        if(isset($_POST['fullname'])){
            $fullname       = $_POST['name_contact'];
            $emailaddress   = $_POST['email_contact'];
            $messageContent = $_POST['message_contact'];
    
            $conn = new Database();
            $db   = $conn -> connection();
    
            $contact = new Contact($db);
            $contact -> fullname = $fullname;
            $contact -> email    = $emailaddress;
            $contact -> message  = $messageContent;
    
            $save = $contact -> saveMessage();
    
            $body = "<div style='height: 100%; display: flex; justify-content: space-between; align-items: center;'>
                        <div class='contents'>
                            <div>Full Name: {$fullname}</div>
                            <div>Email: {$emailaddress}</div>
                            <div><i>
                            {$messageContent}
                            </i></div>
                        </div>
                    </div>";
            if($save){
                $send_email = new SendMail();
                $send_email -> body    = $body;
                $send_email -> to      = "uhururawlings40@gmail.com"; 
                $send_email -> subject = "New Contact Message From Techroll Website";
    
                $send = $send_email -> sendMail();
    
                header("Location: ../contact.php?success=message sent successfully, expect a reply soon#error_checking");
            }else{
                header("Location: ../contact.php?error=Oops! something went wrong, please try again#error_checking"); 
            }
        }
    }else{
        header("Location: ../contact.php?error=Oops! something wrong, please try again");
    }
?>