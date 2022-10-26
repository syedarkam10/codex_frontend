<style>
    sidebar {
        width: 300px;
        min-width: 300px;
        display: flex;
        flex-direction: column;
        border-right: 1px solid #ccc;
        transition: 500ms all;
    }

    sidebar h3 {
        display: flex;
        margin: 25px 0;
        align-items: center;
        justify-content: center;
        color: #000;
        font-size: 1em;
        text-transform: uppercase;
    }

    sidebar .list-wrap {
        width: 100%;
        overflow: auto;
        height: 464px;
    }

    sidebar .list-wrap::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        background-color: #ccc;
    }

    sidebar .list-wrap::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
    }

    sidebar .list-wrap::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #909090;
    }

    sidebar .list-wrap .list {
        border-bottom: 1px solid #8e8c8c;
        /* background: #fff; */
        display: flex;
        align-items: center;
        padding: 5px;
        height: 70px;
        cursor: pointer;
    }

    sidebar .list-wrap .list:hover,
    sidebar .list-wrap .list.active {
        background: #E6DDD2;
    }

    sidebar .list-wrap .list img {
        border-radius: 50%;
        width: 50px;
        height: 50px;
        object-fit: cover;
        margin-right: 10px;
        box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.5);
    }

    sidebar .list-wrap .list .info {
        flex: 1;
    }

    sidebar .list-wrap .list .info .user {
        font-weight: 700;
    }

    sidebar .list-wrap .list .info .text {
        display: flex;
        margin-top: 3px;
        font-size: 0.85em;
    }

    sidebar .list-wrap .list .time {
        margin-right: 5px;
        margin-left: 5px;
        font-size: 0.75em;
        color: #a9a9a9;
    }

    /* sidebar .list-wrap .list .count {
        font-size: 0.75em;
        background: #bde2f7;
        box-shadow: 0 5px 15px -5px rgba(0, 0, 0, 0.7);
        padding: 3px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        text-align: center;
        color: #000;
    } */

    .content {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .content header {
        height: 76px;
        border-bottom: 1px solid #ccc;
        display: flex;
        padding: 10px;
        align-items: center;
    }

    .content header img {
        border-radius: 50%;
        width: 50px;
        height: 50px;
        object-fit: cover;
        margin-right: 10px;
        box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.5);
    }

    .content header .info {
        flex: 1;
    }

    .content header .info .user {
        font-weight: 700;
    }

    .content header .info .time {
        display: flex;
        margin-top: 3px;
        font-size: 0.85em;
    }

    .content header .open {
        display: none;
    }

    .content header .open a {
        color: #000;
        letter-spacing: 3px;
    }

    .message-wrap {
        flex: 1;
        display: flex;
        flex-direction: column;
        padding: 15px;
        overflow: auto;
    }

    .message-wrap::before {
        content: "";
        margin-bottom: auto;
    }

    .message-wrap .message-list {
        align-self: flex-start;
        max-width: 70%;
    }

    .message-wrap .message-list.me {
        align-self: flex-end;
    }

    .message-wrap .message-list.me .msg {
        background: #c7f7c7;
        color: #111;
    }

    .message-wrap .message-list .msg {
        background: #fff;
        box-shadow: 0 5px 15px -5px rgba(0, 0, 0, 0.1);
        padding: 10px 5px;
        margin-bottom: 10px;
        border-radius: 5px;
    }

    .message-wrap .message-list .time {
        text-align: right;
        color: #999;
        font-size: 0.75em;
    }

    .message-footer {
        padding: 10px;
        display: flex;
        height: 130px;
        background-color: #fff;
        margin: 15px;
        /* margin-right: 15px; */
        border-radius: 10px;
    }

    .message-footer input {
        flex: 1;
        padding: 0 20px;
        border-radius: 5px;
        border: 0;
        height: 80px;
        outline: 0;
    }

    @media only screen and (max-width: 480px),
    only screen and (max-width: 767px) {
        sidebar {
            position: absolute;
            width: 100%;
            min-width: 100%;
            height: 0vh;
            bottom: 0;
            box-shadow: 0 5px 25px -5px black;
        }

        sidebar.opened {
            height: 70vh !important;
        }

        sidebar .logo {
            display: none;
        }

        /* sidebar .list-wrap .list .count {
            font-size: 0.75em;
        } */

        header .open {
            display: block !important;
        }
    }
</style>

