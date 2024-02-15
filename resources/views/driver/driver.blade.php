<!DOCTYPE html>
<html>
<head>
    <title>Recipe</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  

<div class="">
    
    <!-- When the mobile menu is open, add `overflow-hidden` to the `body` element to prevent double scrollbars -->
    <header class="bg-yellow-400 shadow-sm lg:static lg:overflow-y-visible" x-state:on="Open" x-state:off="Closed" :class="{ 'fixed inset-0 z-40 overflow-y-auto': open }" x-data="Components.popover({ open: false, focus: false })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
      <div class="max-w-7xl mx-auto">
        <div class="relative flex justify-between xl:grid xl:grid-cols-12 lg:gap-8">
          <div class="flex md:absolute md:left-0 md:inset-y-0 lg:static xl:col-span-2">
            <div class="flex-shrink-0 flex items-center">
              <a href="#">
                <img class="block h-20" src="{{url('img/logo.png')}}" alt="Workflow">
              </a>
            </div>
          </div>
          <div class="min-w-0 flex-1 md:px-8 lg:px-0 xl:col-span-6">
            <div class="flex items-center px-6 py-4 md:max-w-3xl md:mx-auto lg:max-w-none lg:mx-0 xl:px-0">
              <div class="w-full">
                <label for="search" class="sr-only">Search</label>
                <div class="relative">
                  <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                    <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
  </svg>
                  </div>
                  <input id="search" name="search" class="block w-full bg-white border border-gray-300 rounded-md py-2 pl-10 pr-3 text-sm placeholder-gray-500 focus:outline-none focus:text-gray-900 focus:placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Search" type="search">
                </div>
              </div>
            </div>
          </div>
          <div class="flex items-center md:absolute md:right-0 md:inset-y-0 lg:hidden">
           
          </div>
          <div class="hidden lg:flex lg:items-center lg:justify-end xl:col-span-4">
  
            <!-- Profile dropdown -->
              <div  class="flex-shrink-0 relative ml-5">
                  <div class="flex gap-3">
                      <button id="btnCard"  type="button" class="bg-white rounded-full flex focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                      <img class="h-8 w-8 rounded-full" src="{{url('img/avatar.png')}}" alt="">
                      </button>
                      <h1 class="text-white font-medium mt-1 text-lg">{{ auth()->guard('web')->user()->name }}</h1>
                  </div>
                
                  <div id="dropDown"  class="origin-top-right absolute z-10 right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1 focus:outline-none scale-0">
                    
                      <a href="{{url('/profile')}}" class="block py-2 px-4 text-sm text-gray-700 hover:font-medium" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="open = false; focusButton()">Your Profile</a>
                    
                      <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:font-medium" :class="{ 'bg-gray-100': activeIndex === 1 }" role="menuitem" tabindex="-1" id="user-menu-item-1" @mouseenter="activeIndex = 1" @mouseleave="activeIndex = -1" @click="open = false; focusButton()">Settings</a>
                    
                      <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:text-red-500 hover:font-bold" :class="{ 'bg-gray-100': activeIndex === 2 }" role="menuitem" tabindex="-1" id="user-menu-item-2" @mouseenter="activeIndex = 2" @mouseleave="activeIndex = -1" @click="open = false; focusButton()">Sign out</a>
                    
                  </div>
              </div>


          </div>
        </div>
      </div>
    </header>
  

    <div class="w-full bg-center bg-cover h-[649px]" style="background-image: url('img/bgDriver.jpg');">
