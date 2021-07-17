<?php

namespace App\Http\Controllers\Sms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SMSController extends Controller
{


    public function beemSend($id,$phone,$sms)
    {
        //        return '1';
        $api_key='07957caba2fe012f';
        $secret_key = 'ODdjZGFhZjUyOWIwNjE0MTYwNWMzNTQ0ZDQ2MDZjMmYxZjhmMDA4YWU4YmM4NDY0ZTI5MGI2NmJmYjY2ZWM0Ng==';
        // The data to send to the API
        $postData = array(
            'source_addr' => 'Luxtech',
            'encoding'=>0,
            'schedule_time' => '',
            'message' => $sms,
            'recipients' => [
                array('recipient_id' => $id,'dest_addr'=>$phone)
            ]
        );
        //.... Api url
        $Url ='https://apisms.beem.africa/v1/send';

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
        return $response;
    }
}
