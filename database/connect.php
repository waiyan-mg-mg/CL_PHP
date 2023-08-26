<?php

$connection = mysqli_connect('localhost', 'root', '', 'order test');
if (!$connection) {
    echo "Fail to connect";
}
