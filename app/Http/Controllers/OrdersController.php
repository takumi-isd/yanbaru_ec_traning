<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $orders = $user->orders()->orderBy('order_date', 'desc')->paginate(15);
        return view('shopping.order_history', compact('user', 'orders'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $targetDate = today()->subMonth(3);
        $recentlyOrders = $user->orders()->where('order_date', '>', $targetDate)->orderBy('order_date', 'desc')->paginate(15);
        return view('shopping.search_order_history', compact('user', 'recentlyOrders'));
    }
}
