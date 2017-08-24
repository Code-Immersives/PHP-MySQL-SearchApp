<!DOCTYPE html>

<html>

<head>
    <title>Contact Form</title>
    <link href="../../css/brian-styles0817.css" rel="stylesheet" type="text/css">
</head>

<body>
    
    <form name="form1" id="form1" method="post" action="contactProc.php">
    
        <table width="450px" border="1px" cellpadding="5px" align="center">
        
            <tr>
                <td colspan="2">
                    <h3 align="center">Contact Us</h3>
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
                <td>Favorite Color:<br>
                    <input type="color" name="faveColor" id="faveColor">
                </td>
            </tr>
            
            <tr>
                <td align="center">
                    Subscribe: <input type="checkbox" name="subscribe" id="subscribe" checked style="width:25px">
                </td>
            </tr>
            
            <tr>
                <td>
                    Comments:<br>
                    <select name="commentCat" id="commentCat" 
                            style="font-size:1.25rem; background-color:orange; 
                                   color:white; width:250px; padding:5px">
                        <option value="General">General</option>
                        <option value="Technical">Technical</option>
                        <option value="Transaction">Transaction</option>
                        <option value="Evaluation">Evaluation</option>
                    </select>
                    <br><br>
                    <textarea name="comments" id="comments" cols="50" rows="5"
                              style="font-size:1.25rem; background-color:orange; 
                                     color:white; width:250px; padding:5px">Enter Comment</textarea>
                    
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