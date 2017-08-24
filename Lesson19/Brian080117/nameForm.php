<!DOCTYPE html>

<html>

<head>
    <title>Name Form</title>
    <link href="../../css/brian-styles0817.css" rel="stylesheet" type="text/css">
</head>

<body>
    
    <form name="form1" id="form1" method="post" action="nameProc.php">
    
        <table width="350px" border="1px" cellpadding="5px" align="center">
        
            <tr>
                <td colspan="2">
                    <h3 align="center">Hey, What's Your Name?</h3>
                </td>
            </tr>
            
            <tr>
                <td>
                    <input type="text" name="firstName" required
                           id="firstName" placeholder="First Name">
                </td>
            </tr>
            
            <tr>
                <td>
                    <input type="text" name="lastName" required
                           id="lastName" placeholder="Last Name">
                </td>
            </tr>
            
            <tr>
                <td>
                    <input type="email" name="email" required
                           id="email" placeholder="example@example.com">
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