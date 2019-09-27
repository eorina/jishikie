<?php

header('Content-Type: application/json');


require_once 'DB_Functions.php';

//require_once 'alert.php';


$db = new DB_Functions();

 
$response = array("error" => FALSE);

//defining variables

/*

$nextofkin_name='';

$nextofkin_mobile='';

$nextofkin_email='';

*/

if  (isset($_POST['nextofkin_name']) && isset($_POST['nextofkin_mobile']) && isset($_POST['nextofkin_email'])) {
        


    // receiving the post params

       


       $nextofkin_name =$_POST['nextofkin_name'];

 
       $nextofkin_mobile= $_POST['nextofkin_mobile'];

   
       $nextofkin_email = $_POST['nextofkin_email'];

       



        // create a new New nextof kin
        $nextofkin= $db->storeNextofkin($nextofkin_name,$nextofkin_mobile,$nextofkin_email);
      


      

        
          if ($nextofkin) {
          
            $response["error"] = 200;

          
           

           $response["nextofkin"]['nexttofkin_name'] = $nextofkin['nexttofkin_name'];


           $response["nextofkin"]['nexttofkin_mobile'] = $nextofkin['nexttofkin_mobile'];


           $response["nextofkin"]['nexttofkin_email'] = $nextofkin['nexttofkin_email'];


            echo json_encode($response);
          

             }
           


 
         

        else {
            
            $response["success"] = TRUE;
            $response["error_msg"] = 'Unknown error occurred in registration!';
            echo json_encode($response);
             
    

}

     /* else {
       
          $response["error"] = TRUE;
          $response["error_msg"] = 'Required parameters (name or  mobile ) is missing!';
          echo json_encode($response);


} 
*/

}


?>





















