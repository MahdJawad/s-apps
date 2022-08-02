<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\Direction;

class DepartementController extends Controller
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

        $departements = Departement::latest()->paginate(5);

        return view('departements.index',compact('departements'))

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
        return view('departements.create',compact('directions'));

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

           
        
            'nomDepartement' => 'required',
        ]);

    

        Departement::create($request->all());

    

        return redirect()->route('departements.index')

                        ->with('success','Departement cree avec succee.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function show(Departement $departement)

    {

        return view('departements.show',compact('departement'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function edit(Departement $departement)

    {

        return view('departements.edit',compact('departement'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Departement $departement)

    {

         request()->validate([

            
            
            'idDirection' => 'required',
            'nomDepartement' => 'required',
            
            

        ]);

    

        $direction->update($request->all());

    

        return redirect()->route('departements.index')

                        ->with('success','Departement mis a jour');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function destroy(Departement $departement)

    {

        $departement->delete();

    

        return redirect()->route('departements.index')

                        ->with('success','Departement supprime');

    }
}
