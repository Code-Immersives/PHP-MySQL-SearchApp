<!DOCTYPE html>

<html>

<head>
    <title>Name Proc</title>
    <link href="../../css/brian-styles0817.css" rel="stylesheet" type="text/css">
    <?php
        // get the vars coming in from the form
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
    ?>
</head>

<body>
    
        <table width="350px" border="1px" cellpadding="5px" align="center">
        
            <tr>
                <td colspan="2">
  
                        <?php 
                            echo '<h3 align="center">Hey, ' . $firstName . ' ' . $lastName . '!<br>
                            Check your inbox at ' . $email . '<br>for your FREE Gift Coupon!</h3>'; 
                        ?>

                </td>
            </tr>
        
        </table>
    
</body>
    
</html>