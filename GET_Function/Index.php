<html>
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
        <form>
         <h2>The sensor Value</h2>
        <div>
        <input type="number" class=""  id="number"  name="Svalue"/>
</div>
</br>
        <button>Submit</button>
        The Value of the sensor is
        <?php
        ECHO $_GET['Svalue'];
        ?>
        
</form>
</body>
</html>