<?php

    use App\Http\Controllers\ProfileController;
    use App\Livewire\Admin\AddNoticiasComponent;
    use App\Livewire\Admin\AddUsuariosComponent;
    use App\Livewire\Admin\Admindashboard;
    use App\Livewire\Admin\EditNoticiasComponent;
    use App\Livewire\Admin\EditUsuariosComponent;
    use App\Livewire\Admin\UsuariosComponent;
    use App\Livewire\NoticiasComponent;
    use App\Livewire\SearchComponent;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/noticias', NoticiasComponent::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', Admindashboard::class)->name('admin.dashboard');
    Route::get('/admin/dashboard/addnoticia', AddNoticiasComponent::class)->name('admin.add.noticias');
    Route::get('/admin/dashboard/editnoticia/{noticia_id}', EditNoticiasComponent::class)->name('admin.edit.noticias');
    Route::get('/admin/dashboard/addusuario', AddUsuariosComponent::class)->name('admin.add.usuarios');
    Route::get('/admin/dashboard/editusuario/{usuario_id}', EditUsuariosComponent::class)->name('admin.edit.usuarios');
    Route::get('/admin/dashboard/usuarios', UsuariosComponent::class)->name('admin.usuarios');
    Route::get('/admin/noticias');
});

require __DIR__.'/auth.php';
