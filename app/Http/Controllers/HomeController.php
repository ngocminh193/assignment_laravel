<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use Arr;
use Auth;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::with('user')->get();
        $category = Category::all();
        return view('client.homepage',['posts' => $posts]);
    }

    public function getCategory($id){
        $posts = Post::where('category_id','=',$id)->get();
        return view('client.listPosts',['posts'=>$posts,'category_id' => $id,'id'=>$id]);
    }
    public function getPost($id){
        $posts = Post::where('id','=',$id)->get();
        $comments = Comment::where('post_id','=',$id)->get();
        return view('client.post',['posts'=> $posts,'comments'=>$comments,'post_id'=>$id]);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('homepage.login');
    }

    public function getLoginForm(){
        if(Auth::check()){
            return redirect()->route('homepage.index');
        }
        return view('client.auth.login');
    }

    public function login(LoginRequest $request){
        $data = Arr::except($request->all(), ['_token']);

        $result = Auth::attempt($data);

        return redirect()->route('homepage.index');
    }

    public function getRegisterForm(){
        return view('client.auth.register');
    }

    public function register(RegisterRequest $request){

        $data = Arr::except($request->all(), ['_token']);
        $data['password']=bcrypt($data['password']);
        $user = User::create($data);
            
            Auth::login($user);
    
            return redirect()->route('homepage.index');
    }

    public function getUserPost($id){
        $posts = Post::where('user_id','=',$id)->get();
        return view('client.userPosts',['posts'=>$posts,'user_id' => $id,'id'=>$id]);
    }

    public function showProfile($id){
        $data['user'] = User::find($id);
        return view('client.profile',$data);
    }

    public function updateProfile(Request $request, $id){
        $data = Arr::except(request()->all(), ["_token"]);
        $user = User::find($id);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->phone = $data['phone'];
        $user->dob = $data['dob'];
        $user->role = $data['role'];
        $user->is_active = $data['is_active'];

        $user->update();
        
        return back();
    }

    public function comment(Request $request){
        $data = Arr::except($request->all(), ['_token']);
        $comments = Comment::create($data);    
        return back();
    }

}

