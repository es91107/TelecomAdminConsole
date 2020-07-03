<?php 

    include("connection.php");
    session_start();
    
    $sql = "select contractU, count(*) as 'age0~22' from user where substr((current_date()-birthdate),1,2) < '23' group by contractU;";
    $result = mysqli_query($link, $sql) or die("Error in Selecting " . mysqli_error($connection));
	
	//Transform SQL Result to JASON Table Data
	$table = array();
	// Labels for your chart, these represent the column titles
    // Note that one column is in "string" format and another one is in "number" format 
	// as pie chart only required "numbers" for calculating percentage and string will be used for column title
    // COLUMNS:
    $table['cols'] = array(
        array('label' => 'ContractU', 'type' => 'string'),
        array('label' => 'age0~22', 'type' => 'number'),
    );
	
    // ROWS:
    $rows = array();
    while($r =mysqli_fetch_assoc($result))
    { $temp = array();
      $temp[] = array('v' => (string) $r['contractU']); 
      $temp[] = array('v' => (int) $r['age0~22']);
	  $rows[] = array('c' => $temp);
    }
	$table['rows'] = $rows;
	
    $jsonTable = json_encode($table);
	
	echo $jsonTable;
	
?>
