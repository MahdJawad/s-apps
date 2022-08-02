<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeConge;

class TypeCongeController extends Controller
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

        $types = TypeConge::latest()->paginate(5);

        return view('type.index',compact('types'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('type.create');

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

    

        TypeConge::create($request->all());

    

        return redirect()->route('type.index')

                        ->with('success','Type conge ajouter avec succee.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\TypeConge  $type

     * @return \Illuminate\Http\Response

     */

    public function show(TypeConge $type)

    {

        return view('type.show',compact('type'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\TypeConge  $type

     * @return \Illuminate\Http\Response

     */

    public function edit(TypeConge $type)

    {

        return view('type.edit',compact('type'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\TypeConge  $type

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, TypeConge $type)

    {

         request()->validate([

            
            
            'type' => 'required',
           
            
            

        ]);

    

        $type->update($request->all());

    

        return redirect()->route('types.index')

                        ->with('success','Type conge mis a jour');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\TypeConge  $type

     * @return \Illuminate\Http\Response

     */

    public function destroy(TypeConge $type)

    {

        $type->delete();

    

        return redirect()->route('type.index')

                        ->with('success','Type conge supprime');

    }
}
