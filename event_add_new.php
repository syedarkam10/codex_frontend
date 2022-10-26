<?php include 'inc/header.php';?>
<!-- header closed-->
<!-- ======= Hero Section ======= -->
<section class="sign-up-page h-auto mt-5">
  <div class="container">
    <div class="row">
      <div class="account-sc mt-4">
        <div class="breadcrumb">
          <a href="user_account.php">Accounts</a>
          <span class="ar-right">
            <i class="ri-arrow-right-s-line"></i>
          </span>
          <a href="#">Create New Event</a>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h1 class="fc-black ff-gr fw-500 fs-46 text-left"> Create New Event </h1>
          </div>
          <div class="col-md-6 text-right">
            <a href="create_new_event.php">
              <button class="green-cta"> SAVE </button>
            </a>
          </div>
        </div>
        <div class="cr-events mt-5">
          <div class="cr-form">
            <form>
              <div class="col-md-10">
                <div class="row">
                  <div class="col-md-2 mb-3">
                    <div class="sd-img">
                      <i class="ri-image-line"></i>
                    </div>
                  </div>
                  <div class="col-md-9 mb-3">
                    <h3 class="fs-30 fc-black  fw-400">Main Event Image</h3>
                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    
                      <div class="drop-zone mb-5">
                        <div class="drop-zone__prompt">
                          <div class="drop-zone__prompt">
                            <i class="fa-solid fa-image"></i>
                          </div>
                          <div class="drop-zone__prompt">Drop file or click to upload</div>
                        </div>
                        <input type="file" name="myFile" class="drop-zone__input" />
                      </div>
                   
                  </div>
                </div>
                <hr>
                <div class="row mt-5">
                  <div class="col-md-2 mb-3">
                    <div class="sd-img">
                      <i class="ri-font-size-2"></i>
                    </div>
                  </div>
                  <div class="col-md-9 mb-3">
                    <h3 class="fs-30 fc-black mb-3 fw-400">Description</h3>
                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <form action="">
                      <div class="row">
                        <div class="col-12 mb-3">
                          <textarea class="form-control" placeholder="Summary*"></textarea>
                        </div>
                        <div class="col-12">
                          <div class="text-editor">
                            <div id="editor"></div>
                            <a href="#" class="dlt-text">
                              <i class="ri-delete-bin-line"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </form>

                    <div class="row mt-4">
                  <div class="col-md-4 mb-3">
                    <div class="text-center">
                      <a href="#">
                        <button class="btn-trans-2">Add Text</button>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="text-center">
                      <a href="#">
                        <button class="btn-trans-2">Add Text</button>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="text-center">
                      <a href="#">
                        <button class="btn-trans-2">Add Text</button>
                      </a>
                    </div>
                  </div>
                </div>
                  </div>
                </div>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="sc-botm mt-5">
  <div class="container">
    <div class="botm-cta">
      <div class="row align-item-center">
        <div class="col-12">
          <div class="text-right">
            <a href="#">
              <button class="btn btn-transparent">Discard</button>
            </a>
            <a href="#">
              <button class="green-cta">Save</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Hero -->
<!-- footer --> <?php include 'inc/footer_links.php ';?>
<!-- footer closed