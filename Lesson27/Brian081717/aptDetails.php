<!DOCTYPE html>

<html>

<head>
    
    <link href="../../css/brian-styles0817.css" rel="stylesheet" type="text/css">

    <link href="../../css/slideshow.css" rel="stylesheet" type="text/css">
    
    <style>
        input {
            width: 55px;
            font-size: 1rem;
        }
        select {
            width: 150px;
            font-size: 1rem;
            background-color: orange;
            color: white;
            font-family: sans-serif;
        }
    </style>

    <?php
    
        require_once("../../conn/connApts.php");
    
        $IDapt = $_GET['IDapt']; // GET the IDbldg from URL
        // query the buildings table for that 1 building
        $query = "SELECT * FROM apartments, buildings 
        WHERE apartments.bldgID=buildings.IDbldg
        AND IDapt='$IDapt'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result); // There's only the 1 row
        
        // query the images table for all pics for this bldg
        // in the images table, each pic has a foreignID which equals IDbldg
        // also in images table, catID=2 refers to bldgs (catID = 1 = apts)
        $query2 = "SELECT imgName FROM images WHERE catID=1
                    AND foreignID='$IDapt'";
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
    
    <title>Apt #<?php echo $row['apt']; ?> in <?php echo $row['bldgName']; ?></title>
    
</head>

<body>

    <div id="container">
        
      <form name="form1" id="form1" method="post" action="aptDetailsProc.php">
        
          <!-- IDapt required by form processor, but user does not
                need to see this form element, so type="hidden" -->
        <input type="hidden" name="IDapt" id="IDapt"
                   value="<?php echo $row['IDapt']; ?>">

        <table width="100%" border="1px" cellpadding="5px">
            
            <tr>
                <td colspan="3">
                    
                    <button onclick="goBack()">Back to Search Results</button>
                    
                    <h1>About Apt #<?php echo $row['apt']; ?> in <?php echo $row['bldgName']; ?> 
                         &nbsp; ID: <?php echo $row['IDapt']; ?>
                    </h1>
                    
                    <h3>Apt Listing Title:<br>
                        <textarea name="aptTitle" id="aptTitle" style="font-size:1.5rem"
                                  rows="3" cols="65"><?php echo $row['aptTitle']; ?></textarea>   
                    </h3>
                    
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
                                
                <td>Rent:<br>$
                    <input type="number" name="rent" id="rent" 
                           value="<?php echo $row['rent']; ?>">
                </td>
                
                <td>Floor: 
                    <input type="number" name="floor" id="floor" 
                           value="<?php echo $row['floor']; ?>">
                </td>
                
            </tr>
            
            <!-- LAB ASSIGNMENT: Study slideshow3.html and slideshow3.js (See Air Drop) 
            It features totally empty obdy: <body></body>  and no CSS -- all the html and styles are
            done in the JS file ! Study it and retype it line by line. Rinse and repeat until you can
            code it cold off the top of your head. -->
            
            <tr>
                <td>
                    Bedrooms: 
                    <select name="bdrms" id="bdrms">
                        <option value="0" <?php if($row['bdrms']==0) { echo 'selected'; } ?> >Studio</option>
                        <option value="1" <?php if($row['bdrms']==1) { echo 'selected'; } ?> >1 Bedroom</option>
                        <option value="2" <?php if($row['bdrms']==2) { echo 'selected'; } ?> >2 Bedrooms</option>
                        <option value="3" <?php if($row['bdrms']==3) { echo 'selected'; } ?> >3 Bedrooms</option>
                    </select>
                    
                    <br>
                    Baths: 
                    <select name="baths" id="baths">
                        <option value="1" <?php if($row['baths']==1) { echo 'selected'; } ?> >1 Bath</option>
                        <option value="1.5" <?php if($row['baths']==1.5) { echo 'selected'; } ?> >1.5 Baths</option>
                        <option value="2" <?php if($row['baths']==2) { echo 'selected'; } ?> >2 Baths</option>
                        <option value="2.5" <?php if($row['baths']==2.5) { echo 'selected'; } ?> >2.5 Baths</option>
                    </select>
                </td>
                <td>
                    Status: 
                    <select name="isAvail" id="isAvail">
                        <option value="0" <?php if($row['isAvail']==0) { echo 'selected'; } ?> >Occupied</option>
                        <option value="1" <?php if($row['isAvail']==1) { echo 'selected'; } ?> >Available</option>
                    </select>
                    <br>
                    Square Feet:
                    <input type="number" name="sqft" id="sqft" 
                           value="<?php echo $row['sqft']; ?>">
                </td>
            </tr>
            
            <tr>
                <td colspan="2" align="left">
                    <textarea name="aptDesc" id="aptDesc" style="font-size:1rem"
                                  rows="12" cols="35"><?php echo $row['aptDesc']; ?></textarea>
                </td>
            </tr>
            
            <tr>
                <td colspan="3" align="right">
                    <input type="submit" name="submit" id="submit" 
                           value="Save Changes" style="width:30%">
                </td>
            </tr>

        </table>
          
      </form>
        
    </div><!-- close container -->
    
    <script src="../../js/slideshow.js"></script>

</body>
    
</html>