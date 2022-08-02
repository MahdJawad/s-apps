<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Spatie\Permission\Models\Role;

use DB;

use Hash;

use Illuminate\Support\Arr;
use App\Models\Abscence;
use App\Models\Employe;

class AbscenceController extends Controller
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

        $abscences = Abscence::join('employes', 'abscences.matricule', '=', 'employes.matricule')
        
        ->get(['abscences.*', 'employes.*']);

        return view('abscences.index',compact('abscences'))

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
        return view('abscences.create',compact('employes'));

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
            'debut' => 'required',
            'fin' => 'required',
        
        ]);

    

        Abscence::create($request->all());

    

        return redirect()->route('abscences.index')

                        ->with('success','Abscence cree avec succee.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function show($numAbsence)

    {

        $abscence = Abscence::find($numAbsence);
        return view('abscences.show',compact('abscence'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function edit($numAbsence)

    {

        $employes = Employe::all();
        $abscence = Abscence::find($numAbsence);
        return view('abscences.edit',compact('abscence','employes'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Abscence $abscence)

    {

         request()->validate([

            
            'matricule' => 'required',
            'debut' => 'required',
            'fin' => 'required',
            
            
            

        ]);

    

        $abscence->update($request->all());

    

        return redirect()->route('abscences.index')

                        ->with('success','Abscence mise a jour');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\  

     * @return \Illuminate\Http\Response

     */

    public function destroy($numAbsence)

    {

        DB::table("abscences")->where('numAbsence',$numAbsence)->delete();

    

        return redirect()->route('abscences.index')

                        ->with('success','Abscence supprime');

    }
}
