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
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mr+Dafoe&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap');
    </style>

</head>
<body>
    <div class="bg-cover" style="background-image: url('{{ asset('img/Background.svg') }}')">
        <header>
            <nav  class="flex justify-between m-4 mx-20 items-center bg-transparent">
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
        <section>
            <div class="flex justify-center flex-col mx-50">
                <div class="flex justify-start items-center relative min-h-[455px]">
                    <img src="{{ asset('img/img-girl.svg') }}" alt="" class="h-[450px] absolute left-10 top-1">
                    <div class="flex absolute left-75 top-15">
                        <img src="{{ asset('img/book-1.jpg') }}" alt="" class="h-[320px]">
                        <div class="flex flex-col m-4 mx-16 justify-between">
                            <div>
                                <h1 class="font-extrabold text-7xl font-display">Clive <br> Cussler</h1>
                                <p class="font-medium text-xl my-2 font-display">And Boys Morrison</p>
                            </div>
                            <div class="flex gap-5">
                                <a href="" class="rounded-4xl p-3 bg-white mx-1.5 flex justify-center items-center h-12 px-5">
                                    <p class="font-bold text-[18px] mr-2">More Info</p>
                                </a>
                                <a href="" class="rounded-4xl p-3 border-1 border-primary bg-secondary mx-1.5 flex justify-center items-center h-12 px-5">
                                    <p class="font-bold text-[18px] mr-2">Buy Now</p>
                                    <img src="{{ asset('icons/user icon.svg') }}" alt="" width="28px">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-[52px] h-90 max-width w-full bg-white/55 bg-clip-padding backdrop-filter backdrop-blur-sm flex flex-col">
                    <form action="" class=" px-55 my-10 w-full">
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute flex items-center top-5.5 left-7">
                                <img src="{{ asset('icons/search_icon.svg') }}" alt="" class="h-6">
                            </div>
                            <input type="search" id="search-book" class=" px-16 py-4 text-[20px] rounded-full w-full bg-gray-100/30 backdrop-filter border-2 border-gray-300" placeholder="Search book...">
                            <button type="submit" class="absolute end-2.5 rounded-full bg-primary text-white w-35 my-2 mx-1 h-12 font-bold hover:bg-gray-500">Search</button>
                        </div>
                    </form>
                    <!-- (a) -->
                    <div class="mx-55">

                        <div class="flex flex-wrap justify-center gap-3">
                            <!-- Card 1 -->
                            <div class="flex flex-col justify-center items-center">
                                <div class="bg-gray-100/30 backdrop-filter border-2 border-gray-300 shadow-lg rounded-xl pt-4 px-4 flex items-center justify-end">
                                    <img src="{{ asset('img/book-1.jpg') }}" alt="Book" class="w-full h-25 object-cover">
                                </div>
                                <div>
                                    <div class="mt-4 bg-gray-300 backdrop-filter border-2 border-gray-300 shadow-lg rounded-xl w-5 h-5">
                                    </div>
                                </div>
                            </div>
                            <!-- Card 1 -->
                            <div class="flex flex-col justify-center items-center">
                                <div class="bg-gray-100/30 backdrop-filter border-2 border-gray-300 shadow-lg rounded-xl pt-4 px-4 flex items-center justify-end">
                                    <img src="{{ asset('img/book-1.jpg') }}" alt="Book" class="w-full h-25 object-cover">
                                </div>
                                <div>
                                    <div class="mt-4 bg-gray-300 backdrop-filter border-2 border-gray-300 shadow-lg rounded-xl w-5 h-5">
                                    </div>
                                </div>
                            </div>
                            <!-- Card 1 -->
                            <div class="flex flex-col justify-center items-center">
                                <div class="bg-gray-100/30 backdrop-filter border-2 border-gray-300 shadow-lg rounded-xl pt-4 px-4 flex items-center justify-end">
                                    <img src="{{ asset('img/book-1.jpg') }}" alt="Book" class="w-full h-25 object-cover">
                                </div>
                                <div>
                                    <div class="mt-4 bg-gray-300 backdrop-filter border-2 border-gray-300 shadow-lg rounded-xl w-5 h-5">
                                    </div>
                                </div>
                            </div>
                            <!-- Card 1 -->
                            <div class="flex flex-col justify-center items-center">
                                <div class="bg-gray-100/30 backdrop-filter border-2 border-gray-300 shadow-lg rounded-xl pt-4 px-4 flex items-center justify-end">
                                    <img src="{{ asset('img/book-1.jpg') }}" alt="Book" class="w-full h-25 object-cover">
                                </div>
                                <div>
                                    <div class="mt-4 bg-gray-300 backdrop-filter border-2 border-gray-300 shadow-lg rounded-xl w-5 h-5">
                                    </div>
                                </div>
                            </div>
                            <!-- Card 1 -->
                            <div class="flex flex-col justify-center items-center">
                                <div class="bg-gray-100/30 backdrop-filter border-2 border-gray-300 shadow-lg rounded-xl pt-4 px-4 flex items-center justify-end">
                                    <img src="{{ asset('img/book-1.jpg') }}" alt="Book" class="w-full h-25 object-cover">
                                </div>
                                <div>
                                    <div class="mt-4 bg-gray-300 backdrop-filter border-2 border-gray-300 shadow-lg rounded-xl w-5 h-5">
                                    </div>
                                </div>
                            </div>
                            <!-- Card 1 -->
                            <div class="flex flex-col justify-center items-center">
                                <div class="bg-gray-100/30 backdrop-filter border-2 border-gray-300 shadow-lg rounded-xl pt-4 px-4 flex items-center justify-end">
                                    <img src="{{ asset('img/book-1.jpg') }}" alt="Book" class="w-full h-25 object-cover">
                                </div>
                                <div>
                                    <div class="mt-4 bg-gray-300 backdrop-filter border-2 border-gray-300 shadow-lg rounded-xl w-5 h-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
    </div>
    
</body>
</html>