<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hello_model extends CI_Model
{
    public function hello_56()
    {
        return "Hello Perkenalkan nama saya Ryo";
    }

    public function hello_mvc()
    {
        return '<b>ini Menggunakan MVC buatan 0056</b>';
    }
}
