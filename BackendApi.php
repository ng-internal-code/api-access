<?php

class BackendApi {

    private $ch;  
    private $headers = array();

    public function __construct($url){
        $this->ch = curl_init($url);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
    }

    public function token($str){
        $this->headers[] = 'Authorization: Bearer '.$str;
    }

    public function send(){
        if( $this->headers ){
            curl_setopt($this->ch, CURLOPT_HTTPHEADER, $this->headers );
        }
        return curl_exec($this->ch);
    }

}
