<?php

$horas = (int) $_POST['horas'];
$veiculo = $_POST['veiculo'];

if (isset($_POST['lavagem']))
{
    $lavagem = "sim";
}
else
{
    $lavagem = "não";
}

if ($veiculo == "0")
{
    $primeira = 10;
    $adicional = 6;
    $nomeVeiculo = "Carro";
}
else
{
    $primeira = 6;
    $adicional = 3;
    $nomeVeiculo = "Moto";
}

$total = $primeira;

for ($h = 2; $h <= $horas; $h++)
{
    $total = $total + $adicional;
}

if ($total > 50)
{
    $total = 50;
}

if ($lavagem == "sim")
{
    $total += 20;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Estacionamento Fácil</title>
<link rel="stylesheet" href="style.css">

</head>
<body>

    <h1>Estacionamento Fácil</h1>

    <main class="ticket">

        <h2 class="ticket-titulo">Resumo da sua estadia</h2>

        <ul class="detalhes">
            <li><span>Veículo</span> <strong><?php echo $nomeVeiculo; ?></strong></li>
            <li><span>Tempo</span> <strong><?php echo $horas; ?> <?php echo $horas == 1 ? "hora" : "horas"; ?></strong></li>
            <li><span>Lavagem</span> <strong><?php echo $lavagem == "sim" ? "Sim (+ R$ 20,00)" : "Não"; ?></strong></li>
        </ul>

        <div class="perfuracao"></div>

        <div class="resultado">
            TOTAL A PAGAR
            <span class="valor">R$ <?php echo number_format($total, 2, ',', '.'); ?></span>
        </div>

        <a class="botao-voltar" href="index.html">Voltar</a>

    </main>

</body>
</html>