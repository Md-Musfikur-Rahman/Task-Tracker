<?php 
session_start();
// Include the database configuration file  
require_once './dbconnect.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
            $email = $_SESSION["email"];
         
            // Insert image content into database 
            $sql = "INSERT INTO `images` ( `image`,`email`) VALUES ('$imgContent','$email')";
            $insert = $conn->query($sql); 
             
            if($insert){ 
                $status = 'success';
                header('location: ./profile.php');
            }else{ 
                header('location: ./error.php');
            }  
        }else{ 
            header('location: ./error.php');
        } 
    }else{ 
        header('location: ./error.php');
    } 
} 
 

?>