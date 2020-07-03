<?php 

    include("connection.php");
    session_start();
    
    $sql = "select ID, transactionMonth, innerCall, outerCall, internationalCall from transaction where ID = 'F123456785' group by transactionMonth,innerCall, outerCall, internationalCall;";
    $result = mysqli_query($link, $sql) or die("Error in Selecting " . mysqli_error($connection));
	
	//Transform SQL Result to JASON Table Data
	$table = array();
	// Labels for your chart, these represent the column titles
    // Note that one column is in "string" format and another one is in "number" format 
	// as pie chart only required "numbers" for calculating percentage and string will be used for column title
    // COLUMNS:
    $table['cols'] = array(
        array('label' => 'Month', 'type' => 'string'),
        array('label' => 'inner call', 'type' => 'number'),
        array('label' => 'outer call', 'type' => 'number'),
        array('label' => 'internation call', 'type' => 'number')
    );
	
    // ROWS:
    $rows = array();
    while($r =mysqli_fetch_assoc($result))
    { $temp = array();
      $temp[] = array('v' => (string) $r['transactionMonth']); 
      $temp[] = array('v' => (int) $r['innerCall']);
      $temp[] = array('v' => (int) $r['outerCall']);
      $temp[] = array('v' => (int) $r['internationCall']);
	  $rows[] = array('c' => $temp);
    }
	$table['rows'] = $rows;
	
    $jsonTable = json_encode($table);
	
	echo $jsonTable;
	
?>
