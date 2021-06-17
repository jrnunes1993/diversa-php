<!-- Para 1.75m e 78.9kg = IMC deve ser de 25.76 -->
<html>
<body>
<form method="post">
    Nome <input type="text" name="txtNome" required> <br>
    Altura <input type="number" name="txtAltura" step=".01" min="0.5" max="2.5">
    Peso <input type="number" name="txtPeso" step=".5" min="0.5" max="300">
    <input type="hidden" name="token" value="<?php echo uniqid(); ?>">
    <input type="submit" value="Calcular"/>
</form>

<?php
// inicializa a sessão e permite armazenar valores entre requisições
session_start();

// se existir a variavel $_POST, estamos recebendo uma submissão do form, no caso um POST
// e devemos realizar um novo processamento
if ($_POST && $_POST['token'] != $_SESSION['token']) {
    // armazena o ultimo token recebido, para evitar processar novamente com F5
    $_SESSION['token'] = $_POST['token'];

    $dados = [
        'nome'      => $_POST['txtNome'],
        'altura'    => $_POST['txtAltura'],
        'peso'      => $_POST['txtPeso']
    ];

    // IMC = peso / (altura x altura)
    $imc = $dados['peso'] / ($dados['altura'] * $dados['altura']); // ou altura² -> $dados['altura'] ^ 2
    $dados['imc'] = number_format($imc, 2);

    // testamos de acordo com a tabela
    if ($imc < 18.5) {
        $dados['classe'] = 'Peso Baixo';
        $dados['cor'] = 'yellow';
    } else if ($imc < 25) {
        $dados['classe'] = 'Peso Normal';
        $dados['cor'] = 'green';
    } else if ($imc < 30) {
        $dados['classe'] = 'Sobrepeso';
        $dados['cor'] = 'salmon';
    } else if ($imc < 35) {
        $dados['classe'] = 'Obesidade (Grau I)';
        $dados['cor'] = 'orange';
    } else if ($imc < 40) {
        $dados['classe'] = 'Obesidade Severa (Grau II)';
        $dados['cor'] = 'maroon';
    } else {
        $dados['classe'] = 'Obesidade Morbida (Grau III)';
        $dados['cor'] = 'red';
    }

    // var_dump($dados); die;

    // adiciona os dados coletados na lista da sessão do PHP
    $_SESSION['lista'][] = $dados;
}
?>

<table border='1'>
    <tr>
        <th>Nome</th>
        <th>Altura</th>
        <th>Peso</th>
        <th>IMC</th>
        <th>Classe</th>
    </tr>
    <?php
    if (isset($_SESSION['lista'])) {
        for ($i = 0; $i < sizeof($_SESSION['lista']); $i++) {
            $info = $_SESSION['lista'][$i];
            echo "<tr style='background-color: {$info['cor']}'>
                                <td>{$info['nome']}</td>
                                <td>{$info['altura']}</td>
                                <td>{$info['peso']}</td>                                
                                <td>{$info['imc']}</td>
                                <td>{$info['classe']}</td>
                            </tr>";
        }
    }
    ?>
</table>
<body>
<html>