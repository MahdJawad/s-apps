<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grille;
use App\Models\Categorie;
use App\Models\Echelon;

class GrilleController extends Controller
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

        $grilles = Grille::join('categories', 'grilles.idCat', '=', 'categories.idCat')
        ->join('echelons', 'grilles.idEchelon', '=', 'echelons.idEchelon')
        ->get(['grilles.*', 'echelons.*','categories.*']);

        return view('grilles.index',compact('grilles'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
        $categories = Categorie::all();
        $echelons = Echelon::all();
        return view('grilles.create',compact('categories','echelons'));


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

            'idCat' => 'required',
            'idEchelon' => 'required',
            'indice' => 'required',
        ]);

    

        Grille::create($request->all());

    

        return redirect()->route('grilles.index')

                        ->with('success','Mission cree avec succee.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function show(Grille $grille)

    {

        return view('Grilles.show',compact('grille'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function edit(Grille $grille)

    {

        return view('grilles.edit',compact('grille'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Grille $grille)

    {

         request()->validate([

            'idCat' => 'required',
            'idEchelon' => 'required',
            'indice' => 'required',
            
           
            
            
            

        ]);

    

        $grille->update($request->all());

    

        return redirect()->route('grilles.index')

                        ->with('success','Grille mis a jour');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function destroy(Grille $grille)

    {

        $grille->delete();

    

        return redirect()->route('grilles.index')

                        ->with('success','Grille supprime');

    }
}
