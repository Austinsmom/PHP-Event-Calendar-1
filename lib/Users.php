<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function logIn($username,$pass) {
    //check if username exists
    $userExists = false;
    if ($userExists) {
            //get user_pass
        $userPass = "password";
        if ($userPass == $pass) {
            return array("success" => true, "errorMessage" => "");
        } else {
            return array("success" => false, "errorMessage" => "Incorrect password!");
        }
    } else {
        return array("success" => false, "errorMessage" => "Incorrect username!");
    }
}
