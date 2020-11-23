<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Itemlist;

class ItemlistController extends Controller
{
    public function index()
	{
		$itemlists = Itemlist::all();
		$data = ['itemlists' => $itemlists];
		return view('itemlist.index', $data);
    }
}
