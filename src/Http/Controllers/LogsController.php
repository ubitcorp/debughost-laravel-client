<?php

namespace Ubitcorp\DebugHost\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LogsController extends Controller
{
    public function index()
    {
        return view('debughost::logs');
    }

    public function post(Request $request)
    { 
        $response = Http::withHeaders([
            'Api-Key' => $request['api-key'],
            'Api-Secret' => $request['api-secret']
        ])->post('https://dh.kuzen.net/api/logs', [
            'message' => $request['message'],
            'detail' => $request['detail'],
            'from' => $request['from'],
            'class' => $request['class'],
            'status_code' => $request['status-code']
        ]);
        
          
        if($response->successful() && $request['message'] && $request['status-code'])
            return $response;
            
        return "You enter invalid Api Key/Api Secret or You don't enter the required fields!";

    }
}
