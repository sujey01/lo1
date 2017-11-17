<?PHP  //TUNTORIALES//
session_start();
include "config.php";
?>

<form action="" method="post">

  <p>Usuario
    <input type="text" name="usuario" />
  </p>
  <p>Clave
    <input type="password" name="password" />
  </p>
  <p>Repetir clave 
    <input type="password" name="repassword" />
  </p>
  <p>
    <input type="submit" name="enviar" value="Registrarme" />
    
        </p>
</form>

<?
if(isset($_POST['enviar']))
{
if($_POST['usuario'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '')
{
echo 'Debe llenar todos los campos por favor';
}
else
{
$sql = 'SELECT * FROM usuarios';
$rec = mysql_query($sql);
$verificar = 0;

while($result = mysql_fetch_object($rec))
{
if($result->usuario == $_POST['usuario'])
{
$verificar = 1;
}
}
if($verificar == 0)
{
if($_POST['password'] == $_POST['repassword'])
{
$usuario = $_POST['usuario'];
$password = md5 ($_POST['password']);

$sql = "INSERT INTO usuarios (usuario,password) VALUES ('$usuario','$password')";
mysql_query($sql);

echo 'Usted se registro con éxito';
}
else
{
echo 'Las contraseñas no coinciden';
}
}
else
{
echo 'El usuario ya esta en nuestra base de datos';
}
}
}
?>