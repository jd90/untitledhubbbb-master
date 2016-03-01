<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Owner Registration Page</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>

    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>


</head>

<header>
    <section class="right">
        <div class="left">
            <img src = "assets/b&blogotransparent.png" id="img">


        </div>
        <div class="rightside">
    </div>
        </section>
</header>

<div class="nav">

    <nav>



        <ul class="moveright">

            <!--<li><a href="B&Bregistration.html">Help</a></li>-->
            <li><a href="B&Bregistration.html">Register</a></li>
            <!-- <li><a href="B&Bregistration.html">Register</a></li> -->
            <li><a href="OwnerSignIn.php">Owner's Page</a></li>
            <li><a href="Home.php">Search</a></li>


        </ul>

    </nav>




</div>
<hr width="100%" align="left" size="1" color="#d3d3d3">
<body>


<main>
    <!--onsubmit="return validateOwner(this);"  javascript method-->
    <div class="">

<?php
/**
 * Created by PhpStorm.
 * User: 9540730
 * Date: 25/02/2016
 * Time: 13:45
 */


//$ownerid= $_POST['ownerid'];   [ownerid] '".$ownerid."',
$title =$_POST['title'];
$firstname= $_POST['firstname'];
$surname= $_POST['surname'];
$email= $_POST['email'];
$password= $_POST['password'];
$password2= $_POST['password2'];
$address= $_POST['address'];
$address2= $_POST['address2'];
$telephone= $_POST['telephone'];



$conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

try {
    $st1 = "INSERT INTO Owner ([title], [firstname], [surname], [email], [address], [password], [telephone]) VALUES ('".$title."', '".$firstname."', '".$surname."', '".$email."', '".$address."', '".$password."', '".$telephone."')";
    $conn->exec($st1);

}catch(PDOException $e)
{
    print"$e";
}



?>

<table class="table1">
<?php
$conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
try{
    $st = $conn-> query("SELECT * FROM [Owner]");
    foreach($st->fetchAll() as $row) {
        $newhtml =
            <<<NEWHTML
            <tr>
                   <td>{$row[firstname]}</td>
                    <td>{$row[surname]}</td>
            </tr>
NEWHTML;

        print($newhtml);
    }
    echo "That's you all signed up";
}
catch(PDOException $e)
{print"$e";}
?>
</table>

</main>

<div class="foot">
    <footer>

        <p>Copyright. Team D Solutions.</p>
    </footer></div>
</body>
</html>

