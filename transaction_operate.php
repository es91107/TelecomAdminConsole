<?php 

    include("connection.php"); 
      

    $name = $_GET['name'];
    $query = "SELECT * FROM transaction inner JOIN user ON transaction.ID = user.ID where name ='".$name."' order by transactionMonth desc limit 1" ; 
    $result = mysqli_query($link,$query);

    $outp = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($outp);

?>