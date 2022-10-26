<!-- header -->

<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<!-- Google Fonts -->
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
<!-- Vendor CSS Files -->
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
    rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css"
    rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/font.css" rel="stylesheet">
<!-- header closed-->
<style>
    .imagePreview {
        width: 100%;
        height: 65vh;
        background-position: center center;
        background: url(http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg);
        background-color: #fff;
        background-size: cover;
        background-repeat: no-repeat;
        display: inline-block;
        box-shadow: 0px -3px 6px 2px rgba(0, 0, 0, 0.2);
    }

    .btn-primary {
        display: block;
        border-radius: 0px;
        box-shadow: 0px 4px 6px 2px rgba(0, 0, 0, 0.2);
        margin-top: -5px;
    }

    .imgUp {
        margin-bottom: 15px;
    }

    .del {
        position: absolute;
        top: 0px;
        right: 15px;
        width: 30px;
        height: 30px;
        text-align: center;
        line-height: 30px;
        background-color: rgba(255, 255, 255, 0.6);
        cursor: pointer;
    }

    .imgAdd {
        width: 100%;
        height: auto;
        border-radius: 50%;
        background-color: #4bd7ef;
        color: #fff;
        box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.2);
        text-align: center;
        line-height: 30px;
        margin-top: 0px;
        cursor: pointer;
        font-size: 15px;
    }
</style>

