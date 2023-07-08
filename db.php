<?php
$conn = mysqli_connect('localhost', 'root', '', 'ouvrages');
if (!$conn) {
    echo 'erreur' . mysqli_connect_error();
}
