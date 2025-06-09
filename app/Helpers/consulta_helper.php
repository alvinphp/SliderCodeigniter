<?php
use Config\Database;

if (!function_exists('getImagenes')) {
    function getImagenes()
    {
        $db = Config\Database::connect();
        $query = $db->query("SELECT * FROM imagen");
        return $query->getResult(); // o getResultArray() si prefieres
    }
}
