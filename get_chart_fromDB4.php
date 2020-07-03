<?php 

    include("connection.php");
    session_start();
    
    $sql = "select contractU, count(*) as frequency ,count(*)/(select count(*) from user) as ratio from user group by contractU;";
    $result = mysqli_query($link, $sql) or die("Error in Selecting " . mysqli_error($connection));
	
	//Transform SQL Result to JASON Table Data
	$table = array();
    // COLUMNS:
    $table['cols'] = array(
        array('label' => 'Contract', 'type' => 'string'),
        array('label' => '人數', 'type' => 'number'),
    );
	
    // ROWS:
    $rows = array();
    while($r =mysqli_fetch_assoc($result))
    { $temp = array();
      $temp[] = array('v' => (string) $r['contractU']); 
      $temp[] = array('v' => (int) $r['frequency']);
	  $rows[] = array('c' => $temp);
    }
	$table['rows'] = $rows;
	
    $jsonTable = json_encode($table);
	
	echo $jsonTable;
	
?>
