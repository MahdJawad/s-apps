<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affectation;
use App\Models\Employe;

class AffectationController extends Controller
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

        $affectations = Affectation::latest()->paginate(5);

        return view('affectations.index',compact('affectations'))

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
        return view('affectations.create',compact('employes'));

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
            'typeAffect' => 'required',
            'lieuAffect' => 'required',
            'dateDebutAbs' => 'required',
            'dateFinAbs ' => 'required',
        ]);

    

        Affectation::create($request->all());

    

        return redirect()->route('affectations.index')

                        ->with('success','Affectation cree avec succee.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function show(Affectation $affectation)

    {

        return view('affectations.show',compact('affectation'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function edit(Affectation $affectation)

    {

        return view('affectations.edit',compact('affectation'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Affectation $affectation)

    {

         request()->validate([

            
            'matricule' => 'required',
            'typeAffect' => 'required',
            'lieuAffect' => 'required',
            'dateDebutAbs' => 'required',
            'dateFinAbs ' => 'required',
            
            
            

        ]);

    

        $affectation->update($request->all());

    

        return redirect()->route('affectations.index')

                        ->with('success','Affectation mise a jour');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\  

     * @return \Illuminate\Http\Response

     */

    public function destroy($idNaf)

    {

        DB::table("affectations")->where('idNaf',$idNaf)->delete();

    

        return redirect()->route('affectations.index')

                        ->with('success','Affectation supprime');

    }
}
