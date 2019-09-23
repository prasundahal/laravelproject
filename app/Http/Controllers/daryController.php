<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\darys;

class daryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   


    public function index()
   
    {
         return view('darys/index');

   /*return view('supliers.index', compact('supliers'));


       
        $suplier['supliers'] = suplier::orderBy('id','desc')->paginate(8);
   
        return view('supliers.index',$suplier);
                    */

    
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
 public function part()
    {
         return view('supliers.part');
         
    }
    
  public function stor(Request $request)

    {
         
       $request->validate([
            
            'particulars'=>'required',
            'brand'=>'required'
            ]);

        $part = new part([
            
            'particulars' => $request->get('particulars'),
            'brand' => $request->get('brand')
            
     
        ]);

        $part->save();

        return view('supliers.create');
            
        
    }
    public function create()
    {
         return view('supliers.create');
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
        $request->validate([
            'sellers_name'=>'required',
            'address'=>'required',
            'sellers_vatpan'=>'required'
        ]);

        $suplier = new suplier([
            'sellers_name' => $request->get('sellers_name'),
            'address' => $request->get('address'),
            'sellers_vatpan' => $request->get('sellers_vatpan')
        ]);
        
        
        $suplier_id=$suplier->id;
        $suplier->save();
        
        return view('supliers.create',compact('suplier_id'));
        
        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
    //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
    {       // $suplier = suplier::find($id);

        //return response()->json($suplier);

   
          $suplier = suplier::find($id);
        return view('supliers.edit', compact('suplier'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'sellers_name'=>'required',
            'address'=>'required',
            'sellers_vatpan'=>'required'
        ]);

        $suplier = suplier::find($id);
        $suplier->sellers_name =  $request->get('sellers_name');
        $suplier->address = $request->get('address');
        $suplier->sellers_vatpan = $request->get('sellers_vatpan');
        
        $suplier->save();

        return redirect('/supliers')->with('success', ' updated!');
    }
  /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suplier = suplier::find($id);
        $suplier->delete();

        return redirect('/supliers')->with('success', ' deleted!');
    }


  


}
