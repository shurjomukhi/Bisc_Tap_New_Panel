<?php

namespace App\Modules\TAP\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

use App\Modules\LESSIONSPLAN\Models\LessionPlan;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    
    public function index()
    {
      
        $data['content'] = '';
        return view('TAP::pages.tap_panel',['view'=>__FUNCTION__,'data'=>$data,'page_title'=>'Dashboard']);
    }

    public function transaction()
    {
      
        $data['content'] = '';
        return view('TAP::pages.tap_finance',['view'=>__FUNCTION__,'data'=>$data,'page_title'=>'Dashboard']);
    }
}
