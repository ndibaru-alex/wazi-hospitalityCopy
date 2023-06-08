<?php
    class Imageuploads {
        public $image;

        public function __construct($files)
        {
            $this -> image = $files;
        }

        public function uploadImage()
        {
            $total = count($this -> image);
            $file_names = "";
            for( $i=0 ; $i < $total ; $i++ ) {
                $accepted = array("jpg","png","jpeg");
                $tmpFilePath = $this -> image['tmp_name'][$i];
                $filename_array = explode(".",$this -> image['name'][$i]);
                if(in_array(strtolower(end($filename_array)), $accepted)){
                    $names = rand(100,1000)."-".str_replace(' ','',date("Y-m-d H:i:s")).".".end($filename_array);
                    if($i == 0){
                        $file_names = $names;
                    }else{
                        $file_names = $file_names. "," . $names;
                    }
                    $newFilePath = "../../Images/" . $names;
                    move_uploaded_file($tmpFilePath, $newFilePath);
                }
            }

            if($file_names == ""){
                return false;
            }else{
                return $file_names;
            }
        }
    }
?>
