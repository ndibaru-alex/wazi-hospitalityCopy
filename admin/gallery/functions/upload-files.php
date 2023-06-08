<?php
    ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
    if(isset($_FILES['gallery'])){
        include_once("../../database/Database.php");
        include_once("../../models/Imageupload-1.php");
        include_once("../../models/Gallery.php");

        $conn = new Database();
        $db = $conn -> connection();

        var_dump($_FILES['gallery']);
        $images = new Imageuploads($_FILES['gallery']);
        $image_names = $images -> uploadImage();

        if($image_names){
            $image_array = explode(",", $image_names);
            for($i = 0; $i < count($image_array); $i++){
                $gallery = new Gallery($db);
                $gallery -> fileName = $image_array[$i];
                $save = $gallery -> saveGallery();
            }

            if($save){
                header("Location: ../upload-images.php?success=Images uploaded to gallery.");
            }else{
                header("Location: ../upload-images.php?error=Oops! something went wrong images not uploaded");
            }
        }else{
            header("Location: ../upload-images.php?error=Oops! something went wrong with images provided");
        }
    }
?>