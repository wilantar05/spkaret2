<!--Header Area Start-->
<?php echo $this->load->view('share/e', '', TRUE); ?>
<footer class="main-footer fl-wrap">

    <!-- footer-header end-->
    <!--footer-inner-->
    <div class="footer-inner   fl-wrap">

        <!-- footer bg-->
        <div class="footer-bg" data-ran="4"></div>
        <div class="footer-wave">
            <svg viewbox="0 0 100 25">
                <path fill="#fff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
            </svg>
        </div>
        <!-- footer bg  end-->
    </div>
    <!--footer-inner end -->
    <!--sub-footer-->
    <div class="sub-footer  fl-wrap">
        <div class="container">
            <div class="copyright"> &#169; Kantor Desa Telagatawang & Prakerin UNDIKSHA 2021 . | Oleh <a style="color:white;" href="https://instagram.com/sayugita_" target="_blank" rel="noopener noreferrer">Sayu</a> & <a style="color:white;" href="https://instagram.com/dianarykristd_" target="_blank" rel="noopener noreferrer">Dian</a></div>

            <div class="subfooter-nav">
                <ul class="no-list-style">

                    <li><a href="<?php echo site_url(); ?>privacy">Privacy</a></li>

                </ul>
            </div>
        </div>
    </div>
    <!--sub-footer end -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163588660-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-163588660-1');
    </script>

</footer>