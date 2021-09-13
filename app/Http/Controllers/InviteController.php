<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\InviteModel;

class InviteController extends Controller
{
    public $invite;
    public function __construct()
    {
        $this->invite = new InviteModel();
    }

    public function view()
    {
        return view('post.invite', ['invite' => $this->invite->getAllInvites()]);
    }
}
