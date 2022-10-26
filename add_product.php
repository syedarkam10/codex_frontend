<?php include 'inc/header.php';?>
<!-- header closed-->
<!-- ======= Hero Section ======= -->
<section class="sign-up-page h-auto mt-5">
    <div class="container">
        <div class="row">
            <div class="account-sc mt-4">
                <div class="breadcrumb">
                    <a href="user_account.php">Accounts</a> <span class="ar-right"><i class="ri-arrow-right-s-line"></i></span><a href="#">Add Product</a>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="fc-black ff-gr fw-500 fs-46 text-left">
                        Add Product
                        </h1>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="create_new_event.php">
                            <button class="green-cta">
                            SAVE
                            </button>
                        </a>
                    </div>
                    
                </div>
                
                <div class="cr-events mt-5">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="cr-form">
                                <form>
                                    <div class="add_form">
                                        
                                        <div class="mb-5">
                                            <label class="mb-3 fs-18">Title</label>
                                            <input type="text" name="" class="form-control">
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 fs-18">Description</label>
                                            <div class="text-editor">
                                                <div id="editor"></div>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            
                                            <label class="mb-3 fs-18">Media</label>
                                            <form action="" class="mb-5">
                                                <div class="drop-zone">
                                                    <div class="drop-zone__prompt">
                                                        <div class="drop-zone__prompt"><i class="fa-solid fa-image"></i></div>
                                                        <div class="drop-zone__prompt">Drop file or click to upload</div>
                                                    </div>
                                                    
                                                    <input type="file" name="myFile" class="drop-zone__input" />
                                                    
                                                </div>
                                            </form>
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 fs-18">Pricing</label>
                                            <input type="number" name="" class="form-control" placeholder="$">
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 fs-18">Inventory (SKU)</label>
                                            <input type="number" name="" class="form-control" placeholder="$">
                                        </div>
                                        <div class="mb-5">
                                            
                                            <div class="col-md-3">
                                                <div class="bx-check">
                                                    <div class="form-check my-check">
                                                        <label class="form-check-label" for="defaultCheck1">Track quantity</label>
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            
                                            <div class="col-md-6">
                                                <label class="mb-3 fs-18">Options</label>
                                                <div class="bx-check">
                                                    <div class="form-check my-check">
                                                        <label class="form-check-label" for="defaultCheck1">This product has options, like size or color</label>
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="option">
                                            <div class="mb-4">
                                                    <label class="mb-3 fs-18">Option name</label>
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <input type="text" name="" class="form-control" placeholder="Sizes">
                                                        </div>
                                                        <div class="col-2 pt-3">
                                                            <a href="#" class="fs-18">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                              <div class="mb-4">
                                                    <label class="mb-3 fs-18">Option values</label>
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <input type="text" name="" class="form-control" placeholder="100ml">
                                                        </div>
                                                        <div class="col-2 pt-3">
                                                            <a href="#" class="fs-18">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                        </div>

                                            <div class=" mt-5">
                                                    <a href="#" class="fs-18 fc-black">
                                                      <i class="ri-add-fill" class="fs-23"></i>  Add another option
                                                    </a>
                                                </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                            <div class="add_side_pro">


                                    <form>
                                        
                                       
                                        <div class="mb-4">
                                            <label class="mb-3 fs-18">Title</label>
                                           <select class="form-control">
                                               <option>Draft</option>
                                               <option>Draft</option>
                                           </select>
                                        </div>




                                        <div class="mb-4">
                                            <label class="mb-3 fs-18">Product Type</label>
                                           <select class="form-control">
                                               <option>Supplement</option>
                                               <option>Supplement</option>
                                           </select>
                                        </div>




                                        <div class="mb-4">
                                            <label class="mb-3 fs-18">Vendor</label>
                                           <input type="text" name="" class="form-control">
                                        </div>
                                        <div class="mb-0">
                                            <label class="mb-3 fs-18">Tags</label>
                                           <input type="text" name="" class="form-control">
                                        </div>
                                    </form>

                            </div>
                        </div>
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
<!-- footer -->
<?php include 'inc/footer_links.php ';?>
<!-- footer closed