@extends('sidBar')

<!--
  This example requires Tailwind CSS v2.0+

  The alpine.js code is *NOT* production ready and is included to preview
  possible interactivity
-->
<div class="ml-72">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
      
  <div>
    <h3 class="text-lg leading-6 font-medium text-yellow-400">
     Stats
    </h3>

    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
      
        <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
          <dt>
            <div class="absolute rounded-md p-3">
                <img class="w-8 h-8" src="{{url('img/driver.png')}}" alt="">

            </div>
            <p class="ml-16 text-sm font-medium text-gray-500 truncate">Drivers</p>
          </dt>
          <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
            <p class="text-2xl font-semibold text-gray-900">
              {{ $driversCount }}
            </p>
            <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
              <div class="text-sm">
                <a href="users" class="font-medium text-yellow-400 hover:text-yellow-300"> View all</a>
              </div>
            </div>
          </dd>
        </div>
      
        <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
          <dt>
            <div class="absolute rounded-md p-3">
              <img class="w-8 h-8" src="{{url('img/passenger.png')}}" alt="">
            </div>
            <p class="ml-16 text-sm font-medium text-gray-500 truncate">Passengers</p>
          </dt>
          <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
            <p class="text-2xl font-semibold text-gray-900">
                {{ $passengersCount }}
            </p>
            <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
              <div class="text-sm">
                <a href="/users" class="font-medium text-yellow-400 hover:text-yellow-300"> View all</a>
              </div>
            </div>
          </dd>
        </div>
      
        <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
          <dt>
            <div class="absolute rounded-md p-3">
                <img class="w-8 h-8" src="{{url('img/route.png')}}" alt="">

            </div>
            <p class="ml-16 text-sm font-medium text-gray-500 truncate">Routes</p>
          </dt>
          <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
            <p class="text-2xl font-semibold text-gray-900">
                {{ $routesCount }}
            </p>
            <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
              <div class="text-sm">
                <a href="/routes" class="font-medium text-yellow-400 hover:text-yellow-300"> View all</a>
              </div>
            </div>
          </dd>
        </div>
      
    </dl>
  </div>

    </div>
            
  </div>


  