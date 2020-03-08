<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use App\Http\Requests\Posts\StoreRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //paginate số lượng mún in ra bên view 
        $posts=Post::with('user')->paginate(8);
        return view('crud.posts.index',['posts' => $posts,]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category= Category::all();
        return view('crud.posts.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = Arr::except($request->all(), ['_token']);
        $user = Post::create($data);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['post'] = Post::find($id);
        $category= Category::all();
        return view('crud.posts.edit',$data,compact('category'));
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
        //
        $data = Arr::except(request()->all(), ["_token"]);
        $post = Post::find($id);
        $post->title = $data['title'];
        $post->image = $data['image'];
        $post->content = $data['content'];
        $post->like = $data['like'];
        $post->view = $data['view'];
        $post->category_id = $data['category_id'];
        $post->update();
        
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)// hamfxoas theo id
    {
        $model = Post::find($id);
		if($model){
            $model->delete();
		}
        return redirect()->route('posts.index');
    }

}
