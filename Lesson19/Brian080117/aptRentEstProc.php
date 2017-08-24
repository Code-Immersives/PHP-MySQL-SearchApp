<!DOCTYPE html>

<html>

<head>
    <title>Apt Rent Est Proc</title>
    <link href="../../css/brian-styles0817.css" rel="stylesheet" type="text/css">
    
    <?php
        // get the vars coming in from the Contact Us form at contactForm.php
        // to simplify the code, pass off the incoming POST vars to "regular" variables
        $bdrms = $_POST['bdrms'];
        $baths = $_POST['baths'];
        
        // "Check" to see if the checkbox is checked or unchecked
        // the isset() method takes 1 var as its param and returns TRUE or FALSE
        if(isset($_POST['doorman'])) {
            $doorman =  $_POST['doorman']; // Doorman checkbox is CHECKED
        } else {
            $doorman =  0; // Doorman uncheckbox is UNCHECKED
        }
    
        if(isset($_POST['riverview'])) {
            $riverview =  $_POST['riverview']; // Riverview checkbox is CHECKED
        } else {
            $riverview =  0; // Riverview uncheckbox is UNCHECKED
        }
    
        $rent = $bdrms + $riverview + $baths;
        $doormanFee = $rent * $doorman;
        $rent += $doormanFee;
    
      
    ?> 
    
    <style>
    
        body {
            background-color: <?php echo $faveColor; ?>;
        }
    
    </style>
    
</head>

<body>
    
        <table width="350px" border="1px" cellpadding="5px" align="center">
        
            <tr>
                <td>
                    <?php 
                        echo '<h1 align="center">Your Estimated Rent:<br>$' . 
                            $rent . '</h1>'; 
                    ?>

                </td>
            </tr>
        
        </table>
    
</body>
    
</html>