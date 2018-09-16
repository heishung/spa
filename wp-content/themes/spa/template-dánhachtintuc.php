<?php /* Template Name: Trang liên hệ*/ get_header(); ?>

<section class="container mb-5 pt-2">
    <div class="top mb-4">
        <div class="title-ss h2 text-uppercase text-center">TIN TỨC VỀ LÀM ĐẸP</div>
        <p class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/Vector Smart Object.png" alt=""></p>
    </div>

    <div class="row">
        <img src="<?php echo get_template_directory_uri(); ?>/img/map.png" alt="">
        <form class="needs-validation w-100 mt-3" novalidate="">
            <div class="form-row mt-4 ">
                <div class="col-md-4 mb-3">

                    <input type="text" class="form-control" id="validationCustom01" placeholder="Tên bạn" value="" required="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">

                    <input type="tel" class="form-control" id="validationCustom02" placeholder="Số điện thoại" value="" required="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="input-group">

                        <input type="email" class="form-control" id="validationCustomMail" placeholder="Email của bạn " aria-describedby="inputGroupPrepend" required="">
                        <div class="invalid-feedback">
                            We'll never share your email with anyone else.
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">

                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Tin nhắn của bạn" rows="4"></textarea>
            </div>
            <p class="text-center"><button class="btn btn-primary" type="submit">Gửi tin nhắn</button></p>
        </form>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
    </div>
</section>

<?php get_footer(); ?>
