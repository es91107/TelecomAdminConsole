<?php 
    include("connection.php");    

    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $amount = $_POST['amount'];
    $due = $_POST['due'];
    $type = $_POST['type']; 
    $innerCall = $_POST['innerCall'];
    $outerCall = $_POST['outerCall'];
    $internationalCall = $_POST['internationalCall'];
    $NetworkUsage = $_POST['NetworkUsage'];
    $NetworkTime = $_POST['NetworkTime'];

    $All_query = "SELECT * FROM transaction where ID ='".$id."' order by transactionMonth desc limit 1" ;   //找出最新的一筆資料
    $row = mysqli_fetch_assoc(mysqli_query($link, $All_query));
    $TransNum = $row["TransNum"];
    $ID = $row["ID"]; //最新一筆資料的帳單編號

    $query1 = "UPDATE transaction SET TotalAmount=IF(LENGTH('$amount')=0, TotalAmount, '$amount'), DueDate=IF(LENGTH('$due')=0, DueDate, '$due'), contract=IF(LENGTH('$type')=0, contract, '$type'), innerCall=IF(LENGTH('$innerCall')=0, innerCall, '$innerCall'), outerCall=IF(LENGTH('$outerCall')=0, outerCall, '$outerCall'), internationalCall=IF(LENGTH('$internationalCall')=0, internationalCall, '$internationalCall'), NetworkUsage=IF(LENGTH('$NetworkUsage')=0, NetworkUsage, '$NetworkUsage'), NetworkTime=IF(LENGTH('$NetworkTime')=0, NetworkTime, '$NetworkTime') WHERE TransNum ='".$TransNum."'";
    $query2 = "UPDATE user SET name=IF(LENGTH('$name')=0, name, '$name'), gender=IF(LENGTH('$gender')=0, gender, '$gender'), birthdate=IF(LENGTH('$birthdate')=0, birthdate, '$birthdate'), phone=IF(LENGTH('$phone')=0, phone, '$phone'), address=IF(LENGTH('$address')=0, address, '$address') WHERE ID ='".$ID."'";

    echo $query1."<br>".$query2;
    mysqli_query($link,$query1);
    mysqli_query($link,$query2);

?>

