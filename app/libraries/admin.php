<?php

/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 5/8/2016
 * Time: 10:17 PM
 */
namespace App\libraries;
    class admin
    {
        private static $instance;

        public static function getInstance()
        {
            if (null === static::$instance) {
                static::$instance = new admin();
            }

            return static::$instance;
        }

        protected function __construct()
        {
        }


        public function check($email, $pass)
        {


            if ($email == "mohammed_hassan9466@outlook.com" && $pass == "12345678") {

                return true;
            } else
                return false;

        }

    }
