<!-- footer content -->
<footer>
    <div class="pull-right mt-2">
        Deni Tri Muslimin S.Kom - <a href="https://detrim.github.io/portofolio/">Sistem Informasi</a>
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="tampilan/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="tampilan/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="tampilan/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="tampilan/nprogress/nprogress.js"></script>
<!-- jQuery custom content scroller -->
<script src="tampilan/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="tampilan/build/js/custom.min.js"></script>
</body>

<script type="text/javascript">
function calday() {
    var d1 = document.getElementById("d1").value;
    var d2 = document.getElementById("d2").value;
    const dateOne = new Date(d1);
    const dateTwo = new Date(d2);

    const time = Math.abs(dateTwo - dateOne) + 1;
    const days = Math.ceil(time / (1000 * 60 * 60 * 24));
    document.getElementById("output").innerHTML = days;
}
</script>
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