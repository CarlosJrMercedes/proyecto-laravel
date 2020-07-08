<?php

    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    Route::get('/', function () {
        return view('welcome');
    }); 


    Route::prefix('acerca')->group( 
        function (){

            Route::get('objetivos-proyecto', function () {
                return "Desarrollar un sitio web completo que cumpla las expectativas de ser una página dinámica y poco
                recargable, implementando los conocimientos obtenidos en él curso y adquiridos anteriormente en
                estudios autodidactos y universitarios.
                ";
            })->name('Objetivos');
            
            
            Route::get('alcance-del-proyecto', function () {
                return "Se solucionarán el alcance de la tienda a mas personas, llegando a las personas en Centroamérica
                y aumentar el ingreso económico de la empres
                No obstante, el envío de productos tendrá que ser gestionada de manera que el cliente pague
                envió y IVA al realizar su compra, la empresa tendrá que ver la manera de hacer que el producto
                llegue al cliente.
                ";
            })->name("alcances");

            Route::prefix('descripcio')->group( 
                function(){
                    
                    Route::get('proyecto', function () {
                        return "Realizar un sitio web destinado a la venta de productos tecnológicos, donde se puedan ver
                        detalladamente productos, existencias y realizar su compra respectiva al producto que se desee;
                        tomando en cuenta que se podrá navegar en la página de forma dinámica, registrarse en la página
                        y poder adquirir productos a pasar a carrito solamente cuando este registrado y haya iniciado su
                        respectiva sesión con su cuenta, el cliente podrá visualizar la variedad de productos sin haberse
                        registrado no obstante no podrá agregar productos al carito se contaran con cuatro usuarios:
                        administrador, vendedor, cliente y público.
                        ";
                    })->name("descripcion");

                    Route::prefix('usuario')->group( 
                        function(){

                            Route::get('administrador', function () {
                                return "Este usuario podrá administrar la tienda en su totalidad; Este usuario tendrá el poder de
                                ver la cantidad de productos restantes de cada unidad de la tienda y al ver llegar al stop
                                poder realizar pedidos a los proveedores, podrá deshabilitar un producto, habilitarlo
                                nuevamente, eliminar productos, agregar categorías entre otros, e resumidas palabras
                                podrá hacer totalmente lo que se requiere de al mantenimiento de la tienda.
                                
                                ";
                            })->name("administrador");
                            
                            Route::get('vendedor', function () {
                                return "Este usuario solamente podrá realizar los reportes de los stop de los productos, responder
                                comentarios de dudas sobre los productos en los cuales algún cliente tenga duda, este
                                usuario podrá deshabilitar y habilitar productos, realizar reportes de los productos más
                                vendidos, ver los usuarios con mas compras en el mes y de esta manera poder solicitar al
                                administrador que se le de un descuento regalo por compras o regalos de productos a
                                lección, este usuario tendrá como mayor objetivo contestar preguntas de los clientes.
                                ";
                            })->name("vendedor");
                    });
                    
                });
            
        });



    Route::prefix('categories')->group(
        function(){

            Route::get('',"CategoriesController@index")->name('index');
            
            Route::get('accesorios',"CategoriesController@accesorios")->name('accesorios');
            
            Route::get('hogar',"CategoriesController@hogar")->name('hogar');
            
            Route::get('camaras',"CategoriesController@camaras")->name('camaras');
            
            Route::get('impresoras',"CategoriesController@impresoras")->name('impresoras');
        }
    );


    Route::prefix('maintenance')->group( 
        function(){

            Route::get('',"MaintenanceController@index")->name('indexmaintenance');
            Route::get('create',"MaintenanceController@create")->name('create');
            Route::post('',"MaintenanceController@store")->name('store');
            
            Route::prefix('{id}')->group(
                function(){
                    Route::get('',"MaintenanceController@show")->name('show');
                    Route::get('edit',"MaintenanceController@edit")->name('edit');
                    Route::put('',"MaintenanceController@update")->name('update');
                    Route::delete('',"MaintenanceController@delete")->name('delete');

                });
        });
?>

