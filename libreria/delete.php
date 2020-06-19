<?php
session_start();
// Initialize site configuration
require_once('includes/config.inc.php');
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['id']) && intval($_GET['id'])){
        $id=$_GET['id'];

        $delUsr = new Libro();
        $delUsr -> id = $id;
        $delUsr -> delete();
    }
    
}
redirect_to('indexLibros.php')
?>