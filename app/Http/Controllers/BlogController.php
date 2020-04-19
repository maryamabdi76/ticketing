<?php


// namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Comments;
use App\Models\Tags;
use App\Models\Taggables;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        $lastposts = Posts::all()->take(3);
        $comments = Comments::all();
        $tags = Tags::all();
        $data = array(
            'posts' => $posts,
            'lastposts' => $lastposts,
            'comments' => $comments,
            'tags' => $tags,
        );
        return view('blog.blog')->with($data);
    }

    public function details($id)
    {
        $post = Posts::findOrFail($id);
        $comments = Comments::where('posts_id', $post->id)->with('user')->orderBy('created_at')->get();
        $lastposts = Posts::orderBy('created_at', 'desc')->take(3)->get();
        $allcomments = Comments::all();
        $tags = Tags::all();
        $taggables = Taggables::where('taggable_id',$post->id)->join('tags','tags.id','taggables.tags_id')->get();
        $data = array(
            'post' => $post,
            'lastposts' => $lastposts,
            'comments' => $comments,
            'allcomments' => $allcomments,
            'tags' => $tags,
            'taggables' => $taggables,
            'allcomment'=>Comments::all()
        );
        $post->update(['views' => $post->views + 1, 'updated_at' => Posts::raw('updated_at')]);
        // dd($data);die();
        return view('blog.blog-details')->with($data);
    }

    public function searchblog(Request $request)
    {
        $posts = Posts::where('title', 'like', "%{$request->query('searchblog')}%")->orWhere('content', 'like', "%{$request->query('searchblog')}%")->get();
        $lastposts = Posts::all()->take(3);
        $comments = Comments::all();
        $tags = Tags::all();
        $data = array(
            'posts' => $posts,
            'lastposts' => $lastposts,
            'comments' => $comments,
            'tags' => $tags,
        );
        return view('blog/blog')->with($data);
    }
    
    public function searchtag($id)
    {
        $posts = Posts::join('taggables','taggables.taggable_id','=','posts.id')
                        ->where('taggables.tags_id',$id)
                        ->select('posts.id','events_id','title','content','views')
                        ->get();
        $lastposts = Posts::all()->take(3);
        $comments = Comments::all();
        $tags = Tags::all();
        $data = array(
            'posts' => $posts,
            'lastposts' => $lastposts,
            'comments' => $comments,
            'tags' => $tags,
        );
        return view('blog/blog')->with($data);
    }

    public function addComment(Request $request)
    {
        $request->validate([
            'comment'=>'required|string|max:255'
        ]);
        // dd($request->userid);
        $users_id=auth()->user()->id;
        Comments::create([
            'users_id' => $users_id,
            'posts_id' => $request->postid,
            'comment' => $request->comment,
        ]);

        $post_id=$request->postid;

        return redirect("blog-details/$post_id");

    }
}