<main id="main">

    <!-- start main story box -->
    <section class="mt-9">
        <div class="container">
            <form>
                <div class="row justify-content-between">
                    <div class="col-md-12 d-flex justify-content-between align-items-center pb-4">
                        <h1 class="fc-black ff-gr fw-400 ">My Profile</h1>
                        <div class="cta-box mt-4">
                            <a href="#">
                                <button class="green-cta-2">SAVE & CONTINUE</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5 ">
                        <!-- <img src="assets/img/Mask-Group-9.png" class="img-fluid w-100" /> -->
                        <!-- col-2 -->
                        <div class="w-100 imgUp position-relative">
                            <div class="imagePreview"></div>
                            <label class="btn bg-white upload-1">
                                Edit/Change Image<input type="file" class="uploadFile img" value="Upload Photo"
                                    style="width: 0px;height: 0px;overflow: hidden;">
                            </label>
                        </div>
                        <!-- col-2 -->
                    </div>
                    <div class="col-md-6 profile-form">
                        <div class="">
                            <label for="basic-url" class="form-label">Name</label>
                            <div class="input-group flex-nowrap">
                                <input type="text" class="form-control px-0 py-1" placeholder="Username"
                                    aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="basic-url" class="form-label">Gender</label>
                            <div class="input-group flex-nowrap">
                                <input type="text" class="form-control px-0 py-1" placeholder="Not specified"
                                    aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="basic-url" class="form-label">Date of birth</label>
                            <div class="input-group flex-nowrap">
                                <input type="text" class="form-control px-0 py-1" placeholder="December 10, 1996"
                                    aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="basic-url" class="form-label">Email Address</label>
                            <div class="input-group flex-nowrap">
                                <input type="text" class="form-control px-0 py-1" placeholder="John Doe@test.com"
                                    aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="basic-url" class="form-label">Age</label>
                            <div class="input-group flex-nowrap">
                                <input type="text" class="form-control px-0 py-1" placeholder="Lorem ipsum"
                                    aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="basic-url" class="form-label">Experience </label>
                            <div class="input-group flex-nowrap">
                                <input type="text" class="form-control px-0 py-1" placeholder="Lorem ipsum"
                                    aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="basic-url" class="form-label">Training Philosophy (200 words max) </label>
                            <div class="input-group flex-nowrap">
                                <input type="text" class="form-control px-0 py-1" placeholder="Lorem ipsum"
                                    aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- end main story box -->

    <!-- Start about | what to expect -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 position-relative">
                    <h1 class="fc-black ff-gr fw-400 mb-4 ">About</h1>
                    <div class="position-absolute edit-1">
                        <p><a href=""> Edit </a></p>
                    </div>
                    <div class="instructor-about ">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum consectetur ullam itaque iusto
                            assumenda praesentium soluta natus autem quas ex numquam qui quam voluptate iure, atque
                            eaque exercitationem rem. Laudantium.Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Cum consectetur ullam itaque iusto assumenda praesentium soluta natus autem quas ex
                            numquam qui quam voluptate iure, atque eaque exercitationem rem. quas ex numquam qui quas ex
                            numquam qui Laudantium.
                        </p>
                    </div>

                </div>
                <div class="col-md-6 position-relative">
                    <h1 class="fc-black ff-gr fw-400 mb-4 ">What to expect</h1>
                    <div class="position-absolute edit-1">
                        <p><a href=""> Edit </a></p>
                    </div>
                    <div class="instructor-expect">
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum consectetur.</p>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum consectetur.</p>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum consectetur.</p>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about | what to expect -->

    <!-- Start Video (Optional) -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fc-black ff-gr fw-400 mb-4 ">Video (Optional)</h1>
                    <p>Increase your chances of acquiring students by uploading a video. Video content may include an
                        introduction or explanation of your training methods and training technique. ++ </p>
                </div>
                <div class="col-md-6 mt-4">
                    <label for="youtube-id" class="mb-3">Youtube or Vimeo URL</label>
                    <div class="input-group flex-nowrap">
                        <input id="youtube-id" type="text" class="js-youtube-vid  utube-url" placeholder="">
                    </div>
                    <div class="utube-checkbox mt-3">
                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">Morning</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Video (Optional) -->

        <!-- Start Photos -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="fc-black ff-gr fw-400 mb-4 ">Photos</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- end Photos -->

    <!-- start story content -->
    <section>
        <div class="container">
            <!-- start what to expect -->
            <div class="row mt-5">
                <div class="col-md-6 mb-5">
                    <h3 class="fw-400 mb-4">What to expect</h3>
                    <ul class="list-group expect-list">
                        <li class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</li>
                        <li class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</li>
                        <li class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</li>
                        <li class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</li>
                        <li class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</li>
                    </ul>
                </div>
                <div class="col-md-6 mb-5">
                    <h3 class="fw-400 mb-4">About The Trainer</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
            <!-- end what to expect -->

            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <h4>RELATED EVENTS</h4>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="blog-story-img">
                                <img src="assets/img/dummy.png" class="img-fluid w-100">
                            </div>
                            <div class="blog-story-contetn">
                                <h4 class="fw-400 mt-5 mb-4">Event title lorem ipsum dolor sit amet</h4>
                                <p class="publish-date-2 clr-auqa mb-1">On 5th May, 10 am GMT</p>
                                <p class="publish-date-2">Place Name, Dubai, UAE</p>
                                <p class="blog-story-desc d-flex align-items-center mb-1">
                                    John Doe <img src="assets/img/verified.svg" class="ms-2">
                                </p>
                                <p class="blog-story-desc">Certified Yoga Trainer</p>
                                <div class="cta-box mt-4">
                                    <a href="#">
                                        <button class="green-cta-2">About us</button>
                                    </a>
                                    <a href="" class="ms-5"> <img src="assets/img/share.svg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="blog-story-img">
                                <img src="assets/img/dummy.png" class="img-fluid w-100">
                            </div>
                            <div class="blog-story-contetn">
                                <h4 class="fw-400 mt-5 mb-4">Event title lorem ipsum dolor sit amet</h4>
                                <p class="publish-date-2 clr-auqa mb-1">On 5th May, 10 am GMT</p>
                                <p class="publish-date-2">Place Name, Dubai, UAE</p>
                                <p class="blog-story-desc d-flex align-items-center mb-1">
                                    John Doe <img src="assets/img/verified.svg" class="ms-2">
                                </p>
                                <p class="blog-story-desc">Certified Yoga Trainer</p>
                                <div class="cta-box mt-4">
                                    <a href="#">
                                        <button class="green-cta-2">About us</button>
                                    </a>
                                    <a href="" class="ms-5"> <img src="assets/img/share.svg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="blog-story-img">
                                <img src="assets/img/dummy.png" class="img-fluid w-100">
                            </div>
                            <div class="blog-story-contetn">
                                <h4 class="fw-400 mt-5 mb-4">Event title lorem ipsum dolor sit amet</h4>
                                <p class="publish-date-2 clr-auqa mb-1">On 5th May, 10 am GMT</p>
                                <p class="publish-date-2">Place Name, Dubai, UAE</p>
                                <p class="blog-story-desc d-flex align-items-center mb-1">
                                    John Doe <img src="assets/img/verified.svg" class="ms-2">
                                </p>
                                <p class="blog-story-desc">Certified Yoga Trainer</p>
                                <div class="cta-box mt-4">
                                    <a href="#">
                                        <button class="green-cta-2">About us</button>
                                    </a>
                                    <a href="" class="ms-5"> <img src="assets/img/share.svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end story content -->

    <!-- start video section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center"> VIDEO SECTION</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end video section -->

    <!-- Start photos section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class=""> Photos</h1>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 hover-bw">
                            <a href="">
                                <img src="assets/img/Mask-Group-9.png" class="img-fluid" />
                            </a>
                        </div>
                        <div class="col-md-4 hover-bw">
                            <a href="">
                                <img src="assets/img/Mask-Group-9.png" class="img-fluid" />
                            </a>
                        </div>
                        <div class="col-md-4 hover-bw">
                            <a href="">
                                <img src="assets/img/Mask-Group-9.png" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end photos section -->

    <!-- Start Client succes story -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mb-4"> Client Success Story</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Client succes story -->

    <!-- Start Specialities | Can help u -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-between flex-wrap">
                    <h1 class="mb-4 w-100"> Specialities</h1>
                    <div class="special-left-list w-50">
                        <div class="list-2 pb-5">
                            <ul class="list-group expect-list">
                                <li class="">Lorem ipsum dolor </li>
                                <li class="mt-3">Lorem ipsum dolor </li>
                                <li class="mt-3">Lorem ipsum dolor </li>
                                <li class="mt-3">Lorem ipsum dolor </li>
                                <li class="mt-3">Lorem ipsum dolor </li>
                            </ul>
                        </div>
                    </div>
                    <div class="special-right-list w-50">
                        <div class="list-2 pb-5">
                            <ul class="list-group expect-list">
                                <li class="">Lorem ipsum dolor </li>
                                <li class="mt-3">Lorem ipsum dolor </li>
                                <li class="mt-3">Lorem ipsum dolor </li>
                                <li class="mt-3">Lorem ipsum dolor </li>
                                <li class="mt-3">Lorem ipsum dolor </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-between flex-wrap">
                    <h1 class="mb-4 w-100"> I Can Help You Accomplish</h1>
                    <div class="special-left-list w-50">
                        <div class="list-2 pb-5">
                            <ul class="list-group expect-list">
                                <li class="">Lorem ipsum dolor </li>
                                <li class="mt-3">Lorem ipsum dolor </li>
                                <li class="mt-3">Lorem ipsum dolor </li>
                                <li class="mt-3">Lorem ipsum dolor </li>
                                <li class="mt-3">Lorem ipsum dolor </li>
                            </ul>
                        </div>
                    </div>
                    <div class="special-right-list w-50">
                        <div class="list-2 pb-5">
                            <ul class="list-group expect-list">
                                <li class="">Lorem ipsum dolor </li>
                                <li class="mt-3">Lorem ipsum dolor </li>
                                <li class="mt-3">Lorem ipsum dolor </li>
                                <li class="mt-3">Lorem ipsum dolor </li>
                                <li class="mt-3">Lorem ipsum dolor </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Specialities | Can help u -->

    <!-- Start locations & availability -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                     <div class="map-ifram">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462560.3011806427!2d54.947284948608434!3d25.076381472700543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2s!4v1663259315404!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                   </div>
                </div>
                <div class="col-md-5 d-flex justify-content-between flex-wrap">
                    <div class="location-1 d-flex">
                        <div class="loc-icon">
                            <img src="assets/img/location.svg" class="img-fluid" />
                        </div>
                        <div class="location-detail ms-4">
                            <p>Place name, Area,</br> Dubai, UAE </p>
                        </div>
                    </div>
                    <div class="location-1 d-flex">
                        <div class="loc-icon">
                            <img src="assets/img/location.svg" class="img-fluid" />
                        </div>
                        <div class="location-detail ms-4">
                            <p>Place name, Area,</br> Dubai, UAE </p>
                        </div>
                    </div>
                    <div class="w-100 ">
                        <div class="col-md-12 py-2 px-3 bg-bgE5DCD0">
                            <p class="mb-0"><img src="assets/img/car.svg" /> I can travel within 30 miles of zip code
                                xxxxxx</p>
                        </div>
                        <div class="col-md-12 mt-4">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Sunday</td>
                                        <td>8am - 10am</td>
                                    </tr>
                                    <tr>
                                        <td>Monday</td>
                                        <td>Inquire about availability</td>
                                    </tr>
                                    <tr>
                                        <td>Tuesday</td>
                                        <td>7pm - 9pm</td>
                                    </tr>
                                    <tr>
                                        <td>Wednesday</td>
                                        <td>9pm - 10pm</td>
                                    </tr>
                                    <tr>
                                        <td>Thursday</td>
                                        <td>Inquire about availability</td>

                                    </tr>
                                    <tr>
                                        <td>Friday</td>
                                        <td>7pm - 9pm</td>
                                    </tr>
                                    <tr>
                                        <td>Saturday</td>
                                        <td>8am - 10am</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End locations & availability -->
    <!-- Start client feedback -->
    <section class="client-sc">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-4 w-100"> Client Feedback</h1>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="percent-100 d-flex align-items-center">
                        <img src="assets/img/like.svg" />
                        <h4 class="ms-3 ff-gr lh-20 mb-0">100% </br>
                            <span class="over-all">Overall Rating</span>
                        </h4>
                    </div>
                    <div class="review-star d-flex justify-content-center align-items-center">
                        <div class="img">
                            <img src="assets/img/star-review.svg" />
                        </div>
                        <p class="mb-0">(5 reviews)</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="client">
                        <!-- reviews box main -->
                        <div class="client-reviews mb-4" data-aos="fade-up">
                            <div class="row mx-0">
                                <div class="col-md-3">
                                    <!-- reviews profile details -->
                                    <div class="reviewer-profile">
                                        <div class="rp-top">
                                            <div class="rp-img">
                                                <img src="assets/img/rp-user.png">
                                            </div>
                                            <div class="rp-detail">
                                                <h4>Christa H <span class="verified">Verified Buyer</span></h4>
                                                <p class="rp-location">Dubai</p>
                                            </div>
                                        </div>
                                        <div class="rp-btm">
                                            <div class="rp-rev">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                            </div>
                                            <div class="rp-date">
                                                01/05/2022
                                            </div>
                                        </div>
                                    </div>
                                    <!-- reviews profile details end-->
                                </div>
                                <div class="col-md-7 pdl-50">
                                    <!-- reviews details -->
                                    <div class="rev-content">
                                        <h5>Lorem ipsum </h5>
                                        <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                            Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    </div>
                                    <!-- reviews details end -->
                                </div>
                                <div class="col-md-2">
                                    <div class="help-full">
                                        <p>Was this helpful? <span class="like-icon"><i
                                                    class="ri-thumb-up-fill"></i><span
                                                    class="count-like">0</span></span> <span class="like-icon"><i
                                                    class="ri-thumb-down-fill"></i><span
                                                    class="count-like">0</span></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- reviews box main end-->
                        <!-- reviews box main -->
                        <div class="client-reviews mb-4" data-aos="fade-up">
                            <div class="row mx-0">
                                <div class="col-md-3">
                                    <!-- reviews profile details -->
                                    <div class="reviewer-profile">
                                        <div class="rp-top">
                                            <div class="rp-img">
                                                <img src="assets/img/rp-user.png">
                                            </div>
                                            <div class="rp-detail">
                                                <h4>Christa H <span class="verified">Verified Buyer</span></h4>
                                                <p class="rp-location">Dubai</p>
                                            </div>
                                        </div>
                                        <div class="rp-btm">
                                            <div class="rp-rev">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                            </div>
                                            <div class="rp-date">
                                                01/05/2022
                                            </div>
                                        </div>
                                    </div>
                                    <!-- reviews profile details end-->
                                </div>
                                <div class="col-md-7 pdl-50">
                                    <!-- reviews details -->
                                    <div class="rev-content">
                                        <h5>Lorem ipsum </h5>
                                        <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                            Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    </div>
                                    <!-- reviews details end -->
                                </div>
                                <div class="col-md-2">
                                    <div class="help-full">
                                        <p>Was this helpful? <span class="like-icon"><i
                                                    class="ri-thumb-up-fill"></i><span
                                                    class="count-like">0</span></span> <span class="like-icon"><i
                                                    class="ri-thumb-down-fill"></i><span
                                                    class="count-like">0</span></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- reviews box main end-->
                        <!-- reviews box main -->
                        <div class="client-reviews mb-4" data-aos="fade-up">
                            <div class="row mx-0">
                                <div class="col-md-3">
                                    <!-- reviews profile details -->
                                    <div class="reviewer-profile">
                                        <div class="rp-top">
                                            <div class="rp-img">
                                                <img src="assets/img/rp-user.png">
                                            </div>
                                            <div class="rp-detail">
                                                <h4>Christa H <span class="verified">Verified Buyer</span></h4>
                                                <p class="rp-location">Dubai</p>
                                            </div>
                                        </div>
                                        <div class="rp-btm">
                                            <div class="rp-rev">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                            </div>
                                            <div class="rp-date">
                                                01/05/2022
                                            </div>
                                        </div>
                                    </div>
                                    <!-- reviews profile details end-->
                                </div>
                                <div class="col-md-7 pdl-50">
                                    <!-- reviews details -->
                                    <div class="rev-content">
                                        <h5>Lorem ipsum </h5>
                                        <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                            Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    </div>
                                    <!-- reviews details end -->
                                </div>
                                <div class="col-md-2">
                                    <div class="help-full">
                                        <p>Was this helpful? <span class="like-icon"><i
                                                    class="ri-thumb-up-fill"></i><span
                                                    class="count-like">0</span></span> <span class="like-icon"><i
                                                    class="ri-thumb-down-fill"></i><span
                                                    class="count-like">0</span></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- reviews box main end-->
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End client feedback -->

    <!-- Start Recomended Products -->
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12 text-center">
                    <h1 class="mb-4 w-100"> Recommended Products</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-between">
                    <div class="team-box-2 team-box-3 team-box aos-init aos-animate" data-aos="fade-up">
                        <a href="">
                            <div class="img-box text-center">
                                <img src="assets/img/Mask Group 1.png">
                            </div>
                            <p class="mt-4">Product name</p>
                            <div class="sale-price d-flex justify-content-center">
                                <div class="left-side">
                                    <p class=" mb-0"> <span class="line-through"> $123</span> $100</p>
                                </div>
                                <div class="right-side ms-4">
                                    <p class="mb-0 aqua2">20% OFF</p>
                                </div>
                            </div>
                            <p class="mb-0 mt-4">Extra <span class="fs-19 ">5%</span> Off</p>
                            <div class="black-star d-flex justify-content-center">
                                <img src="assets/img/star-review.svg" />
                                <p class="mb-0">( 58 )</p>
                            </div>
                        </a>
                    </div>
                    <div class="team-box-2 team-box-3 team-box aos-init aos-animate" data-aos="fade-up">
                        <a href="">
                            <div class="img-box text-center">
                                <img src="assets/img/Mask Group 1.png">
                            </div>
                            <p class="mt-4">Product name</p>
                            <div class="sale-price d-flex justify-content-center">
                                <div class="left-side">
                                    <p class=" mb-0"> <span class="line-through"> $123</span> $100</p>
                                </div>
                                <div class="right-side ms-4">
                                    <p class="mb-0 aqua2">20% OFF</p>
                                </div>
                            </div>
                            <p class="mb-0 mt-4">Extra <span class="fs-19 ">5%</span> Off</p>
                            <div class="black-star d-flex justify-content-center">
                                <img src="assets/img/star-review.svg" />
                                <p class="mb-0">( 58 )</p>
                            </div>
                        </a>
                    </div>
                    <div class="team-box-2 team-box-3 team-box aos-init aos-animate" data-aos="fade-up">
                        <a href="">
                            <div class="img-box text-center">
                                <img src="assets/img/Mask Group 1.png">
                            </div>
                            <p class="mt-4">Product name</p>
                            <div class="sale-price d-flex justify-content-center">
                                <div class="left-side">
                                    <p class=" mb-0"> <span class="line-through"> $123</span> $100</p>
                                </div>
                                <div class="right-side ms-4">
                                    <p class="mb-0 aqua2">20% OFF</p>
                                </div>
                            </div>
                            <p class="mb-0 mt-4">Extra <span class="fs-19 ">5%</span> Off</p>
                            <div class="black-star d-flex justify-content-center">
                                <img src="assets/img/star-review.svg" />
                                <p class="mb-0">( 58 )</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Recomended Products -->

    <!-- header -->
    <?php include 'inc/footer.php';?>
    <!-- header closed-->
</main>

<script>
    $(".imgAdd").click(function () {
        $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
    });
    $(document).on("click", "i.del", function () {
        $(this).parent().remove();
    });
    $(function () {
        $(document).on("change", ".uploadFile", function () {
            var uploadFile = $(this);
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

            if (/^image/.test(files[0].type)) { // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function () { // set image data as background of div
                    //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                    uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url(" + this.result + ")");
                }
            }

        });
    }); 
</script>