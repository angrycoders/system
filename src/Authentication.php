<?php


namespace Jkuatapp\System;


class Authentication
{
    public static function login($email, $password) {
        if ($email != "gocho.ian@students.jkuat.ac.ke" ||
            $password != "ian") {
            return false;
        }
        return array("username"=>"gocho");
    }
}

