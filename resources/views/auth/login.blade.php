<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Taxi</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <div class="bg-white dark:bg-white">
            <div class="flex justify-center h-screen">
                <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url('img/image3.jpg')">
                <div class="bg-gray-900 bg-opacity-40">
                    <a href="/"><button class=" absolute ml-5 mt-5 hover:bg-yellow-400 duration-700 bg-gray-200 rounded-lg px-1">
                        <svg class="w-[46px] h-[36px] text-yellow-400 hover:text-white duration-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.6" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                          </svg>
                    </button></a>
                </div>
                    <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                        <div>
                            <h2 class="text-2xl font-bold text-white sm:text-3xl">TAXI DRIVE</h2>
        
                            <p class="max-w-xl mt-3 text-gray-300">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. In
                                autem ipsa, nulla laboriosam dolores, repellendus perferendis libero suscipit nam temporibus
                                molestiae
                            </p>
                        </div>
                    </div>
                </div>
        
                <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                    <div class="flex-1">
                        <div class="text-center">
                            <div class="flex justify-center mx-auto">
                                <img class="w-24" src="{{url('img/logo.png')}}" alt="">
                            </div>
        
                            <p class="mt-3 text-gray-500 dark:text-gray-500">Sign in to access your account</p>
                        </div>
        
                        <div class="mt-8">
                            <form method="POST" action="{{url('login')}}">
                                @csrf
                                <div>
                                    <label for="username" class="block mb-2 text-sm text-gray-700">Email Address</label>
                                    <input type="text" name="username" id="email" placeholder="example@example.com" class="block w-full px-4 py-2 mt-2 text-gray-200 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-200 dark:text-gray-300 dark:border-gray-700 focus:border-yellow-400 dark:focus:border-yellow-400 focus:ring-yellow-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                </div>
        
                                <div class="mt-6">
                                    <div class="flex justify-between mb-2">
                                        <label for="password" class="text-sm text-gray-700">Password</label>
                                        <a href="#" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Forgot password?</a>
                                    </div>
        
                                    <input type="password" name="password" id="password" placeholder="Your Password" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-200 dark:text-gray-300 dark:border-gray-700 focus:border-yellow-400 dark:focus:border-yellow-400 focus:ring-yellow-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                </div>
        
                                <div class="mt-6">
                                    <button type="submit" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-300 transform bg-yellow-500 rounded-lg hover:bg-yellow-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                        Sign in
                                    </button>
                                </div>
        
                            </form>
        
                            <p class="mt-6 text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a href="register" class="text-yellow-600 focus:outline-none focus:underline hover:underline">Sign up</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>