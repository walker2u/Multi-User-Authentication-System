<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function agentDash(){
        return view('agent.agentDashboard');
    }
}
