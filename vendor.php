<?php

header('Content-Type: application/json');


require_once 'DB_Functions.php';

require_once 'config.php';
//require_once 'alert.php';


$db = new DB_Functions();
//$alert = new alert();
 
$response = array("error" => FALSE);

//defining variables

$vendor_code='';

$vendor_name='';

$vendor_location='';




$vendor_mobile='';
$vendor_email='';



if (isset($_POST['vendor_code']) && isset($_POST['vendor_name']) && isset($_POST['vendor_location']) && isset($_POST['vendor_mobile']) && isset($_POST['vendor_email']))  {
        


    // receiving the post params

       $vendor_code = $_POST['vendor_code'];

       $vendor_name =$_POST['vendor_name'];
 
       $vendor_location= $_POST['vendor_location'];
   
        $vendor_mobile = $_POST['vendor_mobile'];

       
        $vendor_email = $_POST['vendor_email'];



        // create a new vendor
        $vendor= $db->storeVendor($vendor_code, $vendor_name, $vendor_location,  $vendor_mobile , $vendor_email);

      


      /*

        $result =$alertCustomer ->Sendsms();

       // send welcome sms to the new customer
         $alertCustomer ->Sendsms($result, $vendor_location);
         
         
          //send the email
          $alertCustomer->send_mail($vendor_email);

          //prepare email
          $subject = "welcome to Jishikie program";
          $content = "hello " .$vendor_code. "you are now a member in Jishikie";

          $this->subject = $alertCustomer->send_mail();

          $this->content = $alertCustomer->send_mail();
           */

          if ($vendor) {
            // vendor stored successfully
            $response["error"] = 200;

          
            $response["vendor"]['vendor_code'] = $vendor['vendor_code'];
          

             $response["vendor"]['vendor_name'] = $vendor['vendor_name'];  

              $response["vendor"]['vendor_location'] = $vendor['vendor_location'];

               $response["vendor"]['vendor_mobile'] = $vendor['vendor_mobile']; 

             $response["vendor"]['vendor_email'] = $vendor['vendor_email']; 

             
         
            echo json_encode($response);

             $response["success"] = TRUE;

            

 
        } 

        else {
            // vendor failed to store
            $response["success"] = TRUE;
            $response["error_msg"] = 'Unknown error occurred in registration!';
            echo json_encode($response);
             
    

}
/*
      else {
       
          $response["error"] = TRUE;
          $response["error_msg"] = 'Required parameters (name or  mobile ) is missing!';
          echo json_encode($response);


} */

}




?>