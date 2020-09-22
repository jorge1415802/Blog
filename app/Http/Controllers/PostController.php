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

    public function mostrar(Request $request,$id){
        $post = DB::table('Posts')->find($id);

        return view('post.mostrar',compact("post"));
    }

    public function update(Request $request,$id){
        $post = DB::table('Posts')->find($id);
        return view('post.update',compact("post"));
    }

    public function delete(Request $request,$id){
        $post = DB::table('Posts')->where('Id','=',$id)->delete();

        return redirect("/post");
    }
}
