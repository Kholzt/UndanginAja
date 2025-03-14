<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ ucwords(implode(' ', array_slice(explode(' ', $title), 0, 3))) }}</title>


    <style>
        body {
            height: 100vh !important;
        }

        .container {
            max-width: 410px;
            height: 100vh;
            margin: auto;
            overflow: hidden;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-block: 4rem;
        }

        .active {
            position: relative;
        }

        .active::after {
            content: "";
            width: 100%;
            height: 100%;
            background-color: white;
            position: absolute;
            inset: 0;
            z-index: 99;
            animation: hidden .5s forwards .2s;
        }

        @keyframes hidden {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                visibility: hidden;
            }
        }

        .asset {
            position: absolute;
        }

        .active.asset-left-top {
            animation: leftTop 2s ease-out forwards;

        }

        /* animasi */
        @keyframes leftTop {
            0% {
                left: -20%;
                top: -20%;
            }

            100% {
                left: -20px;
                top: -20px;
            }
        }

        .active.asset-left-bottom {
            animation: leftBottom 2s ease-out forwards;
            transform: rotate(180deg);

        }

        @keyframes leftBottom {
            0% {
                left: -20%;
                bottom: -20%;
            }

            100% {
                left: -20px;
                bottom: -20px;
            }
        }

        .active.asset-right-bottom {
            transform: rotate(180deg);
            animation: rightBottom 2s ease-out forwards;
        }

        @keyframes rightBottom {
            0% {
                right: -20%;
                bottom: -20%;
            }

            100% {
                right: -20px;
                bottom: -20px;
            }
        }

        .active.asset-right-top {
            animation: rightTop 2s ease-out forwards;

        }

        @keyframes rightTop {
            0% {
                right: -20%;
                top: -20%;
            }

            100% {
                right: -20px;
                top: -20px;
            }
        }

        .active.asset-center-top {
            animation: centerTop 2s ease-out forwards;

        }

        @keyframes centerTop {
            0% {
                top: -20%;
            }

            100% {
                top: -50px;
            }
        }

        .active.asset-center-bottom {
            animation: centerBottom 2s ease-out forwards;
            transform: rotate(180deg);

        }

        @keyframes centerBottom {
            0% {
                bottom: -20%;
            }

            100% {
                bottom: -50px;
            }
        }

        .flower {
            width: 32%;
        }

        .center {
            width: 100%;
            left: 0;
        }

        .text-primary {
            color: #ae967a !important;
        }

        .bg-primary {
            background-color: #0F2165 !important;
        }



        body {
            scroll-behavior: smooth;
            /* overflow: auto; */
            /* scroll-snap-type: y mandatory; */
        }

        .scroll-container {
            overflow-y: auto;
            scroll-snap-type: y mandatory;
            height: 100vh;

        }

        section {
            animation: showSection;
            scroll-snap-align: start;
        }

        @keyframes showSection {
            0% {
                display: block;
            }

            50% {
                opacity: .5;
            }

            100% {
                opacity: 1;
            }
        }

        .nav-menu {
            transition: all .3s ease-out;
        }



        .nav-active {
            background-color: #ae967a;
            color: white !important;
        }
    </style>
</head>

