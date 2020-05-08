<?php
namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Comments;
use App\Models\Tags;
use App\Models\Taggables;
use Verta;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Posts::orderBy('created_at','desc')->paginate(5);

        foreach($posts as $r){
            $r->created_at = new Verta($r->created_at);
        }
        $lastposts = Posts::orderBy('created_at', 'desc')->take(3)->get();
        $comments = Comments::where('status',1)->get();
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
        $created_at=new Verta($post->created_at);

        $comments = Comments::where('posts_id', $post->id)->where('status',1)->with('user')->orderBy('created_at')->get();
        foreach($comments as $r){
            $r->created_at = new Verta($r->created_at);
        }

        $lastposts = Posts::orderBy('created_at', 'desc')->take(3)->get();
        $allcomments = Comments::where('status',1)->get();
        $tags = Tags::all();
        $taggables = Taggables::where('taggable_id',$post->id)->join('tags','tags.id','taggables.tags_id')->get();
        $data = array(
            'post' => $post,
            'created_at'=>$created_at,
            'lastposts' => $lastposts,
            'comments' => $comments,
            'allcomments' => $allcomments,
            'tags' => $tags,
            'taggables' => $taggables,
            'allcomment'=>$allcomments
        );
        $post->update(['views' => $post->views + 1, 'updated_at' => Posts::raw('updated_at')]);
        return view('blog.blog-details')->with($data);
    }

    public function searchblog(Request $request)
    {
        $posts = Posts::where('title', 'like', "%{$request->query('searchblog')}%")->orWhere('content', 'like', "%{$request->query('searchblog')}%")->get();
        $lastposts = Posts::all()->take(3);
        $comments = Comments::where('status',1);
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
        $comments = Comments::where('status',1);
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
        $users_id=auth()->user()->id;
        Comments::create([
            'users_id' => $users_id,
            'posts_id' => $request->post('postid'),
            'comment' => $request->post('comment'),
        ]);

        return response()->json("", 200);
    }
}
