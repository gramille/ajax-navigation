<?php
    if(isset($_GET["page"])) {

        $page = trim($_GET["page"]);
        $allowed = array("grands-formats", "diptyques", "triptyques");

        if(in_array($page, $allowed)) {

            echo file_get_contents("pages/{$page}.php");
        }
    }
?>
