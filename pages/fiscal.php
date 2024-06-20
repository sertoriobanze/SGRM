<?php
session_start();

$errorMessage = isset($_SESSION['errorMessage']) ? $_SESSION['errorMessage'] : '';
unset($_SESSION['errorMessage']);

$validMessage = isset($_SESSION['validMessage']) ? $_SESSION['validMessage'] : '';
unset($_SESSION['validMessage']);

if(isset($_SESSION["user"])){
    $user = $_SESSION["user"];
    $nome = $user["codigoFiscal"];
    // echo $nome;

}else{
    header("Location: login.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/fiscal.css">
    <title>Fiscal</title>
</head>
<body>
    <div class="contFiscal">
        <form action="../includes/pagamentos.inc.php" method="post">
            <div class="line1">
                <div class="logofrm">
                    <h1>SGP</h1>
                </div>
            </div>

            <div class="line">
                <label for="name">Codigo do Vendedor</label>
                <input type="text" name="cdFiscal">
            </div>
            <div class="line">
                <label for="name">Metodo do Pagamento</label>
                <select name="tipo">
                    <option value="dinheiro">Dinheiro</option>
                    <option value="mpesa">M-pesa</option>
                    <option value="emola">E-mola</option>
                </select>
            </div>
            <div class="line">
                <label for="name">Valor</label>
                <input type="text" name="valor">
            </div>
            <div class="line">
                <Button>Efectuar</Button>
            </div>

            <?php
            if(!empty($errorMessage)){
                echo '<p style="color: red;">' . $errorMessage . '</p>';
            }
            ?>
            <?php
            if(!empty($validMessage)){
                echo '<p style="color: green;">' . $ValidMessage . '</p>';
            }
            ?>
        </form>
    </div>

    
    
</body>
</html>