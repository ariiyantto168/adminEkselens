<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Orders;
use App\Models\OrderDetails;

class OrdersController extends Controller
{
    public function index(Orders $orders)
    {
        $orderDetails = Orders::with([
                    'users',
                    'order_details'
                   ])
            ->where('idorders',$orders->idorders)
            ->first();
        $contents = [
            'orders' => $orderDetails,
            'users' => $orders
        ];

        $pagecontent = view('contents.orders.status', $contents);

        //masterpage
        $pagemain = array(
            'title' => 'Orders Status',
            'menu' => 'orders',
            'submenu' => 'status',
            'pagecontent' => $pagecontent,
        );

        return view('contents.masterpage', $pagemain);
    }

    public function report(Orders $orders)
    {
        $orderDetails = Orders::with([
            'users',
            'order_details'
        ])
        ->where('idorders',$orders->idorders)
        ->first();
        $contents = [
            'orders' => $orderDetails,
            'users' => $orders
        ];

        $pagecontent = view('contents.payments.report', $contents);

        //masterpage
        $pagemain = array(
            'title' => 'report',
            'menu' => 'orders',
            'submenu' => 'report',
            'pagecontent' => $pagecontent,
        );

        return view('contents.masterpage', $pagemain);
    }
}
