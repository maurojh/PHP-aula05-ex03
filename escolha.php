<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Escolher a materia</title>
</head>

<body>
<?php
if( isset($_GET['materia']) == false) {
?>
    <form action="escolha.php">
        <select name="materia">
            <option value="por">Português</option>
            <option value="mat">Matemática</option>
            <option value="ing">Inglês</option>
            <option value="geo">Geografia</option>
        </select>
        <input type="submit" value="Salvar">
    </form>
    <?php 
} else {
   $materia = $_GET['materia'];

   $nome = "escolhida";

   setcookie($nome, $materia, time() + (86400 * 30), "/");
   $_COOKIE[$nome] = $materia;
    
   setcookie('questao', 0, time() + (86400 * 30), "/");
   setcookie('pontos', 0, time() + (86400 * 30), "/");
       
   switch($_COOKIE["escolhida"]) {
       case 'por': 
            ?><script>
                window.location.assign("portugues.php");
            </script><?php
            break;
       case 'mat':
            ?><script>
                window.location.assign("matematica.php");
            </script><?php
            break;
       case 'ing': 
            ?><script>
                window.location.assign("ingles.php");
            </script><?php
            break;
       case 'geo':
            ?><script>
                window.location.assign("geografia.php");
            </script><?php
            break;
   }
}
    ?>
</body>

</html>
