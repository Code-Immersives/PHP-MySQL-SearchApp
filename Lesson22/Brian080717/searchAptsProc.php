<!DOCTYPE html>

<html>

<head>
    <title>Search Results</title>
    <link href="../../css/brian-styles0817.css" rel="stylesheet" type="text/css">
    <?php      
        require_once("../../conn/connApts.php");
    
        // get the vars from the Search Form
        $bdrms = $_POST['bdrms'];
        $baths = $_POST['baths'];
    
        // SQL SELECT statement reads records from table(s)
        $query = "SELECT * FROM apartments, buildings, neighborhoods 
                WHERE apartments.bldgID = buildings.IDbldg 
                AND buildings.hoodID = neighborhoods.IDhood
                AND bdrms='$bdrms' AND baths='$baths' 
                ORDER BY rent DESC";
    
        // carry out the actual order: read the records
        $result = mysqli_query($conn, $query); 
        // pass the first row of results to $row variable
        // $row = mysqli_fetch_array($result);
    ?>
</head>

<body>
        <table width="800px" border="1px" cellpadding="5px" align="center">
        
            <tr>
                <td colspan="14">
                   <h2>Search Results</h2>
                </td>
            </tr>
            
            <tr>
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
            </tr>
            
        <?php while($row = mysqli_fetch_array($result)) { ?>
            
            <tr>
                <td><?php echo $row['IDapt']; ?></td>
                <td><?php echo $row['apt']; ?></td>
                <td><?php echo $row['bldgName']; ?></td>
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
        
        </table>
    
</body>
    
</html>