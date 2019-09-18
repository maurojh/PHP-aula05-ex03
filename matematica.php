<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Matemática</title>
</head>
<body>
<?php
    $perguntas = [
        'Quanto é 2 + 2?',
        'Quanto é 2 + 1?',
        'Quanto é 3 * 2?',
        'Quanto é 4 * 2?',
        'Quanto é 4 - 3?'
    ];
    $resposta = [4,3,6,8,1];
    
function mostraPergunta($numero) {
    global $perguntas;
    echo "<p>" . $perguntas[$numero] . "</p>";
    mostraForm();
}
    
function verificaResposta($pergunta, $valor) {
    global $resposta;
    if($resposta[$pergunta] == $valor) {
        return 1;
    } else {
        return 0;
    }
}
    
function mostraForm() {
?>
    <form action="matematica.php">
        <input type="text" name="resposta" placeholder="Resultado">
        <input type="submit" value="Verificar">
    </form>
<?php
}
    
    if(isset($_GET['resposta'])) {
        $resultado = verificaResposta($_COOKIE['questao'], $_GET['resposta']);
        
        setcookie('questao', $_COOKIE['questao'] + 1, time() + (86400 * 30), "/");
        $_COOKIE['questao'] += 1;
        
        setcookie('pontos', $_COOKIE['pontos'] + $resultado, time() + (86400 * 30), "/");
    } 
    
    mostraPergunta($_COOKIE['questao']);
?>
</body>
</html>