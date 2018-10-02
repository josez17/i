<?php
$nombre=$_POST['nombre'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];
echo $nombre . "hA <br/>" .$mensaje;
if (mail('josemzambrano1997@gmail.com',$asunto,$mensaje))
{
echo "mensaje Enviado";
}
else
{
	echo "uuyu";
}
?>
