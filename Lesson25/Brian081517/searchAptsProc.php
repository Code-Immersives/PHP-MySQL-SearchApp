<!DOCTYPE html>

<html>

<head>
    <title>Search Results</title>
    <link href="../../css/brian-styles0817.css" rel="stylesheet" type="text/css">
    <?php      
        require_once("../../conn/connApts.php");
    
        // get the vars from the Search Form
        $bdrms = $_GET['bdrms'];
        $baths = $_GET['baths'];
        $minRent = $_GET['minRent'];
        $maxRent = $_GET['maxRent'];
        $orderBy = $_GET['orderBy']; // Sort Menu
        $ascDesc = $_GET['ascDesc']; // ASC or DESC Radio Button
        $rowsPerPg = $_GET['rowsPerPg'];
    
        // SQL SELECT statement reads records from table(s)
        $query = "SELECT * FROM apartments, buildings, neighborhoods 
                WHERE apartments.bldgID = buildings.IDbldg 
                AND buildings.hoodID = neighborhoods.IDhood
                AND rent BETWEEN '$minRent' AND '$maxRent'";
    
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
    
        // !*!*!*!* Keyword Search Code Start !*!*!*!*
        // search handles word(s), and also recognizes phrase in double quotes
        if(isset($_GET['search'])) {  // if the user entered any text into the search box
            $search = $_GET['search'];
            $i = strlen($search); // the length of the search word(s)
            // first index is zero, so last index is one less than str len
            $last = $i-1; // index value of last character in string
            $firstChar = substr($search, 0, 1); // returns first char in str
            $lastChar = substr($search, $last); // returns last char in str
            //check to see if the search is a phrase in double quotes
            if($firstChar=='"' && $lastChar=='"') { // if search IS a quoted phrase
                //remove the quotes from around the search string
                $search = str_replace('"', "", $search);
                $query .= " AND (bldgDesc LIKE '%$search%'
                            OR aptDesc LIKE '%$search%'
                            OR aptTitle LIKE '%$search%'
                            OR hoodDesc LIKE '%$search%')";
            } else { // the search is NOT a quoted phrase 
                // "explode" the search string to return an array, one word per index
                $keywordArr = explode(" ", $search);  // explode takes 2 params: the delimiter and the string
                $keywordArrCount = count($keywordArr); // returns how many items are in array
                for($i=0; $i<$keywordArrCount; $i++) {
                    //if($i==0) {
                    $query .= " AND (bldgDesc LIKE '%$keywordArr[$i]%'
                                OR aptDesc LIKE '%$keywordArr[$i]%'
                                OR aptTitle LIKE '%$keywordArr[$i]%'
                                OR hoodDesc LIKE '%$keywordArr[$i]%')";
                } /// end for loop
            } // end if-else 
        }  // end if isset
        // !*!*!*!* Keyword Search Code End !*!*!*!*
    
        // concat the query based on user choices in the form
        // concat bdrms and baths IF and ONLY IF choice is NOT "Any"
        if($bdrms!=-1) { // if Bedrooms choice is NOT "Any"
            // Choice is NOT "Any" BUT is it a plus-sign choice?
            // if rounding off value leaves same value it's an int
            if($bdrms<10) { // if choice is int (0, 1, 2, 3)
                // int values are NOT plus-sign choices
                $query .= " AND bdrms='$bdrms'"; // filter for exact value
            } else { // rounding changed value, so it is a plus-choice
                // before filtering, plus-sign value must be rounded down
                $bdrms = $bdrms/10; // 1.1 rounds to 1, 2.1 rounds to 2
                $query .= " AND bdrms>='$bdrms'"; // filter RANGE (1+, 2+)
            }    
        }
    
        if($baths!=-1) { // if Bathrooms choice is NOT "Any"
             // Choice is NOT "Any" BUT is it a plus-sign choice?
             // if value < 10, it is NOT a plus-sign choice (1.5, 2, 2.5)
             if($baths<10) { // if it is NOT a plus-sign choice
                $query .= " AND baths='$baths'"; // filter for exact value
             } else { // value >= than 10 (plus sign choice: 15, 20)
                 $baths = $baths/10; // divide value by 10 (15/10=1.5)
                  $query .= " AND baths>='$baths'"; // filter RANGE (1.5+, 2+)
             }
        }
    
        // concat for the checkboxes IF and ONLY IF checked
        if(isset($_GET['pets'])) { // if Pet-friendly is checked
            $query .= " AND isPets=1"; // only return pet-friendly results
        }
    
        if(isset($_GET['doorman'])) { // if Doorman Building is checked
            $query .= " AND isDoorman=1"; // only return doorman bldg results
        }
                
        $query .= " ORDER BY $orderBy $ascDesc";
    
        // carry out the actual order: read the records
        //$result = mysqli_query($conn, $query); 
        // pass the first row of results to $row variable
        // $row = mysqli_fetch_array($result);
    
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
</head>

