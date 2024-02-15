    <?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

    Route::get('/', function () {
        return view('welcome');
    });
                                    // PAGES
    Route::get('index', [DriversController::class ,'index']);
    Route::get('login', [AuthController::class ,'login']);
    Route::get('register', [AuthController::class ,'register']);

                                // ADD DRIVER AND PASSENGER
    Route::post('register', [DriversController::class , 'store']);
    Route::post('registerPassenger', [PassengerController::class, 'passengerStore']);

                                // LOGIN
    Route::post('login', [AuthController::class , 'login'])->name('login');


                                    // ADMIN
    Route::get('admin', [AdminController::class , 'index']);
    Route::get('users', [AdminController::class , 'users']);
    Route::get('routes', [AdminController::class , 'routes']);

                                    // ADD ROUTE
    Route::post('routes.store', [RouteController::class, 'store'])->name('routes.store');


                                    // DRIVER
    Route::get('driver', [DriversController::class, 'index']);
    Route::get('profile', [DriversController::class, 'profileUpdate']);
    // Route::get('route', [RouteController::class, 'index']);


                                    // PASSENGER
    Route::get('passenger', [PassengerController::class , 'index']);
    Route::get('reserve' ,[PassengerController::class , 'create']);

    Route::get('admin', [AdminController::class , 'index'])->name('admin.admin');
    Route::get('driver', [DriversController::class, 'index'])->name('driver.driver');
    Route::get('passenger', [PassengerController::class , 'index'])->name('passenger.passenger');



                                // SEARCH
    Route::get('passengerSearch', [PassengerController::class, 'search'])->name('passengerSearch');
                                    

                                        // UPDATE DRIVER
    Route::middleware(['auth:web'])->group(function () {
        Route::post('updateProfile', [DriversController::class, 'updateProfile'])->name('updateProfile');
    });
