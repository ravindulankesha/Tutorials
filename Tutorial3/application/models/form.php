<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Model {
   public function age($data) {
        $year=substr($data, 0, 4);
        $current_year = date("Y");
        $age=(int)$current_year-(int)$year;
        $arr=array("age"=>$age);

        return $arr;
   }
}