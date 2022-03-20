<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Photo;
use App\Tag;
use Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //投稿一覧
    {
        $data = [];
        
        if(\Auth::check()){  //認証済みの場合
            $user = \Auth::user();
            $posts = Post::orderBy('created_at','desc')->get(); 
            //$posts = $allpost->sortByDesc('created_at'); 取得したデータを日付の降順に並べ替え
            
            
            $data = [
                'user' => $user,
                'posts' => $posts,
                
                ];
        }
        
        return view('welcome',$data); //welcomeビュー内で認証あり/なしで条件分岐
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post;
        
        return view('posts.create',[
                'post' => $post,
            
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'caption' => 'required|max:1000'
            ]);
        
        $post = $request->user()->posts()->create([
            'caption' => $request->caption,
            ]);
    
    
    //写真
      $photo = new Photo;
      
      // リクエストの中身全件取得
    //   $requestAll = $request->all();

      // 複数枚画像投稿時に使用
    //   foreach($images as $image) {
    //     $path = Storage::disk('s3')->putFile('myprefix', $image, 'public');
    //   }
      
      //s3アップロード開始
      $image = $request->file('image');
      // バケットの`myprefix`フォルダへアップロード
      $path = Storage::disk('s3')->putFile('myprefix', $image, 'public');
      // アップロードした画像のフルパスを取得
      $photo->photo_url = Storage::disk('s3')->url($path);
      
      $photo->post_id = $post->id;
      
      $photo->save();
      
      
      //ハッシュタグ
        
        // #(ハッシュタグ)で始まる単語を取得。結果は、$matchに多次元配列で代入される。
        preg_match_all('/#([a-zA-Z0-9０-９ぁ-んァ-ヶ亜-熙]+)/u', $request->tags, $match);
        // $match[0]に#(ハッシュタグ)あり、$match[1]に#(ハッシュタグ)なしの結果が入ってくるので、$match[1]で#(ハッシュタグ)なしの結果のみを使います。
        $tags = [];
        foreach ($match[1] as $tag) {
            $record = Tag::firstOrCreate(['name' => $tag]); // firstOrCreateメソッドで、tags_tableのnameカラムに該当のない$tagは新規登録される。
            array_push($tags, $record); // $recordを配列に追加します(=$tags)
        };

        // 投稿に紐付けされるタグのidを配列化
        $tags_id = [];
        foreach ($tags as $tag) {
            array_push($tags_id, $tag['id']);
        };
        $post->tags()->attach($tags_id); // 投稿にタグ付するために、attachメソッドをつかい、モデルを結びつけている中間テーブルにレコードを挿入します。
        $post->save();

        
      return redirect('/');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        
         return view('posts.show', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = \App\Post::findOrFail($id);
        
        if (\Auth::id() === $post->user_id) {
            $post->delete();
        }
        
        return back();
        
    }
    
    
    public function search(Request $request)
    {   
         $posts = [];
        
        if(\Auth::check()){
            //検索フォームで入力された値
            $keyword = $request->input("keyword");
            
            if($request->filled('keyword')){
                //Postモデルから全件取得
                $query = Post::query()->orderBy('created_at','desc');
                //Postモデルのリレーション先であるtagsテーブルから、フォームに入力された値($keyword)をもとに検索
                $posts = Post::whereHas('tags', function ($query) use ($keyword) {
                    $query->where('name', 'LIKE', "%{$keyword}%");
                })->get();
            }
            
                
            return view("posts.search", [
                "posts" => $posts, 
                "keyword" => $keyword
                ]);
        }
    }
    
}