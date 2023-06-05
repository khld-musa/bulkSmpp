<?php

namespace App\Http\Controllers;
use LaravelSmpp;

class SmsController extends Controller
{
    public function send(SmppServiceInterface $smpp)
    {
        // One number
        $this->smpp->sendOne(1234567890, 'Hi, this SMS was send via SMPP protocol');
        
    }
}