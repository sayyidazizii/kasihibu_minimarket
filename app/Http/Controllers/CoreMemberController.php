<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CoreMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoreMemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = CoreMember::select('member_name', 'member_mandatory_savings', 'member_account_receivable_amount', 'member_no', 'division_name')
        ->where('data_state',0)
        ->where('company_id', Auth::user()->company_id)
        ->get();

        return view('content.CoreMember.ListCoreMember', compact('data'));
    }
}
