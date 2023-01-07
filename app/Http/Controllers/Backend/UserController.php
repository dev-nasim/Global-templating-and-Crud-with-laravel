<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        try{
            $data = User::paginate(10);
            return returnData(2000, $data);
        }
        catch(\Exception $exception){
            return returnData(5000, $exception->getMessage(), 'Something Went wrong');
        }

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatorData = Validator::make($request->all(),[
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6'
        ]);
        if($validatorData->fails())
        {
            return response()->json($validatorData->errors(),400);
        }
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return returnData(2000,[],'Successfully Inserted');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {

        $validatorData = Validator::make($request->all(),[
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,id',
        ]);
        if($validatorData->fails())
        {
            return response()->json($validatorData->errors(),400);
        }
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return returnData(2000,[],'Successfully Updated');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return returnData(2000, [], 'Successfully Deleted');
    }
}
