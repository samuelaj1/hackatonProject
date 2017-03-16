<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ServiceController extends Controller
{
    // ------------------ GET Http Request Functions -------------------//

    public function dashboard(){
    	return view('app.dashboard');
    }

    public function loanDisbursement(){
    	return view('app.services.loan-disbursement');
    }

    public function loanRepayment(){
    	return view('app.services.loan-repayment');
    }

    public function depositRequest(){
    	return view('app.services.deposit-request');
    }

    public function depositCollection(){
    	return view('app.services.deposit-collection');
    }

    public function depositPayment(){
    	return view('app.services.deposit-payment');
    }

    public function cashWithdrawal(){
        return view('app.services.cash-withdrawal');
    }

    public function loanPrepayment(){
        return view('app.services.loan-prepayment');
    }

    public function history(){
        return view('app.services.history');
    }
    public function CreateClient(){
        return view('app.client.CreateClient');
    }

    public function createLoan(){
        return view('app.products.Loans');
    }


    //------the group functions here-------------------//
    public function createGroup(){
        return view('app.groups.create-group');
    }

    public function groups(){
        return view('app.groups.groups');
    }
    


    // -------------POST http Request Functions ---------------------//

}
