<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {

        // $newPost = new Post;
        // $newPost->title = 'Yangi sarlavha';
        // $newPost->short_content = 'yangi kichkina nimadir';
        // $newPost->content = 'Bu katta kontent';
        // $newPost->photo = 'Karochi botto rasm';
        // $newPost->save();
        // return "ishlar cho'tki bratan";

        // $newPost = Post::create([
        //     'title' => 'Bu array sarlavha',
        //     'short_content' => 'hullas shuniki',
        //     'content' => 'katta bro keldilaru',
        //     'photo' => 'guzalsiz, guzal'
        // ]);

        $post = Post::find(6)->update(['title' => 'Biza oltinchimiza']);
        return "Ishlar chotki bratan";
        // return view('posts.index');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
