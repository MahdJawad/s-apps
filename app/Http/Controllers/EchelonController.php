<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Echelon;
use App\Models\Categorie;


class EchelonController extends Controller
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

        $echelons = Echelon::latest()->paginate(5);

        return view('echelons.index',compact('echelons'))

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
       
        return view('echelons.create',compact('categories'));

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
            'libelleEchelon' => 'required',
        ]);

    

        Echelon::create($request->all());

    

        return redirect()->route('echelons.index')

                        ->with('success','Echelon cree avec succee.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\Echelon  $echelon

     * @return \Illuminate\Http\Response

     */

    public function show(Echelon $echelon)

    {

        return view('echelons.show',compact('echelon'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Echelon  $echelon

     * @return \Illuminate\Http\Response

     */

    public function edit(Echelon $echelon)

    {

        return view('echelons.edit',compact('echelon'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Echelon  $echelon

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Echelon $echelon)

    {

         request()->validate([

            
            
            
            'idCat' => 'required',
            'libelleEchelon' => 'required',
           
            
            
            

        ]);

    

        $echelon->update($request->all());

    

        return redirect()->route('echelons.index')

                        ->with('success','Echelon mis a jour');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Echelon  $echelon

     * @return \Illuminate\Http\Response

     */

    public function destroy(Echelon $echelon)

    {

        $echelon->delete();

    

        return redirect()->route('echelons.index')

                        ->with('success','Echelon supprime');

    }
}
