<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view("create");
    }

    public function filestore(Request $request){
        $validated = $request->validate([
            "name"=> "required",
            "description" => "required",
            "image"=> "nullable|mimes:jpg,png,jepg",
        ]);
        //upload image
        $imageName = null;
        if (isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        //Add new post
        $post = new Post;
        $post->name = $request->name;
        $post->description = $request->description;
        $post->image = $imageName;

        $post->save();
        flash()->success('Post created successfully.');
        return redirect()->route('home');
    }

    public function editData($id){
        $post = Post::findOrFail($id);
        return view('edit', ['ourPost' => $post]);
    }

    public function updateData(Request $request, $id){
        $post = Post::findOrFail($id);

        $validated = $request->validate([
            "name"=> "required",
            "description" => "required",
            "image"=> "nullable|mimes:jpg,png,jepg",
        ]);

        //update post
        $post = Post::findOrFail($id);
        $post->name = $request->name;
        $post->description = $request->description;

        //upload image
        if (isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $post->image = $imageName;
        }

        $post->save();
        flash()->success('Post updated successfully.');
        return redirect()->route('home');
    }

    public function deleteData($id){
        $post = Post::findOrFail($id);

        $post->delete();
        flash()->success('Post successfully deleted.');
        return redirect()->route('home');
    }
}
