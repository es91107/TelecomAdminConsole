<?php 
    include("connection.php");    

    $id = $_GET['id'];

    $name = $_GET['name'];
    $type = $_GET['type'];

    echo $id;
    echo $name;
    echo $type;

    $TransNum_query = "SELECT TransNum FROM transaction where ID ='".$id."' order by transactionMonth desc limit 1" ;
    $TransNum = mysqli_fetch_assoc(mysqli_query($link, $TransNum_query))["TransNum"];
    echo $TransNum;
    
    $query = "UPDATE transaction SET contract='".$type."' WHERE TransNum ='".$TransNum."'";
    
    $result2 = mysqli_query($link,$query);

    $outp = $result2->fetch_all(MYSQLI_ASSOC);
    echo json_encode($outp);

?>