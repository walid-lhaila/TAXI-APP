@extends('sidBar')

<!--
  This example requires Tailwind CSS v2.0+

  The alpine.js code is *NOT* production ready and is included to preview
  possible interactivity
-->
<div class="bg-gray-100 py-8 ml-72">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
  <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
    
      
    @foreach($driversWithRoutes as $driver)
      <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
        <div class="w-full flex items-center justify-between p-6 space-x-6">
          <div class="flex-1 truncate">
            <div class="flex items-center space-x-3">
              <h3 class="text-gray-900 text-sm font-medium truncate">{{$driver->name}}</h3>
              <span class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">{{$driver->role}}</span>
            </div>
            <p class="mt-1 text-gray-500 text-sm truncate">{{$driver->vehicule}}</p>
          </div>
          <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
        </div>
        <div>
            @foreach($driver->routes as $route)
            <div class="flex justify-between px-4">
            <div class="flex gap-1 mt-1">
                <div><svg class="w-6 h-6 text-yellow-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a6 6 0 1 0 0-12 6 6 0 0 0 0 12Zm0 0v6M9.5 9A2.5 2.5 0 0 1 12 6.5"/>
                  </svg></div>
                <div class="mt-1 text-gray-600">{{$route->deparature}}</div>
            </div>
           
            <div> 
                <img class="h-[40px] w-[90px]" src="{{url('img/arrow.png')}}" alt="">
            </div>

              <div class="flex gap-1 mt-1">
                <div><svg class="w-6 h-6 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 14h0a7 7 0 1 0-11.5 0h0l.1.3.3.3L12 21l5.1-6.2.6-.7.1-.2Z"/>
                  </svg></div>
                <div class="mt-1 text-gray-600">{{$route->destination}}</div>
              </div>
            </div>
            
            @endforeach
        </div>
      </li>
      @endforeach
    
  </ul>

    </div>
  </div>