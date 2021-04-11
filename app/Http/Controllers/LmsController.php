<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class LmsController extends Controller
{
    public function index(){
        try{
            $authorArr = [];
            $authors = Author::all();
            if($authors){
                foreach($authors as $key => $author){
                    $authorArr[$key]['id'] = $author->id;
                    $authorArr[$key]['name'] = $author->name;
                    $authorArr[$key]['email'] = $author->email;
                    $authorArr[$key]['badges'] = implode(', ',$author->badge->pluck('label')->toArray());
                    $authorArr[$key]['total_books'] = $author->books->count();
                    $authorArr[$key]['books'] = implode(', ',$author->books->pluck('name')->toArray());
                }
                return json_encode($authorArr);
            }
            return ['status' => 0, 'msg' => 'Records Not Found...'];
        }catch(Exception $ex){
            return ['status' => 0, 'msg' => $ex];
        }
    }

    /**
     * To  get post details for react pagination
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function getReactPagination(Request $request) 
    // {    

    //     $posts = Post::where('published',1)
    //                  ->with('tags')
    //                  ->orderBy('created_at', 'DESC')
    //                  ->paginate(5);

    //     foreach ($posts as $key => $post) {
    //         $post->image = Helper::catch_first_image($post->body);
    //         $post->url = url('blog/'.$post->slug);
    //         $post->body = strip_tags(str_limit($post->body,350));
    //     }   

    //     return [
    //         'status' => "success",
    //         'data' => [
    //             'posts' => $posts
    //         ]
    //     ];   
     
    // }
}
