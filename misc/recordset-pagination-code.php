<?php

    // NPFL CODE BLOCK 1 of 3 START
    //***!!! recordset pagination NPFL code block START  !!! **** //
    // this goes between the opening $query and the first concatenated $query .= )
    $currentPage = $_SERVER["PHP_SELF"];  // this page processes itself
    $maxRows = $rowsPerPg;// set how many results to display per page
    $pageNum = 0; // the first Page is Zero
    if(isset($_GET['pageNum'])) {  // true on all BUT the first results load
        $pageNum = $_GET['pageNum'];
    }
    $startRow = $pageNum * $maxRows;  // set the first record to display
    //***!!! NPFL code block 1 of 3 END  !!! **** //
    
    
    // NPFL CODE BLOCK 2 of 3 START
    /*  ######  START RECORDSET PAGINATION CODE ########    */
    // This code block requires mysqli_query($conn, $query);
    $query_limit = sprintf("%s LIMIT %d, %d", $query, $startRow, $maxRows); 
    $result = mysqli_query($conn, $query_limit) or die(mysql_error());
     
    if(isset($_GET['totalRows'])) { // true only if not on first page
      $totalRows = $_GET['totalRows'];
    } else {
      $all = mysqli_query($conn, $query);
      $totalRows = mysqli_num_rows($all);
    }
    //for 17 records with 5 per page, we need 4 total pages: 
    // ceil = round up, so ceil(17/5) = 3.4, which rounds up to 4, less 1 equals 3
    $totalPages = ceil($totalRows/$maxRows)-1;  
     
    $queryString = "";
    if (!empty($_SERVER['QUERY_STRING'])) {
      $params = explode("&", $_SERVER['QUERY_STRING']);
      $newParams = array();
      foreach ($params as $param) {
        if (stristr($param, "pageNum") == false && 
            stristr($param, "totalRows") == false) {
          array_push($newParams, $param);
        }
      }
      if (count($newParams) != 0) {
        $queryString = "&" . htmlentities(implode("&", $newParams));
      }
    }
    $queryString = sprintf("&totalRows=%d%s", $totalRows, $queryString);
    //***!!! NPFL code block 2 of 3 END  !!! **** //    
        
?>

<!-- NPFL CODE BLOCK 3 of 3 START -->
<tr>
  <td colspan="15" align="left">    
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="search.php"><< New Search</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <!-- show the results range: "Results X-Z of Z" -->
<strong>Results <?php echo ($startRow + 1); ?> - <?php echo min($startRow + $maxRows, $totalRows); ?> of <?php echo $totalRows; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
              <!-- The Next link carries all the POST vars, turning them into GET  -->
    <?php 
          if($pageNum < $totalPages) { // Show if not last page ?>
         <a href="<?php printf("%s?pageNum=%d%s", $currentPage, min($totalPages, $pageNum + 1), $queryString); ?>">Next</a> &nbsp;&nbsp;| &nbsp;&nbsp;
   <?php } // Show if not last page ?>

       <?php 
              if($pageNum > 0) { // Show if not first page ?>
                <a href="<?php printf("%s?pageNum=%d%s", $currentPage, max(0, $pageNum - 1), $queryString); ?>">Previous</a> &nbsp;&nbsp;| &nbsp;&nbsp;
    <?php } // Show if not first page ?>

       <?php
      if($pageNum > 0) { // Show if not first page ?>
                <a href="<?php printf("%s?pageNum=%d%s", $currentPage, 0, $queryString); ?>">First</a> &nbsp;&nbsp;| &nbsp;&nbsp;
   <?php } // Show if not first page ?>

      <!-- The Last link carries all the POST vars, turning them into GET  -->
        <?php
       if($pageNum < $totalPages) { // Show if not last page ?>
                 <a href="<?php printf("%s?pageNum=%d%s", $currentPage, $totalPages, $queryString); ?>">Last</a>
         <?php } // Show if not last page ?>    
  </td>
</tr>
 <!-- ######  END NPFL CODE BLOCK 3 OF 3 -- DONE!! ########   -->