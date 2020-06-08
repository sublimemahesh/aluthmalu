<?php

/*

 * To change this license header, choose License Headers in Project Properties.

 * To change this template file, choose Tools | Templates

 * and open the template in the editor.

 */

/**

 * Description of Product

 *

 * @author Nipuni

 */
class Order {

    public $id;
    public $customer_name;
    public $customer_address;
    public $customer_city;
    public $customer_phone;
    public $customer_email;

    public function __construct($id) {

        if ($id) {



            $query = "SELECT `id`,`customer_name`,`customer_address`,`customer_city`,`customer_email`,`customer_phone` FROM `order` WHERE `id`=" . $id;



            $db = new Database();



            $result = mysql_fetch_array($db->readQuery($query));



            $this->id = $result['id'];

            $this->customer_name = $result['customer_name'];

            $this->customer_address = $result['customer_address'];

            $this->customer_city = $result['customer_city'];

            $this->customer_email = $result['customer_email'];

            $this->customer_phone = $result['customer_phone'];



            return $this;
        }
    }

    public function create() {



        $query = "INSERT INTO `order` (`customer_name`,`customer_address`,`customer_city`,`customer_email`,`customer_phone`) VALUES  ('"
                . $this->customer_name . "','"
                . $this->customer_address . "', '"
                . $this->customer_city . "', '"
                . $this->customer_email . "', '"
                . $this->customer_phone . "')";





        $db = new Database();



        $result = $db->readQuery($query);



        if ($result) {

            $last_id = mysql_insert_id();



            return $this->__construct($last_id);
        } else {

            return FALSE;
        }
    }

    public function all() {



        $query = "SELECT * FROM `order` ORDER BY id ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysql_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
    }

    public function update() {



        $query = "UPDATE  `order` SET "
                . "`customer_name` ='" . $this->customer_name . "', "
                . "`customer_address` ='" . $this->customer_address . "', "
                . "`customer_city` ='" . $this->customer_city . "', "
                . "`customer_email` ='" . $this->customer_email . "', "
                . "`customer_phone` ='" . $this->customer_phone . "' "
                . "WHERE `id` = '" . $this->id . "'";



        $db = new Database();



        $result = $db->readQuery($query);



        if ($result) {

            return $this->__construct($this->id);
        } else {

            return FALSE;
        }
    }

    public function delete() {





        $query = 'DELETE FROM `order` WHERE id="' . $this->id . '"';



        $db = new Database();



        return $db->readQuery($query);
    }


}
