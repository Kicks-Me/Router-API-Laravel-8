<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ['Name'=>'Johe',
                'Surname' => 'Doe'    
    ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
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
        return[
                'Name' => 'Store method',
                'Payload' => $request->all()
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return [
                'Name'=> 'Show Method',
                'Product'=>'Samsung TV',
                'Price'=> '8,000,000',
                'id' => $id
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return [
            'Name' => 'Edit method',
            'id'=>$id
        ];
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
        return [
                'Name'=> 'Update Method',
                'Payload' => $request->all(),
                'id' => $id
        ];  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return [
            'Name'=> 'Delete Method',
            'Product' => 'Toyota',
            'Price'=> '20$',
            'id' =>$id
        ];
    }

    public function Find($keyword){
        return [
            'Name '=> 'Find me!',
            'key' => $keyword
        ];
    }
}
