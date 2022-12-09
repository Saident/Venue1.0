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
                        <a href="/dashboard" class="block py-2 pl-3 pr-4 rounded md:bg-transparent  md:p-0 dark:text-white"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="venue"
                            class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Venue</a>
                    </li>
                    <li>
                        <a href="/pemesanan"
                            class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pemesanan</a>
                    </li>
                    <li>
                        @if ((Auth::user())!==null)
                        <a href="#"
                            class="block py-2 px-8 text-white rounded border-2 border-btn bg-btn hover:bg-transparent md:hover:bg-transparent transition-all md:hover:text-blue-700 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            {{Auth::user()->name}}
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

    <div class="w-full h-screen bg-no-repeat bg-center items-center justify-center p-56"
        style="background-image: url('./images/bg_pembayaran1.png')">
        <div class="bg-white rounded-lg flex flex-col py-2 px-4">
            <div class="w-full h-full flex flex-col py-2 px-2 justify-evenly">
                <h1 class="w-full pl-8 pt-4 text-primary text-2xl font-bold">Detail Pembayaran</h1>
                <h2 class="w-full pl-8 text-primary text-md font-medium">Informasi Pemesanan</h2>
                <img class="w-full items-center justify-center py-4 px-8" src="./images/line_pembayara.png">
                <div class="w-full flex flex-row py-2 pl-8 gap-4">
                    <img class="w-sm aspect-square rounded-lg" src="./images/pantai ora.png">
                    <div class="flex flex-col gap-1 w-full">
                        <p class="px-8 text-primary text-xl font-bold">{{$venue->name}}</p>
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-row justify-between px-8">
                                <p class="text-primary text-sm font-medium">Kode Booking</p>
                                <p class="text-primary text-sm font-medium text-left lg:text-right">{{$id_reservation}}</p>
                            </div>
                            <div class="flex flex-col lg:flex-row justify-between px-8">
                                <p class="text-primary text-sm font-medium">Customer</p>
                                <p class="text-primary text-sm font-medium text-left lg:text-right">{{Auth::user()->name}}</p>
                            </div>
                            <div class="flex flex-col lg:flex-row justify-between px-8">
                                <p class="text-primary text-sm font-medium">Lokasi</p>
                                <p class="text-primary text-sm font-medium text-left lg:text-right ">{{$venue->city->city}}</p>
                            </div>
                            <div class="flex flex-col lg:flex-row justify-between px-8">
                                <p class="text-primary text-sm font-medium">Check-In</p>
                                <p class="text-primary text-sm font-medium text-left lg:text-right">Rabu, 11 Mei 2022
                                </p>
                            </div>
                            <div class="flex flex-col lg:flex-row justify-between px-8">
                                <p class="text-primary text-sm font-medium">Check-Out</p>
                                <p class="text-primary text-sm font-medium text-left lg:text-right">Jumat, 13 Mei 2022
                                </p>
                            </div>
                            <div class="flex flex-col lg:flex-row justify-between px-8">
                                <p class="text-primary text-sm font-medium">Total Hari</p>
                                <p class="text-primary text-sm font-medium text-left lg:text-right">2 hari</p>
                            </div>
                            <div class="flex flex-col lg:flex-row justify-between px-8">
                                <p class="text-primary text-sm font-medium">Status Pembayaran</p>
                                <p class="text-primary text-sm font-medium text-left lg:text-right">Belum Dibayar</p>
                            </div>

                        </div>
                    </div>
                </div>
                <img class="w-full items-center justify-center py-4 px-8" src="./images/line_pembayara.png">
                <div class="flex flex-row justify-between">
                    <h1 class="w-full px-8 py-4 text-primary text-2xl font-bold">Total</h1>
                    <h1 class="w-full px-8 py-4 text-primary text-2xl text-right font-bold">{{$venue->price}}</h1>
                </div>
            </div>
        </div>
        <div class="w-full flex flex-row gap-4 py-4 justify-end">
            <a href="#">
                <button
                    class="px-8 py-2 items-center text-center text-primary bg-white rounded-2xl hover:bg-transparent hover:border-primary hover:border-2 transitions-all">Batal</button>
            </a>
            <a href="#">
                <button
                    class="px-8 py-2 items-center text-center text-white bg-blank rounded-2xl hover:bg-white hover:text-blank hover:border-blank hover:border-2 transitions-all">Pesan</button>
            </a>
        </div>
    </div>

</body>

</html>
