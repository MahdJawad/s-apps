<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Departement;

class ServiceController extends Controller
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

        $services = Service::join('departements', 'services.idDepartement', '=', 'departements.idDepartement')
        ->get(['services.*', 'departements.*']);

        return view('services.index',compact('services'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
        $departements = Departement::all();
        return view('services.create',compact('departements'));

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

           
        
             
            
            'nomService' => 'required',
        ]);

    

        Service::create($request->all());

    

        return redirect()->route('services.index')

                        ->with('success','Service cree avec succee.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function show(Service $service)

    {

        return view('services.show',compact('service'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function edit(Service $service)

    {

        return view('services.edit',compact('service'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Service $service)

    {

         request()->validate([

            
            
            'idDepartement' => 'required',
            'nomService' => 'required',
            
            

        ]);

    

        $service->update($request->all());

    

        return redirect()->route('services.index')

                        ->with('success','Service mis a jour');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function destroy(Service $service)

    {

        $service->delete();

    

        return redirect()->route('services.index')

                        ->with('success','Service supprime');

    }
}
