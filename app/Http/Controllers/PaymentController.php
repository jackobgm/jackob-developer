<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Converter\FormatConverter;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Rest\ApiContext;
use Symfony\Component\Console\Input\Input;


class PaymentController extends Controller
{

    public function __construct()
    {

    }


    public function payWithPayPal(): \Illuminate\Http\RedirectResponse
    {
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AWzkWV0-krDrRQAW17dsGSL_xgrfyHffxVDY5vR2yW-HCe5uuVy69l_AXGYs2XyeSLm8RMo2DtYzXziy',     // ClientID
                'ECrGehOaPenmgaWs7Rj8oLZ5X9z1lgi9xInZsxx4b1oR4ZNbH1K5HfzQ5_RSfqbxT_uyqn-VEZwoFTe0'      // ClientSecret
            )
        );

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new Amount();
        $amount->setTotal('75.00');
        $amount->setCurrency('USD');

        $transaction = new Transaction();
        $transaction->setAmount($amount);
        //$transaction->description('Plan Basic');

        $callbackUrl = url('paypal/status');
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($callbackUrl)
            ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($apiContext);
            //echo $payment;

            return redirect()->away($payment->getApprovalLink());

        }   catch (PayPalConnectionException $ex) {
            //REALLY HELPFUL FOR DEBUGGING
            //echo $ex->getData();
        }
    }

    public function payWithPayPal1(): \Illuminate\Http\RedirectResponse
    {
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AWzkWV0-krDrRQAW17dsGSL_xgrfyHffxVDY5vR2yW-HCe5uuVy69l_AXGYs2XyeSLm8RMo2DtYzXziy',     // ClientID
                'ECrGehOaPenmgaWs7Rj8oLZ5X9z1lgi9xInZsxx4b1oR4ZNbH1K5HfzQ5_RSfqbxT_uyqn-VEZwoFTe0'      // ClientSecret
            )
        );

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new Amount();
        $amount->setTotal('150.00');
        $amount->setCurrency('USD');

        $transaction = new Transaction();
        $transaction->setAmount($amount);
        //$transaction->description('Plan Standard');

        $callbackUrl = url('paypal/status');
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($callbackUrl)
            ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($apiContext);
            //echo $payment;

            return redirect()->away($payment->getApprovalLink());

        }   catch (PayPalConnectionException $ex) {
            //REALLY HELPFUL FOR DEBUGGING
            //echo $ex->getData();
        }
    }

    public function payWithPayPal2(): \Illuminate\Http\RedirectResponse
    {
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AWzkWV0-krDrRQAW17dsGSL_xgrfyHffxVDY5vR2yW-HCe5uuVy69l_AXGYs2XyeSLm8RMo2DtYzXziy',     // ClientID
                'ECrGehOaPenmgaWs7Rj8oLZ5X9z1lgi9xInZsxx4b1oR4ZNbH1K5HfzQ5_RSfqbxT_uyqn-VEZwoFTe0'      // ClientSecret
            )
        );

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new Amount();
        $amount->setTotal('350.00');
        $amount->setCurrency('USD');

        $transaction = new Transaction();
        $transaction->setAmount($amount);
        //$transaction->description('Plan Standard');

        $callbackUrl = url('paypal/status');
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($callbackUrl)
            ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($apiContext);
            //echo $payment;

            return redirect()->away($payment->getApprovalLink());

        }   catch (PayPalConnectionException $ex) {
            //REALLY HELPFUL FOR DEBUGGING
            //echo $ex->getData();
        }
    }

    public function payWithPayPal3(): \Illuminate\Http\RedirectResponse
    {
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AWzkWV0-krDrRQAW17dsGSL_xgrfyHffxVDY5vR2yW-HCe5uuVy69l_AXGYs2XyeSLm8RMo2DtYzXziy',     // ClientID
                'ECrGehOaPenmgaWs7Rj8oLZ5X9z1lgi9xInZsxx4b1oR4ZNbH1K5HfzQ5_RSfqbxT_uyqn-VEZwoFTe0'      // ClientSecret
            )
        );

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new Amount();
        $amount->setTotal('700.00');
        $amount->setCurrency('USD');

        $transaction = new Transaction();
        $transaction->setAmount($amount);
        //$transaction->description('Plan Standard');

        $callbackUrl = url('paypal/status');
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($callbackUrl)
            ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($apiContext);
            //echo $payment;

            return redirect()->away($payment->getApprovalLink());

        }   catch (PayPalConnectionException $ex) {
            //REALLY HELPFUL FOR DEBUGGING
            //echo $ex->getData();
        }
    }
    public function payWithPayPal4($total): \Illuminate\Http\RedirectResponse
    {

        //return dd($total);

        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AWzkWV0-krDrRQAW17dsGSL_xgrfyHffxVDY5vR2yW-HCe5uuVy69l_AXGYs2XyeSLm8RMo2DtYzXziy',     // ClientID
                'ECrGehOaPenmgaWs7Rj8oLZ5X9z1lgi9xInZsxx4b1oR4ZNbH1K5HfzQ5_RSfqbxT_uyqn-VEZwoFTe0'      // ClientSecret
            )
        );

        //return dd($total);
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        //$total = $request->request->all();
        //$tuto = $total;
        //return dd($tuto);
        $amount = new Amount();
        $amount->setTotal($total);
        $amount->setCurrency('USD');

        $transaction = new Transaction();
        $transaction->setAmount($amount);
        //$transaction->description($cont);

        $callbackUrl = url('paypal/status');
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($callbackUrl)
            ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($apiContext);
            //echo $payment;

            return redirect()->away($payment->getApprovalLink());

        }   catch (PayPalConnectionException $ex) {
            //REALLY HELPFUL FOR DEBUGGING
            //echo $ex->getData();
        }
    }
    public function payPalStatus(Request $request)
    {
        $paymentId = $request->input('paymentId');
        $payerId = $request->input('PayerID');
        $token = $request->input('token');

        if (!$paymentId || !$payerId || !$token)
        {
            $status = 'Could not proceed with payment through PayPal';
            return redirect('/paypal/failed')->with(compact("status"));
        }
        else {
            return redirect('/');

        }
    }

}
