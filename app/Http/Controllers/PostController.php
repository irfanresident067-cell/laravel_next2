<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // Tampilkan daftar post
    public function index()
    {
        if (Auth::user()->role == 'admin') {
            $posts = Post::all(); // Admin lihat semua post
        } else {
            $posts = Post::where('user_id', Auth::id())->get(); // User hanya lihat post miliknya
        }

        return view('posts.index', compact('posts')); // Kirim data ke view
    }

    // Form buat post baru
    public function create()
    {
        return view('posts.create'); 
    }

    // Simpan post baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('posts.index')->with('success', 'Post berhasil dibuat');
    }

    // Form edit post
    public function edit(Post $post)
    {
        // User hanya bisa edit post miliknya
        if (Auth::user()->role != 'admin' && $post->user_id != Auth::id()) {
            abort(403); // akses ditolak
        }

        return view('posts.edit', compact('post'));
    }

    // Update post
    public function update(Request $request, Post $post)
    {
        if (Auth::user()->role != 'admin' && $post->user_id != Auth::id()) {
            abort(403); // akses ditolak
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $post->update($request->only('title', 'content'));

        return redirect()->route('posts.index')->with('success', 'Post berhasil diupdate');
    }

    // Hapus post
    public function destroy(Post $post)
    {
        if (Auth::user()->role != 'admin' && $post->user_id != Auth::id()) {
            abort(403); // akses ditolak
        }

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post berhasil dihapus');
    }
}
