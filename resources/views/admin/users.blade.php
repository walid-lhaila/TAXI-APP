@extends('sidBar')
<section class="w-[1200px] ml-72 mt-10 container px-4 mx-auto">
    <div class="py-4">
    <h1 class="text-yellow-400 font-medium text-lg ">All Users</h1>
    <div class="bg-yellow-400 w-20 h-[2px] "></div>
    </div>
    <div class="flex flex-col">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 dark:border-gray-200 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-yellow-400">
                            <tr>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-100 dark:text-gray-100">
                                   ID
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-100 dark:text-gray-100">
                                    NAME
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-100 dark:text-gray-100">
                                    ROLE  
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-100 dark:text-gray-100">
                                    EMAIL
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-100 dark:text-gray-100">
                                    PHONE
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-100 dark:text-gray-100">
                                    CREATED AT
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-100 dark:text-gray-100">
                                     ACTION
                                </th>

                               
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 ">
                            @foreach($admins as $admin)
                            <tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-600 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">
                                        {{$admin->id}}
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-500 whitespace-nowrap">{{$admin->name}}</td>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-white-500 bg-yellow-300 ">
                                        

                                        <h2 class="text-sm font-normal">{{$admin->role}}</h2>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    <div class="flex items-center gap-x-2">
                                        <img class="object-cover w-8 h-8 rounded-full" src="{{url('img/walid.jpg')}}" alt="">
                                        <div>
                                            <h2 class="text-sm font-medium text-gray-800 dark:text-gray-500 ">{{$admin->name}} {{$admin->Lname}}</h2>
                                            <p class="text-xs font-normal text-gray-600 dark:text-gray-400">{{$admin->email}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-500 whitespace-nowrap">0628839370</td>

                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-500 whitespace-nowrap">{{$admin->created_at}}</td>

                                
                            </tr>
                            @endforeach
                            @foreach($drivers as $driver)
                            <tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-600 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">
                                        {{$driver->id}}
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-500 whitespace-nowrap">{{$driver->name}}</td>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-white-500 bg-yellow-300">
                                        

                                        <h2 class="text-sm font-normal">{{$driver->role}}</h2>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    <div class="flex items-center gap-x-2">
                                        <img class="object-cover w-8 h-8 rounded-full" src="{{asset('img/'. $driver->image)}}" alt="">
                                        <div>
                                            <h2 class="text-sm font-medium text-gray-800 dark:text-gray-500 ">{{$driver->name}} {{$driver->Lname}}</h2>
                                            <p class="text-xs font-normal text-gray-600 dark:text-gray-400">{{$driver->email}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-500 whitespace-nowrap">{{$driver->phone}}</td>

                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-500 whitespace-nowrap">{{$driver->created_at}}</td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center gap-x-6">
                                        <svg class="w-[22px] h-[22px] text-gray-800 hover:text-red-500 cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                          </svg>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @foreach($passengers as $passenger)
                            <tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-600 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">
                                        {{$passenger->id}}
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-500 whitespace-nowrap">{{$passenger->name}}</td>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2  text-black bg-yellow-300">
                                        

                                        <h2 class="text-sm font-normal">{{$passenger->role}}</h2>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    <div class="flex items-center gap-x-2">
                                        <img class="object-cover w-8 h-8 rounded-full" src="{{url('img/passenger.png')}}" alt="">
                                        <div>
                                            <h2 class="text-sm font-medium text-gray-800 dark:text-gray-500 ">{{$passenger->name}} {{$passenger->Lname}}</h2>
                                            <p class="text-xs font-normal text-gray-600 dark:text-gray-400">{{$passenger->email}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-500 whitespace-nowrap">{{$passenger->phone}}</td>

                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-500 whitespace-nowrap">{{$passenger->created_at}}</td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center gap-x-6">
                                        <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                            <svg class="w-[22px] h-[22px] text-gray-800 cursor-pointer  hover:text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                              </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        

                       

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

   
</section>