<?php

header('Content-Type: application/json');

require_once 'DB_Functions.php';

require_once 'config.php';
//require_once 'alert.php';


$db = new DB_Functions();
//$alert = new alert();
 
$response = array("error" => FALSE);

$item_name=$item_amount=$item_description='';


//defining variables

//$name=$amount='';


if (isset($_POST['item_name']) && isset($_POST['item_amount']) && isset($_POST['item_description'])){
        


    // receiving the post params

      $item_name=$_POST['item_name'];

       $item_amount=$_POST['item_amount'];

        $item_description = $_POST['item_description'] ;

        // store a new item
        $item = $db->storeItem($item_name, $item_amount, $item_description);
      


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

          if ($item) {
            // vendor stored successfully
            $response["error"] = 200;

          
            $response["item"]['$item_name'] = $item['$item_name'];

            $response["item"]['item_amount'] = $item['item_amount'];

            $response["item"]['item_description'] = $item['item_description'];
          
          

             
         
            echo json_encode($response);

                

 
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