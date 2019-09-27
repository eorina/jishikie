<?php

require 'vendor/autoloadmail.php';
//require 'vendor/autoloadsms.php';

/*require 'vendor/phpmailer/phpmailer/src/SMTP.php';

require 'vendor/africastalking/africastalking/src/AfricasTalking.php';
require 'vendor/africastalking/africastalking/src/Application.php';
require 'vendor/africastalking/africastalking/src/SMS.php';
require 'vendor/africastalking/africastalking/src/Token.php';*/

// africas talking sending sms.
//use AfricasTalking\SDK\AfricasTalking;

use AfricasTalking\SDK\AfricasTalking;

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;


class alert{ 

    public $username;

    public $apikey;

    public $toMail;

    public $toName;

    public $result;

    public $timenow;

    public $customer_mobile;
    
    public $customer_email;

    public $sentDate;

    public $subject;

    public $content;



function send_sms($customer_mobile)

    { 
     $this->toName = $customer_name;
        // Set your app credentials
        $username = 'swiftcoinuser';
        $apikey = '7edd2b22cd9c1d9ffc08a34681c532b27b82500d9401b73ebb65f0e3c6264a81';

        $timenow = date('h:i:sa');


        // Initialize the SDK
        $AT = new AfricasTalking($username, $apikey);

        // Get the SMS service
        $sms = $AT->sms();

        // Set the numbers you want to send to in international format
        $recipients = $customer_mobile;

        // Set your message
        $message = "Dear, ".$this->toName ; 

        // Set your shortCode or senderId
        $from       = 'SWIFTCOINS';

        try 

            {
                // Thats it, hit send and we'll take care of the rest
                $result = $sms->send([
                    'to'      => $recipients,
                    'message' => $message,
                    'from'    => $from
                ]);


                print_r($result);
            } 

        catch (Exception $e)

            {

                echo "Error: ".$e->getMessage();

            }


    }



    function send_mail($customer_name,$customer_email)

        {

            
             $this->toMail = $customer_email;
            $this->toName = $customer_name;
            $this->subject = "Welcome, ".$this->toName;
            $this->content = "Welcome to the Jishikie Service";


                try {

                            $mailerObj = new PHPMailer(true);


                            if (!isset($mailerObj)) 
                                $mailerObj = new stdClass();


                            $mailerObj->SMTPDebug = 0;                    
                            $mailerObj->isSMTP();                                    
                            $mailerObj->Host       = 'smtp.gmail.com';  
                            $mailerObj->SMTPAuth   = true;                             
                            $mailerObj->Username   = 'swiftcoins.ke@gmail.com';         
                            $mailerObj->Password   = 'pfedwxlnqqbfaoli';            
                            $mailerObj->SMTPSecure = 'ssl';                                 
                            $mailerObj->Port       = 465;                                   

                            $mailerObj->setFrom('swiftcoins.ke@gmail.com');
                            $mailerObj->addAddress($this->toMail);    
                            
                           // $mailerObj->addAttachment($this->toName.'_'.$this->invoice_number.'.pdf');          

                            $mailerObj->isHTML(true);                                  
                            $mailerObj->Subject = $this->subject;
                            $mailerObj->Body    = $this->content;
                            $mailerObj->AltBody = 'Sorry.Html email is not enabled in your account';

                            $mailerObj->send();
                            
                            echo 'success';
                            
                        } catch (Exception $e) {
                            
                            echo "Message could not be sent. Mailer Error: {$mailerObj->ErrorInfo}";
                            
                        }

        }


    function generate_number()

        {

            $this->invoice_number = rand(1000,100000);

            return $this->invoice_number;
        }


    function notify_send()

        {
            $notification = "An invoice has been sent to ".$this->toMail;

            return $notification;
        }

    
}

?>