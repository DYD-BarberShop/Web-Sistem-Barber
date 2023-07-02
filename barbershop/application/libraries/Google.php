<?php
if (!defined('BASEPATH')) exit('No direct script access allowed'); 

require_once APPPATH."/third_party/google-api/vendor/autoload.php";

class Google
{
    private $CI;

    function __construct()
    {
        $CI =& get_instance();
        $CI->config->load('google');
        
    }

    function verifyToken($idToken)
    {
        $client = new Google_Client(['client_id' => config_item("client_id")]); 
        
        $payload = $client->verifyIdToken($idToken);
        if ($payload) {
            
            //$userid = $payload['sub'];
            return $payload;

        } else {
            return false;
        }
    }


}