<body>
        <table width="800px" border="1px" cellpadding="5px" align="center">
        
            <tr>
                <td colspan="14">
                   <h2>Search Results</h2>
                </td>
            </tr>
            
            <!-- NPFL CODE BLOCK 3 of 3 START -->
            <tr>
              <td colspan="15" align="left">    
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="searchApts.php">New Search</a>
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
            
            <?php 
                // only output the header row if there is at least 1 result
                if(mysqli_num_rows($result)>0) { // if 1+ result(s); output header row
                    echo '<tr>
                    <th>ID</th>
                    <th>Apt</th>
                    <th>Building</th>
                    <th>Neighborhood</th>
                    <th>Bdrms</th>
                    <th>Baths</th>
                    <th>Rent</th>
                    <th>Floor</th>
                    <th>Sqft</th>
                    <th>Status</th>
                    <th>Doorman</th>
                    <th>Pets</th>
                    <th>Parking</th>
                    <th>Gym</th>
                    </tr>'; 
                } else { // there are ZERO results, so no need for header row
                    echo '<tr><td><h3 align="center"><a href="searchApts.php">
                            No Results Found! Try Again!</a></h3></td></tr>';
                }
            ?>
            
        <?php while($row = mysqli_fetch_array($result)) { ?>

            <tr>
                <td><?php echo $row['IDapt']; ?></td>
                
                <td>
                    <a href="aptDetails.php?IDapt=<?php echo $row['IDapt']; ?>">
                        <?php echo $row['apt']; ?>
                    </a>
                </td>
                
                <td>
                    <a href="bldgDetails.php?IDbldg=<?php echo $row['IDbldg']; ?>">
                        <?php echo $row['bldgName']; ?>
                    </a>
                </td>
                
                <td><?php echo $row['hoodName']; ?></td>
                
                <td>
                    <?php
                        if($row['bdrms']==0) { // convert 0 to "Studio"
                            echo "Studio";
                        } else {                           
                            echo $row['bdrms'];
                        }
                    ?>
                </td>
                
                <td><?php echo $row['baths']; ?></td>
                <td><?php echo $row['rent']; ?></td>
                <td><?php echo $row['floor']; ?></td>
                <td><?php echo $row['sqft']; ?></td>
                
                <td>
                    <?php 
                        if($row['isAvail']==0) {
                            echo "Occupied";
                        } else {
                            echo "Available";
                        }
                    ?>
                </td>
                
                <td>
                    <?php 
                        if($row['isDoorman']==0) {
                            echo "No";
                        } else {
                            echo "Yes";
                        }
                    ?>
                </td>
                
                <td>
                    <?php 
                        if($row['isPets']==0) {
                            echo "No";
                        } else {
                            echo "Yes";
                        }
                    ?>
                </td>
                
                <td>
                    <?php 
                        if($row['isParking']==0) {
                            echo "No";
                        } else {
                            echo "Yes";
                        }
                    ?>
                </td>
                
                <td>
                    <?php 
                        if($row['isGym']==0) {
                            echo "No";
                        } else {
                            echo "Yes";
                        }
                    ?>
                </td>
            </tr>
            
        <?php } ?>
            
            <?php   //$jsonStr .= '{ IDapt: ' . $row['IDapt'] . ', apt: ' . $row['apt'] . ', bldgName: ' . $row['bldgName'] . ', hoodName: ' . $row['hoodName'] . ', bdrms: ' . $row['bdrms'] . ', baths: ' . $row['baths'] . ', rent: ' . $row['rent'] . ', floor: ' . $row['floor'] . ', sqft: ' . $row['sqft'] . ', isAvail: ' . $row['isAvail'] . ', isDoorman: ' . $row['isDoorman'] . ', isPets: ' . $row['iPets'] . ', isParking: ' . $row['iParking'] . ', isGym: ' . $row['isGym'] . '}, '; ?>
        
        </table>
    
</body>
    
</html>