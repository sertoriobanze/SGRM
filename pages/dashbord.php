<?php
session_start();
// session_destroy();

if(isset($_SESSION["user"])){
    // echo "usuario setado: ";
    $user = $_SESSION["user"];
    $nome = $user["nome"];
    $permissao = $user["permisao"];
    
    
    // var_dump("nome: " . $nome . " permissao: " . $permissao);

    

}else{
    header("Location: ../pages/login.html");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="dashbord.css">
    <link rel="stylesheet" href="./componets/addFisc.css">
</head>
<body>
    <div class="container">
        <div class="sideMeno">
            <div class="logo">
                <h1>SGP</h1>
                <span>SISTEMA DE GESTAO</span>
            </div>
            <div class="contbtns">
                <div class="button" id="addFiscaisBtn">
                    <span>Adicionar Fiscais</span>
                </div>
                <div class="button" id="addVendedoresBtn">
                    <span>Adicionar Vendedores</span>
                </div>
                <div class="button" id="settingsBtn">
                    <span>Settings</span>
                </div>
            </div>
        </div>
        <div class="sideContainer">
            <div class="line header">
                <div class="well">
                    <h1 class="welcome">Bem Vindo ao SGP</h1>
                    <span class="weldc">Sistema de gestao de seila</span>
                </div>
                <div class="info">
                    <span class="name"><?php echo $nome?></span>
                    <span class="permission"><?php echo $permissao?></span>
                </div>
            </div>

            <div class="line cardCont">
                <div class="card">
                    <div class="cardheder">
                        <div class="icon"></div>
                        <div class="name">Valor</div>
                    </div>
                    <div class="money">898 Mzn</div>
                    <div class="desc">Total Valor</div>
                </div>
                <div class="card">
                    <div class="cardheder line">
                        <div class="icon"></div>
                        <div class="name">Vendedores</div>
                    </div>
                    <div class="money">390</div>
                    <div class="desc">Total Vendedores</div>
                </div>
                <div class="card">
                    <div class="cardheder">
                        <div class="icon"></div>
                        <div class="name">Fiscais</div>
                    </div>
                    <div class="money">100</div>
                    <div class="desc">Total Fiscais</div>
                </div>
                <div class="card">
                    <div class="cardheder">
                        <div class="icon"></div>
                        <div class="name">Valor por Receber</div>
                    </div>
                    <div class="money">30,000 Mzn</div>
                    <div class="desc">Total</div>
                </div>
            </div>
        </div>
        <div class="popup" id="popup">
            <div class="popup-content" id="popup-content">
                <!-- Conteúdo do popup será inserido aqui -->
            </div>
        </div>
    </div>

    <script>
        function openPopup(url) {
            let popup = document.getElementById("popup");
            let popupContent = document.getElementById("popup-content");
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    popup.innerHTML = data;
                    popup.style.display = "flex";
                    addFormListeners(); // Adiciona os event listeners após o carregamento do conteúdo
                })
                .catch(error => console.error('Error loading popup content:', error));
        }

        function closePopup() {
            let popup = document.getElementById("popup");
            popup.style.display = "none";
        }

        function addFormListeners() {
            const nomeInput = document.getElementById('nome');
            const apelidoInput = document.getElementById('apelido');
            const codigoInput = document.getElementById('codigo');

            function updateCodigo() {
                const nome = nomeInput.value.trim();
                const apelido = apelidoInput.value.trim();
                if (nome && apelido) {
                    codigoInput.value = "FS_" + apelido.toLowerCase();
                } else {
                    codigoInput.value = '';
                }
            }

            if (nomeInput && apelidoInput) {
                nomeInput.addEventListener('input', updateCodigo);
                apelidoInput.addEventListener('input', updateCodigo);
            }
        }

        document.getElementById('addFiscaisBtn').onclick = function() {
            openPopup('AddFisc.html');
        }

        document.getElementById('addVendedoresBtn').onclick = function() {
            openPopup('addVendedores.html');
        }

        document.getElementById('settingsBtn').onclick = function() {
            openPopup('settings.html');
        }
    </script>
</body>
</html>
