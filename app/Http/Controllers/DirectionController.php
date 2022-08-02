<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direction;

class DirectionController extends Controller
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

        $directions = Direction::latest()->paginate(5);

        return view('directions.index',compact('directions'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('directions.create');

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

           
        
            'nomDirection' => 'required',
        ]);

    

        Direction::create($request->all());

    

        return redirect()->route('directions.index')

                        ->with('success','Direction cree avec succee.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function show(Direction $direction)

    {

        return view('directions.show',compact('direction'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function edit(Direction $direction)

    {

        return view('directions.edit',compact('direction'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Direction $direction)

    {

         request()->validate([

            
            
            'idDirection' => 'required',
            'nomDirection' => 'required',
            
            

        ]);

    

        $direction->update($request->all());

    

        return redirect()->route('directions.index')

                        ->with('success','Direction mise a jour');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\

     * @return \Illuminate\Http\Response

     */

    public function destroy(Direction $direction)

    {

        $direction->delete();

    

        return redirect()->route('directions.index')

                        ->with('success','Direction supprime');

    }
}
