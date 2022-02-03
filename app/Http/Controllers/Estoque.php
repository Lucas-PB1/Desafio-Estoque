<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProdutoRequest;
use App\Models\ModelEstoque;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $my_stock;

    public function index()
    {
        $stock = ModelEstoque::paginate(10);
        return view('index', compact('stock'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoRequest $request)
    {
        $cad = ModelEstoque::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'category' => $request->category,
            'price' => $request->price,
            'qtd' => $request->qtd,

        ]);
        if ($cad) {
            return redirect('stock');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stock = ModelEstoque::find($id);
        return view('show', compact('stock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stock = ModelEstoque::find($id);
        return view('create', compact('stock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdutoRequest $request, $id)
    {
        ModelEstoque::where(['id' => $id])->update([
            'name' => $request->name,
            'desc' => $request->desc,
            'category' => $request->category,
            'price' => $request->price,
            'qtd' => $request->qtd,
        ]);
        return redirect('stock');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelEstoque::destroy($id);
        return redirect('stock');
    }
}
