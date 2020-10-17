<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>iLink</title>
        <script src="../../assets/global.js"></script>
        <script>globalInclude();</script>
        <link rel="stylesheet" href="login.css">
        <script src="login.js"></script>
        
    </head>
    <body>
        <!-- navbar -->
        <nav id="navbar" class="d-flex">
            <a id="logo" href="/aaa/">
                <img src="">
            </a>
        </nav>

        <!-- content -->
        <div id="content">
            <div class="login-page">
                <div class="kepala">
                    <img src="/iLink/assets/img/logo.png" class="logo">
                    <p>qwertyuiopasdfghjklzxcvbnm</p>
                </div>
                <div class="form">
                    <form class="login-form" onsubmit="return false">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" maxlength="50"/>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" maxlength="20"/>
                        </div>
                        <div class="login-button">
                            <button id="login-button">masuk</button>
                        </div>
                    </form>
                </div>
                <p class="message">Belum punya akun? 
                    <a href="../register"><u>DAFTAR SEKARANG</u></a>
                </p>
            </div>
        </div>
        
        <!-- footer -->
        <footer id="footer" class="page-footer">
            <div class="footer-copyright py-3 text-center">
                <span>©2019 Copyright:</span>
                <a id="flink" href="/iLink">iLink</a>
            </div>      
        </footer>
    </body>
</html>