<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
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

        $categories = Categorie::latest()->paginate(5);

        return view('categories.index',compact('categories'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('categories.create');

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

           
            
            'libelleCat' => 'required',
        ]);

    

        Categorie::create($request->all());

    

        return redirect()->route('categories.index')

                        ->with('success','Categorie cree avec succee.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\Categorie  $categorie

     * @return \Illuminate\Http\Response

     */

    public function show(Categorie $categorie)

    {

        return view('categories.show',compact('categorie'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Categorie  $categorie

     * @return \Illuminate\Http\Response

     */

    public function edit(Categorie $categorie)

    {

        return view('categories.edit',compact('categorie'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Categorie  $categorie

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Categorie $categorie)

    {

         request()->validate([

            
            
            'libelleCat' => 'required',
            
            
            

        ]);

    

        $categorie->update($request->all());

    

        return redirect()->route('categories.index')

                        ->with('success','Categorie mise a jour');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Categorie  $categorie

     * @return \Illuminate\Http\Response

     */

    public function destroy(Categorie $categorie)

    {

        $categorie->delete();

    

        return redirect()->route('categories.index')

                        ->with('success','Categorie supprime');

    }
}
