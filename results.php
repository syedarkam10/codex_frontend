<!-- header -->
<?php include 'inc/header.php';?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css" rel="stylesheet">

<style>
    select[data-multi-select-plugin] {
        display: none !important;
    }
    form.result-main-multi-select {
    display: flex;
    align-items: center;
    padding: 15px;
/*    border: 1px solid #707070;*/
}
    .multi-select-component {
        position: relative;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    height: auto;
    width: 100%;
    /* padding: 15px; */
    font-size: 14px;
    /* line-height: 1.42857143; */
    /* padding-bottom: 0px; */
    color: #555;
    /* background-color: #fff; */
    /* border: 1px solid #ccc; */
    border-radius: 4px;
    /* -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s; */
    -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    }

    .autocomplete-list {
        border-radius: 4px 0px 0px 4px;
    }

    .multi-select-component:focus-within {
        box-shadow: inset 0px 0px 0px 2px #78ABFE;
    }

    .multi-select-component .btn-group {
        display: none !important;
    }

    .multiselect-native-select .multiselect-container {
        width: 100%;
    }

    .selected-wrapper {
        -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    display: inline-block;
    border: 1px solid #d9d9d9;
    background-color: #ededed;
    white-space: nowrap;
    margin: 1px 5px 5px 0;
    /* height: 22px; */
    padding: 4px 7px;
    vertical-align: top;
    cursor: default;
    }

    .selected-wrapper .selected-label {
        max-width: 514px;
        display: inline-block;
        overflow: hidden;
        text-overflow: ellipsis;
        padding-left: 4px;
        vertical-align: top;
    }

    .selected-wrapper .selected-close {
        display: inline-block;
        text-decoration: none;
        font-size: 14px;
        line-height: 1.49em;
        margin-left: 5px;
        /* padding-bottom: 10px; */
        height: 100%;
        vertical-align: top;
        padding-right: 4px;
        opacity: 0.2;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        font-weight: 700;
    }

    .search-container {
        display: flex;
        flex-direction: row;
    }

    .search-container .selected-input {
        background: none;
        border: 0;
        height: 20px;
        width: 60px;
        padding: 0;
        margin-bottom: 6px;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .search-container .selected-input:focus {
        outline: none;
    }

    .dropdown-icon.active {
        transform: rotateX(180deg)
    }

    .search-container .dropdown-icon {
        display: none;
        padding: 10px 5px;
        position: absolute;
        top: 5px;
        right: 5px;
        width: 10px;
        height: 10px;
        border: 0 !important;
        /* needed */
        -webkit-appearance: none;
        -moz-appearance: none;
        /* SVG background image */
        background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2212%22%20height%3D%2212%22%20viewBox%3D%220%200%2012%2012%22%3E%3Ctitle%3Edown-arrow%3C%2Ftitle%3E%3Cg%20fill%3D%22%23818181%22%3E%3Cpath%20d%3D%22M10.293%2C3.293%2C6%2C7.586%2C1.707%2C3.293A1%2C1%2C0%2C0%2C0%2C.293%2C4.707l5%2C5a1%2C1%2C0%2C0%2C0%2C1.414%2C0l5-5a1%2C1%2C0%2C1%2C0-1.414-1.414Z%22%20fill%3D%22%23818181%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
        background-position: center;
        background-size: 10px;
        background-repeat: no-repeat;
    }

    .search-container ul {
        position: absolute;
        list-style: none;
        padding: 0;
        z-index: 3;
        margin-top: 49px;
        width: 100%;
        right: 0px;
        background: transparent;
        border: 1px solid #ccc;
        border-top: none;
        border-bottom: none;
        -webkit-box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
        box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
    }

    .search-container ul :focus {
        outline: none;
    }

    .search-container ul li {
        display: block;
        text-align: left;
        padding: 8px 29px 2px 12px;
        border-bottom: 1px solid #ccc;
        font-size: 14px;
        min-height: 31px;
    }

    .search-container ul li:first-child {
        border-top: 1px solid #ccc;
        border-radius: 4px 0px 0 0;
    }

    .search-container ul li:last-child {
        border-radius: 4px 0px 0 0;
    }


    .search-container ul li:hover.not-cursor {
        cursor: default;
    }

    .search-container ul li:hover {
        color: #333;
        background-color: rgb(251, 242, 152);
        ;
        border-color: #adadad;
        cursor: pointer;
    }

    /* Adding scrool to select options */
    .autocomplete-list {
        max-height: 150px;
        overflow-y: auto;
    }
    .green-cta-2-search {
    padding: 7px 20px;
    font-size: 16px;
}
</style>
<!-- header closed-->

<!-- ======= Hero Section ======= -->
<section class="bb">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto text-center how-it-main" data-aos="fade-up">
                <h1 class="fc-black ff-gr fw-400 fs-68">Find the best fit for you.</h1>
                <p class="mb-3">Browse through our wellness trainers to find the best fit for you.</p>
                <div class="col-md-12  ">
                    <div class="find-best-fit-box d-flex justify-content-center align-items-center flex-wrap">
                        <div class="label-sect">
                            <p class="mb-0">Area </p>
                        </div>
                        <div class="select-sect ms-3">
                            <form class="result-main-multi-select">
                                <select multiple data-multi-select-plugin>
                                    <option value="Dubai" selected>Dubai</option>
                                    <option value="Sharjah" selected>Sharjah</option>
                                    <option value="Saudia">Saudia</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Alaska">Alaska</option>
                                    <option value="England">England</option>
                                    <option value="Egypt">Egypt</option>
                                </select>
                                <button class="green-cta-2 green-cta-2-search"> Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
       
        <div class="row ">
            <div class="col-md-12" data-aos="fade-up">
                <div class="accordion" id="form1">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button bg-lightbrown collapse-btn justify-content-center"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                <span class="refine"> REFINE YOUR SEARCH</span>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse bg-lightbrown"
                            aria-labelledby="headingOne" data-bs-parent="#form1">
                            <div class="accordion-body py-5">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-2">
                                            <label for="exampleFormControlInput1" class="form-label my-label">Training
                                                Preference</label>

                                            <div class="w-check">
                                                <i class="ri-check-line"></i>
                                                <select class="form-select my-select w-check" aria-label="Default select example">
                                                <option selected>Select</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 my-multiselect">
                                            <label for="exampleFormControlInput1" class="form-label my-label">Primary
                                                Fitness Goal</label>
                                           <div class="find-best-fit-box ">
                                            
                                                <div class="select-sect ms-3">
                                                    <form class="result-main-multi-select">
                                                        <select multiple data-multi-select-plugin>
                                                            <option value="Weight Loss" selected>Weight Loss</option>
                                                            <option value="Flexibility" selected>Flexibility</option>
                                                            <option value="Diet">Diet</option>
                                                            <option value="Medical">Medical</option>
                                                     
                                                        </select>
                                                        
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex flex-wrap justify-content-between">
                                            <div class="w-100">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label my-label">Specialities</label>
                                            </div>
                                            <div class="new">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label my-label mb-0">Aerobics</label>
                                                <div class="form-group">
                                                    <input type="checkbox" id="Beginner">
                                                    <label for="Beginner">Beginner   </label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="Intermediate">
                                                    <label for="Intermediate">Intermediate</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="Advanced">
                                                    <label for="Advanced">Advanced</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6 col-lg-2">
                                            <label for="exampleFormControlInput1" class="form-label my-label">Trainer Gender Preference</label>
                                              <div class="w-check">
                                                <i class="ri-check-line"></i>
                                               <select class="form-select my-select w-check" aria-label="Default select example">
                                                <option selected>No Preference</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Others</option>
                                            </select>
                                            </div>
                                           
                                        </div>
                                        <div class="col-md-6 col-lg-2 ">
                                            <label for="exampleFormControlInput1"
                                                class="form-label my-label">Frequency</label>

                                                  <div class="w-check">
                                                <i class="ri-check-line"></i>
                                             <select class="form-select my-select w-check" aria-label="Default select example">
                                                <option selected>Daily</option>
                                                <option value="1">Weekly</option>
                                                <option value="2">Monthly</option>
                                                <option value="3">Yearly</option>
                                            </select>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <label for="exampleFormControlInput1" class="form-label my-label">Date Range</label>
                                            <div class="input-group mb-4">
                                             <input type="text" name="daterange" class="form-control dt-rg" value="01/01/2018 - 01/15/2018" />
                                                <i class="bi bi-calendar-date input-group-text date-icon-bg"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 d-flex align-items-center flex-wrap">
                                            <!-- <p>Budget Per Hour</p> -->
                                            <label for="exampleFormControlInput1" class="form-label my-label">Budget Per
                                                Hour</label>
                                            <div class="range-slider">
                                                <input value="1000" min="1000" max="50000" step="500" type="range">
                                                <input value="50000" min="1000" max="50000" step="500" type="range">
                                                <span class="rangeValues"></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
         <div class="row mt-5">
             <div class="col-md-6 text-left">
                 <p class="mb-0">40 Trainers matches your search</p>
             </div>
             <div class="col-md-6 text-right">
                 <div class="sort-by">
                     Sort By : <select class="srt">
                         <option>Best Rated</option>
                         <option>Newest Rated</option>
                     </select>
                 </div>
             </div>
         </div>
    </div>
</section>
<!-- End Hero -->
<main id="main">

    <!-- Start Team result -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex flex-wrap justify-content-between mt-4 mt-md-auto">

                
                    <div class="team-box-2 team-box " data-aos="fade-up">
                            <a href="trainer_detail.php">
                        <div class="img-box text-center">
                            <img src="assets/img/Mask Group 1.png" />
                        </div>
                        <h6>John Doe</h6>
                        <p class="">CERTIFIED YOGA TRAINER</p>
                        <div class="rating-box d-flex justify-content-between align-items-center mb-3">
                            <div class="img-div"><img src="assets/img/image-svg.svg" class="img-fluid" /></div>
                            <div class="bookmark-div"><img src="assets/img/bookmark-svg.svg" class="img-fluid" /></div>
                            <p class="hours mb-0 lh-16">150+ </br> Hours</p>
                            <div class="rating-starts-div d-flex align-items-center"><img
                                    src="assets/img/ranking-stars.svg" class="img-fluid" />
                                <p class="mb-0 reviews">(5 reviews)</p>
                            </div>
                        </div>
                        <p class="mb-0">Starting At <span class="fs-19 aqua2">500</span> <span class="aqua2">
                                AED/HR</span></p>
                                  </a>
                    </div>
                  
 


                    <div class="team-box-2 team-box mt-5 mt-md-auto" data-aos="fade-up">
                        <a href="trainer_detail.php">
                        <div class="img-box text-center">
                            <img src="assets/img/Mask Group 2.png" />
                        </div>
                        <h6>John Doe</h6>
                        <p>CERTIFIED YOGA TRAINER</p>
                        <div class="rating-box d-flex justify-content-between align-items-center mb-3">
                            <div class="img-div"><img src="assets/img/image-svg.svg" /></div>
                            <div class="bookmark-div"><img src="assets/img/bookmark-svg.svg" /></div>
                            <p class="mb-0 lh-16">150+ </br> Hours</p>
                            <div class="rating-starts-div d-flex align-items-center"><img
                                    src="assets/img/ranking-stars.svg" />
                                <p class="mb-0 reviews">(5 reviews)</p>
                            </div>
                        </div>
                        <p class="mb-0">Starting At <span class="fs-19 aqua2">500</span> <span class="aqua2">
                                AED/HR</span></p>
                            </a>
                    </div>



                    <div class="team-box-2 team-box mt-5 mt-md-auto" data-aos="fade-up">
                        <a href="trainer_detail.php">
                        <div class="img-box text-center">
                            <img src="assets/img/Mask Group 3.png" />
                        </div>
                        <h6>John Doe</h6>
                        <p>CERTIFIED YOGA TRAINER</p>
                        <div class="rating-box d-flex justify-content-between align-items-center mb-3">
                            <div class="img-div"><img src="assets/img/image-svg.svg" /></div>
                            <div class="bookmark-div"><img src="assets/img/bookmark-svg.svg" /></div>
                            <p class="mb-0 lh-16">150+ </br> Hours</p>
                            <div class="rating-starts-div d-flex align-items-center"><img
                                    src="assets/img/ranking-stars.svg" />
                                <p class="mb-0 reviews">(5 reviews)</p>
                            </div>
                        </div>
                        <p class="mb-0">Starting At <span class="fs-19 aqua2">500</span> <span class="aqua2">
                                AED/HR</span></p>
                            </a>
                    </div>

                    <div class="team-box-2 team-box mt-5" data-aos="fade-up">
                        <a href="trainer_detail.php">
                        <div class="img-box text-center">
                            <img src="assets/img/Mask Group 3.png" />
                        </div>
                        <h6>John Doe</h6>
                        <p>CERTIFIED YOGA TRAINER</p>
                        <div class="rating-box d-flex justify-content-between align-items-center mb-3">
                            <div class="img-div"><img src="assets/img/image-svg.svg" /></div>
                            <div class="bookmark-div"><img src="assets/img/bookmark-svg.svg" /></div>
                            <p class="mb-0 lh-16">150+ </br> Hours</p>
                            <div class="rating-starts-div d-flex align-items-center"><img
                                    src="assets/img/ranking-stars.svg" />
                                <p class="mb-0 reviews">(5 reviews)</p>
                            </div>
                        </div>
                        <p class="mb-0">Starting At <span class="fs-19 aqua2">500</span> <span class="aqua2">
                                AED/HR</span></p>
                            </a>
                    </div>
                    <div class="team-box-2 team-box mt-5" data-aos="fade-up">
                        <div class="img-box text-center">
                            <img src="assets/img/Mask Group 3.png" />
                        </div>
                        <h6>John Doe</h6>
                        <p>CERTIFIED YOGA TRAINER</p>
                        <div class="rating-box d-flex justify-content-between align-items-center mb-3">
                            <div class="img-div"><img src="assets/img/image-svg.svg" /></div>
                            <div class="bookmark-div"><img src="assets/img/bookmark-svg.svg" /></div>
                            <p class="mb-0 lh-16">150+ </br> Hours</p>
                            <div class="rating-starts-div d-flex align-items-center"><img
                                    src="assets/img/ranking-stars.svg" />
                                <p class="mb-0 reviews">(5 reviews)</p>
                            </div>
                        </div>
                        <p class="mb-0">Starting At <span class="fs-19 aqua2">500</span> <span class="aqua2">
                                AED/HR</span></p>
                    </div>
                    <div class="team-box-2 team-box mt-5" data-aos="fade-up">
                        <div class="img-box text-center">
                            <img src="assets/img/Mask Group 3.png" />
                        </div>
                        <h6>John Doe</h6>
                        <p>CERTIFIED YOGA TRAINER</p>
                        <div class="rating-box d-flex justify-content-between align-items-center mb-3">
                            <div class="img-div"><img src="assets/img/image-svg.svg" /></div>
                            <div class="bookmark-div"><img src="assets/img/bookmark-svg.svg" /></div>
                            <p class="mb-0 lh-16">150+ </br> Hours</p>
                            <div class="rating-starts-div d-flex align-items-center"><img
                                    src="assets/img/ranking-stars.svg" />
                                <p class="mb-0 reviews">(5 reviews)</p>
                            </div>
                        </div>
                        <p class="mb-0">Starting At <span class="fs-19 aqua2">500</span> <span class="aqua2">
                                AED/HR</span></p>
                    </div>
                    <div class="team-box-2 team-box mt-5" data-aos="fade-up">
                        <div class="img-box text-center">
                            <img src="assets/img/Mask Group 3.png" />
                        </div>
                        <h6>John Doe</h6>
                        <p>CERTIFIED YOGA TRAINER</p>
                        <div class="rating-box d-flex justify-content-between align-items-center mb-3">
                            <div class="img-div"><img src="assets/img/image-svg.svg" /></div>
                            <div class="bookmark-div"><img src="assets/img/bookmark-svg.svg" /></div>
                            <p class="mb-0 lh-16">150+ </br> Hours</p>
                            <div class="rating-starts-div d-flex align-items-center"><img
                                    src="assets/img/ranking-stars.svg" />
                                <p class="mb-0 reviews">(5 reviews)</p>
                            </div>
                        </div>
                        <p class="mb-0">Starting At <span class="fs-19 aqua2">500</span> <span class="aqua2">
                                AED/HR</span></p>
                    </div>
                    <div class="team-box-2 team-box mt-5" data-aos="fade-up">
                        <div class="img-box text-center">
                            <img src="assets/img/Mask Group 3.png" />
                        </div>
                        <h6>John Doe</h6>
                        <p>CERTIFIED YOGA TRAINER</p>
                        <div class="rating-box d-flex justify-content-between align-items-center mb-3">
                            <div class="img-div"><img src="assets/img/image-svg.svg" /></div>
                            <div class="bookmark-div"><img src="assets/img/bookmark-svg.svg" /></div>
                            <p class="mb-0 lh-16">150+ </br> Hours</p>
                            <div class="rating-starts-div d-flex align-items-center"><img
                                    src="assets/img/ranking-stars.svg" />
                                <p class="mb-0 reviews">(5 reviews)</p>
                            </div>
                        </div>
                        <p class="mb-0">Starting At <span class="fs-19 aqua2">500</span> <span class="aqua2">
                                AED/HR</span></p>
                    </div>
                    <div class="team-box-2 team-box mt-5" data-aos="fade-up">
                        <div class="img-box text-center">
                            <img src="assets/img/Mask Group 3.png" />
                        </div>
                        <h6>John Doe</h6>
                        <p>CERTIFIED YOGA TRAINER</p>
                        <div class="rating-box d-flex justify-content-between align-items-center mb-3">
                            <div class="img-div"><img src="assets/img/image-svg.svg" /></div>
                            <div class="bookmark-div"><img src="assets/img/bookmark-svg.svg" /></div>
                            <p class="mb-0 lh-16">150+ </br> Hours</p>
                            <div class="rating-starts-div d-flex align-items-center"><img
                                    src="assets/img/ranking-stars.svg" />
                                <p class="mb-0 reviews">(5 reviews)</p>
                            </div>
                        </div>
                        <p class="mb-0">Starting At <span class="fs-19 aqua2">500</span> <span class="aqua2">
                                AED/HR</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team result -->
<style type="text/css">
    section.have-quest, section.self_awaits{
        display: none;
    }
</style>

<script type="text/javascript">

   $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'center',
            minDate: moment().format('MM/DD/YYYY'),
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('DD-MM-YYYY') + ' to ' + end
                .format('DD-MM-YYYY'));
            // price_calculation(start.format('DD-MM-YYYY'), end.format('DD-MM-YYYY'), 1);

        });
    });
