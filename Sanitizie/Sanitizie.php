<?php 

function clean($string) {
        return filter_var($string, FILTER_SANITIZE_STRING);
    }
?>