<body>
    <div class="scroll-container">
        <button id="musicToggle" class=" shadow-sm btn btn-light rounded-circle position-fixed " style="top:50%;right:20px;transform: translateY(-50%);z-index: 999;"><i class="fa fa-pause"></i></button>
        <audio id="myAudio" src="{{ asset('./assets/song/02/backsound.mp3') }}"
            type="audio/mpeg" loop="loop">
            <source src="{{ asset('./assets/song/02/backsound.mp3') }}"
                type="audio/mpeg"> Your user agent does not support the HTML5 Audio element.
        </audio>
        <section id="opening">
            <div class="container position-relative justify-content-center opening" style="background-image: url(assets/image/02/bg.png);background-position:center;background-size: cover;height: 100vh !important;">


                <div class="position-relative text-center" style="z-index: 1;">

                    <div class="item-top">
                        <h2 style="font-size: 28px;" class="mb-0 mt-4 great-vibes text-primary">Save The Date</h2>
                        <p class="text-uppercase text-center">For The Wedding <br> Ceremony Of</p>
                    </div>
                    <h1 class="great-vibes  text-center text-primary item-zoom text-capitalize">{{ explode(" ",$title)[0] }}<br>{{ explode(" ",$title)[1] }}<br>{{ explode(" ",$title)[2] }}</h1>
                    <div class="item-bottom">
                        <h6 class=" mb-4 comic-neue ">Kpd. Bpk/Ibu/Saudara/I</h6>
                        <button id="open-letter" class="px-4 py-2 rounded text-white" style="background-color: #ae967a;border: none;outline: none;">Open Invitation</button>
                    </div>
                </div>

                <img src="{{ asset("assets/image/02/pintu.png") }}" style="width: 80%;" class="position-absolute" alt="">
                <img class="asset active center asset-center-top" src="{{ asset("assets/image/02/center.png") }}" alt="">
                <img class="asset active center asset-center-bottom" src="{{ asset("assets/image/02/center.png") }}" alt="">
                <img class="asset active flower asset-left-top" src="{{ asset("assets/image/02/border.png") }}" alt="">
                <img class="asset active flower asset-right-bottom" src="{{ asset("assets/image/02/border.png") }}" alt="">
                <img class="asset active flower asset-right-top" src="{{ asset("assets/image/02/flower.png") }}" alt="">
                <img class="asset active flower asset-left-bottom" src="{{ asset("assets/image/02/flower.png") }}" alt="">
            </div>
        </section>
        <section id="home">
            <div class="container position-relative justify-content-center" style="background-image: url(assets/image/02/bg.png);background-position:center;background-size: cover;">

                <div class="position-relative text-center" style="z-index: 1;">

                </div>
                <div class="position-relative text-center" style="z-index: 1;">

                    <div class="item-top">
                        <h2 style="font-size: 28px;" class="mb-0 mt-4 great-vibes text-primary">Save The Date</h2>
                        <p class="text-uppercase text-center">For The Wedding <br> Ceremony Of</p>
                    </div>
                    <h1 class="great-vibes  text-center text-primary item-zoom text-capitalize">{{ explode(" ",$title)[0] }}<br>{{ explode(" ",$title)[1] }}<br>{{ explode(" ",$title)[2] }}</h1>
                    <div class="item-bottom">
                        <h6 class=" mb-4 comic-neue ">Kpd. Bpk/Ibu/Saudara/I</h6>
                        <div class="d-flex  align-items-center gap item-bottom">
                            <h4 class=" rounded-start-2 px-2 py-1 text-white text-uppercase fs-6 text-center glacial-indifference" style="width: 100px;background-color: #ae967a;">{{ Helpers::getHari($mainEvent->event_date_start) }}</h4>
                            <div class="text-center border border-white  rounded px-2 py-1 text-white text-uppercase fs-6 glacial-indifference" style="width: 90px;background-color: #ae967a;">
                                <h1 class="fw-bold mb-0">{{ Helpers::getTanggal($mainEvent->event_date_start) }}</h1>
                                <h6>{{ Helpers::getTahun($mainEvent->event_date_start) }}</h6>
                            </div>
                            <h4 class=" rounded-end-2 px-2 py-1 text-white text-uppercase fs-6 text-center glacial-indifference" style="width: 100px;background-color: #ae967a;">{{ Helpers::getBulan($mainEvent->event_date_start) }}</h4>
                        </div>
                    </div>
                </div>

                <img src="{{ asset("assets/image/02/pintu.png") }}" style="width: 80%;" class="position-absolute" alt="">
                <img class="asset center asset-center-top" src="{{ asset("assets/image/02/center.png") }}" alt="">
                <img class="asset center asset-center-bottom" src="{{ asset("assets/image/02/center.png") }}" alt="">
                <img class="asset flower asset-left-top" src="{{ asset("assets/image/02/border.png") }}" alt="">
                <img class="asset flower asset-right-bottom" src="{{ asset("assets/image/02/border.png") }}" alt="">
                <img class="asset flower asset-right-top" src="{{ asset("assets/image/02/flower.png") }}" alt="">
                <img class="asset flower asset-left-bottom" src="{{ asset("assets/image/02/flower.png") }}" alt="">
            </div>

        </section>
        <section id="quotes">
            <div class="container position-relative justify-content-center" style="background-image: url(assets/image/02/bg.png);background-position:center;background-size: cover;">
                <h4 class="fw-bold text-center item-bottom" style="max-width: 100%;width: 600px;">وَمِنۡ اٰيٰتِهٖۤ اَنۡ خَلَقَ
                    لَكُمۡ مِّنۡ
                    اَنۡفُسِكُمۡ اَزۡوَاجًا لِّتَسۡكُنُوۡۤا
                    اِلَيۡهَا وَجَعَلَ
                    بَيۡنَكُمۡ
                    مَّوَدَّةً وَّرَحۡمَةً  ؕ اِنَّ فِىۡ ذٰ لِكَ لَاٰيٰتٍ لِّقَوۡمٍ يَّتَفَكَّرُوۡنَ</h4>
                <div class="item-bottom text-center" style="max-width: 100%;width: 600px;">
                    <p style="font-size: 12px;">“Dan di antara tanda-tanda kekuasaan-Nya
                        ialah Dia menciptakan untukmu
                        istri-istri dari jenismu
                        sendiri, supaya kamu
                        cenderung dan merasa tentram kepadanya, dan dijadikan-Nya di antaramu rasa kasih dan sayang.
                        Sesungguhnya pada yang
                        demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berpikir.”</p>
                    <h6 class="fw-bold " style="font-size: 12px;">QS Ar-Rum: 21</h6>
                </div>


                <img class="asset center asset-center-top" src="{{ asset("assets/image/02/center.png") }}" alt="">
                <img class="asset center asset-center-bottom" src="{{ asset("assets/image/02/center.png") }}" alt="">
                <img class="asset flower asset-left-top" src="{{ asset("assets/image/02/border.png") }}" alt="">
                <img class="asset flower asset-right-bottom" src="{{ asset("assets/image/02/border.png") }}" alt="">
                <img class="asset flower asset-right-top" src="{{ asset("assets/image/02/flower.png") }}" alt="">
                <img class="asset flower asset-left-bottom" src="{{ asset("assets/image/02/flower.png") }}" alt="">
            </div>

        </section>
        <section id="mempelai">
            <div class="container position-relative " style="background-image: url(assets/image/02/bg.png);background-position:center;background-size: cover;">

                <div class="d-flex flex-column h-100 justify-content-center align-items-center">
                    <img src="{{ asset("assets/image/02/bismillah.png") }}" class="item-top" style="width:45%" alt="">
                    <h2 style="font-size: 28px;" class="mb-0 mt-4 great-vibes text-primary item-top">Undangan Pernikahan</h2>
                    <center>
                        <p class="mt-2 item-top" style="font-size: 12px;">
                            Dengan memohon Rahmat dan Ridho Allah SWT, kami mengundang Bapak/Ibu/Saudara/i untuk menghadiri pernikahan kami:
                        </p>
                    </center>
                    <span class="great-vibes text-primary fs-1 mb-0 item-zoom">{{ $wedding_details->bride_name }}</span>
                    <p class="m-0" style="font-size: 12px;"> {{ $wedding_details->parent_bride }}</p>
                    <p class="fs-2 text-primary great-vibes m-0">&</p>
                    <span class="great-vibes text-primary fs-1 mb-0 item-zoom">{{ $wedding_details->groom_name }}</span>
                    <p style="font-size: 12px;"> {{ $wedding_details->parent_groom }}</p>

                    <div class="row mb-5 justify-content-center align-items-center g-4 position-relative w-100" style="z-index: 1;">
                        <div class="col-3">
                            <div style="aspect-ratio: 1/1;" class="card item-bottom-stack  border-0 shadow-sm justify-content-center d-flex flex-column align-items-center h-100 w-100">
                                <h2 style="font-size: 16px;" class="mb-0" id="days">00</h2>
                                <small style="font-size: 12px;">Days</small>
                            </div>
                        </div>
                        <div class="col-3">
                            <div style="aspect-ratio: 1/1;" class="card item-bottom-stack border-0 shadow-sm justify-content-center d-flex flex-column align-items-center h-100 w-100">
                                <h2 style="font-size: 16px;" class="mb-0" id="hours">00</h2>
                                <small style="font-size: 12px;">Hours</small>
                            </div>
                        </div>
                        <div class="col-3">
                            <div style="aspect-ratio: 1/1;" class="card item-bottom-stack border-0 shadow-sm justify-content-center d-flex flex-column align-items-center h-100 w-100">
                                <h2 style="font-size: 16px;" class="mb-0" id="minutes">00</h2>
                                <small style="font-size: 12px;">Min</small>
                            </div>
                        </div>
                        <div class="col-3">
                            <div style="aspect-ratio: 1/1;" class="card item-bottom-stack border-0 shadow-sm justify-content-center d-flex flex-column align-items-center h-100 w-100">
                                <h2 style="font-size: 16px;" class="mb-0" id="seconds">00</h2>
                                <small style="font-size: 12px;">Sec</small>
                            </div>
                        </div>
                    </div>
                    <img class="asset center asset-center-top" src="{{ asset("assets/image/02/center.png") }}" alt="">
                    <img class="asset center asset-center-bottom" src="{{ asset("assets/image/02/center.png") }}" alt="">
                    <img class="asset flower asset-left-top" src="{{ asset("assets/image/02/border.png") }}" alt="">
                    <img class="asset flower asset-right-bottom" src="{{ asset("assets/image/02/border.png") }}" alt="">
                    <img class="asset flower asset-right-top" src="{{ asset("assets/image/02/flower.png") }}" alt="">
                    <img class="asset flower asset-left-bottom" src="{{ asset("assets/image/02/flower.png") }}" alt="">
                </div>
            </div>
        </section>
        <section id="acara">
            <div class="container position-relative" style="background-image: url(assets/image/02/bg.png);background-position:center;background-size: cover;">
                <div class="h-100 w-100 d-flex align-items-center">
                    <div class="row mb-4 w-100 g-4  justify-content-center align-items-center ">
                        @foreach ($events as $index => $event)
                        <div class="col-12">
                            <div class=" item-bottom border-0    justify-content-center d-flex flex-column align-items-center">
                                <h1 class="great-vibes text-primary">{{ $event->title }}</h1>
                                <div class="row text-center">
                                    <p class="mb-2 col">{{ Helpers::getFormatTanggal($event->event_date_start) }}</p>
                                    <span class="p-0 ps-3" style="height: 50px; width: 2px; border-right: 2px solid #ae967a;"></span>
                                    <p class="mb-2 col">{{ Helpers::getJam($event->event_date_start) }} - {{ $event->event_date_end ?Helpers::getJam($event->event_date_end) :"Selesai"}} </p>
                                </div>
                                <p class="text-center">{{ $event->address }}</p>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>


                <img class="asset center asset-center-top" src="{{ asset("assets/image/02/center.png") }}" alt="">
                <img class="asset center asset-center-bottom" src="{{ asset("assets/image/02/center.png") }}" alt="">
                <img class="asset flower asset-left-top" src="{{ asset("assets/image/02/border.png") }}" alt="">
                <img class="asset flower asset-right-bottom" src="{{ asset("assets/image/02/border.png") }}" alt="">
                <img class="asset flower asset-right-top" src="{{ asset("assets/image/02/flower.png") }}" alt="">
                <img class="asset flower asset-left-bottom" src="{{ asset("assets/image/02/flower.png") }}" alt="">
            </div>
        </section>
        <section id="map">
            <div class="container position-relative" style="background-image: url(assets/image/02/bg.png);background-position:center;background-size: cover;">
                <div class="h-100 w-100 d-flex align-items-center flex-column justify-content-center">
                    <h1 class="great-vibes item-bottom text-primary">Denah Lokasi</h1>
                    <div style="border: 2px solid #ae967a;" class="rounded-2 p-2 item-zoom">
                        <iframe class=" rounded-2 " src="{{ $mainEvent->map_address_preview }}" width="100%" height="200" style="border: 1px solid #ae967a;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <a href="{{ $mainEvent->map_address }}"
                        class="mt-4 item-bottom rounded-pill mb-5 text-white px-4" target="_blank">
                        <button id="open-letter" class="px-4 py-2 rounded text-white" style="background-color: #ae967a;border: none;outline: none;">Lihat lokasi acara</button>
                    </a>
                </div>





                <img class="asset center asset-center-top" src="{{ asset("assets/image/02/center.png") }}" alt="">
                <img class="asset center asset-center-bottom" src="{{ asset("assets/image/02/center.png") }}" alt="">
                <img class="asset flower asset-left-top" src="{{ asset("assets/image/02/border.png") }}" alt="">
                <img class="asset flower asset-right-bottom" src="{{ asset("assets/image/02/border.png") }}" alt="">
                <img class="asset flower asset-right-top" src="{{ asset("assets/image/02/flower.png") }}" alt="">
                <img class="asset flower asset-left-bottom" src="{{ asset("assets/image/02/flower.png") }}" alt="">
            </div>
        </section>

    </div>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        $("#musicToggle").on("click", function() {
            const audio = $("#myAudio").get(0);

            if (audio.paused) {
                audio.play();
                $(this).find("i").removeClass("fa-play").addClass("fa-pause")
            } else {
                $(this).find("i").removeClass("fa-pause").addClass("fa-play")
                audio.pause();
            }
        });

        $("section:not(#opening)").hide();
        $("#musicToggle").hide()
        $("#open-letter").click(function() {
            $(".first-view").addClass("hide-view");
            $("#musicToggle").show()
            $("body").removeClass("overflow-hidden")
            $("#myAudio").get(0).play();
            $("#opening").hide()
            $("section:not(#opening)").show();
            scrollReveal()
        })
    </script>

    <script>
        function scrollReveal() {
            const duration = 1500;
            var opt = {
                distance: '40%',
                opacity: "0",
                interval: 100,
                reset: true,
                duration: duration,
                easing: 'ease-out',
                delay: 0,
                container: ".scroll-container"
            };
            ScrollReveal().reveal(' .item-bottom', {
                origin: 'bottom',
                ...opt
            });
            ScrollReveal().reveal(' .item-top', {
                origin: 'top',
                ...opt
            });

            var optLeftRight = {
                distance: '20%',
                opacity: 0,
                // interval: 100,
                reset: true,
                duration: duration,
                delay: 100,
                easing: 'ease-out',
                scale: 1,
                viewFactor: 0.2,
                container: ".scroll-container"

            };
            ScrollReveal().reveal(' .item-left', {
                origin: 'left',
                ...optLeftRight
            });
            ScrollReveal().reveal(' .item-right', {
                origin: 'right',
                ...optLeftRight
            });

            var optBounce = {
                distance: '40%',
                opacity: 0,
                // interval: 100,
                reset: true,
                duration: duration,
                delay: 100,
                easing: 'ease-out',
                scale: 1,
                container: ".scroll-container"

            };
            ScrollReveal().reveal(' .item-bottom-bounce', {
                origin: 'bottom',
                ...optBounce
            });

            document.querySelectorAll(' .item-bottom-stack').forEach((item, index) => {
                ScrollReveal().reveal(item, {
                    origin: 'bottom',
                    distance: '40%',
                    opacity: 0,
                    duration: duration,
                    delay: index * 200,
                    reset: true,
                    container: ".scroll-container"

                });
            });

            var optZoom = {
                distance: '0%',
                opacity: 0,
                scale: 0.9,
                reset: true,
                duration: duration,
                delay: 100,
                container: ".scroll-container"

            };
            ScrollReveal().reveal(' .item-zoom', {
                origin: 'bottom',
                ...optZoom
            });


            ScrollReveal().reveal('.asset', {
                easing: 'ease-out',
                distance: "0",
                reset: true,
                duration: 1000,
                opacity: "0",
                container: ".scroll-container",
                beforeReveal: function(el) {
                    el.classList.add('active');
                },
                beforeReset: function(el) {
                    el.classList.remove('active');
                }
            });

        }
    </script>


    <script>
        // Timeout schedule
        // Set target date
        const targetDate = new Date('{{ $mainEvent->event_date_end }}').getTime();

        // Update countdown every second
        const countdownInterval = setInterval(() => {
            const now = new Date().getTime();
            const timeRemaining = targetDate - now;

            if (timeRemaining > 0) {
                const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                // Update HTML elements
                document.getElementById('days').textContent = days.toString().padStart(2, '0');
                document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
                document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
                document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
            } else {
                // Clear the interval and display a message or perform an action
                clearInterval(countdownInterval);
                document.getElementById('days').textContent = '00';
                document.getElementById('hours').textContent = '00';
                document.getElementById('minutes').textContent = '00';
                document.getElementById('seconds').textContent = '00';
            }
        }, 1000);
    </script>
</body>

</html>
