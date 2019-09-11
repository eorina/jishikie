  <?php
 
header('Content-Type: application/json');


$date = new DateTime();

//fpdf
require('fpdf.php');



require_once 'includes/DB_Functions.php';
require_once 'includes/invoice.php';

//require_once '../server.php';

$db = new DB_Functions();
$invoice = new invoice();
 //$mail = new send_mail();
// json response array
$response = array("error" => FALSE);



 // $insert = array('customer_fname'=>$customer_fname, 'customer_lname'=>$customer_lname, 'customer_email'=>$customer_email, 'customer_status'=>$customer_status);

if (isset($_POST['customer_fname']) && isset($_POST['customer_email']))  {
         // $_POST['customer_lname'],
           //$_POST['customer_email'],
           //$_POST['customer_status']))


    // receiving the post params
    $customer_fname = $_POST['customer_fname'];
   // $customer_lname = $_POST['customer_lname'];
    $customer_email = $_POST['customer_email'];
   // $customer_status = $_POST['customer_status']; 

        // create a new user
        $user = $db->storeUser($customer_fname, $customer_email);

        //prepare invoice
        $dateSend = date("l F jS, Y - g:ia", time());
        //due in 5 days' time
        $dateDue  = date("l F jS, Y - g:ia", time() + 5 *24 * 60 * 60);
        //generate unique invoice Number
        $invoiceNo = $invoice ->generate_number();

        $invoiceto = $customer_fname;

        $product = "Web hosting";

        $cost = "2,100";

        $payMethod = "M-Pesa";

        //create the invoice
        $invoice ->create_invoice($invoiceto, $dateSend, $product, $payMethod, $invoiceNo, $cost, $dateDue);
        //send the invoice
        $invoice->send_invoice($customer_email);

        if ($user) {
            // user stored successfully
            $response["error"] = 200;
            $response["user"]["customer_fname"] = $user["customer_fname"];
           // $response["user"]["customer_lname"] = $user["customer_lname"];
            $response["user"]["customer_email"] = $user["customer_email"];
          //  $response["user"]["customer_status"] = $user["customer_status"];
            echo json_encode($response);

                //call function send_mail

 
        } 

        else {
            // user failed to store
            $response["success"] = TRUE;
            $response["error_msg"] = "Unknown error occurred in registration!";
            echo json_encode($response);
             }
    
} 
else
 {
    $response["error"] = TRUE;
    $response["error_msg"] = "Required parameters (name or  email ) is missing!";
    echo json_encode($response);
}






?>