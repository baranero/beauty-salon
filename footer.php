<footer class="page-footer">
<div class="page-footer__icons">
    <a href="https://www.instagram.com/agnieszka.wrobel_kosmetolog/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    <a href="https://www.facebook.com/profile.php?id=100072379668074"><i class="fa fa-facebook" aria-hidden="true"></i></a>
</div>
<div class="page-footer__copyright">&#169; <?php echo date('Y'); ?> | Wszystkie prawa zastrzeżone</div>
<div class="page-footer__author">Projekt i wykonanie: <a href="https://jakubbaran.pl">jakubbaran.pl</a></div>
</footer>
</body>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
    let lastScroll = 0;

    window.addEventListener('scroll', function() {
        let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        
        if (currentScroll > lastScroll) {
            // Scrolling down
            document.querySelector('.site-header').classList.add('site-header--hidden');
        } else {
            // Scrolling up
            document.querySelector('.site-header').classList.remove('site-header--hidden');
        }

        lastScroll = currentScroll;
    });
});
</script>
</html>