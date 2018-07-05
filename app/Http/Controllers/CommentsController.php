<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

class CommentsController extends Controller
{
    private $comment;

    /**
      * Create a new controller instance.
      *
      * @return void
      */

      public function __construct()
      {
          $this->comment = new Comment();
      }

      /**
      * list of comments
      *
      * @return void
      */

      public function index()
      {
          //
      }

      /**
      * get commentaires
      *
      * @param integer id : id d'un article
      * @return Illuminate\Http\Response
      */

      public function getcomment($idarticle)
      {
          $query = Comment::where('article_id',$idarticle);
          $comment = $query->where('option',0)->orderBy('created_at','desc')->get();
          $count = $query->count();
          $res = ['all' => $comment, 'count' => $count];
          return json_decode(json_encode($res),false);
      }

    /**
    * insert commentaire
    *
    * @param Illuminate\Http\Request $request
    * @return Illuminate\Http\Response
    */

    public function insert(Request $request)
    {
        $validaton = $this->validate($request,[
          'name' => 'required', 'email' => 'required|email', 'comments' => 'required'
        ],[
          'required' => 'les champs sont obligatoires'
        ]);

        $add = new Comment();
        $add->name = $request->name;
        $add->email = $request->email;
        $add->comments = htmlspecialchars($request->comments);
        $add->option = 0;
        $add->article_id = $request->id;
        $add->save();
        return redirect()->back();
    }

    /**
    * delete comments
    *
    * @param Illuminate\Http\Request $request
    * @return Illuminate\Http\Response
    */

    public function delete($id)
    {
        $comment = Comments::where('id',$id)->first();
        if($comment->delete())
          return back()->with('success',"Le commentaire a été supprimé");
        else
          return back()->with('error',"Une erreur s'est produite");
    }
}
