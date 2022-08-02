<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fonction;
use App\Models\Direction;

class FonctionController extends Controller
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

        $fonctions = Fonction::latest()->paginate(5);

        return view('fonctions.index',compact('fonctions'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
        $directions = Direction::all();

        return view('fonctions.create',compact('directions'));

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

           
           
            
            'intituleFonction' => 'required',
        ]);

    

        Fonction::create($request->all());

    

        return redirect()->route('fonctions.index')

                        ->with('success','Fonction cree avec succee.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\Fonction  $fonction

     * @return \Illuminate\Http\Response

     */

    public function show(Fonction $fonction)

    {

        return view('fonctions.show',compact('fonction'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Fonction  $product

     * @return \Illuminate\Http\Response

     */

    public function edit(Fonction $fonction)

    {

        return view('fonctions.edit',compact('fonction'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Fonction $fonction)

    {

         request()->validate([

            
            'idDirection' => 'required',
            'intituleFonction' => 'required',
            
            
            

        ]);

    

        $fonction->update($request->all());

    

        return redirect()->route('fonctions.index')

                        ->with('success','Fonction mise a jour');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Fonction  $fonction

     * @return \Illuminate\Http\Response

     */

    public function destroy(Fonction $fonction)

    {

        $fonction->delete();

    

        return redirect()->route('fonctions.index')

                        ->with('success','Fonction supprime');

    }
}
