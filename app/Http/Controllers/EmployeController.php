<?php

    

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;

use DB;

use Hash; 

use App\Models\Employe;
use App\Models\Avancement;
use App\Models\Fonction;
use App\Models\Categorie;
use App\Models\Contrat;

use Illuminate\Http\Request;

    

class EmployeController extends Controller

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

        $employes = Employe::join('fonctions', 'employes.idFonction', '=', 'fonctions.idFonction')
                    ->join('categories', 'employes.idCat', '=', 'categories.idCat')
                    ->join('contrats', 'employes.idContrat', '=', 'contrats.idContrat')
                    ->get(['employes.*', 'fonctions.*','categories.*','contrats.*']);
        

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
        $avancements = Avancement::all();
        $fonctions = Fonction::all();
        $categories = Categorie::all();
        $contrats = Contrat::all();

        return view('employes.create',compact('avancements','fonctions','categories','contrats'));

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
            'mail' => 'required|mail|unique:employes,mail',
            'situation_matrimoniale' => 'required',

        ]);

        $employe = Employe::create($request->all());

        

        return redirect()->route('employes.index')

                        ->with('success','Employe created successfully.');

    }

    

    /**

     * Display the specified resource.

     *

     *@param  int  $matricule

     * @return \Illuminate\Http\Response

     */

    public function show($matricule)

    {

        $employe = Employe::find($matricule);
        $fonctions = Fonction::get()->where("fonctions.matricule",$matricule);
       
        return view('employes.show',compact('employe','fonctions'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Employe  $employe

     * @return \Illuminate\Http\Response

     */

    public function edit($matricule)

    {
        $employe = Employe::find($matricule);
        $fonctions = Fonction::all();
        $categories = Categorie::all();
        $contrats = Contrat::all();
        return view('employes.edit',compact('employe','fonctions','categories','contrats'));

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

    

        $employe->update($request->all());

    

        return redirect()->route('employes.index')

                        ->with('success','Employe updated successfully');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Employe  $employe

     * @return \Illuminate\Http\Response

     */

    public function destroy($matricule)

    {

        DB::table("employes")->where('matricule',$matricule)->delete();

    

        return redirect()->route('employes.index')

                        ->with('success','Employe deleted successfully');

    }

}