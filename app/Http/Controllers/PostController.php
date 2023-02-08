<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use宣言は外部にあるクラスをPostController内にインポートできる。
//この場合、App\Models内のPostクラスをインポートしている。
use App\Models\Post;


class PostController extends Controller
{
/**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */
 
//  8-1
public function index(Post $post)
{
    return $post->get();//$postの中身を戻り値にする。
}
}

// public function index(Post $post)
//     {
//         return view('posts/index')->with(['posts' => $post->get()]);  
//       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
//     }


