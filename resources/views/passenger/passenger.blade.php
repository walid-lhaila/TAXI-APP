<!DOCTYPE html>
<html>
<head>
    <title>Recipe</title>
    <script src="https://cdn.tailwindcss.com"></script>

    

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>

     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>


     <script src="https://cdn.jsdelivr.net/npm/graphhopper@2.0/dist/graphhopper-client.bundle.js"></script>

</head>
<body class="h-screen">
<nav x-data="{ isOpen: false }" class="relative bg-white shadow dark:bg-yellow-600">
    <div class="container px-6  mx-auto">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex items-center justify-between">
                <a href="#">
                    <img class="w-16" src="{{url('img/logo.png')}}" alt="">
                </a>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>
                
                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute gap-5 inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-yellow-600 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
           

                <div class="flex items-center mt-4 gap-3 lg:mt-0">
                  
                    <button type="button" class="flex items-center focus:outline-none" aria-label="toggle profile dropdown">
                        <div class="w-8 h-8 overflow-hidden border-2 border-gray-400 rounded-full">
                            <img src="{{url('img/avatar.png')}}" class="object-cover w-full h-full" alt="avatar">
                        </div>

                        <h3 class="mx-2 text-gray-700 dark:text-gray-200 lg:hidden">Khatab wedaa</h3>
                    </button>

                    <h1 class="font-medium text-gray-100 ">Walid Lhaila</h1>
                </div>
                <div>
                    <a href="{{url('/')}}">
                        <button>
                            <svg class="w-6 h-8 text-gray-800 dark:text-white hover:text-red-500 duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<section class="">
    <div class="bg-white ">
        <div class="flex justify-center">
            <div id="map" class="bg-cover h-[665px] lg:block lg:w-2/3">
                
            </div>
            <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                <div class="flex-1">
                    <div class="text-center">
                        <p class="mt-3 text-gray-500 dark:text-gray-800 font-bold text-3xl">Order A Ride</p>
                    </div>
                    <div class="mt-8">
                        <form id="routeForm">
                            <div>
                                <label for="depart" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-600">Place of support</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a6 6 0 1 0 0-12 6 6 0 0 0 0 12Zm0 0v6M9.5 9A2.5 2.5 0 0 1 12 6.5"/>
                                          </svg>
                                    </div>
                                    <input type="text" id="place-of-support" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Place of support">
                                </div>                            
                            </div>
                            <div class="mt-6">
                                <label for="destination" class="text-sm text-gray-600 font-medium dark:text-gray-600">Destination</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 14h0a7 7 0 1 0-11.5 0h0l.1.3.3.3L12 21l5.1-6.2.6-.7.1-.2Z"/>
                                          </svg>
                                    </div>
                                    <input type="text" id="destination" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Destination">
                                </div>                            
                            </div>
    
                            <div class="mt-6">
                                <button type="button" onclick="calculateRoute()" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-300 transform bg-yellow-500 rounded-lg hover:bg-yellow-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                    Search
                                </button>
                            </div>
    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<script>
    var map = L.map('map');
    map.setView([51.505, -0.09], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

function calculateRoute() {
        var placeOfSupportInput = document.getElementById('place-of-support').value;
        var destinationInput = document.getElementById('destination').value;

        // Use GraphHopper API to calculate the route
        var ghRouting = new GraphHopper.Routing({
            key: 'YOUR_GRAPHHOPPER_API_KEY',
            host: 'https://graphhopper.com/api/1',
            vehicle: 'car',
            elevation: false,
        });

        ghRouting.addPoint(new GHInput(placeOfSupportInput));
        ghRouting.addPoint(new GHInput(destinationInput));

        ghRouting.doRequest()
            .then(function (json) {
                var path = json.paths[0];
                var latLngs = path.points.coordinates.map(function (point) {
                    return L.latLng(point[1], point[0]);
                });

                var route = L.polyline(latLngs, { color: 'blue' }).addTo(map);
                map.fitBounds(route.getBounds());
            })
            .catch(function (error) {
                console.error('Error calculating the route:', error);
            });
    }

</script>
</html>