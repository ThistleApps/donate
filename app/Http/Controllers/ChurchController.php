<?php

namespace App\Http\Controllers;

use App\Church;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Carbon\Carbon;

class ChurchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $churches = Church::all();

        return view('churches.churchlist', compact('churches'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //
   /* public function churchlist()
    {
        $churches = Church::all();

        return view('/churches/churchlist', compact('churches'));
    }*/


    public function show($id)
    {
        //
        $churches = Church::findOrFail($id);

        return view('churches.churchprofile', compact('churches'));
    }


    /*public function donate($id)
    {
        //
        $churches = Church::findOrFail($id);

        $x_amount = ['1.99'];

        return view('churches.churchpay', compact('churches', 'x_amount'));
    }*/

    public function PostFDMSdata($id)
    {
            $UTC = Carbon::now("UTC");
            $datetime = strtotime($UTC);
            $x_login = "HCO-KW-EN-279";
            $transaction_key = "ioSB4gSXyyYiaS23BXc1";
            $x_fp_sequence = rand(1000, 100000) + 123456;
            $hmac_data = $x_login . "^" . $x_fp_sequence . "^" . $datetime . "^" . "5.00" . "^" . "USD";
            $x_fp_hash = hash_hmac('MD5', $hmac_data, $transaction_key);

            $client= new Client(['cookies' => true]);
            $response = $client ->post(
                'https://demo.globalgatewaye4.firstdata.com/pay',
                array(
                    //'allow_redirects' => false,
                    'form_params' => array(
                        'x_login' => $x_login,
                        'transaction_key' => $transaction_key,
                        'x_amount' => '5.00',
                        'x_fp_sequence' => $x_fp_sequence,
                        'x_fp_timestamp' => $datetime,
                        'x_fp_hash' => $x_fp_hash,
                        'x_currency_code' => 'USD',
                        'x_recurring_billing_amount' => '9.02',
                        'x_recurring_billing' => 'TRUE',
                        'x_recurring_billing_id' => 'MB-KW-EN-25-7722',
                        'x_recurring_billing_start_date' => '2018-09-08',
                        'x_recurring_billing_end_date' => '2035-01-31',
                        'x_show_form' => 'PAYMENT_FORM'
                    )

                )

                );



            var_dump($response->getBody()->__toString());

    }


    public function hash()
    {
        //
        $datetime = Carbon::now("UTC");
        $transaction_key = "ioSB4gSXyyYiaS23BXc1";
        $hmac_data = "HCO-KW-EN-279" . "^" . 195701 . "^" . $datetime . "^" . "5.00" . "^" . "USD";
        $x_fp_hash = hash_hmac('MD5', $hmac_data, $transaction_key);
        //$datetime = new \DateTime(null, new \DateTimeZone("UTC"));
        //        return $x_fp_hash;
        return $datetime;

        //"1536452873"

    }

}
