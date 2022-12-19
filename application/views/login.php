<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form>
                        <h1>Login Form</h1>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required=""
                                id="inputPassword" />
                        </div>
                        <div class="text-left">
                            <input type="checkbox" onclick="myFunction()"> Tampilkan Password
                        </div>
                        <div>
                            <button class="btn btn-sm" type="submit">Log in</button>

                        </div>
                        <div class="text-center">
                            <a class="text-center" href="#">Lost your password?</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">New to site?
                                <a href="register" class="to_register"> Create Account </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>
<script>
function myFunction() {
    var x = document.getElementById("inputPassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>

</html>