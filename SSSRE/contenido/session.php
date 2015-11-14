<?PHP

session_start(); 

if (!$_SESSION){
echo '<script language = javascript>
self.location = "../index.php"
alert("Tiene que iniciar sesión\npara poder acceder a su cuenta…")
</script>';
}

?>