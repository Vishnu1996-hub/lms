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
                    $authorArr[$key]['badges'] = implode(',',$author->badge->pluck('label')->toArray());
                    $authorArr[$key]['total_books'] = $author->books->count();
                    $authorArr[$key]['books'] = implode(',',$author->books->pluck('name')->toArray());
                }
                return json_encode($authorArr);
            }
            return ['status' => 0, 'msg' => 'Records Not Found...'];
        }catch(Exception $ex){
            return ['status' => 0, 'msg' => 'Records Not Found...'];
        }
    }
}
