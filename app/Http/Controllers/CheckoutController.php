<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use  Gloudemans\Shoppingcart\Facades\Cart;

use App\OrderDetail;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        return view('shop.checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        
        //dd(Auth::user()->id);
        $orderid = Order::create([
            //Penambahan
            'id' => $request->id,
            'ordersidencytpe' => substr(bcrypt(1),13,17),
            'usersid' => Auth::user()->id,
            'ordfullname' => $request->ordfullname,
            'ordmail' => $request->ordmail,
            'ordnohp' => $request->ordnohp,
            'ordalamat' => $request->ordalamat,
            'ordkota' =>$request->ordkota,
            'ordprovinsi' => $request->ordprovinsi,
            'ordbyr' => Cart::subtotal(),
            'ordstatus' => $request->ordstatus,
            'ordmethod' => $request->ordmethod,

        ]);
            //penambahan variabel untuk mendapatkan id order
        $idorder = $orderid->id;

        foreach( Cart::content() as $item)
        {
            // ordersid & prdid = diambil dari id produk seharusnya 
            // mengambi dari order

           OrderDetail::create([
                'ordersid' =>$idorder,
                'prdid' =>$item->id,
                'qty' =>$item->qty,
                'warna' =>$item->options->warna,
                'size' => $item->options->size
            ]);
        }

        cart::destroy();

        return redirect('thanks')->with('sukses','terimakasih');

    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
