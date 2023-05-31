<?php
    $secretKey = '6LfxskQmAAAAAOGUz0K7D5GBVI0EHgzzcJCCoohO';
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
        if(isset($_POST['emailaddress'])){
            include_once("../admin/database/Database.php");
            include_once("../models/Comments.php");

            $fullname     = $_POST['name'];
            $emailaddress = $_POST['email'];
            $message      = $_POST['comments'];
            $blogs        = $_POST['blogs'];

            $conn = new Database();
            $db   = $conn -> connection();

            $comment = new Comments($db);
            $comment -> Fname   = $fullname;
            $comment -> Email   = $emailaddress;
            $comment -> Message = $message;
            $comment -> Blog    = $blogs;

            $save = $comment -> saveComment();


            if($save){
                header("Location: ../blog-post.php?success=comment sent successfully, Thank you for engaging&blog={$blogs}#blog_comment_form");
            }else{
                header("Location: ../blog-post.php?error=Oops! something went wrong, please try again&blog={$blogs}#blog_comment_form");
            }
        }
    }else{
        $id = urlencode(base64_encode($_POST['blogs']));
        header("Location: ../blog-post.php?error=Oops! something wrong, please try again&blog={$id}#blog_comment_form");
    }
?>