<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;
use App\Http\Resources\DeliveryResource;

class DeliveryController extends Controller
{

    public function index()
    {
        // get all posts
        $delivery = Delivery::all();
        return DeliveryResource::collection($delivery);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create a post
        return Delivery::create($request->all());
    }

}
