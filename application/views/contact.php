<?php include(APPPATH . "views/templates/header.php"); ?>
<section class="">
    <div class="container pb-70">
        <div class="section-content">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="tm-sc-staff staff-style-current-theme">
                        <div class="tm-staff staff-items type-staff-items">
                            <div class="staff-inner">
                                <div class="thumb">
                                    <img class="w-100" src="<?php echo base_url('assets/'); ?>images\team\harsha.jpg" alt="Image">

                                </div>
                                <div class="staff-content">
                                    <h3 class="name"><a href="#">Harsha Wickramasinghe</a></h3>
                                    <div class="speciality">NATIONAL PROJECT DIRECTOR</div>
                                    <p style="font-size:15px">Deputy Director General (Strategy) <br>
                                        (Sri Lanka Sustainable Energy Authority)<br>
                                        E-mail: harsha@energy.gov.lk</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="tm-sc-staff staff-style-current-theme">
                        <div class="tm-staff staff-items type-staff-items">
                            <div class="staff-inner">
                                <div class="thumb">
                                    <img class="w-100" src="<?php echo base_url('assets/'); ?>images\team\sampath.jpg" alt="Image">

                                </div>
                                <div class="staff-content">
                                    <h3 class="name"><a href="#">Sampath Ranasinghe</a></h3>
                                    <div class="speciality">PROGRAMME COORDINATOR</div>
                                    <p style="font-size:15px">Tel:+94 772 950 521
                                    <br>E-mail: sampath.ranasinghe@undp.org</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="tm-sc-staff staff-style-current-theme">
                        <div class="tm-staff staff-items type-staff-items">
                            <div class="staff-inner">
                                <div class="thumb">
                                    <img class="w-100" src="<?php echo base_url('assets/'); ?>images\team\dasith.jpg" alt="Image">

                                </div>
                                <div class="staff-content">
                                    <h3 class="name"><a href="#">Dasitha Premarathne</a></h3>
                                    <div class="speciality">PROJECT ASSISTANT</div>
                                    <p style="font-size:15px">Tel: +94 771 229 929
                                        <br>E-mail: dasitha.premarathne@undp.org</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="tm-sc-staff staff-style-current-theme">
                        <div class="tm-staff staff-items type-staff-items">
                            <div class="staff-inner">
                                <div class="thumb">
                                    <img class="w-100" src="<?php echo base_url('assets/'); ?>images\team\suranga.jpg" alt="Image">

                                </div>
                                <div class="staff-content">
                                    <h3 class="name"><a href="#">Suranga Karavita</a></h3>
                                    <div class="speciality">TECHNICAL COORDINATOR</div>
                                    <p style="font-size:15px">Tel: +94 710 735 049
                                        <br>E-mail: suranga.karavita@undp.org</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<section class="contact-section">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="tm-sc-section-title section-title mb-130 mb-md-70 pb-2">
                                <div class="title-wrapper">

                                    <h2 class="title">Contact us</h2>
                                    <h3>Biomass Energy Project Management Unit</h3>
                                    <p > POSTAL ADDRESS :
                                        Sri Lanka Sustainable Energy Authority,
                                        2G-06, Block 02, BMICH,
                                        Bauddhaloka Mawatha,Colombo 07, SriLanka. <br><br>
                                        E-mail: Sampath.Ranasinghe@fao.org</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="map-style mr-30 md-mr-0 mb-md-50">
                        <iframe class="border-0 w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3151.840290912425!2d144.9537363!3d-37.8172097!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sbd!4v1595587043669!5m2!1sen!2sbd" height="261" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div> -->
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="contact-form">
                    

                        <!-- Contact Form -->
                        <form id="contact_form" name="contact_form" class="" action="contact/submit" method="post" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input name="form_name" class="form-control" type="text" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input name="form_email" class="form-control required email" type="email" placeholder="Email address">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="form_message" class="form-control required" rows="5" placeholder="Write message"></textarea>
                            </div>
                            <div class="form-group">
                                <input name="form_botcheck" class="form-control" type="hidden" value="">
                                <div id="submit">
                                    <input type="submit" id="send_message" value="Submit Form" class="btn btn-custom">
                                </div>
                            </div>
                        </form>
                        <!--
                            <form action="<?php //echo base_url('contact'); ?>" method="post">
                                <div class="form-group">
                                    <input name="name" placeholder="Your name" type="text" value="<?php //echo set_value('name'); ?>" class="form-control" />
                                    <?php //echo form_error('name', '<span class="text-danger">','</span>'); ?>
                                </div>
                                <div class="form-group">
                                    <input name="email" placeholder="Your e-mail" type="text" value="<?php //echo set_value('email'); ?>" class="form-control" />
                                    <?php //echo form_error('email', '<span class="text-danger">','</span>'); ?>
                                </div>
                                <div class="form-group">
                                    <input name="subject" placeholder="Subject" type="text" value="<?php //echo set_value('subject'); ?>" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <textarea name="message" rows="4" class="form-control" placeholder="Your message"><?php //echo set_value('message'); ?></textarea>
                                    <?php //echo form_error('message', '<span class="text-danger">','</span>'); ?>
                                </div>
                                <button name="submit" type="submit" class="btn btn-primary" />Send</button>
                            </form>
                        -->

                        <!-- Contact Form Validation -->
                        <script>
                            (function ($) {
                                $("#contact_form").validate({
                                    submitHandler: function (form) {
                                        var form_btn = $(form).find('button[type="submit"]');
                                        var form_result_div = '#form-result';
                                        $(form_result_div).remove();
                                        form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                        var form_btn_old_msg = form_btn.html();
                                        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                        $(form).ajaxSubmit({
                                            dataType: 'json',
                                            success: function (data) {
                                                if (data.status) {
                                                    $(form).find('.form-control').val('');
                                                }
                                                form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                $(form_result_div).html(data.message).fadeIn('slow');
                                                setTimeout(function () {
                                                    $(form_result_div).fadeOut('slow');
                                                }, 6000);
                                            }
                                        });
                                    }
                                });
                            })(jQuery);
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="layer-image-wrapper layer-image-divider7">
        <div class="layer-image-one" data-tm-bg-img="images/photos/bg-c1.jpg" style="background-image: url(&quot;images/photos/bg-c1.jpg&quot;);">
        </div>
    </div>
</section>
<?php include(APPPATH . "views/templates/footer.php"); ?>