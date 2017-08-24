<!DOCTYPE html>

<html>

<head>
    <title>Select Apts</title>
    <link href="../../css/brian-styles0817.css" rel="stylesheet" type="text/css">
    <?php      
        require_once("../../conn/connApts.php");
    
        // SQL SELECT statement reads records from table(s)
        $query = "SELECT * FROM apartments, buildings, neighborhoods 
                WHERE apartments.bldgID = buildings.IDbldg 
                AND buildings.hoodID = neighborhoods.IDhood
                AND bdrms>=0 AND rent<=30000 AND isPets<2
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
                   <h2>Lofty Heights Apartments</h2>
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
                <th>Vacant</th>
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
                <td><?php echo $row['bdrms']; ?></td>
                <td><?php echo $row['baths']; ?></td>
                <td><?php echo $row['rent']; ?></td>
                <td><?php echo $row['floor']; ?></td>
                <td><?php echo $row['sqft']; ?></td>
                <td><?php echo $row['isAvail']; ?></td>
                <td><?php echo $row['isDoorman']; ?></td>
                <td><?php echo $row['isPets']; ?></td>
                <td><?php echo $row['isParking']; ?></td>
                <td><?php echo $row['isGym']; ?></td>
            </tr>
            
        <?php } ?>
        
        </table>
    
</body>
    
</html>