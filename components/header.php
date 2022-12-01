<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>


    <nav>
        <div class="flex mx-1 mt-5 md:mx-[110px] mb-3 lg:mx-28 justify-around">
            <a href="/index.php">
                <img class="transition-all hover:scale-[105%] w-[90px] " src="/img//4.jpg" alt="" /></a>

            <div class="flex mt-5">
                <!-- menu    invisible -->
                <ul id="menu"
                    class="invisible bg-[#272f54] flex flex-col absolute top-[65px] lg:bg-inherit md:bg-inherit lg:static md:visible mt-2 right-0 z-10 lg:flex-row md:static md:flex-row">
                    <li class="mt-2 mb-6 md:mt-0 md:mb-0 lg:mt-0 lg:mb-0">
                        <a class="text-white text-sm px-6 lg:px-0 md:px-0 md:text-cyan-800 lg:text-cyan-800 b-4 font-bold uppercase lg:text-lg lg:pl-12 md:pl-7 hover:text-red-700"
                            href="/index.php">Trang Chủ</a>
                    </li>
                    <li class="mb-6 md:mb-0 lg:mb-0">
                        <a class="text-white text-sm px-6 lg:px-0 md:px-0 md:text-cyan-800 lg:text-cyan-800 b-4 font-bold uppercase lg:text-lg lg:pl-12 md:pl-7 hover:text-red-700"
                            href="/components//list_pet.php">Danh sách pet </a>
                    </li>
                    <li class="mb-6 md:mb-0 lg:mb-0">
                        <a class="text-white text-sm px-6 lg:px-0 md:px-0 md:text-cyan-800 lg:text-cyan-800 b-4 font-bold uppercase lg:text-lg lg:pl-12 md:pl-7 hover:text-red-700"
                            href="">Tẩm quất PET</a>
                    </li>
                </ul>
                <!--  -->
                <div class="flex pt-2 pb-8">
                    <button
                        class="mb-5 md:ml-6 rounded px-4 lg:ml-8 text-cyan-800 border border-current transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300">
                        Đi vào
                    </button>

                </div>
                <!--  -->
            </div>
            <a href="/index.php">
                <img class="transition-all hover:scale-[105%] w-[90px] " src="/img//4.jpg" alt="" /></a>

        </div>
    </nav>