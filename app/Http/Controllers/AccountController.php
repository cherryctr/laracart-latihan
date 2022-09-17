<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;
use Auth;


class AccountController extends Controller
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
        $data            =  [];
        $data['no']      = 1;
        $data['orders']  = Order::where('usersid',Auth::user()->id)->get();
        return view('shop.user.dasboard',$data);

    }



    public function index_profile()
    {
        $data            =  [];
        $data['no']      = 1;
        $data['orders']  = Order::where('usersid',Auth::user()->id)->get();
        return view('shop.account.dash-profile',$data);

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

    public function confirm()
    {
        //
        return view('shop.user.confirm');
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
        $data            = [];
        $data['user']    =Order::where('id',$id)->get();
        $data ['orders'] = OrderDetail::join('products','products.id','=','order_details.prdid')->where('order_details.ordersid',$id)->get();
       
        //dd($data['orders']);
        
    
        // Mengambil data sama berdasarkan id dan prdid 
        return view('shop.invoices',$data);
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
