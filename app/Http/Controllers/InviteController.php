<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\InviteModel;

class InviteController extends Controller
{
    public $invite;
    public $show;
    public function __construct()
    {
        $this->show = false;
        $this->invite = new InviteModel();
    }

    public function index(){
        return view('index', ['invite' => $this->invite->getAllInvites(), 'show' => $this->show]);
    }

    public function invite(){

        $this->show = true;
    }
}
