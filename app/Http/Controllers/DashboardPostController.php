<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Lessons;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.posts.index', [
            'posts' => Lessons::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all()
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
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:lessons',
            'category_id' => 'required',
            'body' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['kutipan'] = Str::limit(strip_tags($request->body), 180);

        Lessons::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Postingan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Lessons $post)
    {
        if($post->author->id !== auth()->user()->id) {
            abort(403);
        }

        return view('dashboard.layouts.show',[
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Lessons $post)
    {
        if($post->author->id !== auth()->user()->id) {
            abort(403);
        }
        
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lessons $post)
    {
        $rules = [
            'judul' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required'
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:lessons';
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['kutipan'] = Str::limit(strip_tags($request->body), 180);

        Lessons::where('id', $post->id)
                ->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Postingan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lessons $post)
    {
        Lessons::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Postingan berhasil dihapus');
    }

    public function checkSlug(Request $request) {

        $slug = SlugService::createSlug(Lessons::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
