<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChargeFamille;
use App\Models\Employe;

class ChargeFamilleController extends Controller
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

        $charges = ChargeFamille::join('employes', 'charge_familles.matricule', '=', 'employes.matricule')
        ->get(['charge_familles.*', 'employes.*']);

        return view('charges.index',compact('charges'))

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
        return view('charges.create',compact('employes'));

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
            'nom' => 'required',
            'prenom' => 'required',
            'dateNaiss' => 'required',
            'lieuNaiss' => 'required',
            'lienFamille' => 'required',
            'sexe' => 'required',
        ]);

    

        ChargeFamille::create($request->all());

    

        return redirect()->route('charges.index')

                        ->with('success','Charge cree avec succee.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\ChargeFamille  $charge

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {
        $charge = ChargeFamille::find($id);
        return view('charges.show',compact('charge'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\ChargeFamille  $charge

     * @return \Illuminate\Http\Response

     */

    public function edit(ChargeFamille $charge)

    {

        return view('charges.edit',compact('charge'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\ChargeFamille  $charge

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, ChargeFamille $charge)

    {

         request()->validate([

            
            'matricule' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'dateNaiss' => 'required',
            'lieuNaiss' => 'required',
            'lienFamille' => 'required',
            'sexe' => 'required',
            
            
            

        ]);

    

        $charge->update($request->all());

    

        return redirect()->route('charges.index')

                        ->with('success','Charge famille mise a jour');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\ChargeFamille  $charge

     * @return \Illuminate\Http\Response

     */

    public function destroy(ChargeFamille $charge)

    {

        $charge->delete();

    

        return redirect()->route('charges.index')

                        ->with('success','Charge familliale supprime');

    }
}
