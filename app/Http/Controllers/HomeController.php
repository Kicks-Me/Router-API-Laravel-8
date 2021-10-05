<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tblogin;

class HomeController extends Controller
{
    public function dummylist(){
        // $data = DB::table('tblogins')->get();//select*from tblogins
        // $data = DB::table('tblogins')->get(['id','userid','email','level']);//select id,userid,email,level from tblogins;

        // $data = DB::table('tblogins')->where('level','=',3)->get();
        // $data = DB::table('tblogins')->where('id','>',10)->get();

        // $data = DB::table('tblogins')->orderBy('level')->get(); //select*from tblogins orderby level asc;
        // $data = DB::table('tblogins')->orderByDESC('level')->get();

        // $rawdata = array(

        //     'userid' => '30',
        //     'email' => 'username30@gmail.com',
        //     'level' => '3'


        // );

        // $data = DB::table('tblogins')->insert($rawdata);



        // $rawdata = array(

        //     'userid' => 'ທົດສອບ30',
        //     'email' => 'username_30@gmail.com',
        //     'level' => '1'


        // );

        // $data = DB::table('tblogins')->where('id','=',21)->update($rawdata);

        // return $data;


        //Eloquent
        // $data = Tblogin::all();


        // return $data;
    }

    public function Eloquents(){
        //select*from tblogins
        // $data = Tblogin::all();
        // $data = Tblogin::where('id','>',6)->orderbydesc('id')->get(['id','email','level']);

            // $rawdata= array(
            //     'userid' => '100',
            //     'email' => 'user100@mail.com',
            //     'level' => '1'

            // );
            // // $data = Tblogin::create($rawdata);


            //  $rawdata= array(
            //     'userid' => 'User100',
            //     'email' => 'user_100@mail.com',
            //     'level' => '2'

            // );
            // $data = Tblogin::where('id','=',22)->update($rawdata);




            //SQL

        // $data = DB::insert('select*from tblogins');

        // $data = Tblogin::all(['id','userid','email','level']);

        $data = Tblogin::paginate(10);
        return view('myviews.myview',compact('data'));
    }
}
