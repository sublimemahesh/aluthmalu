<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {
   
    $ORDER = new Order(NULL);

    $ORDER->customer_name = $_POST['name'];
    $ORDER->customer_address = $_POST['address'];
    $ORDER->customer_city = $_POST['city'];
    $ORDER->customer_phone = $_POST['phone'];
    $ORDER->customer_email = $_POST['email'];
    $ss = $_POST['prod'];
    foreach ($_POST['product_qty'] as $ddd){
       if($ddd !=0){
           echo json_encode($ss .' ->'. $ddd);
       }
    }
    
    
   $result= $ORDER->create();
    if ($result){
    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}else {
         $result = ["status" => 'Error'];
    echo json_encode($result);
    exit();
    }
}


