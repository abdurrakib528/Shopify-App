<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return $this->shop->api()->rest('GET','/admin/products');

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

        return $this->shop->api()->rest('POST','/admin/products',$request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->shop->api()->rest('GET',"/admin/products/{$id}");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return $this->shop->api()->rest('POST',"/admin/products/{$id}");

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


        return $this->shop->api()->rest('PUT',"/admin/products/{$id}",$request->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->shop->api()->rest('DELETE',"/admin/products/{$id}");
    }
    private $shop;
    public function __construct()
    {
        $this->shop = User::latest()->first();
    }
}
