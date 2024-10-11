<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Post::with(['category','tag'])->latest('id')->paginate(5);
        //'category','tag' là tên hàm trong model
        return view('admin.baiviet',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category= Category::pluck('name','id')->all();
        $tag= Tag::pluck('name','id')->all();

        return view('admin.baiviet.add',compact('category','tag'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {   
        $data= $request->validate([
            'title'=>['required','max:100',Rule::unique('posts')],
            'content'=>'required|max:255',
            'category_id'=>'required',
            'image'=>'required|image|max:2048'
        ]);
        try {
            if($request->hasFile('image')){
                $data['image']=Storage::put('image',$request->file('image'));
            }
            $post = Post::query()->create($data);

            $post->tag()->attach($request->tags);
            // dd($dataPost);
            return redirect()->route('posts.index')
                            ->with('succes',true);
        }
        catch (\Throwable $th) {
             if(!empty($data['image']) && storage::exists($data['image'])){
               Storage::delete($data['image']);
            }
            return back()->with('succes',false);

        }
      
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.baiviet.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $post->load(['category','tag']);
        $category= Category::pluck('name','id')->all();
        $tag= Tag::pluck('name','id')->all();
        $postTags = $post->tag->pluck('id')->all();
        // dd($postTags);
        return view('admin.baiviet.edit',compact('category','tag','post','postTags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data= $request->validate([
            'title'=>['required','max:100',Rule::unique('posts')->ignore($post->id)],
            'content'=>'required|max:255',
            'category_id'=>'required',
            'image'=>'nullable|image|max:2048'
        ]);
        try {
            if($request->hasFile('image')){
                $data['image'] = Storage::put('image',$request->file('image'));
            }
            $old_img= $post->image;
            $post->update($data);

            $post->tag()->sync($request->tags);
            if($request->hasFile('image') && !empty($old_img) && Storage::exists('old_img')){
                Storage::delete($old_img);
            }
            // dd($dataPost);
            return back()->with('succes',true);
        }
        catch (\Throwable $th) {
             if(!empty($data['image']) && storage::exists($data['image'])){
               Storage::delete($data['image']);
            }
            return back()->with('succes',false)->with('error',$th->getMessage());

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        try {
            $post->delete();
            return back()->with('succes',true);
        }
        catch (\Throwable $th) {
         
            return back()->with('succes',false)->with('error',$th->getMessage());

        }
    }
    public function forceDestroy(Post $post)
    {
        try {
            $post->forceDelete();
            if(!empty($post->image) && storage::exists($post->image)){
                Storage::delete($post->image);
             }return back()->with('succes',true);
          } catch (\Throwable $th) {
              return back()->with('succes',false)
              ->with('error','Bạn cần xóa khóa ngoại trước');
              //throw $th;
          }
    }

    public function trash()
    {
        $trashs = Post::onlyTrashed()->latest('id')->paginate('5');
        // dd($trash);
        return view('admin.baiviet.trash',compact('trashs'));
    }

      public function restore($id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->restore();

        return redirect()->route('posts.trash')->with('success', 'Khôi phục bài viết thành công!');
    }
}
