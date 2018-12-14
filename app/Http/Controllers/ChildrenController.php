<?php namespace App\Http\Controllers;

use App\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChildrenController extends Controller
{
    public function getChildren()
    {
        return Child::where('childminder_id', Auth::id())->get();
    }
}