<!-- header -->
<?php include 'inc/header.php';?>
<!-- header closed-->
<!-- ======= Hero Section ======= -->
<section class="sign-up-page h-auto pt-150">
    <div class="container">
        <div class="row">
            <div class="account-sc">
                <div class="breadcrumb">
                    <a href="user_account.php">Accounts</a> <span class="ar-right"><i
                            class="ri-arrow-right-s-line"></i></span><a href="loginandsecurity.php">Notifications</a>
                </div>
                <h1 class="fc-black ff-gr fw-500 mb-5 fs-46 text-left">
                    Messages
                </h1>


                <div class="inner-profile ">

                    <div class="row bg-lightbrown">
                        <!-- <div class="col-md-3 borderr">
                            <div class="my-contact text-center ff-gr">
                                <h3 > my contact</h3>
                            </div>
                        </div>
                        <div class="col-md-9 borderr">
                            asda
                        </div> -->
                        <!-- contacts -->
                        <div class="d-flex px-0">
                            <sidebar>
                                <h3 class="">my contact</h3>
                                <div class="list-wrap">
                                    <div class="list">
                                        <img src="assets/img/dummy-user.png" alt="" />
                                        <div class="info">
                                            <span class="user">Taylor Swift</span>
                                            <span class="text">Hi! :)</span>
                                        </div>
                                        <span class="time">now</span>
                                    </div>
                                    <div class="list">
                                        <img src="assets/img/dummy-user.png" alt="" />
                                        <div class="info">
                                            <span class="user">Miley Cyrus</span>
                                            <span class="text">Good night.</span>
                                        </div>
                                        <span class="time">5 min. ago</span>
                                    </div>
                                    <div class="list">
                                        <img src="assets/img/dummy-user.png" alt="" />

                                        <div class="info">
                                            <span class="user">Rihanna</span>
                                            <span class="text">Çav bella</span>
                                        </div>
                                        <span class="time">1 hour ago</span>
                                    </div>
                                    <div class="list">
                                        <img src="assets/img/dummy-user.png" alt="" />
                                        <div class="info">
                                            <span class="user">Taylor Swift</span>
                                            <span class="text">Hi! :)</span>
                                        </div>
                                        <span class="time">now</span>
                                    </div>
                                    <div class="list">
                                        <img src="assets/img/dummy-user.png" alt="" />
                                        <div class="info">
                                            <span class="user">Miley Cyrus</span>
                                            <span class="text">Good night.</span>
                                        </div>
                                        <span class="time">5 min. ago</span>
                                    </div>
                                    <div class="list">
                                        <img src="assets/img/dummy-user.png" alt="" />

                                        <div class="info">
                                            <span class="user">Rihanna</span>
                                            <span class="text">Çav bella</span>
                                        </div>
                                        <span class="time">1 hour ago</span>
                                    </div>
                                    <div class="list">
                                        <img src="assets/img/dummy-user.png" alt="" />
                                        <div class="info">
                                            <span class="user">Taylor Swift</span>
                                            <span class="text">Hi! :)</span>
                                        </div>
                                        <span class="time">now</span>
                                    </div>
                                    <div class="list">
                                        <img src="assets/img/dummy-user.png" alt="" />
                                        <div class="info">
                                            <span class="user">Miley Cyrus</span>
                                            <span class="text">Good night.</span>
                                        </div>
                                        <span class="time">5 min. ago</span>
                                    </div>
                                    <div class="list">
                                        <img src="assets/img/dummy-user.png" alt="" />

                                        <div class="info">
                                            <span class="user">Rihanna</span>
                                            <span class="text">Çav bella</span>
                                        </div>
                                        <span class="time">1 hour ago</span>
                                    </div>


                                </div>
                            </sidebar>
                            <div class="content">
                                <header>
                                    <img src="" alt="">
                                    <div class="info">
                                        <span class="user"></span>
                                        <span class="time"></span>
                                    </div>
                                    <div class="open">
                                        <a href="javascript:;">UP</a>
                                    </div>
                                </header>
                                <div class="message-wrap">
                                    <div class="message-list">
                                        <div class="msg">
                                            <p>
                                                Lorem ipsum dolor sit
                                            </p>
                                        </div>
                                        <div class="time">now</div>
                                    </div>
                                    <div class="message-list me">
                                        <div class="msg">
                                            <p>
                                                Lorem ipsum dolor sit amet.
                                            </p>
                                        </div>
                                        <div class="time">now</div>
                                    </div>
                                    <div class="message-list">
                                        <div class="msg">
                                            <p>Odit minus minima quo corporis.
                                            </p>
                                        </div>
                                        <div class="time">now</div>
                                    </div>

                                </div>
                                <div class="message-footer position-relative">
                                    <input type="text" data-placeholder="Send a message to {0}" />
                                    <div class="cta-box btn-send-box">
                                        <a href="#">
                                            <button class="btn-send">Send</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<script>
    const ls = localStorage.getItem("selected");
    let selected = false;
    var list = document.querySelectorAll(".list"),
        content = document.querySelector(".content"),
        input = document.querySelector(".message-footer input"),
        open = document.querySelector(".open a");

    //init
    function init() {
        //input.focus();
        let now = 2;
        const texts = ["İyi akşamlar", "Merhaba, nasılsın?",
            "Harikasın! :)", "Günaydın", "Tünaydın",
            "Hahaha", "Öğlen görüşelim.", "Pekala"];
        for (var i = 4; i < list.length; i++) {
            list[i].querySelector(".time").innerText = `${now} day ago`;
            list[i].querySelector(".text").innerText = texts[(i - 4) < texts.length ? (i - 4) : Math.floor(Math.random() * texts.length)];
            now++;
        }
    }
    init();

    //process
    function process() {
        if (ls != null) {
            selected = true;
            click(list[ls], ls);
        }
        if (!selected) {
            click(list[0], 0);
        }

        list.forEach((l, i) => {
            l.addEventListener("click", function () {
                click(l, i);
            });
        });

        try {
            document.querySelector(".list.active").scrollIntoView(true);
        }
        catch { }

    }
    process();

    //list click
    function click(l, index) {
        list.forEach(x => { x.classList.remove("active"); });
        if (l) {
            l.classList.add("active");
            document.querySelector("sidebar").classList.remove("opened");
            open.innerText = "UP";
            const img = l.querySelector("img").src,
                user = l.querySelector(".user").innerText,
                time = l.querySelector(".time").innerText;

            content.querySelector("img").src = img;
            content.querySelector(".info .user").innerHTML = user;
            content.querySelector(".info .time").innerHTML = time;

            const inputPH = input.getAttribute("data-placeholder");
            input.placeholder = inputPH.replace("{0}", user.split(' ')[0]);

            document.querySelector(".message-wrap").scrollTop = document.querySelector(".message-wrap").scrollHeight;

            localStorage.setItem("selected", index);
        }
    }

    open.addEventListener("click", (e) => {
        const sidebar = document.querySelector("sidebar");
        sidebar.classList.toggle("opened");
        if (sidebar.classList.value == 'opened')
            e.target.innerText = "DOWN";
        else
            e.target.innerText = "UP";
    });
</script>