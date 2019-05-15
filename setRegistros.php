<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="estilos.css" rel="stylesheet" type="text/css">
<title>Innovation Summit 2017</title>


</head>

<body>
<div id="header">
<img src="img/header-logo.png"></img>
</div>

<div id="hero">
<div class="content">
	<h1>Microsoft Hybrid App Demo</h1>
</div>
</div>
<div id="wrapper">
	<div class="container grey">
    	<div class="content">
        	<p>Este sitio está corriendo en App Service de Azure. Buenos Aires 2017.<br></br></p>
        </div>          
    </div>


    <div class="form">
    <div class="container">
    <div class="content">
    <div class="section">
    <div class="section-content">
    <div class="row">
    <div class="full">
    <?php
$serverName = "52.250.116.122";
$connectionOptions = array(
    "Database" => "demoapp",
    "Uid" => "sqladmin",
    "PWD" => "Housedoor2016"
);


$nombre = $_GET['nombre'];
$tel = $_GET['telefono'];

//print_r($connectionOptions);
//Establishes the connection
/*
$conn = sqlsrv_connect($serverName, $connectionOptions);
if( $conn === false ) {
    die( FormatErrors( sqlsrv_errors()));
}

//Select Query
//$tsql= "SELECT * from registros";
$tsql = "INSERT INTO registros (Nombre, Cuenta) values ('$nombre','$tel')";
//Executes the query
$getResults= sqlsrv_query($conn, $tsql);

//Error handling
if ($getResults == FALSE)
    die(FormatErrors(sqlsrv_errors()));
*/
?>

<div> Registro Ingresado. </div>

<?php
echo "<a href='index.html'>Regresar</a>";
sqlsrv_free_stmt($getResults);

function FormatErrors( $errors )
{
    /* Display errors. */
    echo "Error information: <br/>";
    foreach ( $errors as $error )
    {
        echo "SQLSTATE: ".$error['SQLSTATE']."<br/>";
        echo "Code: ".$error['code']."<br/>";
        echo "Message: ".$error['message']."<br/>";
    }
}
?>

    </div>
   
    
    <div class="row">
    <span id="response"></span>
    
    </div>
    
    </div></div></div></div></div>


  <div id="footer">
    &copy; 2016 Microsoft Corporation. All rights reserved. | <a href="http://www.microsoft.com/about/legal/en/us/Intellectualproperty/Copyright/Default.aspx" target="_blank">Terms of Use</a>
    | <a href="http://www.microsoft.com/en-us/privacystatement/default.aspx">Privacy Statement</a>
  </div>
  
  
</body>
</html>