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
<section class="services-sec1">
        <h2 class="my-md-5 mb-5 text-center sec-head">Our Services</h2>
        <div class="container">
            <div class="s-card my-5">
                <div class="service-s-title"><span class="mt-n1"> Lorem ipsum is simply</span>
                <h3>Architecture</h3></div>
                <div class="s-imagewrapper">
                    <img src="pics/services-image (2).png" alt="services-image1">
                </div>
                <div class="s-content">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                        essentially unchanged. It was popularised
                        in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services-sec2">
    <div class="container">
        <div class="s-card2 my-5">
            <div class="service-s-title">
                <span class="mt-n1"> Lorem ipsum is simply</span>
            <h3>Interior Design</h3>
            </div>
            <div class="s-imagewrapper">
                <img src="pics/services-image (3).png" alt="services-image2">
            </div>
            <div class="s-content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged. It was popularised
                    in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>
            </div>
        </div>
</section>
<section class="services-sec1">
    <div class="container">
        <div class="s-card my-5">
            <div class="service-s-title">
                <span class="mt-n1"> Lorem ipsum is simply</span>
            <h3>Planning and Design</h3>
            </div>
            <div class="s-imagewrapper">
                <img src="pics/services-image (4).png" alt="services-image3">
            </div>
            <div class="s-content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged. It was popularised
                    in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>
            </div>
        </div>
    </div>
</div>
</section>
<section class="services-sec2">
    <div class="container">
        <div class="s-card2 my-5">
            <div class="service-s-title">
                <span class="mt-n1"> Lorem ipsum is simply</span>
            <h3>Project Execution</h3>
            </div>
            <div class="s-imagewrapper">
                <img src="pics/services-image (1).png" alt="services-image4">
            </div>
            <div class="s-content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged. It was popularised
                    in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>
            </div>
        </div>
</section>

<?php include "footer.php"; ?>

<style>

.services-sec1 {
    position: relative;
    padding-bottom: 80px;
}
.s-content {
    padding: 25px 35px 15px 35px;
        box-shadow: 0px 1px 12.1px 6px #0000000D;
        background-color: white;
        width: 62%;
        margin-top: 5%;
}

.s-imagewrapper {
    position: absolute;
    width: 42%;
    right: 8vw;
    z-index: -1;
    height: 103%;
}

img{
    width: 100%;
    height: inherit;
}

span{
    margin-top: -5px;
}

p {
    font-size: 16px;
    font-weight: 400;
    line-height: 36px;
    text-align: left;
    color: #6B6B6B;
}

.services-sec2{
    position: relative;
    margin-bottom: 110px;
}

.services-sec2 .s-imagewrapper{
   position: static;
   width: 48%;
}

.services-sec2 .s-content {
    position: absolute;
    left: 40%;
    margin-top: -26%;
    width: 53%;
}

.services-sec2 span {
    margin-left:52%;
}

.services-sec2 h3{
    margin-left: 44%;
}
.service-s-title h3 {
    padding-left: 30px;
    font-size: 30px;
    font-weight: 600;
    line-height: 40.89px;
    text-align: left;
    width: 450px;
    color: #BAA170;
    position: absolute;
    margin-top: 8px;
}


.service-s-title h3:before {
    content: "";
    position: absolute;
    border-bottom: 1px solid #BAA170;  
    width: 5%;
    transform: translate(-50%);
    top: 50%;
    left: 3%;
}

@media only screen and (max-width:768px) {
    
    .s-content, .s-imagewrapper, .services-sec2 .s-imagewrapper, .services-sec2 .s-content {
        width: 100%;
        position: static;
        margin-top: 63px;
    }

    .s-content, .services-sec2 .s-content {
        margin-top: 40px;
        padding: 25px 20px 15px 20px;
    }

    .services-sec2 h3, .services-sec2 span {
        margin-left: 0;
    }

    h3{
        margin-bottom: 30px;
    }

    .container {
        padding-left: 15px !important;
        padding-right: 15px !important;
    }
}

</style>
</body>

</html>