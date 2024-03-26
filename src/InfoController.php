<?php

namespace Sarahazeri\Server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function cpu(){
        $result='100%';
        return view('server::cpu',compact('result'));
    }
}
