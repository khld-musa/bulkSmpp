<?php

namespace App\Http\Controllers;
use LaravelSmpp\SmppServiceInterface;

class SmsController extends Controller
{

            protected $smpp;
        
            public function __construct(SmppServiceInterface $smpp)
            {
                $this->smpp = $smpp;
            }
        
            public function send()
            {
                $this->smpp->sendOne('1234567890', 'This is an SMS message');
            }
        }
        
