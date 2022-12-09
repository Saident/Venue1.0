<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#C17779',
                        btn: '#57A8AA',
                        blank: '#CA676A',
                        hijau: '#57A8AA'

                    }

                }
            }
        }
    </script>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <title>Homepage</title>
</head>

<body>
    <nav class="w-full fixed bg-white border-gray-200 px-8 sm:px-4 py-2.5 rounded dark:bg-gray-900">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="/" class="font-extrabold text-2xl text-primary dark:text-white">
                VenueKita
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="flex flex-col text-primary items-center p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="dashboard" class="block py-2 pl-3 pr-4 rounded md:bg-transparent  md:p-0 dark:text-white"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Venue</a>
                    </li>
                    <li>
                        <a href="pemesanan"
                            class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pemesanan</a>
                    </li>
                    <li>
                        @if (isset($user))
                        <a href="#"
                            class="block py-2 px-8 text-white rounded border-2 border-btn bg-btn hover:bg-transparent md:hover:bg-transparent transition-all md:hover:text-blue-700 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            {{$user->name}}
                        </a>
                            @else
                        <a href="/login"
                            class="block py-2 px-8 text-white rounded border-2 border-btn bg-btn hover:bg-transparent md:hover:bg-transparent transition-all md:hover:text-blue-700 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            Login
                        </a>
                            @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="w-full h-full flex flex-col bg-no-repeat bg-center"
        style="background-image: url('./images/bg_beranda.png')">
        <div class="w-full h-full flex flex-col  items-center px-8 pt-48 pb-24">
            <h1 class="w-full text-2xl font-bold text-primary text-center py-2">Pilihan Venue Untukmu</h1>
            <p class="w-full text-xl font-semibold text-primary text-center">Beberapa venue pilihan yang kamu pasti
                suka.
            </p>
            <div class="w-full flex flex-col lg:flex-row items-center justify-center gap-8 py-16 px-64">
                <div class="w-full flex flex-col items-center justify-center">
                    <a href="#">
                        <img class="aspect-[4/3] bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                            src="./images/card_pantai.jpg" />
                    </a>
                    <a href="#">
                        <h5 class="py-2 text-xl font-semibold text-center text-primary tracking-tight dark:text-white">
                            Pantai
                        </h5>
                    </a>
                </div>

                <div class="w-full flex flex-col items-center justify-center">
                    <a href="#">
                        <img class="aspect-[4/3] bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                            src="./images/hotel.jpg" />
                    </a>
                    <a href="#">
                        <h5 class="py-2 text-xl font-semibold text-center text-primary tracking-tight dark:text-white">
                            Hotel
                        </h5>
                    </a>
                </div>

                <div class="w-full flex flex-col items-center justify-center">
                    <a href="#">
                        <img class="aspect-[4/3] bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                            src="./images/resort.jpg" />
                    </a>
                    <a href="#">
                        <h5 class="py-2 text-xl font-semibold text-center text-primary tracking-tight dark:text-white">
                            Resort
                        </h5>
                    </a>
                </div>
            </div>
            <img class="w-1/4 lg:w-3/4 border-1" src="./images/Line 1.png">
        </div>

        <div class="w-full h-full flex flex-col items-center px-8 py-2">
            <h1 class="w-full text-2xl font-bold text-primary text-center py-2">Kita punya lebih banyak venue</h1>
            <p class="w-full text-xl font-semibold text-primary text-center">Temukan venue yang pas dengan kebutuhanmu.
            </p>
            <div class="w-full flex flex-col lg:flex-row items-center justify-center gap-8 py-16 px-40">
                <div class="w-[250px] h-[250px] flex flex-col items-center justify-center">
                    <a href="#">
                        <img class="aspect-square border border-gray-200 rounded-lg shadow-md"
                            src="./images/beach.jpg" />
                    </a>
                    <a href="#">
                        <h5 class="py-2 text-xl font-semibold text-center text-primary tracking-tight dark:text-white">
                            Pantai
                        </h5>
                    </a>
                    <h5 class="text-md font-medium text-center text-primary tracking-tight dark:text-white">
                        10000+ Venue
                    </h5>
                </div>

                <div class="w-[250px] h-[250px] flex flex-col items-center justify-center">
                    <a href="#">
                        <img class="aspect-square border border-gray-200 rounded-lg shadow-md"
                            src="./images/forest2.jpg" />
                    </a>
                    <a href="#">
                        <h5 class="py-2 text-xl font-semibold text-center text-primary tracking-tight dark:text-white">
                            Hutan
                        </h5>
                    </a>
                    <h5 class="text-md font-medium text-center text-primary tracking-tight dark:text-white">
                        10000+ Venue
                    </h5>
                </div>

                <div class="w-[250px] h-[250px] flex flex-col items-center justify-evenly">
                    <a href="#">
                        <img class="aspect-square border border-gray-200 rounded-lg shadow-md"
                            src="./images/gedung2.jpg" />
                        <h5 class="py-2 text-xl font-semibold text-center text-primary tracking-tight dark:text-white">
                            Gedung
                        </h5>
                    </a>
                    <h5 class="text-md font-medium text-center text-primary tracking-tight dark:text-white">
                        10000+ Venue
                    </h5>
                </div>

                <div class="w-[250px] h-[250px] flex flex-col items-center justify-center">
                    <a href="#">
                        <img class="aspect-square border border-gray-200 rounded-lg shadow-md"
                            src="./images/cafe2.jpg" />
                    </a>
                    <a href="#">
                        <h5 class="py-2 text-xl font-semibold text-center text-primary tracking-tight dark:text-white">
                            Kafe
                        </h5>
                    </a>
                    <h5 class="text-md font-medium text-center text-primary tracking-tight dark:text-white">
                        10000+ Venue
                    </h5>
                </div>

                <div class="w-[250px] h-[250px] flex flex-col items-center justify-center">
                    <a href="#">
                        <img class="bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                            src="./images/taman.jpg" />
                    </a>
                    <a href="#">
                        <h5 class="py-2 text-xl font-semibold text-center text-primary tracking-tight dark:text-white">
                            Taman
                        </h5>
                    </a>
                    <h5 class="text-md font-medium text-center text-primary tracking-tight dark:text-white">
                        10000+ Venue
                    </h5>
                </div>

            </div>
            <img class="w-1/4 lg:w-3/4 border-1" src="./images/Line 1.png">
        </div>

        <div class="w-full h-full flex flex-col items-center px-8 pt-24">
            <h1 class="w-full text-2xl font-bold text-primary text-center py-2">Pilihan Venue Terbaik Untuk Acaramu
            </h1>
            <p class="w-full text-xl font-semibold text-primary text-center">Jadikan acaramu menjadi momen terbaik
                seumur hidup
            </p>
            <div class="w-full flex flex-col lg:flex-row items-center justify-center gap-2 py-16 px-52">
                <div class="w-full flex flex-col items-center justify-center">
                    <a href="#">
                        <img class="aspect-[9/16] border border-gray-200 rounded-lg shadow-md"
                            src="./images/surabaya.png" />
                    </a>
                </div>

                <div class="w-full flex flex-col items-center justify-center">
                    <a href="#">
                        <img class="aspect-[9/16] border border-gray-200 rounded-lg shadow-md"
                            src="./images/bandung.png" />
                    </a>
                </div>

                <div class="w-full flex flex-col items-center justify-evenly">
                    <a href="#">
                        <img class="aspect-[9/16] border border-gray-200 rounded-lg shadow-md"
                            src="./images/ntt.png" />
                    </a>

                </div>

                <div class="w-full flex flex-col items-center justify-center">
                    <a href="#">
                        <img class="aspect-[9/16] border border-gray-200 rounded-lg shadow-md"
                            src="./images/bali.png" />
                    </a>
                </div>
            </div>
            <div class="w-full flex flex-col lg:flex-row items-center justify-center gap-2 py-2 px-52">
                <div class="w-full flex flex-col items-center justify-center">
                    <a href="#">
                        <img class=" aspect-[9/16] border border-gray-200 rounded-lg shadow-md"
                            src="./images/palembang.png" />
                    </a>
                </div>

                <div class="w-full flex flex-col items-center justify-center">
                    <a href="#">
                        <img class="aspect-[9/16] border border-gray-200 rounded-lg shadow-md"
                            src="./images/papua.png" />
                    </a>
                </div>

                <div class="w-full flex flex-col items-center justify-evenly">
                    <a href="#">
                        <img class=" aspect-[9/16] border border-gray-200 rounded-lg shadow-md"
                            src="./images/makassar.png" />
                    </a>

                </div>

                <div class="w-full flex flex-col items-center justify-center">
                    <a href="#">
                        <img class=" aspect-[9/16] border border-gray-200 rounded-lg shadow-md"
                            src="./images/medan.png" />
                    </a>
                </div>
            </div>
            <img class="w-1/4 lg:w-3/4 border-1 pt-16" src="./images/Line 1.png">
        </div>

        <h1 class="text-2xl font-medium text-primary items-center justify-center text-center px-72 py-24">
            Event Venue means a location for
            the
            hosting of weddings, conferences, galas, and other similar events. Such a use may take place in an outdoor
            setting.
        </h1>
    </div>


    <div class="w-full bg-blank py-8 px-8">
        <div class="flex flex-row justify-evenly">
        </div>
        <div class="flex flex-col items-center gap-4">
            <h1 class="w-full text-xl font-bold text-primary text-center py-2 text-white">Alamat</h1>
            <p class="w-full lg:w-1/2 text-center text-md lg:text-xl font-medium text-primary text-white">Gedung 1.2
                Sahid Sudirman Tower
                Jalan Magelangan Nomor 8, Tangerang Selatan, Jakarta 65145
                Email : venuekami@gmail.com</p>
            <h1 class="w-full text-xl font-bold text-primary text-center py-2 text-white">Customer Service</h1>
            <p class="w-full lg:w-1/2 text-center text-md lg:text-xl font-medium text-primary text-white">
                +6281110588333
            </p>

            <p class="w-full lg:w-1/2 text-center text-md lg:text-xl font-semibold text-primary text-white">©2022, PT
                VenueKita Cabang Jakarta, 2022
            </p>
        </div>
    </div>
</body>

</html>
