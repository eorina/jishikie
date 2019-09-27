<?php 
class DB_Functions {
 
    private $conn;
 
    // constructor
    function __construct() {

        require_once 'DB_Connect.php';
        // connecting to database
        $db = new Db_Connect();
        $this->conn = $db->connect();
    }
 
    
    /**
     * Storing new user
     * returns user details


     */
            public function storeUser($customer_name, $customer_location, $customer_mobile,  $customer_email) {

            
                $stmt = $this->conn->prepare ("INSERT INTO tbl_customer(`customer_name`, `customer_location`,`customer_mobile`,`customer_email`) VALUES(?,?,?,?)");
                $stmt->bind_param("ssss",$customer_name, $customer_location, $customer_mobile,  $customer_email);
                $result = $stmt->execute();
                $stmt->close();
         
                // check for successful store
               /* if ($result) {
                    $stmt = $this->conn->prepare("SELECT * FROM tbl_customer WHERE customer_mobile =?");
                    $stmt->bind_param("s", $mobile);
                    $stmt->execute();
                    $user = $stmt->get_result()->fetch_assoc();
                    $stmt->close();
         
                    return $user;
                } else {
                    return false;
             */   
            }




             public function storeVendor($vendor_code, $vendor_name,$vendor_location, $vendor_mobile,$vendor_email) {
           


                    // insert into the table.
                    $stmt = $this->conn->prepare ("INSERT INTO tbl_vendor(vendor_code, vendor_name, vendor_location, vendor_mobile, vendor_email) VALUES(?,?,?,?,?)");

                    $stmt->bind_param("issss",$vendor_code, $vendor_name, $vendor_location, $vendor_mobile, $vendor_email);

                    $result = $stmt->execute();

                    $stmt->close();

}
//return storeVendor($vendor_code, $vendor_name,$vendor_location,  $vendor_email , $vendor_mobile);



        
             public function storeItem($item_name, $item_amount ,$item_description) {
           


                    // insert into the table.
                    $stmt = $this->conn->prepare ("INSERT INTO tbl_item(`item_name`,`item_amount`,`item_description` ) VALUES(?,?,?)");

                    $stmt->bind_param("sss",$item_name,$item_amount,$item_description);

                    $result = $stmt->execute();

                    $stmt->close();

                   // return false;

}


            public function storeNextofkin($nextofkin_name,$nextofkin_mobile,$nextofkin_email){


                $stmt  = $this->conn->prepare("INSERT INTO tbl_next_of_kin(`nextofkin_name`,`nextofkin_mobile`,`nextofkin_email`) VALUES (?,?,?)");

                $stmt->bind_param("sis",$nextofkin_name,$nextofkin_mobile,$nextofkin_email);

                $result=$stmt->execute();

                $stmt->close();

                }


                }

?>
