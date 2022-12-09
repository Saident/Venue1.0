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
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
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
    <title>Halaman Pemesanan</title>
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
                        <a href="#"
                            class="block py-2 px-8 text-white rounded border-2 border-btn bg-btn hover:bg-transparent md:hover:bg-transparent transition-all md:hover:text-blue-700 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="w-full h-screen bg-no-repeat bg-center items-center justify-center p-56"
        style="background-image: url('./images/bg_pembayaran1.png')">
        <div class="bg-white rounded-lg flex flex-col py-2 px-4">
            <div class="flex flex-col py-2 px-2 justify evenly">
                <div class="flex flex-col px-8 pt-8 pb-4">
                    <h1 class="w-full pl-8 pt-4 text-primary text-2xl font-bold">Pemesanan Tanggal Venue</h1>
                    <h2 class="w-full pl-8 text-primary text-md font-medium">12 Oktober 2022</h2>
                </div>
                <img class="w-full items-center justify-center py-4 px-16" src="./images/line_pembayara.png">
                <div class="flex flex-col w-full lg:flex-row gap-16">
                    <div class=" lg:pl-16 flex flex-col w-full gap-4">
                        <h1 class="text-primary font-medium">Lokasi</h1>
                        <div class="w-full flex flex-row items-center gap-4 relative">
                            {{-- <label for="location" class="block py-2"></label> --}}

                            <img class="absolute left-2 w-[20px] h-[20px]" src="./images/location.png" />
                            <select id="location"
                                class="bg-white border border-blank text-primary text-sm rounded-lg focus:border-primary block w-full  gap-2 py-2.5 px-8 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Pilih Lokasi</option>
                                <option value="JKT">Jakarta</option>
                                <option value="SBY">Surabaya</option>
                                <option value="MLG">Malang</option>
                                <option value="MDN">Medan</option>
                                <option value="PDG">Padang</option>
                                <option value="RJP">Raja Ampat</option>
                            </select>
                        </div>
                    </div>

                    <div class=" flex flex-col w-full gap-4">
                        <div class="flex flex-row items-center justify-between ">
                            <div class="flex flex-col gap-4">

                                <h1 class="text-primary font-medium">Check-In</h1>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input datepicker datepicker-orientation="bottom" name="start" type="text"
                                        class="bg-white border border-primary text-primary font-medium placeholder:text-primary text-sm rounded-lg focus:ring-blank focus:border-blank block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date start">
                                </div>
                            </div>
                            <div class="flex h-full flex-col justify-end pb-2 gap-4">
                                <span class="mx-4 text-gray-500">to</span>
                            </div>
                            <div class="flex flex-col gap-4">

                                <h1 class="text-primary font-medium">Check-Out</h1>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input datepicker datepicker-orientation="bottom" name="end" type="text"
                                        class="bg-white border border-blank text-primary font-medium placeholder:text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date end">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-4 w-full pr-16">
                        <h1 class="text-primary text-left font-medium">Jumlah Tamu</h1>
                        <div class="flex flex-row relative items-center">
                            <img class="absolute left-2 w-[25px] h-[25px]" src="./images/people.png" />
                            <input type="number" id="visitors"
                                class="bg-white border border-primary text-primary text-sm rounded-lg focus:ring-blank focus:border-blank block w-full p-2.5 px-12 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>



                </div>
            </div>
            <img class="w-full items-center justify-center pt-8 px-16" src="./images/line_pembayara.png">
            <div class="w-full px-16 items-end justify-end py-8 gap-4 flex">
                {{-- <a href="#"><button
                        class="w-full bg-blank text-white rounded-2xl text-center font-semibold py-2 px-4">Cari
                        Venue
                    </button></a> --}}

                <button class="bg-blank text-white rounded-2xl text-center font-semibold py-2 px-4"><a
                        href="#">Cari Venue</a></button>
            </div>
        </div>

    </div>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/datepicker.js"></script>
</body>

</html>
