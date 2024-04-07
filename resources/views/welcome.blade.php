<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/shorthandcss@1.1.1/dist/shorthand.min.css" /> -->
    <link rel="stylesheet" href="shorthand.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:200,300,400,500,600,700,800,900&display=swap" />
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" /> -->
    <link rel="stylesheet" href="slick.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" /> -->
    <link rel="stylesheet" href="style.css">

    <style>
    :root {
        --red: #9E0000;
        --black: #1A1A1A;
    }
</style>
</head>

<body class="bg-black muli">

<nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#"><img src="logo.png" alt="Laroc Learning Logo" width="180"></a>
            </div>
            <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
                    @if (Route::has('login'))
                            
                                @auth
                                    <a
                                        href="{{ url('home') }}"
                                        class="dashboard"
                                    >
                                        Dashboard
                                    </a>&nbsp &nbsp
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="login"
                                    >
                                        Login
                                    </a>  &nbsp &nbsp

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="register"
                                        >
                                            Register
                                        </a>&nbsp &nbsp
                                    @endif
                                @endauth
                            
                        @endif
            </ul>
            
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>







<!-- Jquery needed -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>



    <!-- <nav class="w-100pc flex flex-column md-flex-row md-px-10 py-5 bg-black">
        <div class="flex justify-between">
            <a href="#" class="flex items-center p-2 mr-4 no-underline">
                <img class="max-h-l2 w-auto" src="assets/images/logo.png" />
            </a>
            <a data-toggle="toggle-nav" data-target="#nav-items" href="#"
                class="flex items-center ml-auto md-hidden indigo-lighter opacity-50 hover-opacity-100 ease-300 p-1 m-3">
                <i data-feather="menu"></i>
            </a>
        </div>
        <div id="nav-items" class="hidden flex sm-w-100pc flex-column md-flex md-flex-row md-justify-end items-center">
       
            <a href="#features" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Features</a>
            <a href="#pricing" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Pricing</a>
            <a href="#blog" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Blog</a>
            @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="dashboard"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="login"
                                    >
                                        Login
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="register"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
        </div>
    </nav> -->

    <!-- hero section -->
    <section id="home" class="min-h-100vh flex justify-start items-center">
        <div class="mx-5 md-mx-l5">
            <div class="inline-block br-round bg-indigo-30 indigo-lightest p-2 fs-s2 mb-5">
                <div class="inline-block br-round px-3 py-1 mr-3 fs-s3" style="background-color: var(--red);">Where it happens</div>
                Your Journey Continues
            </div>
            <div>
                <h1 class="white fs-l3 lh-2 md-fs-xl1 md-lh-1 fw-800 ">Welcome <br />Laroc Artisan</h1>

                <div class="br-8 mt-10 inline-flex">
                    <input type="text"
                        class="input-lg half bw-0 fw-200 bg-indigo-lightest-10 white ph-indigo-lightest focus-white opacity-80 fs-s3 py-5 min-w-25vw br-r-0"
                        placeholder="Your Learning Platform">
                    <button
                        class="button-lg bg-indigo-lightest-20 indigo-lightest focus-white fw-300 fs-s3 mr-0 br-l-0">Take Advantage</button>
                </div>
                <div class="white opacity-20 fs-s3 mt-3">Please Register/Login to access your Dashboard</span>
            </div>
        </div>
    </section>

    <!-- features -->
    <section id="features" class="p-10 md-p-l5">
        <div class="flex flex-column md-flex-row mx-auto">
            
        <div class="w-100pc md-w-40pc">
            <div class="br-8 p-5 m-5">
                <div class="flex justify-center items-center bg-indigo-lightest-10 white w-l5 h-l5 br-round mb-5"><i
                            data-feather="inbox" class="w-l5"></i></div>
                <h4 class="white fw-600 fs-m3 mb-5">Learn</h4>
                <div class="indigo-lightest fw-600 fs-m1 lh-3 opacity-50 shortText">Learning Forex is crucial as it equips individuals with the knowledge and skills to navigate the complex...</div>
                <div class="indigo-lightest fw-600 fs-m1 lh-3 opacity-50 fullText" style="display: none;">Learning Forex is crucial as it equips individuals with the knowledge and skills to navigate the complex world of foreign exchange markets. Understanding Forex allows one to grasp economic trends, geopolitical events, and financial indicators, empowering them to make informed decisions when trading currencies. Additionally, it fosters financial literacy and risk management, essential for mitigating potential losses and maximizing profits in a highly volatile market environment.</div>
                <a href="#" onclick="toggleText(event)" class="mt-5 button bg-indigo-lightest-10 fs-s3 white no-underline hover-opacity-100 hover-scale-up-1 ease-300">Read</a>
            </div>
        </div>
        <div class="w-100pc md-w-40pc">
            <div class="br-8 p-5 m-5">
                <div class="flex justify-center items-center bg-indigo-lightest-10 white w-l5 h-l5 br-round mb-5"><i
                            data-feather="inbox" class="w-l5"></i></div>
                <h4 class="white fw-600 fs-m3 mb-5">Practice</h4>
                <div class="indigo-lightest fw-600 fs-m1 lh-3 opacity-50 shortText">Practicing Forex trading is indispensable for honing skills and gaining practical experience. Just like any other...</div>
                <div class="indigo-lightest fw-600 fs-m1 lh-3 opacity-50 fullText" style="display: none;">Practicing Forex trading is indispensable for honing skills and gaining practical experience. Just like any other skill, consistent practice sharpens one's ability to analyze market dynamics, develop trading strategies, and execute trades effectively. Through simulation platforms or demo accounts, aspiring traders can test their strategies in a risk-free environment, identify weaknesses, and refine their approaches. Practicing also instills discipline and emotional resilience, crucial attributes for maintaining composure amidst market fluctuations.</div>
                <a href="#" onclick="toggleText(event)" class="mt-5 button bg-indigo-lightest-10 fs-s3 white no-underline hover-opacity-100 hover-scale-up-1 ease-300">Read</a>
            </div>
        </div>
        <div class="w-100pc md-w-40pc">
            <div class="br-8 p-5 m-5">
                <div class="flex justify-center items-center bg-indigo-lightest-10 white w-l5 h-l5 br-round mb-5"><i
                            data-feather="inbox" class="w-l5"></i></div>
                <h4 class="white fw-600 fs-m3 mb-5">Trade</h4>
                <div class="indigo-lightest fw-600 fs-m1 lh-3 opacity-50 shortText">Trading Forex offers individuals the opportunity to participate in one of the largest and most liquid financial markets...</div>
                <div class="indigo-lightest fw-600 fs-m1 lh-3 opacity-50 fullText" style="display: none;">Trading Forex offers individuals the opportunity to participate in one of the largest and most liquid financial markets globally. It serves as a gateway to diverse investment opportunities, enabling traders to capitalize on fluctuations in currency values to generate profits. Beyond financial gains, Forex trading cultivates a deep understanding of global economics and fosters a proactive approach to wealth management. However, it demands diligence, patience, and continuous learning to navigate the complexities of the market and achieve sustainable success.</div>
                <a href="#" onclick="toggleText(event)" class="mt-5 button bg-indigo-lightest-10 fs-s3 white no-underline hover-opacity-100 hover-scale-up-1 ease-300">Read</a>
            </div>
        </div>
        </div>
    </section>

           
                <div class="flex justify-around my-8">
                    <a href="#" class="relative p-5 bg-indigo br-round white hover-scale-up-1 ease-400"><i
                            data-feather="twitter" class="absolute-center h-4"></i></a>
                    <a href="#" class="relative p-5 bg-indigo br-round white hover-scale-up-1 ease-400"><i
                            data-feather="facebook" class="absolute-center h-4"></i></a>
                    <a href="#" class="relative p-5 bg-indigo br-round white hover-scale-up-1 ease-400"><i
                            data-feather="instagram" class="absolute-center h-4"></i></a>
                </div>
            </div>
        </div>
    </footer>
   
    </div>
    <!-- Toggle read more -->
    <script>
    function toggleText(event) {
        event.preventDefault();
        var buttonText = event.target;
        var parentDiv = buttonText.parentElement;
        var shortText = parentDiv.querySelector('.shortText');
        var fullText = parentDiv.querySelector('.fullText');

        if (shortText.style.display === "none") {
            shortText.style.display = "block";
            fullText.style.display = "none";
            buttonText.innerText = "Read";
        } else {
            shortText.style.display = "none";
            fullText.style.display = "block";
            buttonText.innerText = "Close";
        }
    }
</script>
<script>
    $('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});

</script>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
