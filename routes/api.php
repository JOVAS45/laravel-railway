<?php

use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\RolPermisoController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\TipoCitaController;
use App\Http\Controllers\TipoNotificacionController;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\TipoVehiculoController;
use App\Http\Controllers\ModeloVehiculoController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ValorComercialController;
use App\Http\Controllers\DepreciacionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackupController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



//---------------------------------------------------------------
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/backup', [BackupController::class, 'runBackup']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::apiResource('pais', PaisController::class);
    Route::apiResource('roles', RolController::class);
    Route::apiResource('permisos', PermisoController::class);
    Route::apiResource('rol_permiso', RolPermisoController::class);
    Route::apiResource('tipo_usuario', TipoUsuarioController::class);
    Route::apiResource('usuarios', UsuarioController::class);
    Route::apiResource('tipo_cita', TipoCitaController::class);
    Route::apiResource('citas', CitaController::class);
    Route::apiResource('bitacora', BitacoraController::class);
    Route::apiResource('tipo_notificacion', TipoNotificacionController::class);
    Route::apiResource('notificacion', NotificacionController::class);

    Route::apiResource('ciudad', CiudadController::class);
    Route::apiResource('marca', MarcaController::class);
    Route::apiResource('tipo_vehiculo', TipoVehiculoController::class);
    Route::apiResource('modelo_vehiculo', ModeloVehiculoController::class);
    Route::apiResource('vehiculos', VehiculoController::class);
    Route::apiResource('valor_comercial', ValorComercialController::class);
    Route::apiResource('depreciacion', DepreciacionController::class);
});
