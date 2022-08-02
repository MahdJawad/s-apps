<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conge;
use App\Models\Employe;
use App\Models\TypeConge;

class CongeController extends Controller
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

        $conges = Conge::join('employes', 'conges.matricule', '=', 'employes.matricule')
        ->join('type_conges', 'conges.idTypeConge', '=', 'type_conges.idTypeConge')
        ->get(['conges.*', 'employes.*','type_conges.*']);

        return view('conges.index',compact('conges'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $employes = Employe::all();
        $types = TypeConge::all();
        return view('conges.create',compact('employes','types'));

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

           
            'matricule' => 'required',
            'idTypeConge' => 'required',
            'dureeConge' => 'required',
            'dateCessation' => 'required',
            'dateReprise'=> 'required',
        ]);

    

        Conge::create($request->all());

    

        return redirect()->route('conges.index')

                        ->with('success','Conge ajouter avec succee.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\Conge  $conge

     * @return \Illuminate\Http\Response

     */

    public function show($idConge)

    {

        $conge = Conge::find($idConge);
        $types = TypeConge::get();
        return view('conges.show',compact('conge','types'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Conge  $conge

     * @return \Illuminate\Http\Response

     */

    public function edit($idConge)

    {
        $conge = Conge::find($idConge);
        $employes = Employe::all();
        $types = TypeConge::all();
        return view('conges.edit',compact('conge','employes','types'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Conge  $conge

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Conge $conge)

    {

         request()->validate([

            
            
            'matricule' => 'required',
            'idTypeConge' => 'required',
            'dureeConge' => 'required',
            'dateCessation' => 'required',
            'dateReprise'=> 'required',
           
            
            

        ]);

    

        $conge->update($request->all());

    

        return redirect()->route('conges.index')

                        ->with('success','Conge mis a jour');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Conge  $conge

     * @return \Illuminate\Http\Response

     */

    public function destroy(Conge $conge)

    {

        $conge->delete();

    

        return redirect()->route('conges.index')

                        ->with('success','Conge supprime');

    }
}
