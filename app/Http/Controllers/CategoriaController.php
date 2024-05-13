<?php

namespace App\Http\Controllers;

use App\Http\Requests\Categoria\StoreRequest;
use App\Http\Requests\Categoria\UpdateRequest;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::where('user_id', Auth::user()->id)->paginate(20);
        return Inertia::render('Categorias/Index', [
            'categorias' => $categorias
        ]);
    }


    public function verCategorias()
    {
        $categorias = Categoria::paginate(30);
        return Inertia::render('Categoria', [
            'categorias' => $categorias
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
     $data = $request->except('avatar');
     if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        $routeName = $file->store('avatars', ['disk' => 'public']);
        $data['avatar'] = $routeName;

    }
    $data['user_id'] = Auth::user()->id;
    Categoria::create($data);
    return to_route('categorias.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
      return inertia::render('CategoriaEdit/Edit', compact('categoria'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Categoria $categoria)
    {
    $data = $request->except('avatar');

    if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        $routeName = $file->store('avatars', ['disk' => 'public']);
        $data['avatar'] = $routeName;

        if($categoria->avatar){
            Storage::disk('public')->delete($categoria->avatar);
        }

    }
    $categoria->update($data);

    return to_route('categorias.index', $categoria);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        if($categoria->avatar){
            Storage::disk('public')->delete($categoria->avatar);
        }
        $categoria->delete();
        return to_route('categorias.index', $categoria);
    }
}
