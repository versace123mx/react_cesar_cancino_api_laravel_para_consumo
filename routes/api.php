<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('webpay', 'WebpayController');
Route::resource('webpay-respuesta', 'WebpayRespuestaController');
Route::resource('paypal', 'PaypalController');
Route::resource('paypal-capture', 'PaypalCaptureController');
Route::resource('paypal-cancelar', 'PaypalCanceladoController');
Route::resource('mercado-pago', 'MercadoPagoController');
Route::resource('mercado-pago-respuesta', 'MercadoPagoRespuestaController');

Route::resource('categorias', 'CategoriasController');
Route::resource('categorias-slug', 'CategoriasSlugController');

Route::resource('productos', 'ProductosController');
Route::resource('productos-loadmore', 'Productos2Controller');
Route::resource('productos-buscar', 'ProductosBuscarController');

Route::resource('productos-fotos', 'ProductosFotosController');
Route::resource('login', 'AccesoController');
Route::resource('registro', 'RegistroController');


Route::resource('anotaciones', 'AnotacionesController');

Route::resource('clasificados-categorias', 'ClasificadosCategoriaController');
Route::resource('clasificados-avisos', 'ClasificadosAvisosController');
Route::resource('clasificados-avisos-categoria', 'ClasificadosAvisosPorCategoriaController');
Route::resource('clasificados-contacto', 'ClasificadosContactoController');
Route::resource('clasificados-avisos-search', 'ClasificadosAvisosSearchController');
Route::resource('clasificados-avisos-update', 'ClasificadosAvisosUpdateController');
Route::resource('mis-datos', 'MisDatosController');
Route::resource('clasificados-avisos-comentarios', 'ClasificadosAvisosComentariosController');
