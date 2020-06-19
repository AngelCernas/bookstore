<?php
// Initialize site configuration
require_once('includes/config.inc.php');
$usrtodos=Libro::getAll();

// Include page view
require_once(VIEW_PATH.'indexLibros.view.php');
?>
