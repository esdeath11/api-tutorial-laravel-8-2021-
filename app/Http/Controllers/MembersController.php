<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;


class MembersController extends Controller
{
    //get all tutorial
    function list($id = null){ 
        return $id?Member::find($id):Member::all();
    }
    //post (create/login/add/register)
    function add(Request $req){
        $member = new Member;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->job=$req->job;
        $result = $member->save();
        if($result){
            return ["Result" => "Data has been saved"];
        }
        else{
            return ["Result" => "save data failed"];
        }
        
    }
    //put (update)
    function update(Request $req){
        $member = Member::find($req->id);
        $member->name=$req->name;
        $member->email=$req->email;
        $member->job=$req->job;
        $result = $member->save();
        if($result){
            return ["Resuld" => "Update Success"];
        }
        else{
            return ["Resuld" => "Update fail"];
        }
        
    }

    //search name
    function search($name){
        return Member::where("name","like","%".$name."%")->get();
    }

}
