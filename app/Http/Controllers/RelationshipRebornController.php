<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class RelationshipRebornController extends Controller
{
    public function ujiHas(){
    	return dosen::has('Dosen_matakuliah')->get();
    }
    public function ujigakpunya(){
    	return dosen::doesntHave('Dosen_matakuliah')->get();
    }
}
