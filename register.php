<html>
    <head>
        <title>HomeQuest Real Estate</title>
        <link href="style_register.css" rel="stylesheet">
    </head>
    <body>
        <h1>Registration Form</h1>
        <div class="seller_reg">

            <form method="post" action="seller_register_submit.php">

                <h3>Signup <br> as a Seller?</h3>
                <div class="fields">
                    <input type="text" name="seller_name" id="seller_name" placeholder="NAME" required>
                </div> <br>
                <div class="fields">
                    <input type="text" name="seller_user_id" id="seller_user_id" placeholder="USERID" required>
                </div> <br>
                <div class="fields">
                    <input type="email" name="seller_email" id="seller_email" placeholder="EMAIL" required>
                </div> <br>
                <div class="fields">
                    <input type="password" name="seller_password" id="seller_password" placeholder="PASSWORD" required>
                </div> <br>
                <div class="fields">
                    <input type="checkbox" style="margin-left:6%;" required> <h8 style="color: white;">I agree to the T&C</h8>
                </div><br>
                <div class="fields">
                    <input type="submit" value="SUBMIT">
                </div>

            </form>

        </div>

        <div class = "buyer_reg">

            <form method = "post" action="buyer_register_submit.php">
                <h3>Signup <br> as a Buyer?</h3>

                <div class="fields">
                    <input type="text" name="buyer_name" id="buyer_name" placeholder="NAME" required>
                </div> <br>
                <div class="fields">
                    <input type="text" name="buyer_user_id" id="buyer_user_id" placeholder="USERID" required>
                </div> <br>
                <div class="fields">
                    <input type="email" name="buyer_email" id="buyer_email" placeholder="EMAIL" required>
                </div> <br>
                <div class="fields">
                    <input type="password" name="buyer_password" id="buyer_password" placeholder="PASSWORD" required>
                </div> <br>
                <div class="fields">
                    <input type="checkbox" style="margin-left:6%;" required> <h8 style="color: white;">I agree to the T&C</h8>
                </div><br>
                <div class="fields">
                    <input type="submit" value="SUBMIT">
                </div>

            </form>


        </div>
        <div class="redirect">
            <h4>Already have an account? </h4><a href="login.php">LOGIN as a Seller</a><br>
            <a href="loginb.php">LOGIN as a Buyer</a>
        </div>

        <div class = "redirecta">

<form method = "post" action="admin_register_submit.php">
    <h2>Signup <br> as an Admin?</h2>
    <div class="fields">
                    <input type="text" name="buyer_name" id="buyer_name" placeholder="NAME" required>
                </div> <br>
                <div class="fields">
                    <input type="text" name="buyer_user_id" id="buyer_user_id" placeholder="USERID" required>
                </div> <br>
                <div class="fields">
                    <input type="email" name="buyer_email" id="buyer_email" placeholder="EMAIL" required>
                </div> <br>
                <div class="fields">
                    <input type="password" name="buyer_password" id="buyer_password" placeholder="PASSWORD" required>
                </div> <br>
                <div class="fields">
                    <input type="checkbox" style="margin-left:6%;" required> <h8 style="color: white;">I agree to the T&C</h8>
                </div><br>
                <div class="fields">
                    <input type="submit" value="SUBMIT">
    </div>
</div>
</form>
    </body>
</html>