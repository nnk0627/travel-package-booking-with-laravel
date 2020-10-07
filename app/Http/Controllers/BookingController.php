<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Post;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request){
        Booking::create($request->all());
        return redirect (action('Frontend\PageController@show', 
            $request->bookable_id, $request->post_title, $request->post_price));
        return redirect ('booking')->with('status', 'Booking Successfully!');

    }

    public function index(){
        $bookings = Booking::orderBy('id', 'asc')->paginate(6);
        return view('bookings.index', compact('bookings'));
    }

}
