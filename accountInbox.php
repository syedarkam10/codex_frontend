<style>
    @import url(https://fonts.googleapis.com/css2?family=Open+Sans);

    body {
        font-family: 'Open Sans', sans;
    }

    .vtabs1 .nav-link {
        position: relative;
        line-height: 45px;
        border-radius: 0;
        color: var(--bs-dark)
    }

    .vtabs1 .nav-link.active {
        background-color: transparent;
        color: var(--bs-dark);
    }

    .vtabs1 .nav {
        border-left: 3px solid rgba(200, 200, 200, 1);
    }

    .vtabs1 .nav-link.active:before {
        background: #000;
        content: "";
        width: 3px;
        height: 60px;
        position: absolute;
        left: -3px;
        top: 0;
    }
</style>
<!-- header -->
<?php include 'inc/header.php';?>
<!-- header closed-->
<!-- ======= Hero Section ======= -->
<section class="sign-up-page h-auto pt-150">
    <div class="container">
        <div class="row bg-lightbrown py-4">
            <div class="col-md-3 col-sm-12 px-0">
                <h3 class="my-contact">MY CONTACTS </h3>
                <div class="d-flex align-items-start chat-profile-list">
                    <div class="nav chat-profile-header nav-pills  w-100" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <li class="nav-link active d-flex align-items-center" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">
                            <div class="user-prfl-img"> </div> Jimmy John
                        </li>
                        <li class="nav-link d-flex align-items-center" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false">
                            <div class="user-prfl-img"> </div> Joonne M
                        </li>
                        <li class="nav-link d-flex align-items-center" id="v-pills-messages-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                            aria-selected="false">
                            <div class="user-prfl-img"> </div> Nargis Khan
                        </li>
                        <li class="nav-link d-flex align-items-center" id="v-pills-settings-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                            aria-selected="false">
                            <div class="user-prfl-img"> </div> Settings
                        </li>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-12">
                <div class="tab-content px-2 px-md-4" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <h5 class="text-center">Jimmy John</h5>
                        <div class="ytt-separator">
                            <div class="line"></div>
                            <p class="mb-0 px-3">Today</p>
                            <div class="line"></div>
                        </div>
                        <!-- start my message -->
                        <div class="chat-body mt-5">
                            <div class="user-msg">
                                <div class="user-prfl-img"> </div>
                                <div class="chat-detail">
                                    <div class="chat-time">
                                        <p class="mb-0 chat-user">jimmy</p>
                                        <p class="mb-0 chat-user-time">2.31pm</p>
                                    </div>
                                    <p class="my-msg mt-2 ms-2">Hi, how can i help you</p>
                                </div>
                            </div>
                        </div>
                        <!-- end my message -->

                        <!-- start opponent message -->
                        <div class="chat-body opponent-chat-body mt-5">
                            <div class="user-msg">
                                <div class="chat-detail">
                                    <div class="chat-time">
                                        <p class="mb-0 chat-user-time">2.31pm</p>
                                        <p class="mb-0 chat-user">you</p>
                                    </div>
                                    <p class="my-msg text-right mt-2 ms-2">Hi, how can i help you</p>
                                </div>
                                <div class="user-prfl-img-2"> <div class="user-prfl-img-2-1"></div> </div>
                            </div>
                        </div>
                        <!-- end opponent message -->
                        <!-- start my message -->
                        <div class="chat-body mt-5">
                            <div class="user-msg">
                                <div class="user-prfl-img"> </div>
                                <div class="chat-detail">
                                    <div class="chat-time">
                                        <p class="mb-0 chat-user">jimmy</p>
                                        <p class="mb-0 chat-user-time">2.31pm</p>
                                    </div>
                                    <p class="my-msg mt-2 ms-2">Hi, how can i help you</p>
                                </div>
                            </div>

                        </div>
                        <!-- end my message -->

                        <!-- start opponent message -->
                        <div class="chat-body opponent-chat-body mt-5">
                            <div class="user-msg">
                                <div class="chat-detail">
                                    <div class="chat-time">
                                        <p class="mb-0 chat-user-time">2.31pm</p>
                                        <p class="mb-0 chat-user">you</p>
                                    </div>
                                    <p class="my-msg text-right mt-2 ms-2">Hi, how can i help you</p>
                                </div>
                                <div class="user-prfl-img-2"> <div class="user-prfl-img-2-1"></div> </div>

                            </div>

                        </div>
                        <!-- end opponent message -->

                        <form class="mb-0">
                            <div class="col-md-12 bg-white msg-textarea">
                                <textarea class="form-control  border-0 msg-textarea" id="msg-send" rows="2" ></textarea>
                                <div class="mt-2 text-end me-3 pb-2">
                                    <a href="#">
                                        <button class="btn-msg-send">send</button>
                                    </a>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <h5 class="text-center">Joonne M</h5>
                        <div class="ytt-separator">
                            <div class="line"></div>
                            <p class="mb-0 px-3">Today</p>
                            <div class="line"></div>
                        </div>
                        <!-- start my message -->
                        <div class="chat-body mt-5">
                            <div class="user-msg">
                                <div class="user-prfl-img"> </div>
                                <div class="chat-detail">
                                    <div class="chat-time">
                                        <p class="mb-0 chat-user">jimmy</p>
                                        <p class="mb-0 chat-user-time">2.31pm</p>
                                    </div>
                                    <p class="my-msg mt-2 ms-2">Hi, how can i help you</p>
                                </div>
                            </div>
                        </div>
                        <!-- end my message -->

                        <!-- start opponent message -->
                        <div class="chat-body opponent-chat-body mt-5">
                            <div class="user-msg">
                                <div class="chat-detail">
                                    <div class="chat-time">
                                        <p class="mb-0 chat-user-time">2.31pm</p>
                                        <p class="mb-0 chat-user">you</p>
                                    </div>
                                    <p class="my-msg mt-2 ms-2">Hi, how can i help you</p>
                                </div>
                                <div class="user-prfl-img-2"> <div class="user-prfl-img-2-1"></div> </div>
                            </div>
                        </div>
                        <!-- end opponent message -->
                        <!-- start my message -->
                        <div class="chat-body mt-5">
                            <div class="user-msg">
                                <div class="user-prfl-img"> </div>
                                <div class="chat-detail">
                                    <div class="chat-time">
                                        <p class="mb-0 chat-user">jimmy</p>
                                        <p class="mb-0 chat-user-time">2.31pm</p>
                                    </div>
                                    <p class="my-msg mt-2 ms-2">Hi, how can i help you</p>
                                </div>
                            </div>

                        </div>
                        <!-- end my message -->

                        <!-- start opponent message -->
                        <div class="chat-body opponent-chat-body mt-5">
                            <div class="user-msg">
                                <div class="chat-detail">
                                    <div class="chat-time">
                                        <p class="mb-0 chat-user-time">2.31pm</p>
                                        <p class="mb-0 chat-user">you</p>
                                    </div>
                                    <p class="my-msg mt-2 ms-2">Hi, how can i help you</p>
                                </div>
                                <div class="user-prfl-img-2"> <div class="user-prfl-img-2-1"></div> </div>

                            </div>

                        </div>
                        <!-- end opponent message -->

                        <form class="mb-0">
                            <div class="col-md-12 bg-white msg-textarea">
                                <textarea class="form-control  border-0 msg-textarea" id="msg-send" rows="2" ></textarea>
                                <div class="mt-2 text-end me-3 pb-2">
                                    <a href="#">
                                        <button class="btn-msg-send">send</button>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <h5 class="text-center">Nargis Khan</h5>
                        <div class="ytt-separator">
                            <div class="line"></div>
                            <p class="mb-0 px-3">Today</p>
                            <div class="line"></div>
                        </div>
                        <!-- start my message -->
                        <div class="chat-body mt-5">
                            <div class="user-msg">
                                <div class="user-prfl-img"> </div>
                                <div class="chat-detail">
                                    <div class="chat-time">
                                        <p class="mb-0 chat-user">jimmy</p>
                                        <p class="mb-0 chat-user-time">2.31pm</p>
                                    </div>
                                    <p class="my-msg mt-2 ms-2">Hi, how can i help you</p>
                                </div>
                            </div>
                        </div>
                        <!-- end my message -->

                        <!-- start opponent message -->
                        <div class="chat-body opponent-chat-body mt-5">
                            <div class="user-msg">
                                <div class="chat-detail">
                                    <div class="chat-time">
                                        <p class="mb-0 chat-user-time">2.31pm</p>
                                        <p class="mb-0 chat-user">you</p>
                                    </div>
                                    <p class="my-msg mt-2 ms-2">Hi, how can i help you</p>
                                </div>
                                <div class="user-prfl-img-2"> <div class="user-prfl-img-2-1"></div> </div>
                            </div>
                        </div>
                        <!-- end opponent message -->
                        <!-- start my message -->
                        <div class="chat-body mt-5">
                            <div class="user-msg">
                                <div class="user-prfl-img"> </div>
                                <div class="chat-detail">
                                    <div class="chat-time">
                                        <p class="mb-0 chat-user">jimmy</p>
                                        <p class="mb-0 chat-user-time">2.31pm</p>
                                    </div>
                                    <p class="my-msg mt-2 ms-2">Hi, how can i help you</p>
                                </div>
                            </div>

                        </div>
                        <!-- end my message -->

                        <!-- start opponent message -->
                        <div class="chat-body opponent-chat-body mt-5">
                            <div class="user-msg">
                                <div class="chat-detail">
                                    <div class="chat-time">
                                        <p class="mb-0 chat-user-time">2.31pm</p>
                                        <p class="mb-0 chat-user">you</p>
                                    </div>
                                    <p class="my-msg mt-2 ms-2">Hi, how can i help you</p>
                                </div>
                                <div class="user-prfl-img-2"> <div class="user-prfl-img-2-1"></div> </div>

                            </div>

                        </div>
                        <!-- end opponent message -->

                        <form class="mb-0">
                            <div class="col-md-12 bg-white msg-textarea">
                                <textarea class="form-control  border-0 msg-textarea" id="msg-send" rows="2" ></textarea>
                                <div class="mt-2 text-end me-3 pb-2">
                                    <a href="#">
                                        <button class="btn-msg-send">send</button>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">
                        <h5 class="text-center">Nargis Khan</h5>
                        <div class="ytt-separator">
                            <div class="line"></div>
                            <p class="mb-0 px-3">Today</p>
                            <div class="line"></div>
                        </div>
                        <!-- start my message -->
                        <div class="chat-body mt-5">
                            <div class="user-msg">
                                <div class="user-prfl-img"> </div>
                                <div class="chat-detail">
                                    <div class="chat-time">
                                        <p class="mb-0 chat-user">jimmy</p>
                                        <p class="mb-0 chat-user-time">2.31pm</p>
                                    </div>
                                    <p class="my-msg mt-2 ms-2">Hi, how can i help you</p>
                                </div>
                            </div>
                        </div>
                        <!-- end my message -->

                        <!-- start opponent message -->
                        <div class="chat-body opponent-chat-body mt-5">
                            <div class="user-msg">
                                <div class="chat-detail">
                                    <div class="chat-time">
                                        <p class="mb-0 chat-user-time">2.31pm</p>
                                        <p class="mb-0 chat-user">you</p>
                                    </div>
                                    <p class="my-msg mt-2 ms-2">Hi, how can i help you</p>
                                </div>
                                <div class="user-prfl-img-2"> <div class="user-prfl-img-2-1"></div> </div>
                            </div>
                        </div>
                        <!-- end opponent message -->
                        <!-- start my message -->
                        <div class="chat-body mt-5">
                            <div class="user-msg">
                                <div class="user-prfl-img"> </div>
                                <div class="chat-detail">
                                    <div class="chat-time">
                                        <p class="mb-0 chat-user">jimmy</p>
                                        <p class="mb-0 chat-user-time">2.31pm</p>
                                    </div>
                                    <p class="my-msg mt-2 ms-2">Hi, how can i help you</p>
                                </div>
                            </div>

                        </div>
                        <!-- end my message -->

                        <!-- start opponent message -->
                        <div class="chat-body opponent-chat-body mt-5">
                            <div class="user-msg">
                                <div class="chat-detail">
                                    <div class="chat-time">
                                        <p class="mb-0 chat-user-time">2.31pm</p>
                                        <p class="mb-0 chat-user">you</p>
                                    </div>
                                    <p class="my-msg mt-2 ms-2">Hi, how can i help you</p>
                                </div>
                                <div class="user-prfl-img-2"> <div class="user-prfl-img-2-1"></div> </div>

                            </div>

                        </div>
                        <!-- end opponent message -->

                        <form class="mb-0">
                            <div class="col-md-12 bg-white msg-textarea">
                                <textarea class="form-control  border-0 msg-textarea" id="msg-send" rows="2" ></textarea>
                                <div class="mt-2 text-end me-3 pb-2">
                                    <a href="#">
                                        <button class="btn-msg-send">send</button>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js">
</script>