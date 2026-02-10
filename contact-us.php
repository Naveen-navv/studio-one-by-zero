<?php include "header.php"; ?>
<section class="inner-page-banner">
    <div class="container-fluid ">
        <div class="row p-0">
        <div class="col-md-12 p-0">
            <img src="images/inner-banner.png" alt="banner img">
        </div>
           
        </div>
    </div>
</section>
<section class="keep-in-touch py-md-5">
    <div class="container">
        <h2 class="sec-head text-center">Keep In Touch With Us</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="single-contact-box">
                    <h3>VISIT US</h3>
						<p>15/2, Chellammal Street, Shenoy Nagar, Chennai - 600030. </p>
                </div>
            </div>
            <div class="col-md-4 br-md-rl">
                <div class="single-contact-box">
                    <h3>CALL US</h3>
						<p><a href="tel:+91 638 12 15102">+91 638 12 15102</a> </p>
						<p><a href="tel:+91 80 726 08686">+91 80 726 08686</a> </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-contact-box">
                    <h3>EMAIL</h3>
						<p><a href="mailto:info@studioonebyzero.com">info@studioonebyzero.com</a></p>
                </div>
            </div>
        </div>
        <div class="contact-form-sec pt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-left-cont">
                        <span>For detail</span>
                        <h2 class="sec-head">Contact us</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-field-sec">
                        <form>
                            <div class="banner-user-details-wrap row">
                                <div class="single user-img-details col-md-12">
                                    <div class="d-flex icon-input mb-4">
                                        <input class="form-control form-1" type="text" id="contact_name"
                                            placeholder="First Name*" required>
                                    </div>
                                </div>
                                <!-- <div class="single user-img-details col-md-6">
                                    <div class="d-flex icon-input mb-4">
                                        <input class="form-control form-1" type="text" id="contact_last_name"
                                            placeholder="Last Name">
                                    </div>
                                </div> -->
                                <!-- <div class="single user-img-details col-md-6">
                                    <div class="d-flex icon-input mb-4">
                                        <input class="form-control form-1" type="number" id="contact_number"
                                            placeholder="Mobile No*" maxlength="10"
                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                                    </div>
                                </div> -->
                                <div class="single user-img-details col-md-12">
                                    <div class="d-flex icon-input mb-4">
                                        <input class="form-control form-1" type="email" id="contact_email" placeholder="Email*" required>
                                    </div>
                                </div>
        
                                <div class="single user-img-details col-md-12 mb-4">
                                    <div class="d-flex icon-input mb-2">
                                        <textarea name="tamessage" placeholder="Write Your Message" rows="3" class="form-control"
                                            id="contact_message"></textarea>
                                    </div>
                                </div>
                                <div class="btn-wrap col-md-12">
                                    <a href="javascript:;" id="form_submit" onclick="contact_submit()"
                                        class="submit-btn">Send Message</a>
                                </div>
                            </div>
                            <div class="form-row thankyou-message">
                                <span id="thank_you"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="map-sec py-md-5">
    <div class="container-fluid">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.3583638939826!2d80.22525307405235!3d13.076459812572736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52675abc5b0245%3A0xcef5f330d658229e!2sStudio%20one%20by%20zero!5e0!3m2!1sen!2sin!4v1716527526491!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<?php include "footer.php"; ?>
<script>
    function contact_submit() {

        var footer_name = $('#contact_name').val();
        var footer_last_name = $('#contact_last_name').val();
        var footer_email_address = $('#contact_email').val();
        var footer_contact_no = $('#contact_number').val();
        var footer_message = $('#contact_message').val();
        var number = /^[0-9-+]+$/;
        var popupmail = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
        if (footer_name == "") {
            $('#contact_name').focus();
            $('#contact_name').css({ "border": "1px solid red" });
            return false;
        }
        $('#contact_name').css({ "border": "1px solid green" });
        if (footer_last_name == "") {
            $('#contact_last_name').focus();
            $('#contact_last_name').css({ "border": "1px solid red" });
            return false;
        }
        $('#contact_last_name').css({ "border": "1px solid green" });
        if (footer_email_address == "") {
            $('#contact_email').focus();
            $('#contact_email').css({ "border": "1px solid red" });
            return false;

        }
        if (!popupmail.test(footer_email_address)) {

            $('#contact_email').focus();
            $('#contact_email').css({ "border": "1px solid red" });
            return false;

        }
        $('#contact_email').css({ "border": "1px solid green" });

        if (footer_contact_no == "") {

            $('#contact_number').focus();
            $('#contact_number').css({ "border": "1px solid red" });
            return false;
        }
        if (!number.test(footer_contact_no)) {

            $('#contact_number').focus();
            $('#contact_number').css({ "border": "1px solid red" });
            return false;
        }
        if ($('#contact_number').val().length < 10) {

            $('#contact_number').focus();
            $('#contact_number').css({ "border": "1px solid red" });
            return false;
        }
        $('#contact_number').css({ "border": "1px solid green" });
        if (footer_message == "") {
            $('#contact_message').focus();
            $('#contact_message').css({ "border": "1px solid red" });
            return false;

        }
        $('#contact_message').css({ "border": "1px solid green" });
        $.ajax({
            url: "home-mail.php",
            method: "POST",
            data: {
                name: footer_name,
                last_name:footer_last_name,
                email_address: footer_email_address,
                contact_no: footer_contact_no,
                text_message: footer_message
            },
            success: function (data) {

                $('#contact_name').val("");
                $('#contact_last_name').val("");
                $('#contact_email').val("");
                $('#contact_number').val("");
                $('#contact_message').val("");
                $('#thank_you').html("Thanks for your interest with us, Our executives will get in touch with you shortly").css({ "color": "#000000" }).fadeIn(500).fadeOut(3000);
            }

        });
    }
</script>
<style>

</style>
</body>

</html>