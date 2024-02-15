<!DOCTYPE html>
<html>
<head>
    <title>Recipe</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>



  
              <!-- Main content -->
              <div class="flex-1 xl:overflow-y-auto">
                <div class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:py-12 lg:px-8">
                  <h1 class="text-3xl font-extrabold text-blue-gray-900">Profile</h1>
  
                  <form method="POST" action="{{ route('updateProfile') }}" enctype="multipart/form-data" class="mt-6 space-y-8 divide-y divide-y-blue-gray-200">
                    @csrf
                    <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6">
  
                      <div class="sm:col-span-3">
                        <label for="" class="block text-sm font-medium text-blue-gray-900">
                          Name
                        </label>
                        <input type="text" name="new_name" autocomplete="given-name" class="mt-1 block w-full border-gray-300 py-1 border-2 px-3 rounded-md shadow-sm text-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500" value="{{ old('new-name', auth()->check() ? auth()->user()->name : '') }}">
                      </div>
  
                      <div class="sm:col-span-3">
                        <label for="" class="block text-sm font-medium text-blue-gray-900">
                          Username
                        </label>
                        <input type="text" name="new_username" id="last-name" autocomplete="family-name" class="mt-1 block w-full border-gray-300 py-1 px-3 border-2 rounded-md shadow-sm text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500" value="{{old('new-username', auth()->check() ? auth()->user()->username : '')}}">
                      </div>
  
                      <div class="sm:col-span-6">
                        <label for="new_image" class="block text-sm font-medium text-blue-gray-900">
                          Photo
                        </label>
                        <div class="mt-1 flex items-center">
                          <img class="inline-block h-12 w-12 rounded-full" src="{{asset(old('new_image', auth()->check() ? auth()->user()->image : ''))}}" alt="">
                          <div class="ml-4 flex">
                            <div class="relative bg-white py-2 px-3 border bg-yellow-300 border-blue-gray-300 rounded-md shadow-sm flex items-center cursor-pointer hover:bg-blue-gray-50 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-blue-gray-50 focus-within:ring-blue-500">
                              <label for="user-photo" class="relative text-sm font-medium text-blue-gray-900 pointer-events-none">
                                <span class="cursor-pointer">Upload</span>
                                <span class="sr-only"> user photo</span>
                              </label>
                              <input  name="new_image" type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md">
                            </div>
                            <button type="button" class="ml-3 bg-transparent py-2 px-3 border border-transparent rounded-md text-sm font-medium text-blue-gray-900 hover:text-blue-gray-700 focus:outline-none focus:border-blue-gray-300 focus:ring-2 focus:ring-offset-2 focus:ring-offset-blue-gray-50 focus:ring-blue-500">
                              Remove
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
  
                    <div class="pt-8 grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6">
  
                      <div class="sm:col-span-3">
                        <label class="block text-sm   font-medium text-blue-gray-900">
                         Matricule
                        </label>
                        <input type="text" name="new_matricule"  autocomplete="email" class="mt-1 border-gray-300 py-1 px-3 border-2 block w-full border-blue-gray-300 rounded-md shadow-sm text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500" value="{{ old('matricule', auth()->check() ? auth()->user()->matricule : '') }}">
                      </div>
  
                      <div class="sm:col-span-3">
                        <label class="block text-sm  font-medium text-blue-gray-900">
                          Phone
                        </label>
                        <input type="text" name="new_phone" autocomplete="tel" class="mt-1 border-gray-300 py-1 px-3 border-2 block w-full border-blue-gray-300 rounded-md shadow-sm text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500" value="{{old('new-phone', auth()->check() ? auth()->user()->phone : '')}}">
                      </div>
  
                      <div class="sm:col-span-3">
                        <label for="vehicule" class="block text-sm  font-medium text-blue-gray-900">
                          Type de Vehicule
                        </label>
                        <select id="vehicule" name="new_vehicule" autocomplete="country-name" class="mt-1 border-gray-300 py-1 px-3 border-2  block w-full border-blue-gray-300 rounded-md shadow-sm text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500">
                          <option disabled selected value="{{old('new-vehicule', auth()->check() ? auth()->user()->vehicule : '')}}">{{old('new-vehicule', auth()->check() ? auth()->user()->vehicule : '')}}</option>
                          <option value="Petites voitures">Petites voitures</option>
                          <option value="Voitures compactes<">Voitures compactes</option>
                          <option value="Grosses voitures">Grosses voitures</option>
                          <option value="Voitures de luxe">Voitures de luxe</option>
                        </select>
                      </div>
  
                      <p class="text-sm text-blue-gray-500 sm:col-span-6">This account was created on <span>{{auth()->check() ? auth()->user()->created_at : ''}}</span></p>
                    </div>
  
                    <div class="pt-8 flex justify-end">
                      <a href="{{url('driver')}}"><button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-blue-gray-900 hover:bg-blue-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Cancel
                      </button></a>
                      <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-400 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Save</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  
    </div>







</body>
</html>