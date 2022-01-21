<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReadOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //jika ingin mengambil data berdasarkan hari ini saja maka tinggal diganti subday(1)
        $order = Orders::where('created_at','>=', Carbon::now()->subdays(2))->paginate(10);

        return view('readOrder.index', compact('order'));
    }
}
