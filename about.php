<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />


    <title>Cara Fashion</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="shortcut icon" href="img/fiv/1.ico" type="image/x-icon">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section class="sticky top-0 z-10">


        <nav class="bg-white border-gray-200 dark:bg-gray-900 sticky top-0 left-0 z-1">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center">
                    <img src="img/logo.png" class="h-8 mr-3" alt="Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
                </a>
                <div class="flex items-center md:order-2">
                    <button type="button"
                        class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="img/people/2.png" alt="user photo">
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 dark:text-white">UserID:<?php echo $user_data['user_id'];?></span>
                            <span
                                class="block text-sm  text-gray-500 truncate dark:text-gray-400"><?php echo $user_data['user_email'];?></span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <a href="cart.php"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Carted
                                    Items</a>
                            </li>
                            <li>
                                <a href="login.php"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                    out</a>
                            </li>
                        </ul>
                    </div>
                    <button data-collapse-toggle="navbar-user" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-user" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                    <ul
                        class=" flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg lg: bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="index.php"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>

                        </li>
                        <li>
                            <a href="shop.php"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Shop</a>
                        </li>
                        <li>
                            <a href="blog.php"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
                        </li>
                        <li>
                            <a href="about.php"
                                class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                aria-current="page">About</a>
                        </li>
                        <li>
                            <a href="contact.php"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    </section>

    <section class="page-header-about">



        <h2 class="text-xl lg:text-5xl text-white font-bold">#WhoAreWe?</h2>

        <p class="text-base pl-2 pr-2 lg:text-xl font-medium">We are introducing Ourselves!!</p>

    </section>

    <section class="">

        <h2 class="text-2xl lg:text-3xl font-bold text-center mt-8 mb-4">About Us</h2>
        <p class="text-xl g:text-2xl text-black text-center mb-8">Hey, We are Cara</p>

        <div class=" flex flex-col ml-4 mr-4 lg:articles lg:flex lg:flex-col justify-center mt-4 items-center ">

            <div class="img-des flex-1 mb-4 mt-4">
                <img class="blog-img rounded-3xl " src="img/about/a6.jpg">
            </div>

            <div class="bloge-des flex-1 mt-4">

                <p class="text-justify" style="color: black;">Welcome to Cara, your ultimate online shopping
                    destination! At Cara, we're dedicated to redefining your shopping experience by offering a curated
                    selection of the latest trends and timeless classics. Our mission is to empower you to express your
                    unique style and personality through our diverse range of fashion, accessories, beauty products, and
                    more. With a keen eye for quality and innovation, we handpick each item to ensure that only the
                    finest products find a place in our virtual aisles.

                    Driven by a passion for customer satisfaction, we strive to provide an intuitive and seamless
                    shopping journey. Our user-friendly interface, secure payment gateways, and swift delivery services
                    guarantee a hassle-free experience from start to finish. Whether you're seeking the perfect outfit
                    for a special occasion or a daily essential, Cara's extensive collection has something for everyone.

                    Our commitment extends beyond just providing products; we're committed to fostering a sense of
                    community. Join the Cara family and become a part of a space where fashion enthusiasts,
                    trendsetters, and beauty aficionados come together to share ideas and inspiration. At Cara, we
                    believe that shopping is not just about acquiring items but embracing a lifestyle that reflects your
                    individuality.

                    Thank you for choosing Cara as your preferred online shopping platform. Embark on a journey of
                    style, discovery, and self-expression with us. Experience fashion like never before - welcome to
                    Cara, where your style is your story.</p>

                <br>
                <marquee class="bg-slate-300 mb-6" loop="-1" scrollamount="5" behavior="" direction=""> "Cara: Where Fashion
                    Meets Passion - Shop Your Heart Out!" "Elevating E-commerce: Cara's Premium Selection Awaits Your
                    Arrival." "Discover Endless Possibilities in Fashion at Cara. Join Us!" <b class="text-center font-extrabold">Location: Police Plaza, Gulshan-1 #Shop-643,645,562.</b>
                </marquee>
            </div>

        </div>

    </section>

    <h2 class="text-2xl lg:text-3xl font-bold text-center mt-8 mb-4">Our Services</h2>
    <p class="text-xl lg:text-2xl text-black text-center mt-2">Always for You</p>

    <section id="feature" class="section-p1 flex justify-items-center justify-evenly flex-wrap">

        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>

        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>

        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>

        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotions</h6>

        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Happy Deal</h6>

        </div>

        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>24/7 support</h6>

        </div>
    </section>

    <h2 class="text-xl lg:text-3xl font-bold text-center mt-8">Frequently asked questions</h2>

    <section class="p-4 lg:p-10 mt-5">

        <div id="accordion-collapse" data-accordion="collapse">
            <h2 id="accordion-collapse-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                    aria-controls="accordion-collapse-body-1">
                    <span>What is Cara Fashion?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Cara is an Online Fashion Brand based in London.
                    </p>
                    <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="#"
                            class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start
                        developing websites even faster with components on top of Tailwind CSS.</p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                    data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                    aria-controls="accordion-collapse-body-2">
                    <span>Is Cara Available in Bangladesh?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Yes, We have a outlate in Ghulashan-1, Dhaka</p>
                    <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/"
                            class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on
                        the utility classes from Tailwind CSS and components from Flowbite.</p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                    data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                    aria-controls="accordion-collapse-body-3">
                    <span>What makes Us Different from Others?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Budget Friendly, Comfortable Fabrics</p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400"></p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Online Partner:</p>
                    <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                        <li><a href="https://flowbite.com/pro/"
                                class="text-blue-600 dark:text-blue-500 hover:underline">Gucci</a></li>
                        <li><a href="https://tailwindui.com/" rel="nofollow"
                                class="text-blue-600 dark:text-blue-500 hover:underline">H@M</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <h2 class="text-2xl lg:text-3xl font-bold text-center mt-8 mb-4">Happy Customers</h2>
    <p class="text-xl lg:text-2xl text-black text-center mt-2">Hear From You!!</p>

    <section class="section-m1 none lg:section-p1 p-6">

        <div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2">
            <figure
                class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-tl-lg md:border-r dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Very easy this was to integrate</h3>
                    <p class="my-4 text-black">If you care for your time, I hands down would go with this."</p>
                </blockquote>
                <figcaption class="flex items-center justify-center space-x-3">
                    <img class="rounded-full w-9 h-9"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                        alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left">
                        <div>Bonnie Green</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">School Teacher</div>
                    </div>
                </figcaption>
            </figure>
            <figure
                class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-tr-lg dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-black">Solid foundation for any project
                    </h3>
                    <p class="my-4 text-black">Designing with Figma components that can be easily translated to the
                        utility classes of Tailwind CSS is a huge timesaver!"</p>
                </blockquote>
                <figcaption class="flex items-center justify-center space-x-3">
                    <img class="rounded-full w-9 h-9"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                        alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left">
                        <div>Roberta Casas</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Doctor</div>
                    </div>
                </figcaption>
            </figure>
            <figure
                class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-bl-lg md:border-b-0 md:border-r dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-black">Mindblowing workflow</h3>
                    <p class="my-4 text-black">Aesthetically, the well designed components are beautiful and will
                        undoubtedly level up your next application."</p>
                </blockquote>
                <figcaption class="flex items-center justify-center space-x-3">
                    <img class="rounded-full w-9 h-9"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                        alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left">
                        <div>Jese Leos</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Software Engineer</div>
                    </div>
                </figcaption>
            </figure>
            <figure
                class="flex flex-col items-center justify-center p-8 text-center bg-white border-gray-200 rounded-b-lg md:rounded-br-lg dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-black">Efficient Collaborating</h3>
                    <p class="my-4 text-black">You have many examples that can be used to create a fast prototype for
                        your team."</p>
                </blockquote>
                <figcaption class="flex items-center justify-center space-x-3">
                    <img class="rounded-full w-9 h-9"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                        alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left">
                        <div>Joseph McFall</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">CTO</div>
                    </div>
                </figcaption>
            </figure>
        </div>

    </section>


    <section class="section-p1">

        <h1 class="text-xl lg:text-3xl font-extrabold text-center mt-4 mb-4">Download <a href="#"><span
                    class="text-blue-600 underline">App</span></a> </h1>


        <video class="w-full h-3/4 rounded-3xl" autoplay muted loop>
            <source src="img/about/1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>


    </section>







    <section>
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <div
                    class="flex flex-col items-center  bg-gradient-to-r from-emerald-600 via-emerald-500 to-emerald-400 rounded-lg p-4 sm:p-8 lg:flex-row lg:justify-between">
                    <div class="mb-4 sm:mb-8 lg:mb-0">
                        <h2 class="text-center text-xl font-bold text-indigo-700 sm:text-2xl lg:text-left lg:text-3xl">
                            Get the latest updates</h2>
                        <p class="text-center text-white lg:text-left">Sign up for our newsletter</p>
                    </div>

                    <div class="flex flex-col items-center lg:items-end">
                        <form class="mb-3 flex w-full max-w-md gap-2">
                            <input placeholder="Email"
                                class="bg-gray-white w-full flex-1 rounded border border-gray-300 px-3 py-2 text-gray-800 placeholder-gray-400 outline-none ring-indigo-300 transition duration-100 focus:ring" />

                            <button
                                class="inline-block rounded bg-indigo-500 px-8 py-2 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">Send</button>
                        </form>

                        <p class="text-center text-xs text-white lg:text-right">By signing up to our newsletter you
                            agree to our <a href="#"
                                class="underline transition duration-100 hover:text-indigo-500 active:text-indigo-600">Term
                                of Service</a> and <a href="#"
                                class="underline transition duration-100 hover:text-indigo-500 active:text-indigo-600">Privacy
                                Policy</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="bg-gray-100">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="flex justify-center text-teal-600">
                <img class="ml-8 pl-4 h-14 lg:ml-16 lg:pl-10 w-2/5" src="img/logo.png" alt="">
            </div>

            <ul class="mt-12 flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-12">
                <li>
                    <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
                        Partners
                    </a>
                </li>

                <li>
                    <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
                        Careers
                    </a>
                </li>

                <li>
                    <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
                        History
                    </a>
                </li>

                <li>
                    <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
                        License
                    </a>
                </li>

                <li>
                    <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
                        Projects
                    </a>
                </li>

                <li>
                    <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
                        Other Outlets
                    </a>
                </li>
            </ul>

            <ul class="mt-12 flex justify-center gap-6 md:gap-8">
                <li>
                    <a href="/" rel="noreferrer" target="_blank"
                        class="text-gray-700 transition hover:text-gray-700/75">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>

                <li>
                    <a href="/" rel="noreferrer" target="_blank"
                        class="text-gray-700 transition hover:text-gray-700/75">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>

                <li>
                    <a href="/" rel="noreferrer" target="_blank"
                        class="text-gray-700 transition hover:text-gray-700/75">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                </li>

                <li>
                    <a href="/" rel="noreferrer" target="_blank"
                        class="text-gray-700 transition hover:text-gray-700/75">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>

                <li>
                    <a href="/" rel="noreferrer" target="_blank"
                        class="text-gray-700 transition hover:text-gray-700/75">
                        <span class="sr-only">Dribbble</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
            </ul>
            <p class="text-gray-400 text-center mt-10 text-sm cursor-pointer">© 2023, All Rights Reserved.
            </p>
        </div>
    </footer>


    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
</body>

</html>