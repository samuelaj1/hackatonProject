<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* ------------ Get Request For Presenter / StarterController ------------------*/

Route::get('/login',function(){
	return view('app.login');
});
Route::get('/startscreen',function(){
	return view('app.startscreen');
});
Route::get('/history',function(){
	return view('app.history');
});
Route::get('/createAccount',function(){
	return view('app.createAccount');
});
Route::get('/clientdetails',function(){
	return view('app/client/clientDetails');
});
Route::get('/product',function(){
	return view('app/products/loans');
});
Route::get('/clients',function(){
	return view('app/client/clients');
});
Route::get('/register/{code}', 'StarterController@registerGET')->where('code','(.*)');

/* ---------------- POST Requests For Presenter / StarterController -------------------*/
Route::post('/register', 'StarterController@registerPOST');
Route::post('/login', 'StarterController@loginPOST');



/* ------------ Get Request For Dashboard / ServiceController ------------------*/

Route::get('/dashboard','ServiceController@dashboard');

Route::get('/loan-disbursement','ServiceController@loanDisbursement');
Route::get('/loan-repayment','ServiceController@loanRepayment');

Route::get('/deposit-request','ServiceController@depositRequest');
Route::get('/deposit-payment','ServiceController@depositPayment');
Route::get('/deposit-collection','ServiceController@depositCollection');
Route::get('/cash-withdrawal','ServiceController@cashWithdrawal');
Route::get('/history','ServiceController@history');
Route::get('/loan-prepayment','ServiceController@loanPrepayment');
Route::get('/createclient','ServiceController@CreateClient');
	
	//------Loan ------//
Route::get('/create-loan','ServiceController@createLoan');
/* ---------------- POST Requests For Presenter / StarterController -------------------*/

// code here

//-----------Groups---------------//
Route::get('/create-group','ServiceController@createGroup');
Route::get('/groups','ServiceController@groups');




/*-------------- Testing App --------------------------*/

Route::get('/test', function(){
	//return App\Classes\CustomCrypt::encrypt('stambic');

	if(App\Classes\CustomClass::checkInternet()){
		return "Internet Available";
	}
	
	return "no internet";
});