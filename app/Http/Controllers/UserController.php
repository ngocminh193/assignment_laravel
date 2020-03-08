<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use App\Http\Requests\Users\StoreRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('posts')->paginate(6);

        return view('crud.users.index', ['users' => $users,]);
    }

    public function create()
    {
        return view('crud.users.create');
    }

    public function store(StoreRequest $request)
    {
        $data = Arr::except($request->all(), ['_token','avatar']);
        // $data['avatar']= $request->file('avatar')->store('avatars');
        $data['password']=bcrypt($data['password']);
        $user = User::create($data);
        return redirect()->route('users.index');
    }

    public function show(){
        $users = User::all();
        return view('crud.users.index', ['users' => $users,]);
    }

    public function edit($id){
        $data['user'] = User::find($id);
        return view('crud.users.edit',$data);
    }

    public function update(Request $request, $id)
    {
        //
        $data = Arr::except(request()->all(), ["_token"]);
        $user = User::find($id);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->phone = $data['phone'];
        $user->dob = $data['dob'];
        $user->role = $data['role'];
        $user->is_active = $data['is_active'];
        $user->update();
        
        return redirect()->route('users.index');
    }
    

    public function destroy($id)// hamfxoas theo id
    {
        $model = User::find($id);
		if($model){
            $model->delete();
		}
        return redirect()->route('users.index');
    }
}
