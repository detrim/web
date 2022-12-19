<body class="login">
    <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form method="post" action="auth">
                        <h1>Create Account</h1>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" />
                        </div>
                        <?php echo form_error('email', '<div class="text-danger small ml-2">', '</div>'); ?>
                        <br>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" id="inputPassword" />
                        </div>
                        <?php echo form_error('password', '<div class="text-danger small ml-2">', '</div>'); ?>
                        <br>
                        <div class="text-left">
                            <input type="checkbox" onclick="myFunction()"> Tampilkan Password
                        </div>
                        <div>
                            <button class="btn btn-sm" type="submit">Submit</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="login" class="to_register"> Log in </a>
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