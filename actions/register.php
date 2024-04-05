<?php
    include "../classes/Sales.php";

    $sales = new Sales;

    $sales->store($_POST);
?>