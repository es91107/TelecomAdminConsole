<?php 

    include("connection.php");
    session_start();
    
    $sql = "select ID, transactionMonth, contractAmount, TotalAmount-contractAmount as SurpassAmount from transaction where ID = '".$_SESSION['id_result']."' group by transactionMonth,contractAmount,TotalAmount;";
    $result = mysqli_query($link, $sql) or die("Error in Selecting " . mysqli_error($connection));
	
	//Transform SQL Result to JASON Table Data
	$table = array();
	// Labels for your chart, these represent the column titles
    // Note that one column is in "string" format and another one is in "number" format 
	// as pie chart only required "numbers" for calculating percentage and string will be used for column title
    // COLUMNS:
    $table['cols'] = array(
        array('label' => 'Month', 'type' => 'string'),
        array('label' => 'Contract amount', 'type' => 'number'),
        array('label' => 'Surpass amount', 'type' => 'number')
    );
	
    // ROWS:
    $rows = array();
    while($r =mysqli_fetch_assoc($result))
    { $temp = array();
      $temp[] = array('v' => (string) $r['transactionMonth']); 
      $temp[] = array('v' => (int) $r['contractAmount']);
      $temp[] = array('v' => (int) $r['SurpassAmount']);
	  $rows[] = array('c' => $temp);
    }
	$table['rows'] = $rows;
	
    $jsonTable = json_encode($table);
	
	echo $jsonTable;

?>
