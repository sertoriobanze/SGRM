<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addFisc.css">
    <title></title>
</head>
<body>
<form action="../includes/addFisc.inc.php" method="post" class="FrmContainer">
    <header class="line frmHead">
        <div class="col">
            <span class="txtx">Adcional Novo Fiscal</span>
        </div>
        <div class="col btn">
            <div class="bton">
                <img src="./icons/fechar.png" alt="X">
            </div>
        </div>
    </header>

    <div class="line flex">
        <div class="col">
            <span>Nome</span>
            <input type="text" name="nome" class="line">
        </div>
        <div class="col">
            <span>Codigo Usuario</span>
            <input type="text" name="cdUsuario" class="line">
        </div>
    </div>

    

    <div class="line flex">
        <div class="col">
            <span>Contacto</span>
            <input type="text" name="contacto" class="line"> 
        </div>
        <div class="col">
            <span>Senha</span>
            <input type="text" name="senha" class="line">
        </div>
        <div class="col">
            <span>Confirme a Senha</span>
            <input type="text" name="ConfirmSenha" class="line">
        </div>
    </div>

    <div class="line">
        <div class="col flex">
            <button class="button colorAdd" type="submit">Adcionar</button>
            <div class="button colorCance" onclick="closePopup()">Cancelar</div>
        </div>
    </div>
</form>    

<script src="../js/dash.js">
    
</script>
</body>
</html>