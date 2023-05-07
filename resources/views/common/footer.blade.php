<!-- ======= Footer ======= -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="copyright-box">
                    <p class="copyright">&copy; Copyright <strong>Shekhar Pandey</strong> | All Rights Reserved</p>
                    <div class="credits">
                        Designed by <a href="javascript:void(0)">Shekhar Pandey</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>

<!-- Vendor JS Files -->
<script src="<?php echo url('public/assets/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
<script src="<?php echo url('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo url('public/assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
<script src="<?php echo url('public/assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
<script src="<?php echo url('public/assets/vendor/typed.js/typed.min.js'); ?>"></script>
<script src="<?php echo url('public/assets/vendor/php-email-form/validate.js'); ?>"></script>

<!-- Main JS File -->
<script src="<?php echo url('public/assets/js/main.js'); ?>"></script>

<script>
    const experienceCounter = document.querySelector('#experience-counter');
    const startValue = Number(experienceCounter.dataset.start);
    const endValue = Number(experienceCounter.dataset.end);
    const decimalPlaces = Number(experienceCounter.dataset.decimal);

    let currentValue = startValue;
    let increment = (endValue - startValue) / 100; // adjust speed of transition by changing the value of 100

    function updateCounter() {
        currentValue += increment;
        if (currentValue > endValue) {
            currentValue = endValue;
        }
        experienceCounter.textContent = currentValue.toFixed(decimalPlaces);
        if (currentValue !== endValue) {
            requestAnimationFrame(updateCounter);
        }
    }

    updateCounter();
</script>

</body>

</html>
