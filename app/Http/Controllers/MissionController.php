<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mission;

class MissionController extends Controller
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

        $missions = Mission::latest()->paginate(5);

        return view('missions.index',compact('missions'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

       
        return view('missions.create');

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

            'numOrdre' => 'required',
            'objetMission' => 'required',
            'destination' => 'required',
            'dateDepart ' => 'required',
            'dateRetour' => 'required',
            'moyen' => 'required',
        ]);

    

        Mission::create($request->all());

    

        return redirect()->route('missions.index')

                        ->with('success','Mission cree avec succee.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\Mission  $mission

     * @return \Illuminate\Http\Response

     */

    public function show(Mission $mission)

    {

        return view('missions.show',compact('mission'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Mission  $mission

     * @return \Illuminate\Http\Response

     */

    public function edit(Mission $mission)

    {

        return view('missions.edit',compact('mission'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Mission  $mission

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Mission $mission)

    {

         request()->validate([

            'numOrdre' => 'required',
            'objetMission' => 'required',
            'destination' => 'required',
            'dateDepart ' => 'required',
            'dateRetour' => 'required',
            'moyen' => 'required',
           
            
            
            

        ]);

    

        $mission->update($request->all());

    

        return redirect()->route('missions.index')

                        ->with('success','Mission mis a jour');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Mission  $mission

     * @return \Illuminate\Http\Response

     */

    public function destroy(Mission $mission)

    {

        $mission->delete();

    

        return redirect()->route('missions.index')

                        ->with('success','Mission supprime');

    }
}
