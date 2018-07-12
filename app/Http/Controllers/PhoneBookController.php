<?php

namespace App\Http\Controllers;

use App\PhoneBook;
use Illuminate\Http\Request;
use App\Http\Requests\PhoneBookRequest;

class PhoneBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('phonebook');
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


    public function getData()
    {
        return PhoneBook::orderBy('name','DESC')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhoneBookRequest $request)
    {
        $phoneBook = new PhoneBook();
        $phoneBook->name = $request->name;
        $phoneBook->phone = $request->phone;
        $phoneBook->email = $request->email;
        $phoneBook->save();
        return $phoneBook;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function show(PhoneBook $phoneBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function edit(PhoneBook $phoneBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function update(PhoneBookRequest $request)
    {


     // return $request->all();
         $phoneBook =  PhoneBook::find($request->id);

       
        $phoneBook->name = $request->name;
        $phoneBook->phone = $request->phone;
        $phoneBook->email = $request->email;
        $phoneBook->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhoneBook $phoneBook)
    {
        PhoneBook::where('id',$phoneBook->id)->delete();
    }
}
