<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avancement;
use App\Models\Categorie;

class AvancementController extends Controller
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

        $avancements = Avancement::latest()->paginate(5);

        return view('avancements.index',compact('avancements'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
        $categories = Categorie::all();
        return view('avancements.create',compact('categories'));

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

           
           
            'dateDecision' => 'required',
        ]);

    

        Avancement::create($request->all());

    

        return redirect()->route('avancements.index')

                        ->with('success','Avancement cree avec succee.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\Avancement  $avancement

     * @return \Illuminate\Http\Response

     */

    public function show(Avancement $avancement)

    {

        return view('avancements.show',compact('avancement'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Avancement  $avancement

     * @return \Illuminate\Http\Response

     */

    public function edit(Avancement $avancement)

    {

        return view('avancements.edit',compact('avancement'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Avancement  $avancement

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Avancement $avancement)

    {

         request()->validate([

            
            'numArrete' => 'required',
            'dateDecision' => 'required',
            
            
            

        ]);

    

        $avancement->update($request->all());

    

        return redirect()->route('avancements.index')

                        ->with('success','Avancement mise a jour');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Avancement  $avancement

     * @return \Illuminate\Http\Response

     */

    public function destroy($num_arrete)

    {

        DB::table("avancements")->where('num_arrete',$num_arrete)->delete();

    

        return redirect()->route('avancements.index')

                        ->with('success','Avancement supprime');

    }
}
