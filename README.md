# PHP AND DATABASE 
The HTML and CSS create the webpage's interface and structure, while PHP allows it to interact with the user. The purpose of this project is to use PHP for two different methods. Before starting with the coding, to use PHP we will have to create a database.
## Creating a Database
The following steps show how the database created for this project.
* Visit the following website.
`https://www.phpmyadmin.net/`
* press support button.
* click on quick installation guide. 
* For window installation, press on XAMPP.
* Choose Which version suit your PC.
* casually install XAMPP.

After that in order to use database you should place inside `C:\xampp\htdocs`.
## Using the Function Get 
By using HTML and CSS code a webpage has been designed to have one input and a button. The following is the code for HTML 
```
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
        
</form>
</body>
</html>
```
The  code for the CSS file
```
*,*:after,*:before{
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
}
body{
	font-family: arial;
	font-size: 18px;
	margin: 0;
	color: #000;
	display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
}
button{
  width: 100%;
  padding: 8px 20px;
  background: #a02c2c;
  border: none;
  color: #fff;
  font-size: 18px;
  cursor: pointer;
  border-radius: 10px;
}

button:hover {
      background-color:#681b1b;
      transition: 0.7s;
  }
  input {
    width: 100%;
    font-size: 18px;
  }
  h2{
    color: rgb(0, 0, 0);
    font-size: 18px;
    text-align: center;
  }
```
Once the interface of the webpage has been created. In the HTML file, PHP code could be created to take `Svalue`as an input and present it to the user using `GET`. 
```
        <?php
        ECHO $_GET['Svalue'];
        ?>
```
The Final result.

![image](https://user-images.githubusercontent.com/108624020/181778788-3091d41f-0974-44f3-88cc-ea5619034a34.png)


## Using the Function POST
Similar to the GET function, an HTML and CSS file is created to receive user input. Instead of using the same HTML file, a separate PHP file will be used. To connect the HTML with the PHP file, the following line should be written inside the form div in the HTML file.
```
<form action="connect.php" method="post">
```
The following PHP file will connect with the database, then will take the input `Svalue `and save it.
```
<?php
    $Svalue = $_POST['Svalue'];
// Database connection
$conn = new mysqli('localhost','root','','database');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into data(Svalue) values(?)");
    $stmt->bind_param("i", $Svalue);
    $execval = $stmt->execute();
    echo $execval;
    $execval = $stmt->execute();
    echo "The value have been added successfully...";
    $stmt->close();
    $conn->close();
}
?>
```
The final result
![image](https://user-images.githubusercontent.com/108624020/181782365-72e07d90-de0c-4687-a39b-a6e16cd55b67.png)


![image](https://user-images.githubusercontent.com/108624020/181782405-2ba7d6e0-cc4a-455b-aa7a-edfee4384492.png)


![image](https://user-images.githubusercontent.com/108624020/181782500-d2a9bbbe-b806-4a6b-a606-6719b80d3935.png)






