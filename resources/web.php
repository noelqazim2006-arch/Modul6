use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/ny-annons', function () {
    return "Ny annons sida";
})->name('annons.create');

Route::get('/login', function () {
    return "Login sida";
})->name('login');