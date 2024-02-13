<!DOCTYPE html>
<html>
<head>
    <title>Recipe</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <div class="flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-yellow-400 lg:max-w-4xl mt-28">
        <div class="hidden bg-cover lg:block lg:w-1/2" style="background-image: url('img/route.jpg');"></div>
    
        <div class="w-full px-6 py-8 md:px-8 lg:w-1/2">
            
    
            <p class="mt-3 text-xl text-center text-gray-600 dark:text-gray-200">
                CHOOSE YOUR ROUTE
            </p>
    
            
    
            <div class="flex items-center justify-between mt-4">
                <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/4"></span>
    
    
                <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/4"></span>
            </div>
        <form action="{{route('create.route')}}" method="POST">
            <div class="mt-4">
                <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200" for="LoggingEmailAddress">Deparature</label>
                <input id="" name="deparature" class="block w-full px-4 py-2 text-gray-100 bg-white border rounded-lg dark:bg-gray-100 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" type="email" />
            </div>
    
            <div class="mt-4">
                <div class="flex justify-between">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200" for="loggingPassword">Destination</label>
                </div>
    
                <input id="" name="destination" class="block w-full px-4 py-2 text-gray-100 bg-white border rounded-lg dark:bg-gray-100 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" type="password" />
            </div>
    
            <div class="mt-6">
                <a href="login"><button class="w-full px-6 py-3 text-sm  tracking-wide text-white capitalize transition-colors duration-300 transform bg-yellow-200 font-bold rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                    Submit
                </button></a>
            </div>
        </form>
        </div>
    </div>
</body>
</html>