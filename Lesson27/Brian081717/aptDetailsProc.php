<!DOCTYPE html>

<html>

<head>
    <title>Update Apt</title>
    
    <?php
        
        require_once('../../conn/connApts.php'); // import required connection script
       
        // pass incoming form variables to "regular" vars
        $aptTitle = $_POST['aptTitle']; // POST must match name in form obj
        $aptDesc = $_POST['aptDesc']; // name="aptDesc" becomes $_POST['aptDesc']
        // escape single and double quotes from text so as not to break query
        $aptTitle = mysqli_real_escape_string($conn, $aptTitle);
        $aptDesc = mysqli_real_escape_string($conn, $aptDesc);
        // numbers don't need to have quotes escaped
        $rent = $_POST['rent'];
        $floor = $_POST['floor'];
        $bdrms = $_POST['bdrms'];
        $baths = $_POST['baths'];
        $sqft = $_POST['sqft'];
        $isAvail = $_POST['isAvail']; // referred to as Status
        // hidden field from form has ID of the apt we are updating
        $IDapt = $_POST['IDapt'];
    
        // Write the Query for Updating the Record in the Apartments Table
        $query = "UPDATE apartments SET aptTitle='$aptTitle', aptDesc='$aptDesc', rent='$rent', floor='$floor', bdrms='$bdrms', baths='$baths', sqft='$sqft', isAvail='$isAvail'
        WHERE IDapt='$IDapt'";
    
        mysqli_query($conn, $query);
    
    ?>
    
</head>

<body>

    <h1 align="center">
        <?php 
            if(mysqli_affected_rows($conn)==1) { // if update worked
               echo 'Apartment Listing Updated Successfully!
               <br><a href="searchApts.php">Update Another Listing</a>';
            } else {
                echo 'Sorry! Couldn\'t Save Changes!
                <br><a href="searchApts.php">Try Again</a>';
            }
        ?>
        
    </h1>

</body>
    
</html>