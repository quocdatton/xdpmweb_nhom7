<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class UserController extends Controller
{
    //
    public function index(){
        $db=User::paginate(10);
        return view("layouts.app.table",['db'=>$db]);
    }
    public function create(){
        return view("user.create");
    }

    public function store(Request $request){
        $user = new User();
        $user->Name = $request->txtName;
        $user->Email = $request->email;
        $user->Password = $request->pass;
        $user->level = 0;
        $user->created_at = '2022-03-04';
       $user->save();
       return redirect()->action([UserController::class, 'index']);
    //    return redirect()->route('/user/table');
    }

    public function edit($id=null){
        if($id==null){
            return redirect()->action([UserController::class, 'index']);
        }
        else {
            $db = User::find($id);
            return view('user.edit',['db'=>$db]);
        }
    }

    public function update(Request $request, $id){
        $db = User::find($id);
        $db->Name = $request->input('txtName');
        $db->Email = $request->input('email');
        $db->Password = $request->input('pass');
        $db->save();
        return redirect()->action([UserController::class, 'index']);
    }


    public function destroy($id){
        $db = User::findOrFail($id);
        $db->delete();
        return redirect()->action([UserController::class, 'index']);
    }
}
