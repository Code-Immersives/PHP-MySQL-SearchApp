<!DOCTYPE html>

<html>

<head>
    <title>Apt Rent Estimator</title>
    <link href="../../css/brian-styles0817.css" rel="stylesheet" type="text/css">
</head>

<body>
    
    <form name="form1" id="form1" method="post" action="aptRentEstProc.php">
    
        <table width="500px" border="1px" cellpadding="5px" align="center">
        
            <tr>
                <td colspan="2">
                    <h3 align="center">Apt Rent Estimator</h3>
                </td>
            </tr>
            
            <tr>
                <td>
                    Number of Bedrooms:<br>
                    <select name="bdrms" id="bdrms" 
                            style="font-size:1.25rem; background-color:orange; 
                                   color:white; width:250px; padding:5px">
                        <option value="1000">Studio ($1,000)</option>
                        <option value="1400" selected>1 Bedroom ($1,400)</option>
                        <option value="1800">2 Bedrooms ($1,800)</option>
                        <option value="2300">3 Bedrooms ($2,300)</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>
                    Number of Baths:<br>
                    <select name="baths" id="baths" 
                            style="font-size:1.25rem; background-color:orange; 
                                   color:white; width:250px; padding:5px">
                        <option value="0">1 Bath (+$0)</option>
                        <option value="300">1.5 Baths ($300)</option>
                        <option value="650">2 Baths ($650)</option>
                        <option value="950">2.5 Bedrooms ($950)</option>
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
                    <input type="checkbox" name="riverview" id="riverview" value="350" style="width:25px">
                    <label for="doorman">Riverview Balcony (+$350/mo)</label><br>
                    <input type="checkbox" name="doorman" id="doorman" value="0.2" style="width:25px">
                    <label for="doorman">Doorman Building (+20%/mo)</label>
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