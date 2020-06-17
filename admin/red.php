<?php
$connection = mysqli_connect('localhost', 'mysql', 'mysql');

if($connection == false)
{
    /* echo '$connection = Нет; '; */
    exit();
} else
{
    /* echo '$connection = Да; ';*/
}

$db=mysqli_select_db($connection, "site");
mysqli_set_charset($connection,"utf8");
if (!$connection || !$db)
{
exit(mysqli_error());
}


$name = $_POST['name'];
$price = $_POST['price'];
$descc = $_POST['descc'];
$kkal = $_POST['kkal'];
$ghir = $_POST['ghir'];
$prot = $_POST['prot'];
$yglev = $_POST['yglev'];

 echo ($name);
 echo ($price);
 echo ($descc);
 echo ($kkal);
 echo ($ghir);
 echo ($prot);
 echo ($yglev);


$result = mysqli_query($connection,"UPDATE  `goods` SET (name, price, descc,kkal,ghir,prot,yglev) VALUES ('$name','$price','$descc','$kkal','$ghir','$prot','$yglev')");
if ($result) {
    echo "Данные успешно сохранены!";
}
else {
    echo "Произошла ошибка, пожалуйста повторите попытку.";
}
writeJson();
function writeJson(){
	$connection = mysqli_connect('localhost', 'mysql', 'mysql');
	$db=mysqli_select_db($connection, "site");
    $sql = "SELECT * FROM goods";
    $resultat = mysqli_query($connection, $sql);

    if (mysqli_num_rows($resultat) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($resultat)) {
            $out[$row["id"]] = $row;
        }
        file_put_contents( '../test.json', json_encode($out));
    } else {
        echo "0";
    }
    mysqli_close($connection);
}

?>