<?php
namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use App\User;
use Stripe\Error\Card;
use Stripe;


class MoneySetupController extends Controller
{
    
public function postPaymentStripe(Request $request)
{
        try {
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        
            $customer = Stripe\Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ));
        
            $charge = Stripe\Charge::create(array(
                'customer' => $customer->id,
                'amount' => 2000,
                'currency' => 'sar'
            ));
        
            Session::flash('success', 'Payment Successful!');
            return redirect()->back();
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }

    }
}
