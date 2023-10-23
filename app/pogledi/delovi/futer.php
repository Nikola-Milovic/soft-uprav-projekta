<footer class="bg-light text-center text-lg-start pt-5">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <h5>Kontakt Informacije</h5>
                <p>
                    Ulica Maršala Tita 58, <br>
                    11000 Beograd, Srbija <br>
                    Tel: +381 11 2345 678 <br>
                    Email: info@ekohrana.com
                </p>
            </div>

            <div class="col-lg-4 mb-4">
                <h5>Pratite nas</h5>
                <a href="#" class="btn btn-outline-primary btn-sm mb-2">
                    <i class="fab fa-facebook-f"></i> Facebook
                </a>
                <a href="#" class="btn btn-outline-primary btn-sm mb-2">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
                <a href="#" class="btn btn-outline-primary btn-sm mb-2">
                    <i class="fab fa-twitter"></i> Twitter
                </a>
            </div>

            <div class="col-lg-4 mb-4">
                <h5>Brze Poveznice</h5>
                <ul class="list-unstyled">
                    <li><a href="?stranica=">Početna</a></li>
                    <li><a href="?stranica=meni">Meni</a></li>
                    <li><a href="?stranica=onama">O nama</a></li>
                    <li><a href="?stranica=prijava">Prijava</a></li>
                </ul>
            </div>
        </div>
				<button id="scrollTopBtn" class="">
						<i class="fas fa-arrow-up text-white"></i> Top
				</button>

			<div class="text-muted p-3 text-center">
				© 2023 Eko Hrana
			</div>
    </div>
</footer>

<script>
    $(document).ready(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 1200) {
                $('#scrollTopBtn').fadeIn();
            } else {
                $('#scrollTopBtn').fadeOut();
            }
        });

        $('#scrollTopBtn').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });
    });
</script>

</body>
</html>
