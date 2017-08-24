<!DOCTYPE html>

<html>

<head>
    
    <link href="../../css/brian-styles0817.css" rel="stylesheet" type="text/css">

    <link href="../../css/slideshow.css" rel="stylesheet" type="text/css">

    <?php
    
        require_once("../../conn/connApts.php");
    
        $IDbldg = $_GET['IDbldg']; // GET the IDbldg from URL
        // query the buildings table for that 1 building
        $query = "SELECT * FROM buildings WHERE IDbldg='$IDbldg'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result); // There's only the 1 row
        
        // query the images table for all pics for this bldg
        // in the images table, each pic has a foreignID which equals IDbldg
        // also in images table, catID=2 refers to bldgs (catID = 1 = apts)
        $query2 = "SELECT imgName FROM images WHERE catID=2
                    AND foreignID='$IDbldg'";
        $result2 = mysqli_query($conn, $query2);
        $row2 = mysqli_fetch_array($result2); // There are multiple results
        
        // make an array out of the loaded images
        $imgArr = array(); // new empty PHP array
        while($row2=mysqli_fetch_array($result2)) {
            $imgName = $row2['imgName'];
            array_push($imgArr, $imgName);
        }
        // copy the PHP array to JS (JSON) array string
        $js_imgArr = json_encode($imgArr);
        //$imgArrLen = count($imgArr); // the length of the array
        // populate (push) the imgArr with dynamic file names
        //imgArr.push("bunny02.jpg");
    ?>
    <script>
     //pass the php-generated JSON array to a plain js array
        var imgArr = new Array(); // this is the slideshow array
        imgArr = <?php echo $js_imgArr; ?>; // concatenate the file name from the array into an img 
        function goBack() {
            window.history.back();
        }
    </script>
    
    <title><?php echo $row['bldgName']; ?></title>
    
</head>

<body>

    <div id="container">
        
        <table width="100%" border="1px" cellpadding="5px">
            
            <tr>
                <td colspan="3">
                    
                    <button onclick="goBack()">Back to Search Results</button>
                    
                    <h1>About <?php echo $row['bldgName']; ?></h1>
                    
                    <!-- output amenitites icons if (and only if) the amenity exists -->
                    <?php
                        // if pet-friendly building, output pet icon
                        if($row['isPets']==1) { // 1 means pet-friendly 
                            echo '<img src="../../images/amenitiesIcons/pets.jpg"> &nbsp; ';
                        }
                    
                       // if doorman building, output doorman icon
                        if($row['isDoorman']==1) { // 1 means pet-friendly 
                            echo '<img src="../../images/dog.jpg"
                                    width="47px" height="auto"
                                    style="border-radius:5px; border:2px solid #ccc"> &nbsp; ';
                        }
                    
                        if($row['isParking']==1) {
                            echo '<img src="../../images/amenitiesIcons/parking.jpg"> &nbsp; ';
                        }
                    
                        if($row['isGym']==1) {
                            echo '<img src="../../images/amenitiesIcons/gym.jpg"> &nbsp; ';
                        }
                    
                        if($row['isElevator']==1) {
                            echo '<img src="../../images/amenitiesIcons/elevator.jpg"> &nbsp; ';
                        }
                    
                        if($row['isFireplace']==1) {
                            echo '<img src="../../images/amenitiesIcons/fireplace.jpg"> &nbsp; ';
                        }
                    
                    
                    ?>
                    
                </td>
            </tr>       
            <tr>
                <td rowspan="3">
                    <!-- SLIDESHOW -->
                     <div id="slideshow">
                       <div id="bigPic">
                <img src="../../images/propPics/<?php echo $imgArr[1]; ?>">
                        </div>      
                       <div id="thumbs">
                     </div>
                    </div><!--close id="slideshow"-->
                </td>
                                
                <td>Year Built: <?php echo $row['yearBuilt']; ?></td>
                <td>Floors: <?php echo $row['floors']; ?></td>
            </tr>
            
            <tr>
                <td colspan="2" align="left">
                    <?php echo $row['bldgDesc']; ?>
                </td>
            </tr>
            
            <tr>
                <td colspan="2">
                    Address: <?php echo $row['address']; ?><br>
                    Phone: <?php echo $row['phone']; ?> | 
                    Email: <?php echo $row['email']; ?>
                </td>
            </tr>
 
        </table>
        
    </div><!-- close container -->
    
    <script src="../../js/slideshow.js"></script>

</body>
    
</html>