    <?php

    use App\Http\Controllers\DriversController;
    use App\Http\Controllers\PagesController;
use App\Http\Controllers\PassengerController;
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

    Route::get('index', [DriversController::class ,'index']);
    Route::get('login', [PagesController::class ,'login']);
    Route::get('register', [pagesController::class ,'register']);
    Route::post('register', [DriversController::class , 'store']);
    Route::post('register', [PassengerController::class, 'passengerStore']);
