<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;
class PostController extends Controller
{
    public function index(){
        $post  = Post::all();
        return view("post.index",compact("post"));
    }

    public function crear(){
        return view("post.crear");
    }

    public function guardar(Request $request){
        $input = $request->all();
        try {
            DB::beginTransaction();
            $post = Post::create([
                "Titulo"=> $input["titulo"],
                "Contenido"=> $input["contenido"],
                "Categoria" => $input["categoria"],
                "Imagen" => $input["imagen"]
        ]);
        DB::commit();
        return redirect("/post");
        }catch(\Execption $e){
            DB::rollBack();
        }

    }
}
