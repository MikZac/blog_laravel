<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use Illuminate\Support\Facades\Auth;

class EditorController extends Controller
{

    public function post_page() {
        return view('editor.post_page');
    }
    public function add_post(Request $request)
    {

        $user=Auth()->user();
        $user_id = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;

        $post= new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->post_status = 'active';
        $post->user_id = $user_id;
        $post->name = $name;
        $post->usertype = $usertype;
        
        $image=$request->image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            
            $post->image = $imagename; 
        }
       


        $post->save();
        return redirect()->back()->with('message', 'Post dodany poprawnie');
    }

    public function show_post() {

        $post = Post::all();

        return view('editor.show_post', compact('post'));

    }
    public function delete_post($id) {
        $post = Post::find($id);

        $post->delete();
        return redirect()->back()->with('message', 'Post został usunięty');
    }
    public function edit_post($id)
    {
        $post=Post::find($id);

        return view ('editor.edit_post', compact('post'));
    }
    public function update_post(Request $request,$id)
    {
        $data = Post::find($id);
        $data->title=$request->title;
        $data->description=$request->description;

        $image=$request->image;
        if($image) {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            
            $data->image = $imagename; 
        }

        $data->save();
        return redirect()->back()->with('message', 'Post Edytowany poprawnie');

    }
    public function accept_post($id)
    {
        $data = Post::find($id);
        $data->post_status='active';
        $data->save();
        return redirect()->back()->with('message', 'Post zaakceptowany');;
    }
    public function reject_post($id)
    {
        $data = Post::find($id);
        $data->post_status='odrzucony';
        $data->save();
        return redirect()->back()->with('message', 'Post odrzucony');;;
    }
}
