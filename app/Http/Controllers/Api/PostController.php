<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        // $posts = Post::all();
        $posts = Post::with('category')->with('tags')->get();
        $category_filter = isset($_GET['category']) ? strtolower($_GET['category']) : "";
        // $tags_filter = isset($_GET['tags']) ? strtolower($_GET['tags']) : "";



        //filtro
        function filter($posts, $filter) {
            $array_filtered = [];
            if($filter == "") {
                return $posts;
            }
            foreach($posts as $post) {

                $result = strpos(strtolower($post['category']), $filter);

                if($result !== false) {
                    $array_filtered[] = $post;
                };

            }

            return $array_filtered;

        };


        return response()->json([
            'result' => filter($posts, $category_filter),
        ]);
    }
}