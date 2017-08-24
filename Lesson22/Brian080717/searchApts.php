<!DOCTYPE html>

<html>

<head>
    <title>Apartment Search</title>
    <link href="../../css/brian-styles0817.css" rel="stylesheet" type="text/css">
</head>

<body>
    
    <form name="form1" id="form1" method="post" action="searchAptsProc.php">
    
        <table width="500px" border="1px" cellpadding="5px" align="center">
        
            <tr>
                <td colspan="2">
                    <h3 align="center">Apartment Search</h3>
                </td>
            </tr>
            
            <tr>
                <td>
                    Number of Bedrooms:<br>
                    <select name="bdrms" id="bdrms" 
                            style="font-size:1.25rem; background-color:orange; 
                                   color:white; width:250px; padding:5px">
                        <option value="0">Studio</option>
                        <option value="1" selected>1 Bedroom</option>
                        <option value="2">2 Bedrooms</option>
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
                        <option value="1">1 Bath</option>
                        <option value="1.5">1.5 Baths</option>
                        <option value="2">2 Baths</option>
                        <option value="2.5">2.5 Bedrooms</option>
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
                <td>
                    <input type="submit" name="submit" id="submit" value="Submit">
                </td>
            </tr>
        
        </table>
    
    </form>
    
    
    
    

</body>
    
</html>