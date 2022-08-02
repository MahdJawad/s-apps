<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banque;

class BanqueController extends Controller
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

        $banques = Banque::latest()->paginate(5);

        return view('banques.index',compact('banques'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
        return view('banques.create');

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

           
           
            'nomBanque' => 'required',
            'adress' => 'required',
            'fax ' => 'required',
            'telBanque ' => 'required',
        ]);

    

        Banque::create($request->all());

    

        return redirect()->route('banques.index')

                        ->with('success','Banque cree avec succee.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function show(Banque $banque)

    {

        return view('banques.show',compact('banque'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function edit(Banque $banque)

    {

        return view('banques.edit',compact('banque'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Banque $banque)

    {

         request()->validate([

            
            'nomBanque' => 'required',
            'adress' => 'required',
            'fax ' => 'required',
            'telBanque ' => 'required',
            
            
            

        ]);

    

        $banque->update($request->all());

    

        return redirect()->route('banques.index')

                        ->with('success','Banque mise a jour');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\  

     * @return \Illuminate\Http\Response

     */

    public function destroy($idBanque)

    {

        DB::table("banques")->where('idBanque',$idBanque)->delete();

    

        return redirect()->route('banques.index')

                        ->with('success','Banque supprime');

    }
}
