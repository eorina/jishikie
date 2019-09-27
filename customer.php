  <?php
 
header('Content-Type: application/json');





require_once 'DB_Functions.php';

require_once 'alert.php';

//require_once 'includes/invoice.php';

//require_once '../server.php';

$db = new DB_Functions();

$alert = new alert();

//$invoice = new invoice();
 //$mail = new send_mail();
// json response array

$response = array("error" => FALSE);



 // $insert = array('customer_fname'=>$customer_fname, 'customer_lname'=>$customer_lname, 'customer_email'=>$customer_email, 'customer_status'=>$customer_status);

if (isset($_POST['customer_name']) && isset($_POST['customer_location']) && isset($_POST['customer_mobile']) && isset($_POST['customer_email']))  

    {
        // receiving the post params
        $customer_name = $_POST['customer_name'];

        $customer_location =$_POST['customer_location'];
        
        $customer_mobile= $_POST['customer_mobile'];
       
        $customer_email = $_POST['customer_email'];



        // create a new user

        $user = $db->storeUser($customer_name, $customer_location, $customer_mobile,  $customer_email);

     


        // send welcome sms to the new customer

/*        $alert ->send_sms($customer_mobile);
*/
        //send the invoice

        $mailNotif = $alert->send_mail($customer_name,$customer_email);

      // $smsNotif = $alert->send_sms($customer_mobile);

        if  ( $mailNotif)

            
            {

                // user stored successfully
                $response["error"] = 200;

                // $response['id']=$user['id'];
                $response["user"]['customer_name'] = $user['customer_name'];
                // $response["user"]["customer_lname"] = $user["customer_lname"];

                $response["user"]['customer_location'] = $user['customer_location'];  

                $response["user"]['customer_mobile'] = $user['customer_mobile'];

                $response["user"]['customer_email'] = $user['customer_email'];  
                //  $response["user"]["customer_status"] = $user["customer_status"];
                echo json_encode($response);

                $response["success"] = TRUE;


            }
             
    

        else

            {
         
                $response["error"] = TRUE;
                $response["error_msg"] = 'Required parameters (name or  mobile ) is missing!';
                echo json_encode($response);


            }

    }

    else
         {
            $response["error"] = TRUE;
            $response["error_msg"] = "Required parameter is missing!";
            echo json_encode($response);
        }



?>