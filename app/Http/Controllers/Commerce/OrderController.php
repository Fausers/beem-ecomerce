<?php

namespace App\Http\Controllers\Commerce;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Sms\SMSController;
use App\Models\Com\Cart;
use App\Models\Com\Order;
use App\Models\Com\Category;
use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{

    public function onlineOrder()
    {
//        return view('com.checkout.beem.sandbox');


        $user = Auth::user();

        $cart = $user->cart;
        $data = view('com.checkout.dpo.endpoint',compact('cart'))->render();

        $response = Http::withBody(
            $data,'text/plain'
        )->post('https://secure.3gdirectpay.com/API/v6/');

        $xmlDoc = simplexml_load_string($response);

        $code = simplexml_load_string($response);
        if ($code === false) {
          echo "Failed loading XML: ";
          foreach(libxml_get_errors() as $error) {
            echo "<br>", $error->message;
          }
        }

        $code = simplexml_load_string($response);

        $order['name'] = $user->address->name;
        $order['phone'] = $user->address->phone;
        $order['address'] = $user->address->region;
        $order['email'] = $user->email;

        $order['cart_id'] = $cart->id;
        $order['coupon_id'] = $cart->coupon_id;
        $order['user_id'] = $user->id;
        $order['company_ref'] = 'ct-'.$cart->id;
        $order['price'] = $cart->total_price;
        $order['result_code'] = $code->Result;
        $order['result_explanation'] = $code->ResultExplanation;
        $order['trans_token'] = $code->TransToken;
        $order['trans_ref'] = $code->TransRef;

        $cd = $code->TransToken;

        return redirect('https://secure.3gdirectpay.com/payv2.php?ID='.$cd);
    }

    public function deliveryOrder()
    {
        $user = Auth::user();
        $cart = $user->cart;

        foreach ($cart->items as $item) {
            $shop_id[] = $item->product->shop->id;
        }

        $shops =  array_unique($shop_id);

        $order['name'] = $user->address->name;
        $order['phone'] = $user->address->phone;
        $order['address'] = $user->address->region;
        $order['email'] = $user->email;
        $order['coupon_id'] = $cart->coupon_id;

        $order['cart_id'] = $cart->id;
        $order['user_id'] = $user->id;
        $order['company_ref'] = 'ct-'.$cart->id;
        $order['price'] = $cart->total_price;

        $order = Order::create($order);

//        To Customer
            $message = 'Oda yako inafanyiwa kazi. Muhudumu wetu wa mauzo atakupigia hivi punde. Asante na Karibu tena '.url('/');
            $phone = str_replace('+','',$order->phone);

            $sms = new SMSController;

        $sms->beemSend($order->id,$phone,$message);

//        To Shop
            $message = 'New Order Alert. \n Phone '.$order->phone.' \n Name: '.$order->name.' \n Amount: '.$order->price;
            $phone = '255785008133';

            $sms = new SMSController;

        $sms->beemSend($order->id,$phone,$message);

        $order->shops()->attach($shops);

        $cart->destroy($cart->id);

        return view('com.checkout.order_complete');
    }


    public function beemPay()
    {
        $user = Auth::user();

        $cart = $user->cart;

        foreach ($cart->items as $item) {
            $shop_id[] = $item->product->shop->id;
        }

        $shops =  array_unique($shop_id);

        $order['name'] = $user->address->name;
        $order['phone'] = $user->address->phone;
        $order['address'] = $user->address->region;
        $order['email'] = $user->email;
        $order['coupon_id'] = $cart->coupon_id;

        $order['cart_id'] = $cart->id;
        $order['user_id'] = $user->id;
        $order['company_ref'] = 'ct-'.$cart->id;
        $order['price'] = $cart->total_price;

//        $order = Order::create($order);
//        $order->shops()->attach($shops);

        //        To Customer
            $message = 'Oda yako inafanyiwa kazi. Muhudumu wetu wa mauzo atakupigia hivi punde. Asante na Karibu tena '.url('/');
            $phone = str_replace('+','',$order['phone']);

            $sms = new SMSController;

         $sms->beemSend($order->id,$phone,$message);

//        To Shop
            $message = 'New Order Alert. Phone'.$order['phone'].' Name:'.$order['name'].' Amount:'.$order['price'];
            $phone = '255785008133';

            $sms = new SMSController;

         $sms->beemSend($order->id,$phone,$message);



        $username='cc9a9b2765b9707c';
        $password = 'Y2U4MTMxOTVhYWU2NTViNGIwNjI0NTc4YzQyMjk3MDRhY2Q4ZDRkMWIwMGRiZmZmMjdmNTA3NjE2ZGQ3ODg3Yw==';

        $Url ='https://checkout.beem.africa/v1/checkout';



         $reference_number='LUXE-'.$cart->id;
         $amount = $order['price'];
         $mobile = str_replace('+','',$order['phone']);
         $transaction_id = $this->gen_uuid();
         $sendSource = 2;
         $body = array('amount'=>$amount,'transaction_id'=>$transaction_id,'reference_number'=>$reference_number,'mobile'=>$mobile,'sendSource'=>$sendSource);

//         return implode("|",$body);
         $bdy = json_encode($body);

          $uuul = $Url.'?'.http_build_query($body);
        // Setup cURL
        $ch = curl_init($uuul);
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//        curl_setopt($ch, CURLOPT_URL, $Url.http_build_query($body) . "\n");
        curl_setopt_array($ch, array(
            CURLOPT_HTTPGET => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Authorization:Basic ' . base64_encode("$username:$password"),
                'Content-Type: application/json'
            ),
//            CURLOPT_POSTFIELDS => json_encode($body)
        ));


        // Send the request
        $response = curl_exec($ch);

        // Check for errors
        if($response === FALSE){
                echo $response;

            die(curl_error($ch));
        }
        $response = json_decode($response,true);

        return redirect($response['src']);
        $cart->destroy($cart->id);
    }

    function gen_uuid() {
        return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

            // 16 bits for "time_mid"
            mt_rand( 0, 0xffff ),

            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand( 0, 0x0fff ) | 0x4000,

            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand( 0, 0x3fff ) | 0x8000,

            // 48 bits for "node"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
        );
    }

    public function iframe()
    {
        $code = $this->gen_uuid();
        return view('com.checkout.beem.sandbox',compact('code'));
    }

    public function app()
    {
        $username='cc9a9b2765b9707c';
        $password = 'Y2U4MTMxOTVhYWU2NTViNGIwNjI0NTc4YzQyMjk3MDRhY2Q4ZDRkMWIwMGRiZmZmMjdmNTA3NjE2ZGQ3ODg3Yw==';


        $Url ='https://apitopup.beem.africa/v1/credit-balance?app_name=BPAY';

        // Setup cURL
        $ch = curl_init($Url);
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt_array($ch, array(
            CURLOPT_HTTPGET => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Authorization:Basic ' . base64_encode("$username:$password"),
                'Content-Type: application/json'
            ),
        ));

        // Send the request
        $response = curl_exec($ch);

        // Check for errors
        if($response === FALSE){
                echo $response;

            die(curl_error($ch));
        }
        var_dump($response);
    }

    public function response(Request $request)
    {
        return response()->file('cart_products.json');

        $fp = fopen('txt/dataa.txt', 'w');
        fwrite($fp, $request);
        fclose($fp);

        $res = new Response;

        $res->response  = $request;
        $res->save();




        return $request;
    }

    public function categs()
    {
        $categories = Category::get();

        // $foreach($categories as $cat){
        //     $cc = $cat;
        //     $cc->count = 5;
        //     $cc->isSelected = 5;
        //     $cc->count = 5;
        // }

        return $categories;
    }

    public function otp()
    {
        $api_key='481330daa230e0eb';
        $secret_key = 'NmRjNGExMWMxNjY4ZDYxNmEyYTk3YjA2NDYxOTYxZDMxZjg0NjNhNmQyOGU5ZGY0YmI1YzdjNTk1YjFmNjhlMA==';

        // The data to send to the API
        $postData = array(
            'appId' => '147',
            'msisdn' => '255785008133',
        );

        $Url ='https://apiotp.beem.africa/v1/request';

        // Setup cURL
        $ch = curl_init($Url);
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Authorization:Basic ' . base64_encode("$api_key:$secret_key"),
                'Content-Type: application/json'

            ),
            CURLOPT_POSTFIELDS => json_encode($postData)
        ));

        // Send the request
        $response = curl_exec($ch);

        // Check for errors
        if($response === FALSE){
                echo $response;

            die(curl_error($ch));
        }
        var_dump($response);
    }

    public function pinVerify(Request $request)
    {
        $api_key='481330daa230e0eb';
        $secret_key = 'NmRjNGExMWMxNjY4ZDYxNmEyYTk3YjA2NDYxOTYxZDMxZjg0NjNhNmQyOGU5ZGY0YmI1YzdjNTk1YjFmNjhlMA==';

        $postData = array(
            'pinId' => '537a9b84-97c4-4048-8329-e06868831b38',
            'pin' => '670230',
        );

        $Url ='https://apiotp.beem.africa/v1/verify';

        // Setup cURL
        $ch = curl_init($Url);
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Authorization:Basic ' . base64_encode("$api_key:$secret_key"),
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => json_encode($postData)
        ));

        // Send the request
        $response = curl_exec($ch);

        // Check for errors
        if($response === FALSE){
                echo $response;

            die(curl_error($ch));
        }
        var_dump($response);
    }
}
