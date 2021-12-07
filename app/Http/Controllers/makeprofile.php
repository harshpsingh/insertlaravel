<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;
use Illuminate\Support\Facades\DB;
class makeprofile extends Controller
{
    //
    function store(Request $request)
    {
      $profile = new profile();

        $profile->name = request('name');
        $profile->email = request('email');
        $profile->phone = request('phone');
        $profile->marks = request('marks');
        $profile->price = request('price');
        $profile->city = request('city');

        $profile->save();

        return redirect('/');
    }
    function show()
    {
      $name=$_POST['names'];
    echo $name;
    $record = profile::where('name','=',$name)->get();
    $em=$record['0']->email;
      echo '<h1>'.$em.'</h1>';
    $ph=$record['0']->phone;
    echo '<h1>'.$ph.'</h1>';









}
}
