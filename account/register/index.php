<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>iLink</title>
        <script src="../../assets/global.js"></script>
        <script>globalInclude();</script>
        <link rel="stylesheet" href="register.css">
        <script src="register.js"></script>
        
    </head>
    <body>
        <!-- navbar -->
        <nav id="navbar" class="d-flex">
            <a id="logo" href="/iLink/">
                <img src="">
            </a>
        </nav>

        <!-- content -->
        <div id="content">
            <div class="register-page">
                <div class="kepala">
                    <img src="/iLink/assets/img/logo.png" class="logo">
                </div>
                <div class="form">
                    <form class="register-form" onsubmit="return false">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" maxlength="50"/>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" type="username" maxlength="10"/>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" maxlength="20"/>
                        </div>
                        <div class="form-group">
                            <label for="repeat-password">Repeat Password</label>
                            <input id="repeat-password" type="password" maxlength="20"/>
                        </div>
                        <div class="register-button">
                            <button id="register-button">daftar</button>
                        </div>
                    </form>
                </div>
                <p class="message">Sudah punya akun? 
                    <a href="../login"><u>MASUK SEKARANG</u></a>
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