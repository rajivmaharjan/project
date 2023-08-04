<?php

namespace App\Http\Controllers;

use App\Models\distribution;
use App\Models\validation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class NPCcontroller extends Controller
{
     public function npcpage()
    {
        return view('NPC\npcpage');
    }
    public function npc_dashboard()
    {
        return view('NPC/npc_dashboard');
    }
    
    public function npc_preparation()
    {
        return view('NPC/npc_preparation');
    }
    
    public function npc_distributed()
    {
        $distributed_data = distribution::all();
        return view('NPC/npc_distributed',['distributed_data'=>$distributed_data]);
       
    }
    public function npc_validate()
    {
        $validation_data = validation::all();
        return view('NPC/npc_validate',['validation_data'=>$validation_data]);
    }
    public function npc_permissions()
    {
        return view('NPC/npc_permissions');
    }
    public function npc_profile()
    {
        return view('NPC/npc_profile');
    }
    public function npc_notificaion()
    {
        return view('NPC/npc_notification');
    }
    public function npc_setting()
    {
        return view('NPC/npc_setting');
    }

    public function logout()
    {

       return view("auth.logout");

    }


}