<!DOCTYPE html>

<html>

<head>
    <title>Apartment Search</title>
    <link href="../../css/brian-styles0817.css" rel="stylesheet" type="text/css">
</head>
    
    <script>
    
        function validateMinMaxRent() {
            var minRent = document.getElementById("minRent").value;
            var maxRent = document.getElementById("maxRent").value;
            if(minRent>maxRent) {
                alert("Minimum Rent Cannot Be Greater Than Maximum Rent!");
                return false;
            }
        }
            
    </script>

<body>
    
    <form name="form1" id="form1" method="get" action="searchAptsProc.php" onsubmit="return validateMinMaxRent()">
    
        <table width="500px" border="1px" cellpadding="5px" align="center">
        
            <tr>
                <td>
                    <h3 align="center">Apartment Search</h3>
                </td>
            </tr>
            
            <tr style="background-color:yellow">
                <td>
                    Quick Search by Apt ID: <input type="number" name="IDapt" id="IDapt" style="width:65px">
                </td>
            </tr>
            
            <tr>
                <td>
                    <input type="search" name="search" id="search" placeholder="Search">
                </td>
            </tr>
            
            <tr>
                <td>
                    Number of Bedrooms:<br>
                    <select name="bdrms" id="bdrms" 
                            style="font-size:1.25rem; background-color:orange; 
                                   color:white; width:250px; padding:5px">
                        <option value="-1">Any</option>
                        <option value="0">Studio</option>
                        <option value="1">1 Bedroom</option>
                        <option value="10">1+ Bedroom</option>
                        <option value="2">2 Bedrooms</option>
                        <option value="20">2+ Bedroom</option>
                        <option value="3">3 Bedrooms</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>
                    Number of Baths:<br>
                    <select name="baths" id="baths" 
                            style="font-size:1.25rem; background-color:orange; 
                                   color:white; width:250px; padding:5px">
                        <option value="-1">Any</option>
                        <option value="1">1 Bath</option>
                        <option value="1.5">1.5 Baths</option>
                        <option value="15">1.5+ Baths</option>
                        <option value="2">2 Baths</option>
                        <option value="20">2+ Baths</option>
                        <option value="2.5">2.5 Baths</option>
                    </select>
                </td>
            </tr>
            
             <tr>
                <td>
                    Minimum Rent:<br>
                    <select name="minRent" id="minRent" 
                            style="font-size:1.25rem; background-color:orange; 
                                   color:white; width:250px; padding:5px">
                        <option value="0">Any</option>
                        <?php
                            $i=1000;
                            while($i<=5000) {
                                echo '<option value="' . $i . '">$' . $i . '</option>';
                                $i += 500;
                            }
                        ?>
                        
                    </select>
                </td>
            </tr>
            
                   <tr>
                <td>
                    Maximum Rent:<br>
                    <select name="maxRent" id="maxRent" 
                            style="font-size:1.25rem; background-color:orange; 
                                   color:white; width:250px; padding:5px">
                        <option value="99999">Any</option>
                        <?php
                            $i=2000;
                            while($i<=8000) {
                                echo '<option value="' . $i . '">$' . $i . '</option>';
                                $i += 500;
                            }
                        ?>
                        
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>
                    <p align="center">Additional monthly charges apply for 
                        the following amenities. Check as many as you like:</p>
                </td>
            </tr>
            
             <tr>
                <td align="center">
                    
                    <input type="checkbox" name="pets" id="pets" value="pets" style="width:25px">
                    <label for="pets">Pet-Friendly Building</label><br>
                    
                    <input type="checkbox" name="doorman" id="doorman" value="doorman" style="width:25px">
                    <label for="doorman">Doorman Building</label>
                
                 </td>
            </tr>
            
            <tr>
                <td>Sort: &nbsp; 
                    <select name="orderBy" id="orderBy"
                            style="font-size:1.25rem; background-color:orange; 
                                   color:white; width:150px; padding:5px; margin-bottom:5px">
                        <option value="bdrms">Bedrooms</option>
                        <option value="bldgName">Building</option>
                        <option value="rent">Rent</option>
                        <option value="sqft">Square Feet</option>
                    </select>
                    <br><!-- Radio Button Group for choosing ASC or DESC-->
                    <input type="radio" name="ascDesc" value="ASC"
                           style="width:15px" checked> Ascending  &nbsp; 
                    <input type="radio" name="ascDesc" value="DESC"
                           style="width:15px"> Descending 
                    <br>Results per page:
                    <select name="rowsPerPg" id="rowsPerPg" 
                            style="font-size:1.25rem; background-color:orange; 
                                   color:white; width:65px; padding:5px; margin-top:5px">
                        <option value="5">5</option>
                        <option value="10" selected>10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                    
                </td>
            </tr>
            
            <tr>
                <td>
                    <input type="submit" name="submit" id="submit" value="Submit">
                </td>
            </tr>
        
        </table>
    
    </form>
    
    
    
    

</body>
    
</html>