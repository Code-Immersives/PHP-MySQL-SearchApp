<!DOCTYPE html>

<html>

<head>
    <title>Pet Survey Results</title>
    
    <?php
        // Go GET the variable that came in from the link
        $pet = $_GET['pet']; // get URL Var Value off the browser address
        $sound = $_GET['sound'];
        $food = $_GET['food'];
        // php vars can be used to set CSS
        $color1 = "#123";
        $color2 = "#ABC";
    ?>
    
    <style>
    
        body {
            color: <?php echo $color1; ?>;
            background-color: <?php echo $color2; ?>;
        }
    
    </style>
    
</head>

<body>

    <h1 align="center">
        <?php echo $sound; ?>, you are a <?php echo $pet; ?> person! Does your <?php echo $pet; ?> like <?php echo $food; ?>?
    </h1>
    
    <?php 
        echo "<h1 align=\"center\">" . $sound . ', you are a ' . $pet . ' person! Does your ' . $pet . ' like ' . $food .
        '?</h1>';
    ?>
    
    <br>
        <?php
            if($pet=='Rabbit') {
                echo '<img src="../../images/rabbit.jpg" width="200" height="200">';
            } else { // Cat or Dog
                echo '<img src="../../images/' . $pet . '.jpg">';
            }
        ?>

</body>
    
</html>





