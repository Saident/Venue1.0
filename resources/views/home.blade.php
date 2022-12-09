<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Landingpage</title>
</head>

<body>

    <nav class="w-full fixed bg-white border-gray-200 px-8 sm:px-4 py-2.5 rounded dark:bg-gray-900">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="/" class="font-extrabold text-2xl text-primary">
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
                        <a href="#" class="block py-2 pl-3 pr-4 rounded md:bg-transparent  md:p-0 dark:text-white"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Venue</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pemesanan</a>
                    </li>
                    <li>
                        <a href="/login"
                            class="block py-2 px-8 text-white rounded border-2 border-btn bg-btn hover:bg-transparent md:hover:bg-transparent transition-all md:hover:text-blue-700 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            Login

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="w-full px-8 lg:px-32 text-white items-center h-[90vh] bg-no-repeat bg-center bg-cover flex flex-col lg:flex-row justify-center gap-8 lg:justify-between lg:gap-4"
        style="background-image:linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1480455454781-1af590be2a58?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80')">
        <h1 class="w-full text-3xl lg:text-8xl font-extrabold">“Good event seen from the good of
            the
            venue</h1>
        <div class="w-full flex flex-col gap-8">
            <p class="text-justify hidden lg:block text-md lg:text-xl">Dengan solusi pemesanan venue secara digital yang
                disediakan oleh VenueKita, Anda dapat mengelola dan melakukan pemesanan dengan lebih praktis dan lebih
                efisien untuk menyelenggarakan acara Anda. Fitur layanan yang kami sediakan memudahkan Anda untuk
                menentukan tempat hingga menyediakan perlengkapan yang Anda butuhkan. VenueKita hadir sebagai platform
                pemesanan venue dengan proses set up yang cepat dan memuaskan</p>
            <a href="/venues"><button
                    class="w-full bg-primary rounded-lg py-3 text-xl hover:bg-transparent transition-all border-2 ">Pesan
                    Sekarang</button></a>

        </div>
    </div>
    <div class="w-full" style="background-image: url('./images/bg_home.png')">
        <div class="w-full h-[70hv] py-8">
            <div class="flex flex-col items-center">
                <h1 class="w-full text-3xl font-bold text-primary text-center py-4">Mengapa VenueKita?</h1>
                <p class="w-full lg:w-1/2 text-center text-md lg:text-xl font-semibold text-primary">Kami mengapresiasi
                    waktu yang baik. Kami senang ketika hal itu terjadi di sini. Apapun acaranya, besar atau kecil,
                    siang
                    atau malam, kapanpun kami siap membantu Anda.</p>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row items-center justify-evenly w-full h-full px-4 gap-8">
            <div class="flex flex-col items-center">
                <img class="w-[170px] h-[170px]" src="https://img.icons8.com/bubbles/512/clock.png">
                <h2 class="w-full lg:w-3/4 text-center font-semibold text-primary text-xl">Proses Set Up yang Mudah dan
                    Cepat
                </h2>
                <p class="w-full lg:w-1/2 text-center text-sm lg:text-md font-medium text-primary">Hanya dengan beberapa
                    klik, sistem reservasi online venue Anda dapat segera digunakan!</p>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-[180px] h-[180px]"
                    src="https://img.icons8.com/external-flaticons-flat-flat-icons/512/external-reserved-auction-house-flaticons-flat-flat-icons.png">
                <h2 class="w-full lg:w-3/4 text-center font-semibold text-primary text-xl">Kelola Reservasi dan
                    Kedatangan
                    Pengunjung
                </h2>
                <p class="w-full lg:w-1/2 text-center text-sm lg:text-md font-medium text-primary">Atur waktu pesan dan
                    jumlah pengunjung secara real-time melalui smartphone Anda.</p>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-[170px] h-[170px]"
                    src="https://img.icons8.com/external-icongeek26-flat-icongeek26/512/external-mobile-payment-business-and-finance-icongeek26-flat-icongeek26.png">
                <h2 class="w-full lg:w-3/4 text-center font-semibold text-primary text-xl">Bertransaksi tanpa
                    Bersentuhan
                </h2>
                <p class="w-full lg:w-1/2 text-center text-sm lg:text-md font-medium text-primary">Hanya dengan koneksi
                    internet Anda sudah bisa melakukan pemesanan</p>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row items-center justify-evenly w-full h-full px-4 lg:px-52 py-8 gap-8">
            <div class="flex flex-col items-center">
                <img class="w-[150px] h-[150px]" src="https://img.icons8.com/fluency/512/imac.png">
                <h2 class="w-full lg:w-3/4 h-full text-center font-semibold text-primary text-xl">Lakukan pemesanan
                    melalui
                    website
                </h2>
                <p class="w-full lg:w-1/2 text-center text-sm lg:text-md font-medium text-primary">Sistem reservasi
                    online
                    di website agar Anda dapat membeli tiket secara praktis</p>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-[160px] h-[160px] py-2" src="https://img.icons8.com/cute-clipart/512/picture.png">
                <h2 class="w-full lg:w-3/4 h-full text-center font-semibold text-primary text-xl">Pratinjau foto dan
                    video
                    venue
                </h2>
                <p class="w-full lg:w-1/2 text-center text-sm lg:text-md font-medium text-primary">Melihat tata letak
                    dan ruang venue yang tersedia secara online dengan leluasa</p>
            </div>
        </div>
    </div>


    <div class="w-full h-[70hv] py-24 bg-blank">
        <div class="flex flex-col items-center">
            <h1 class="w-full text-3xl font-bold text-primary text-center py-4 text-white">Trending Venue</h1>
            <p class="w-full lg:w-1/2 text-center text-md lg:text-xl font-semibold text-primary text-white">Venue kami
                didesain
                dengan spesial untuk berbagai kebutuhan, mulai dari meeting, training, seminar, peluncuran produk,
                pertunjukan seni, hingga acara korporasi.</p>
        </div>
        <div class="w-full h-full flex flex-col lg:flex-row justify-evenly py-4">
            <div class="flex flex-col items-center">
                <img class="w-[200px] h-[200px]" src="./images/Pantai Suaka Raja.png">
                <h2 class="w-full lg:w-full h-full text-center font-semibold text-white text-xl py-2">Pantai Suaka Raja
                </h2>
                <button
                    class="h-full bg-white rounded-full py-1 hover:bg-transparent transition-all border-2 text-grey hover:text-white px-8">View
                    Details</button>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-[200px] h-[200px]" src="./images/Mansion Sambolo Bali.png">
                <h2 class="w-full lg:w-full h-full text-center font-semibold text-white text-xl py-2">Mansion Sambolo
                    Bali
                </h2>
                <button
                    class="h-full bg-white rounded-full py-1 hover:bg-transparent transition-all border-2 text-grey hover:text-white px-8">View
                    Details</button>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-[200px] h-[200px]" src="./images/Sweet Prom Lombok.png">
                <h2 class="w-full lg:w-full h-full text-center font-semibold text-white text-xl py-2">Sweet Prom Lombok
                </h2>
                <button
                    class="h-full bg-white rounded-full py-1 hover:bg-transparent transition-all border-2 text-grey hover:text-white px-8">View
                    Details</button>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-[200px] h-[200px]" src="./images/Upperhills Bunga Merak.png">
                <h2 class="w-full lg:w-full h-full text-center font-semibold text-white text-xl py-2">Upperhills Bunga
                    Merak
                </h2>
                <button
                    class="h-full bg-white rounded-full py-1 hover:bg-transparent transition-all border-2 text-grey hover:text-white px-8">View
                    Details</button>
            </div>
        </div>
    </div>

    <div class="w-full h-[70hv] py-4" style="background-image: url('./images/bg_home.png')">
        <div class="flex flex-col items-center">
            <h1 class="w-full text-3xl font-bold text-primary text-center py-4">Our Partnership</h1>
        </div>
        <div class="w-full h-full flex flex-col lg:flex-row items-center gap-8 justify-evenly py-24"
            style="background-image: url('./images/bg_home.png')">

            <img class="w-[300px] h-[120px]"
                src="https://cdn.freebiesupply.com/logos/large/2x/grab-logo-png-transparent.png">

            <img class="w-[300px] h-[120px]"
                src="https://upload.wikimedia.org/wikipedia/commons/9/92/New_Logo_JNE.png">

            <img class="w-[370px] h-[120px]"
                src="https://www.freepnglogos.com/uploads/logo-tokopedia-png/tokopedia-apa-itu-startup-pengertian-cara-memulai-dan-1.png">

        </div>
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

    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>

</body>

</html>
