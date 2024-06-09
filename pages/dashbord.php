<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="dashbord.css">
</head>
<body>
    <div class="container">
        <div class="sideMeno">
            <div class="logo">
                <h1>SGP</h1>
                <span>SISTEMA DE GESTAO</span>
            </div>
            <div class="contbtns">
                <div class="button" onclick="OpenPopup()">
                    <span>Home</span>
                </div>
                <div class="button">
                    <span>Add User</span>
                </div>
                <div class="button">
                    <span>Home</span>
                </div>
            </div>
        </div>
        <div class="sideContainer">
            <div class="line header">
                <div class="well">
                    <h1 class="welcome">Welcome Sertorio</h1>
                    <span class="weldc">
                        Systema de gestao de seila
                    </span>
                </div>
                <div class="info">
                    <span class="name">Sertorio Banze</span>
                    <span class="permission">Admin</span>
                </div>
            </div>

            <div class="line cardCont">
                <div class="card">
                    <div class="cardheder">
                        <div class="icon"></div>
                        <div class="name">Income</div>
                    </div>
                    <div class="money">898</div>
                    <div class="desc">Total</div>
                </div>
                <div class="card">
                    <div class="cardheder line">
                        <div class="icon"></div>
                        <div class="name">Income</div>
                    </div>
                    <div class="money">390</div>
                    <div class="desc">Total Vendedores</div>
                </div>
                <div class="card">
                    <div class="cardheder">
                        <div class="icon"></div>
                        <div class="name">Income</div>
                    </div>
                    <div class="money">700</div>
                    <div class="desc">Total</div>
                </div>
                <div class="card">
                    <div class="cardheder">
                        <div class="icon"></div>
                        <div class="name">Income</div>
                    </div>
                    <div class="money">1021</div>
                    <div class="desc">Total</div>
                </div>
            </div>
        </div>
        <div class="popup" id="popup">
            <button onclick="closePopup()"></button>
        </div>
    </div>

    <script>
        function OpenPopup() {
            // alert("esta pegando");
            let popup = document.getElementById("popup");
            popup.style.display = "flex"
        }

        function closePopup() {
            let popup = document.getElementById("popup");
            popup.style.display = "none";
        }
    </script>
</body>
</html>
