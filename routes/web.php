<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DebtorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DebtorOrderController;
use App\Http\Controllers\DebtorsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\PromisePay;
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

Auth::routes();

Route::get('hello',function()
{
 $arr = array('abc' => 123,'test'=>210 );
return json_encode($arr);
});

Route::get('/home', [DebtorController::class, 'index'])->name('home');
////debtor///////////start//////////////
Route::prefix('debtor')->group(function () {

    Route::get('/', [DebtorController::class, 'mainDebtorIndex'])->name('debtor.index');

    // debtor ptp
    Route::post('debit_order/{debtor_id}', [DebtorOrderController::class, 'store'])->name('debit.order.store');

    Route::get('/detail/{id}', [DebtorController::class, 'getDetail'])->name('getDetail');
    Route::get('/{id}', [DebtorController::class, 'show_debtor'])->name('debtor.show.debtor');

    Route::post('/detail/yebo-pay-form', [ DebtorController::class, 'yebo_pay_form' ]);

});

Route::resource('/clients',ClientsController::class);
//////debtors//////
Route::resource('/debtors',DebtorsController::class);
Route::post('/debtors/csvUpload',  [DebtorsController::class, 'csvUpload'])->name("debtors.csv.upload");
//////////end ptp////////////////////

Route::prefix('ptp')->group(function () {

    Route::get('/', [PromisePay::class, 'index'])->name('ptp.index');

    });
    //////////end ptp////////////////////

    Route::prefix('rtp')->group(function () {

        Route::get('/', [PromisePay::class, 'index'])->name('rtp.index');

        });
        //////////end ptp////////////////////

        Route::prefix('rpc')->group(function () {

            Route::get('/', [PromisePay::class, 'index'])->name('rpc.index');

            });
            //////////end ptp////////////////////

            Route::prefix('billingqueries')->group(function () {

                Route::get('/', [PromisePay::class, 'index'])->name('billingqueries.index');

                });
                //////////end ptp////////////////////

                Route::prefix('aod')->group(function () {

                    Route::get('/', [PromisePay::class, 'index'])->name('aod.index');

                    });
                    //////////end ptp////////////////////

                    Route::prefix('index')->group(function () {

                        Route::get('/', [PromisePay::class, 'index'])->name('indexview.index');

                        });
                        //////////end ptp////////////////////

                        Route::prefix('reminder')->group(function () {

                            Route::get('/', [PromisePay::class, 'index'])->name('reminder.index');

                            });
                            //////////end bucket////////////////////

                            Route::prefix('bucket')->group(function () {

                                Route::get('/', [PromisePay::class, 'index'])->name('bucket.index');

                                });
                                //////////end bucket////////////////////