</script>
    <!-- start range slider -->
    <script>



        function getVals() {
            // Get slider values
            let parent = this.parentNode;
            let slides = parent.getElementsByTagName("input");
            let slide1 = parseFloat(slides[0].value);
            let slide2 = parseFloat(slides[1].value);
            // Neither slider will clip the other, so make sure we determine which is larger
            if (slide1 > slide2) { let tmp = slide2; slide2 = slide1; slide1 = tmp; }

            let displayElement = parent.getElementsByClassName("rangeValues")[0];
            displayElement.innerHTML = "<p> $" + slide1 + "</p>" + " <p> $" + slide2 + "</p>";
        }

        window.onload = function () {
            // Initialize Sliders
            let sliderSections = document.getElementsByClassName("range-slider");
            for (let x = 0; x < sliderSections.length; x++) {
                let sliders = sliderSections[x].getElementsByTagName("input");
                for (let y = 0; y < sliders.length; y++) {
                    if (sliders[y].type === "range") {
                        sliders[y].oninput = getVals;
                        // Manually trigger event first time to display values
                        sliders[y].oninput();
                    }
                }
            }
        }
    </script>
    <!-- end range slider -->

    <!-- end date picker -->
    <!-- footer -->
    <?php include 'inc/footer.php';?>
    <!-- footer closed-->
