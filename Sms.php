<?php

namespace rbt\sms;

/**
 * This is just an example.
 */
class SMS 
{
	private $APIKEY;
	private $SENDER_NAME;
	private $SMS_URL;
	
	public static function SmsSend($phone_number, $message)
	{
		$postvars = [
                'method' => 'sms',
                'api_key' => Yii::$app->sms->APIKEY,
                'to'   => $phone_number,
                'sender' => Yii::$app->sms->SENDER_NAME,
                'message' => $message,
                'format' => 'xml',
                'unicode' => 1
        ];
        $url= Yii::$app->sms->SMS_URL;
        // create a new cURL resource
        $ch = curl_init();
        // set URL and other appropriate options
        curl_setopt($ch, CURLOPT_URL,$url);
        //for hide response message
        curl_setopt($ch,CURLOPT_POST, 1);                //0 for a get request
        curl_setopt($ch,CURLOPT_POSTFIELDS,$postvars);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // grab URL and pass it to the browser
        $result = curl_exec($ch);
        // close cURL resource, and free up system resources
        //curl_close($ch);
        if($result === FALSE)
        {
        die("Curl failed: " . curl_error($ch)); 
        } 
    	curl_close($ch);
    	return true;
	}
}


