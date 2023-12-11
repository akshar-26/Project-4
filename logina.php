<html>
    <head>
        <title>HomeHarbor Real Estate</title>
        <link href="login.css" rel="stylesheet">
    </head>
    <body>
    <h1>LOGIN</h1>
        <div class = "buyer_login">

            <form method = "post" action="admin_login_submit.php">
                <h3>Admin</h3>

                
                <div class="fields">
                    <input type="text" name="buyer_user_id_login" id="buyer_user_id_login" placeholder="USERID" required>
                </div> <br>

                <div class="fields">
                    <input type="password" name="buyer_password_login" id="buyer_password_login" placeholder="PASSWORD" required>
                </div> <br>
                
                <div class="fields">
                    <input type="submit" value="LOGIN">
                </div>

            </form>


        </div>
        <div class="redirect">
            <h4>Don't have an account? </h4><a href="register.php">SIGNUP</a>
        </div>

    </body>
</html>