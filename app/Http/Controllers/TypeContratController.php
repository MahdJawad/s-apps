<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TypeContratController;
use App\Models\TypeContrat;

class TypeContratController extends Controller
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

        $types = TypeContrat::latest()->paginate(5);

        return view('types.index',compact('types'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('types.create');

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

           
        
            
            'type' => 'required',
        ]);

    

        TypeContrat::create($request->all());

    

        return redirect()->route('types.index')

                        ->with('success','Type contrat cree avec succee.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\TypeContrat  $type

     * @return \Illuminate\Http\Response

     */

    public function show(TypeContrat $type)

    {

        return view('types.show',compact('type'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\TypeContrat  $type

     * @return \Illuminate\Http\Response

     */

    public function edit(TypeContrat $type)

    {

        return view('types.edit',compact('type'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\TypeContrat  $type

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, TypeContrat $type)

    {

         request()->validate([

            
            
            'idTypeContrat' => 'required',
            'type' => 'required',
           
            
            

        ]);

    

        $type->update($request->all());

    

        return redirect()->route('types.index')

                        ->with('success','Type contrat mise a jour');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\TypeContrat  $type

     * @return \Illuminate\Http\Response

     */

    public function destroy(TypeContrat $type)

    {

        $type->delete();

    

        return redirect()->route('types.index')

                        ->with('success','Type contrat supprime');

    }
}
