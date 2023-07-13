<?php

namespace App\Http\Controllers;

use App\Models\tb_senordatatodays;
use App\Models\tb_senordataweeks;
use App\Models\tb_senordatmonths;
use App\Models\tb_sensordatacounter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;
use Spatie\LaravelIgnition\Recorders\QueryRecorder\Query;


class tb_sensordatatodays extends Controller
{
    public function getRecentvalue()
    {
      $latest_today = tb_senordatatodays::latest()->first();
      $latest_weeks = tb_senordataweeks::latest()->first();
      $latest_months = tb_senordatmonths::latest()->first();
      

      $value_today = json_decode($latest_today)->sensordatatoday;
      $value_weeks = json_decode($latest_weeks)->sensordataweeks;
      $value_months = json_decode($latest_months)->sensordatamonth;
      
      
       return view('npc_dashboard',compact('value_today','value_weeks','value_months'));

    }
}