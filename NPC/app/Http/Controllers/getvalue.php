<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tb_sensordatahours;
use Illuminate\Http\Request;
use App\Models\tb_senordatatodays;
use App\Models\tb_senordataweeks;
use App\Models\tb_senordatmonths;

class getvalue extends Controller
{
    public function getRecentvalue()
    {
      $latest_today = tb_sensordatahours::latest()->first();
      $latest_day = tb_senordatatodays::latest()->first();
      $latest_month = tb_senordatmonths::latest()->first();


      $value_today = json_decode($latest_today)->sensordatahour;
      $value_day= json_decode($latest_day)->sensordatatoday;
      $value_month = json_decode($latest_month)->sensordatamonth;
    return view('list',compact('value_today','value_day','value_month'));
    }
}