</main>

<script>
    // Initialize function, create initial tokens with itens that are already selected by the user
    function init(element) {
        // Create div that wroaps all the elements inside (select, elements selected, search div) to put select inside
        const wrapper = document.createElement("div");
        wrapper.addEventListener("click", clickOnWrapper);
        wrapper.classList.add("multi-select-component");

        // Create elements of search
        const search_div = document.createElement("div");
        search_div.classList.add("search-container");
        const input = document.createElement("input");
        input.classList.add("selected-input");
        input.setAttribute("autocomplete", "off");
        input.setAttribute("tabindex", "0");
        input.addEventListener("keyup", inputChange);
        input.addEventListener("keydown", deletePressed);
        input.addEventListener("click", openOptions);

        const dropdown_icon = document.createElement("a");
        dropdown_icon.setAttribute("href", "#");
        dropdown_icon.classList.add("dropdown-icon");

        dropdown_icon.addEventListener("click", clickDropdown);
        const autocomplete_list = document.createElement("ul");
        autocomplete_list.classList.add("autocomplete-list")
        search_div.appendChild(input);
        search_div.appendChild(autocomplete_list);
        search_div.appendChild(dropdown_icon);

        // set the wrapper as child (instead of the element)
        element.parentNode.replaceChild(wrapper, element);
        // set element as child of wrapper
        wrapper.appendChild(element);
        wrapper.appendChild(search_div);

        createInitialTokens(element);
        addPlaceholder(wrapper);
    }

    function removePlaceholder(wrapper) {
        const input_search = wrapper.querySelector(".selected-input");
        input_search.removeAttribute("placeholder");
    }

    function addPlaceholder(wrapper) {
        const input_search = wrapper.querySelector(".selected-input");
        const tokens = wrapper.querySelectorAll(".selected-wrapper");
        if (!tokens.length && !(document.activeElement === input_search))
            input_search.setAttribute("placeholder", "---------");
    }


    // Function that create the initial set of tokens with the options selected by the users
    function createInitialTokens(select) {
        let {
            options_selected
        } = getOptions(select);
        const wrapper = select.parentNode;
        for (let i = 0; i < options_selected.length; i++) {
            createToken(wrapper, options_selected[i]);
        }
    }


    // Listener of user search
    function inputChange(e) {
        const wrapper = e.target.parentNode.parentNode;
        const select = wrapper.querySelector("select");
        const dropdown = wrapper.querySelector(".dropdown-icon");

        const input_val = e.target.value;

        if (input_val) {
            dropdown.classList.add("active");
            populateAutocompleteList(select, input_val.trim());
        } else {
            dropdown.classList.remove("active");
            const event = new Event('click');
            dropdown.dispatchEvent(event);
        }
    }


    // Listen for clicks on the wrapper, if click happens focus on the input
    function clickOnWrapper(e) {
        const wrapper = e.target;
        if (wrapper.tagName == "DIV") {
            const input_search = wrapper.querySelector(".selected-input");
            const dropdown = wrapper.querySelector(".dropdown-icon");
            if (!dropdown.classList.contains("active")) {
                const event = new Event('click');
                dropdown.dispatchEvent(event);
            }
            input_search.focus();
            removePlaceholder(wrapper);
        }

    }

    function openOptions(e) {
        const input_search = e.target;
        const wrapper = input_search.parentElement.parentElement;
        const dropdown = wrapper.querySelector(".dropdown-icon");
        if (!dropdown.classList.contains("active")) {
            const event = new Event('click');
            dropdown.dispatchEvent(event);
        }
        e.stopPropagation();

    }

    // Function that create a token inside of a wrapper with the given value
    function createToken(wrapper, value) {
        const search = wrapper.querySelector(".search-container");
        // Create token wrapper
        const token = document.createElement("div");
        token.classList.add("selected-wrapper");
        const token_span = document.createElement("span");
        token_span.classList.add("selected-label");
        token_span.innerText = value;
        const close = document.createElement("a");
        close.classList.add("selected-close");
        close.setAttribute("tabindex", "-1");
        close.setAttribute("data-option", value);
        close.setAttribute("data-hits", 0);
        close.setAttribute("href", "#");
        close.innerText = "x";
        close.addEventListener("click", removeToken)
        token.appendChild(token_span);
        token.appendChild(close);
        wrapper.insertBefore(token, search);
    }


    // Listen for clicks in the dropdown option
    function clickDropdown(e) {

        const dropdown = e.target;
        const wrapper = dropdown.parentNode.parentNode;
        const input_search = wrapper.querySelector(".selected-input");
        const select = wrapper.querySelector("select");
        dropdown.classList.toggle("active");

        if (dropdown.classList.contains("active")) {
            removePlaceholder(wrapper);
            input_search.focus();

            if (!input_search.value) {
                populateAutocompleteList(select, "", true);
            } else {
                populateAutocompleteList(select, input_search.value);

            }
        } else {
            clearAutocompleteList(select);
            addPlaceholder(wrapper);
        }
    }


    // Clears the results of the autocomplete list
    function clearAutocompleteList(select) {
        const wrapper = select.parentNode;

        const autocomplete_list = wrapper.querySelector(".autocomplete-list");
        autocomplete_list.innerHTML = "";
    }

    // Populate the autocomplete list following a given query from the user
    function populateAutocompleteList(select, query, dropdown = false) {
        const {
            autocomplete_options
        } = getOptions(select);


        let options_to_show;

        if (dropdown)
            options_to_show = autocomplete_options;
        else
            options_to_show = autocomplete(query, autocomplete_options);

        const wrapper = select.parentNode;
        const input_search = wrapper.querySelector(".search-container");
        const autocomplete_list = wrapper.querySelector(".autocomplete-list");
        autocomplete_list.innerHTML = "";
        const result_size = options_to_show.length;

        if (result_size == 1) {

            const li = document.createElement("li");
            li.innerText = options_to_show[0];
            li.setAttribute('data-value', options_to_show[0]);
            li.addEventListener("click", selectOption);
            autocomplete_list.appendChild(li);
            if (query.length == options_to_show[0].length) {
                const event = new Event('click');
                li.dispatchEvent(event);

            }
        } else if (result_size > 1) {

            for (let i = 0; i < result_size; i++) {
                const li = document.createElement("li");
                li.innerText = options_to_show[i];
                li.setAttribute('data-value', options_to_show[i]);
                li.addEventListener("click", selectOption);
                autocomplete_list.appendChild(li);
            }
        } else {
            const li = document.createElement("li");
            li.classList.add("not-cursor");
            li.innerText = "No options found";
            autocomplete_list.appendChild(li);
        }
    }


    // Listener to autocomplete results when clicked set the selected property in the select option 
    function selectOption(e) {
        const wrapper = e.target.parentNode.parentNode.parentNode;
        const input_search = wrapper.querySelector(".selected-input");
        const option = wrapper.querySelector(`select option[value="${e.target.dataset.value}"]`);

        option.setAttribute("selected", "");
        createToken(wrapper, e.target.dataset.value);
        if (input_search.value) {
            input_search.value = "";
        }

        input_search.focus();

        e.target.remove();
        const autocomplete_list = wrapper.querySelector(".autocomplete-list");


        if (!autocomplete_list.children.length) {
            const li = document.createElement("li");
            li.classList.add("not-cursor");
            li.innerText = "No options found";
            autocomplete_list.appendChild(li);
        }

        const event = new Event('keyup');
        input_search.dispatchEvent(event);
        e.stopPropagation();
    }


    // function that returns a list with the autcomplete list of matches
    function autocomplete(query, options) {
        // No query passed, just return entire list
        if (!query) {
            return options;
        }
        let options_return = [];

        for (let i = 0; i < options.length; i++) {
            if (query.toLowerCase() === options[i].slice(0, query.length).toLowerCase()) {
                options_return.push(options[i]);
            }
        }
        return options_return;
    }


    // Returns the options that are selected by the user and the ones that are not
    function getOptions(select) {
        // Select all the options available
        const all_options = Array.from(
            select.querySelectorAll("option")
        ).map(el => el.value);

        // Get the options that are selected from the user
        const options_selected = Array.from(
            select.querySelectorAll("option:checked")
        ).map(el => el.value);

        // Create an autocomplete options array with the options that are not selected by the user
        const autocomplete_options = [];
        all_options.forEach(option => {
            if (!options_selected.includes(option)) {
                autocomplete_options.push(option);
            }
        });

        autocomplete_options.sort();

        return {
            options_selected,
            autocomplete_options
        };

    }

    // Listener for when the user wants to remove a given token.
    function removeToken(e) {
        // Get the value to remove
        const value_to_remove = e.target.dataset.option;
        const wrapper = e.target.parentNode.parentNode;
        const input_search = wrapper.querySelector(".selected-input");
        const dropdown = wrapper.querySelector(".dropdown-icon");
        // Get the options in the select to be unselected
        const option_to_unselect = wrapper.querySelector(`select option[value="${value_to_remove}"]`);
        option_to_unselect.removeAttribute("selected");
        // Remove token attribute
        e.target.parentNode.remove();
        input_search.focus();
        dropdown.classList.remove("active");
        const event = new Event('click');
        dropdown.dispatchEvent(event);
        e.stopPropagation();
    }

    // Listen for 2 sequence of hits on the delete key, if this happens delete the last token if exist
    function deletePressed(e) {
        const wrapper = e.target.parentNode.parentNode;
        const input_search = e.target;
        const key = e.keyCode || e.charCode;
        const tokens = wrapper.querySelectorAll(".selected-wrapper");

        if (tokens.length) {
            const last_token_x = tokens[tokens.length - 1].querySelector("a");
            let hits = +last_token_x.dataset.hits;

            if (key == 8 || key == 46) {
                if (!input_search.value) {

                    if (hits > 1) {
                        // Trigger delete event
                        const event = new Event('click');
                        last_token_x.dispatchEvent(event);
                    } else {
                        last_token_x.dataset.hits = 2;
                    }
                }
            } else {
                last_token_x.dataset.hits = 0;
            }
        }
        return true;
    }

    // You can call this function if you want to add new options to the select plugin
    // Target needs to be a unique identifier from the select you want to append new option for example #multi-select-plugin
    // Example of usage addOption("#multi-select-plugin", "tesla", "Tesla")
    function addOption(target, val, text) {
        const select = document.querySelector(target);
        let opt = document.createElement('option');
        opt.value = val;
        opt.innerHTML = text;
        select.appendChild(opt);
    }

    document.addEventListener("DOMContentLoaded", () => {

        // get select that has the options available
        const select = document.querySelectorAll("[data-multi-select-plugin]");
        select.forEach(select => {

            init(select);
        });

        // Dismiss on outside click
        document.addEventListener('click', () => {
            // get select that has the options available
            const select = document.querySelectorAll("[data-multi-select-plugin]");
            for (let i = 0; i < select.length; i++) {
                if (event) {
                    var isClickInside = select[i].parentElement.parentElement.contains(event.target);

                    if (!isClickInside) {
                        const wrapper = select[i].parentElement.parentElement;
                        const dropdown = wrapper.querySelector(".dropdown-icon");
                        const autocomplete_list = wrapper.querySelector(".autocomplete-list");
                        //the click was outside the specifiedElement, do something
                        dropdown.classList.remove("active");
                        autocomplete_list.innerHTML = "";
                        addPlaceholder(wrapper);
                    }
                }
            }
        });

    });

</script>