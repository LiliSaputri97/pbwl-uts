<?php

namespace Inc;

class koneksi {

    public object $db;

    public function __construct() {
        $this->db = new \PDO("mysql:host=localhost;dbname=dbtokoh", "root", "");
    }
}

$conn = mysqli_connect("localhost","root","","dbtokoh") or die(mysqli_connect_error());

?>