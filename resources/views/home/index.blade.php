<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Booklett</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mr+Dafoe&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>
<body>
    <header>
        <nav  class="flex justify-between m-4 mx-20 items-center">
            <a href="" class="flex justify-center items-center gap-2">
                <img src="{{ asset('icons/logo.svg') }}" alt="">
                <p class="text-[28px] font-extrabold text-primary">Booklett</p>
            </a>

            <div class="flex justify-center items-center gap-8">
                <a href="" class="font-bold text-[16px] text-secondary bg-primary p-2 px-8 rounded-4xl flex items-center justify-center">Home</a>
                <div class="flex justify-center items-center">
                    <a href="" class="font-bold text-[16px] text-primary  rounded-4xl">Category</a>
                    <img src="{{ asset('icons/dropdown arrow.svg') }}" alt="">
                </div>
                <a href="" class="font-bold text-[16px] text-primary  rounded-4xl">New Arrivals</a>
                <a href="" class="font-bold text-[16px] text-primary  rounded-4xl">Best Selling Books</a>
                <a href="" class="font-bold text-[16px] text-primary  rounded-4xl">Deal of The Day</a>
                <a href="" class="font-bold text-[16px] text-primary  rounded-4xl">Contact Us</a>
            </div>
            <div class="flex justify-between items-center">
                <a href="" class="bg-primary rounded-full p-3 mx-1.5 flex justify-center items-center w-12 h-12">
                    <img src="{{ asset('icons/shopping bag-minus.svg') }}" alt="" width="28px">
                </a>
                <a href="" class="rounded-full p-3 border-1 border-gray-300 mx-1.5 flex justify-center items-center w-12 h-12">
                    <img src="{{ asset('icons/favourite.svg') }}" alt="" width="28px">
                </a>
                <a href="" class="rounded-4xl p-3 border-1 border-primary bg-secondary mx-1.5 flex justify-center items-center h-12 px-5">
                    <p class="font-bold text-[18px] mr-2">Sign In</p>
                    <img src="{{ asset('icons/user icon.svg') }}" alt="" width="28px">
                </a>
            </div>
        </nav>
    </header>


</body>
</html>