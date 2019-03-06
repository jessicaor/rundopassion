<?php

namespace App\Http\Controllers;

use App\Rando;
use App\Http\Requests\RandoStore;
use Illuminate\Http\Request;

class RandoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('randos.index',[ 'randos' => Rando::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Rando::class);
        return view('randos/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RandoStore $request)
    {
        $this->authorize('store', Rando::class);
        $rando = new Rando($request->all()); //optimiser pour recuperer ts les input ds formulaire
        $rando->user_id = $request->user()->id;//associer 1 article a 1 auteur
        $rando->save();//je dis a laravel de sauvegarder
   
        return redirect('/randos/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rando = Rando::find($id);
        $this->authorize('update', $rando);
        
        /*$this->authorize('update', $article);*/
        return view('randos.edit',[ 'rando' => $rando]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RandoStore $request, $id)
    {
        $rando = Rando::find($id);
        $this->authorize('update', $rando);
        /*$this->authorize('update', $article);*/
        $rando->update($request->all());
        $rando->save();
        session()->flash('status','Rando modifié avec succès');
        return redirect('/randos/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$rando = Rando::find($id);
        $rando->destroy();
        $request->session()->flash('message', 'Rando supprimée!');
        return redirect('/randos/index');*/
       
   
    }
}
