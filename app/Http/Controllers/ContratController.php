<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrat;
use App\Models\TypeContrat;

class ContratController extends Controller
{
       /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    /**function __construct()

    {

    *     $this->middleware('permission:employe-list|employe-create|employe-edit|employe-delete', ['only' => ['index','show']]);
    
     *    $this->middleware('permission:employe-create', ['only' => ['create','store']]);

     *    $this->middleware('permission:employe-edit', ['only' => ['edit','update']]);

     *    $this->middleware('permission:employe-delete', ['only' => ['destroy']]);

    }*/

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $contrats = Contrat::join('type_contrats', 'contrats.idTypeContrat', '=', 'type_contrats.idTypeContrat')
                        ->get(['contrats.*','type_contrats.*']);

        return view('contrats.index',compact('contrats'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $types = TypeContrat::all();
        return view('contrats.create',compact('types'));

    }

    

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        request()->validate([

           
        
            'idTypeContrat' => 'required',
            'dateEmbauche' => 'required',
            'lieuEmbauche' => 'required',
            'salaireBase' => 'required',
            
            'frequencePaie' => 'required',
        ]);

    

        Contrat::create($request->all());

    

        return redirect()->route('contrats.index')

                        ->with('success','Contrat cree avec succee.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\Contrat  $contrat

     * @return \Illuminate\Http\Response

     */

    public function show(Contrat $contrat)

    {

        return view('contrats.show',compact('contrat'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Contrat  $contrat

     * @return \Illuminate\Http\Response

     */

    public function edit(Contrat $contrat)

    {

        return view('contrats.edit',compact('contrat'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Contrat  $contrat

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Contrat $contrat)

    {

         request()->validate([

            
            'idContrat' => 'required',
            'idTypeContrat' => 'required',
            'dateEmbauche' => 'required',
            'lieuEmbauche' => 'required',
            'salaireBase' => 'required',
            'modeReglement' => 'required',
            'frequencePaie' => 'required',
            
            

        ]);

    

        $contrat->update($request->all());

    

        return redirect()->route('contrats.index')

                        ->with('success','Contrat mise a jour');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Contrat  $contrat

     * @return \Illuminate\Http\Response

     */

    public function destroy(Contrat $contrat)

    {

        $contrat->delete();

    

        return redirect()->route('contrats.index')

                        ->with('success','Contrat supprime');

    }
}
