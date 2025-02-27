<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    {{-- jumbotron start --}}
    <div class="flex font-archivo bg-main-bg h-screen w-auto items-center justify-center" style="background-image: url('{{ asset('image/background.svg') }}'); background-size: cover; background-position: center;">
        <div class="flex flex-row gap-x-3 justify-center items-center">
            <img src="{{ asset('image/cookies.svg') }}" alt="cookies" class="animate-bounce w-1/2 h-1/2">
            <div class="flex flex-col justify-center w-auto">
                <h1 class="text-10xl text-main-text-1 drop-shadow-custom-solid-5 ">SUSU</h1>
                <h1 class="text-10xl text-main-text-2 drop-shadow-custom-solid-5 -mt-5">PEDIA</h1>
            </div>        
        </div>
    </div>
    {{-- jumbotron end --}}

    {{-- tentang kami start --}}
    <div class="w-auto min-h-screen py-32 px-56 " >
        <div class="flex flex-col justify-center text-center">
            <div class="flex space-x-4">
                <h1 class="text-5xl font-archivo tracking-tight text-main-text-1 drop-shadow-custom-solid-1">
                    ABOUT
                </h1>
                <h1 class="text-5xl font-archivo tracking-tight text-main-text-2 drop-shadow-custom-solid-1">
                    US
                </h1>
            </div>
            <div class="flex flex-row space-x-8 pt-12 font-bold text-lg text-black">
                <div class="flex flex-col w-2/5 h-full rounded-xl  border-black border-4 shadow-lg shadow-black p-4 justify-center items-center">
                    <img src="{{ asset('image/peternak.jpg') }}" alt="" class="w-full object-cover rounded-lg h-3/4 border-2 border-black">
                    <p class="justify-center items-center my-auto font-mono text-xl p-4 text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis deleniti eveniet laborum? Inventore necessitatibus ipsam nesciunt eaque magni molestias esse rem. Quam quae aut dolorum esse ex asperiores, velit officiis!
                    </p>
                </div>
                <div class="flex flex-col w-3/5 h-auto rounded-xl  border-black border-4 shadow-lg shadow-black p-4 justify-center items-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.7890989560068!2d110.39069066954977!3d-7.107867099555964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7089d3ba172f31%3A0x5dbcdc46f102754e!2sJagoan%20Cutting%20Sticker!5e0!3m2!1sid!2sid!4v1731683645162!5m2!1sid!2sid"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-full"></iframe>
                </div>
            </div>
        </div>
    </div>
    {{-- tentang kami end --}}

    {{-- our product start --}}
    <div class="w-auto min-h-screen py-32 px-56 " style="background-image: url('{{ asset('image/background-2.svg') }}'); background-size: cover; background-position: center;">
        <div class="flex flex-col justify-center items-center text-center">
            <div class="flex space-x-4">
                <h1 class="text-5xl font-archivo tracking-tight text-main-text-2 drop-shadow-custom-solid-1">
                    OUR 
                </h1>
                <h1 class="text-5xl font-archivo tracking-tight text-main-text-1 drop-shadow-custom-solid-1">
                    PRODUCT
                </h1>
            </div>
            <div class="grid grid-cols-3 gap-x-12 gap-y-20 pt-12 font-bold text-4xl text-white font-micro5">
                <div class="flex flex-col bg-main-text-1 w-full rounded-xl h-96 border-black border-4 shadow-lg shadow-black p-4 justify-center items-center">
                    <img src="{{ asset('image/milkshake.jpg') }}" alt="" class="w-full object-cover rounded-lg h-3/4 border-2 border-black">
                    <p class="justify-center items-center my-auto">MILKSHAKE</p>
                </div>
                <div class="flex flex-col bg-main-text-1 w-full rounded-xl h-96 border-black border-4 shadow-lg shadow-black p-4 justify-center items-center">
                    <img src="{{ asset('image/pudding.jpeg') }}" alt="" class="w-full object-cover rounded-lg h-3/4 border-2 border-black">
                    <p class="justify-center items-center my-auto">SILKY PUDDING</p>
                </div>
                <div class="flex flex-col bg-main-text-1 w-full rounded-xl h-96 border-black border-4 shadow-lg shadow-black p-4 justify-center items-center">
                    <img src="{{ asset('image/cookies-susu.jpg') }}" alt="" class="w-full object-cover rounded-lg h-3/4 border-2 border-black">
                    <p class="justify-center items-center my-auto">COOKIES</p>
                </div>
                <div class="flex flex-col bg-main-text-1 w-full rounded-xl h-96 border-black border-4 shadow-lg shadow-black p-4 justify-center items-center">
                    <img src="{{ asset('image/soap.jpg') }}" alt="" class="w-full object-cover rounded-lg h-3/4 border-2 border-black">
                    <p class="justify-center items-center my-auto">SABUN</p>
                </div>
                <div class="flex flex-col bg-main-text-1 w-full rounded-xl h-96 border-black border-4 shadow-lg shadow-black p-4 justify-center items-center">
                    <img src="{{ asset('image/lulur.png') }}" alt="" class="w-full object-cover rounded-lg h-3/4 border-2 border-black">
                    <p class="justify-center items-center my-auto">LULUR</p>
                </div>
            </div>
        </div>
    </div>
    {{-- our product end --}}

    {{-- order start --}}
    <div class="w-auto min-h-screen py-32 px-96" >
        <div class="flex flex-col justify-center items-center text-center">
            <div class="flex space-x-4">
                <h1 class="text-5xl font-archivo tracking-tight text-main-text-1 drop-shadow-custom-solid-1">
                    ORDER
                </h1>
                <h1 class="text-5xl font-archivo tracking-tight text-main-text-2 drop-shadow-custom-solid-1">
                    BY
                </h1>
            </div>
            <div class="flex flex-col gap-y-4 pt-12 font-bold text-lg text-black w-full">
                <a href="" class="hover:scale-105 ease-in-out duration-300">
                    <div class="flex items-center justify-center bg-gofood w-full h-16 rounded-full py-1">
                        <img src="{{ asset('image/gofood.jpg') }}" alt="" class="h-full object-cover">
                    </div>
                </a>
                <a href="https://wa.me/+6289685595595" class="hover:scale-105 ease-in-out duration-300" target="_blank">
                    <div class="flex items-center justify-center bg-wa w-full h-16 rounded-full py-2">
                        <img src="{{ asset('image/whatsapp.png') }}" alt="" class="h-full object-cover">
                    </div>
                </a>
                <a href="" class="hover:scale-105 ease-in-out duration-300">
                    <div class="flex items-center justify-center bg-shopeefood w-full h-16 rounded-full">
                        <img src="{{ asset('image/shopeefood.png') }}" alt="" class="h-full object-cover">
                    </div>
                </a>
                <a href="" class="hover:scale-105 ease-in-out duration-300">
                    <div class="flex items-center justify-center bg-grabfood w-full h-16 rounded-full">
                        <img src="{{ asset('image/grabfood.png') }}" alt="" class="h-full object-cover">
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- order end --}}
</body>
</html>