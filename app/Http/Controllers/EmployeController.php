<?php

    

namespace App\Http\Controllers;

    

use App\Models\Employe;

use Illuminate\Http\Request;

    

class EmployeController extends Controller

{ 

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    function __construct()

    {

         $this->middleware('permission:employe-list|employe-create|employe-edit|employe-delete', ['only' => ['index','show']]);

         $this->middleware('permission:employe-create', ['only' => ['create','store']]);

         $this->middleware('permission:employe-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:employe-delete', ['only' => ['destroy']]);

    }

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $employes = Employe::latest()->paginate(5);

        return view('employes.index',compact('employes'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('employes.create');

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
            'num_arrete' => 'required',
            'idFonction' => 'required',
            'idCat' => 'required',
            'idContrat' => 'required',
            'nom_emp' => 'required',
            'prenom_emp' => 'required',
            'adress' => 'required',
            'datenaiss' => 'required',
            'lieunaiss' => 'required',
            'sexe' => 'required',
            'tel' => 'required',
            'mail' => 'required',
            'situation_matrimoniale' => 'required',

        ]);

    

        Employe::create($request->all());

    

        return redirect()->route('employes.index')

                        ->with('success','Employe created successfully.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\Employe  $employe

     * @return \Illuminate\Http\Response

     */

    public function show(Employe $employe)

    {

        return view('employes.show',compact('employe'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Employe  $product

     * @return \Illuminate\Http\Response

     */

    public function edit(Employe $employe)

    {

        return view('employes.edit',compact('employe'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Employe  $employe

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Employe $employe)

    {

         request()->validate([

            'matricule' => 'required',
            'num_arrete' => 'required',
            'idFonction' => 'required',
            'idCat' => 'required',
            'idContrat' => 'required',
            'nom_emp' => 'required',
            'prenom_emp' => 'required',
            'adress' => 'required',
            'datenaiss' => 'required',
            'lieunaiss' => 'required',
            'sexe' => 'required',
            'tel' => 'required',
            'mail' => 'required',
            'situation_matrimoniale' => 'required',

        ]);

    

        $product->update($request->all());

    

        return redirect()->route('employes.index')

                        ->with('success','Employe updated successfully');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Employe  $employe

     * @return \Illuminate\Http\Response

     */

    public function destroy(Employe $employe)

    {

        $employe->delete();

    

        return redirect()->route('employes.index')

                        ->with('success','Employe deleted successfully');

    }

}