<div class="flex">
      <div class="form">
  <div class=" absolute mt-4 flex  justify-start bg-gray-900/40">
          <div class="ml-5 bg-yellow-400 shadow-lg rounded   w-[300px]">
            <h3 class="mb-2 font-medium text-xl text-gray-900 text-center dark:text-white py-1">Statut</h3>
        <form action="">
            <ul class="w-48 text-sm ml-[40px] font-medium text-gray-100 bg-white  rounded-lg dark:bg-yellow-400  dark:text-white">
                <li class="w-full border-b border-gray-100 rounded-t-lg dark:border-gray-100">
                    <div class="flex items-center ps-3">
                        <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-100 dark:text-gray-100">Online</label>
                    </div>
                </li>
                <li class="w-full border-b  rounded-t-lg d">
                    <div class="flex items-center ps-3">
                        <input id="react-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100  rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="react-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-100 dark:text-gray-100">Offline</label>
                    </div>
                </li>
            </ul>
            <div class="flex justify-center py-2 mt-2">
              <button class="bg-gray-200 hover:bg-gray-100 font-medium text-gray-800 px-4 py-1 rounded">Change</button>
            </div>
        </form>
          </div>
    </div>

     


      <div class="mt-[230px] ml-5 bg-yellow-400 absolute rounded w-[300px]">
        <h3 class="mb-2 font-medium text-xl text-gray-900 text-center dark:text-white py-1">Route</h3>
        <form action="{{route('routes.store')}}" method="POST">
          @csrf
          <input type="hidden" name="driver_id" value="{{ auth()->guard('web')->user()->id }}">
            <div class="flex justify-center flex-col ml-10">
                <label for="deparature" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-100">Place of support</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a6 6 0 1 0 0-12 6 6 0 0 0 0 12Zm0 0v6M9.5 9A2.5 2.5 0 0 1 12 6.5"/>
                          </svg>
                    </div>
                    <input type="text" name="deparature" class="bg-gray-50 border border-gray-300 text-gray-100 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 ps-10 p-2.5  dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-500 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Place of support">
                </div>                            
            </div>
            <div class="flex justify-center flex-col ml-10 mt-2">
                <label for="destination" class="text-sm mb-2 text-gray-600 font-medium dark:text-gray-100">Destination</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 14h0a7 7 0 1 0-11.5 0h0l.1.3.3.3L12 21l5.1-6.2.6-.7.1-.2Z"/>
                          </svg>
                    </div>
                    <input type="text" name="destination" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 ps-10 p-2.5  dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-500 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Destination">
                </div> 
                <div class="flex justify-center flex-col mt-2">
                  <label for="depart" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-100">Date de Depart</label>
                  <div class="relative">
                      <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                          <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a6 6 0 1 0 0-12 6 6 0 0 0 0 12Zm0 0v6M9.5 9A2.5 2.5 0 0 1 12 6.5"/>
                            </svg>
                      </div>
                      <input type="datetime-local" name="depart" id="depart" class="bg-gray-50 border border-gray-300 text-gray-100 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 ps-10 p-2.5  dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-500 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Place of support" min="{{ now()->format('Y-m-d\TH:i') }}">
                  </div>                            
              </div>
              <div class="flex justify-center flex-col mt-2">
                <label for="arrive" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-100">Date D'arrive</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a6 6 0 1 0 0-12 6 6 0 0 0 0 12Zm0 0v6M9.5 9A2.5 2.5 0 0 1 12 6.5"/>
                          </svg>
                    </div>
                    <input type="datetime-local" name="arrive" id="arrive" class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 ps-10 p-2.5  dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-500 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Place of support">
                </div>                            
            </div>
                <div class="flex justify-center py-2 mr-8 mt-3">
                  <button type="submit" class="bg-gray-200 hover:bg-gray-100 font-medium text-gray-800 px-4 py-1 rounded">Add</button>
                </div>                           
            </div>

        </form>
    </div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
    <!-- Replace with your content -->
    <div class="py-2">
      <div class="ml-[450px] mt-[4px] border-4 bg-yellow-400 border-dashed border-gray-100  rounded-lg h-[620px] w-[840px]">
        <h1 class="mb-2 font-medium text-xl text-gray-900 text-center dark:text-white py-1">Road History</h1>
        <div class=" py-8">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
              @foreach ($driver->routes as $route)
                  <div class="relative rounded-lg border border-gray-300 bg-gray-100 px-6 py-5 shadow-sm flex justify-between w-[218px] space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <div class="mt-1 font-medium text-md">{{ $route->deparature }}</div>
                      <div> <img class="h-[35px] w-[40px]" src="{{ url('img/arrow.png') }}" alt=""></div>
                      <div class="mt-1 font-medium text-md">{{ $route->destination }}</div>
                  </div>
              @endforeach
          </div>
          </div>
        </div>
      </div>  
    </div>
    <!-- /End replace -->
  </div>
</div>

  </div>

  
    </div>

    <script>
      const departureInput = document.querySelector('input[name="depart"]');
       const arrivalInput = document.querySelector('input[name="arrive"]');

       departureInput.addEventListener('input', function () {
           const selectedDate = new Date(this.value);
           selectedDate.setMinutes(selectedDate.getMinutes() + 1);
           const formattedDate = selectedDate.toISOString().slice(0, 16);
           arrivalInput.min = formattedDate;
       });
    </script>

<script src="{{url('js/card.js')}}"></script>


  </body>
</html>

 
  
     



   

    