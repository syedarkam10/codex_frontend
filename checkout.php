<!-- header -->
<?php include 'inc/header.php';?>
<!-- header closed-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css" />
<script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js"></script>
<style>
.form-floating>.bi-calendar-date+.datepicker_input+label {
padding-left: 3.5rem;
z-index: 3;
}
.card-date {
height: calc(3rem + 0px) !important;
padding: 0.5rem 0.75rem !important;
}
.card-date-label {
padding: 0.5rem 0.75rem !important;
font-size: 12px !important;
}
.datepicker-picker,
button.button.prev-btn,
button.button.next-btn,
button.button.view-switch{
font-size: 12px;
}
</style>
<main id="main">
    <!-- start main story box -->
    <section class="mt-9">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fc-black ff-gr fw-400 d-flex align-items-center"><i
                    class="fa-solid fa-arrow-left back-icon"></i> Checkout</h1>
                </div>
            </div>
            <div class="row mt-4 justify-content-between">
                <div class="col-md-6 bg-lightbrown" data-aos="fade-up">
                    <div class="pcg-box-1 ">
                        <div class="row p-3 p-md-5">
                            <div class="col-md-9">
                                <p class="smpp"> Subscribe Most Popular Package</p>
                                <h1 class="fc-black ff-gr fw-400 d-flex align-items-center">$400.00
                                <span class="per-month ms-4"> Per Month </span> </h1>
                            </div>
                            <div class="col-md-3">
                                <a href="">
                                    <p class="change-plan"> Change Plan </p>
                                </a>
                            </div>
                            <div class="row mt-3 mb-4">
                                <div class="col-md-9 mt-4">
                                    <div class="input-group">
                                        <input type="tel" placeholder="Discount code" class="w-100 form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3 ps-0 mt-4">
                                    <button type="button" class="green-cta w-100 radius-0">APPLY</button>
                                </div>
                            </div>
                        </div>
                        <div class="bb my-0 my-md-3"></div>
                        <div class="row p-4">
                            <p class="mb-0 text-center"> Express Cehckout</p>
                            <div class="col">
                                <button class="btn-black">
                                <img src="assets/img/paypal.png" class="img-fluid" />
                                </button>
                            </div>
                            <div class="col">
                                <button class="btn-black">
                                <img src="assets/img/paypal.png" class="img-fluid" />
                                </button>
                            </div>
                            <div class="col">
                                <button class="btn-black">
                                <img src="assets/img/paypal.png" class="img-fluid" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5" data-aos="fade-up">
                    <p class="pay-with-card">Or pay with card</p>
                    <div class="col-md-12 mt-4 mt-lg-5  ">
                        <label for="exampleFormControlInput1" class="form-label my-label d-block    ">Email</label>
                        <input type="email" placeholder="" id="email" class="my-select w-100" />
                    </div>
                    <div class="col-md-12 mt-3 ">
                        <label for="exampleFormControlInput1" class=" form-label my-label d-block    ">Card
                        information</label>
                        <div class="inputWithIcon my-select border-bottom-0">
                            <input type="text" placeholder="1234-1234-1234-1234">
                            <!-- <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i> -->
                            <img src="assets/img/visa.jpg" class="payment-cards-icon visa-icon" />
                            <img src="assets/img/master.jpg" class="payment-cards-icon master-icon" />
                            <img src="assets/img/amex.jpg" class="payment-cards-icon amex-icon" />
                        </div>
                        <div class="ci-second d-flex">
                            <div class="w-50">
                                <div class="form-floating  d-flex ">
                                    <input type="text" class="border-end-0 datepicker_input form-control border-2 card-date"
                                    id="datepicker1" required placeholder="DD/MM/YYYY">
                                    <label for="datepicker1" class="card-date-label">DD/ MM / YY</label>
                                </div>
                            </div>
                            <div class="w-50">
                                <div class="inputWithIcon my-select">
                                    <input type="text" placeholder="CVC">
                                    <img src="assets/img/visa.jpg" class="payment-cards-icon visa-icon" />
                                </div>
                            </div>
                        </div>
                        <!-- <input type="text" placeholder="" id="card-name" class="my-select w-100" /> -->
                    </div>
                    <div class="col-md-12 mt-3 ">
                        <label for="exampleFormControlInput1" class=" form-label my-label d-block    ">Name on
                        card</label>
                        <div class="inputWithIcon my-select">
                            <input type="text" placeholder="">
                        </div>
                        <!-- <input type="text" placeholder="" id="card-name" class="my-select w-100" /> -->
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="filed-1 ">
                            <label for="exampleFormControlInput1" class="form-label my-label d-block    ">Country or
                            Region</label>
                            <select class="form-select my-select border-bottom-0" aria-label="Default select example">
                                <option selected>Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <input type="tel" placeholder="ZIP" id="zip" class="my-select w-100" />
                        </div>

                        <div class="text-right">
                            <img src="assets/img/save-secure.svg">
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-center  mt-5" data-aos="fade-up">
                    <p>100% Satisfaction Guarantee <br/>
If you are not satisfied after the first lesson, we will set you up with another coach or refund your remaining lesson credits.</p>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- end main story box -->
<!-- header -->
<?php include 'inc/footer_links.php';?>
<!-- header closed-->
<script>
/* Bootstrap 5 JS included */
/* vanillajs-datepicker 1.1.4 JS included */
const getDatePickerTitle = elem => {
// From the label or the aria-label
const label = elem.nextElementSibling;
let titleText = '';
if (label && label.tagName === 'LABEL') {
titleText = label.textContent;
} else {
titleText = elem.getAttribute('aria-label') || '';
}
return titleText;
}
const elems = document.querySelectorAll('.datepicker_input');
for (const elem of elems) {
const datepicker = new Datepicker(elem, {
'format': 'dd/mm/yyyy', // UK format
title: getDatePickerTitle(elem)
});
}
</script>
</main>