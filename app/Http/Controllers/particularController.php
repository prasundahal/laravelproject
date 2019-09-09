<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\particular;
use App\suplier;
class particularController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $particulars = particular::all();

        return view('particulars.index', compact('particulars'));
    }




 public function creates($suplier_id)
{
   
                
               $particulars = particular::all();
               return view ('particulars.create', compact('particulars','suplier_id'));
        
         
 }






public function Showdrop(Request $request)

{

   $particulars = particular::all();
    return view('parts.index', compact('parts'));

}





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($suplier_id)
             {
               
               $particulars = particular::all();
               return view ('particulars.create', compact('particulars','suplier_id'));
        
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
            
            'suplier_id'=>'required',
            'particulars'=>'required',
            'quantity'=>'required|numeric',
            'rateperunit'=>'required|numeric',
            'amount'=>'required|numeric',
            'piece'=>'required|numeric'
        ]);
        $particular = new particular([
            'suplier_id' => $request->get('suplier_id'),
           'particulars' => $request->get('particulars'),
            'quantity' => $request->get('quantity'),
            'rateperunit' => $request->get('rateperunit'),
            'piece' => $request->get('piece'),
            'amount' => $request->get('amount')
            
        ]);
        $particular->save();
        return redirect('/particulars')->with('success', 'saved!');


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
    {
        $particular = particular::find($id);
        return view('particulars.edit', compact('particular')); 
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
             'particulars'=>'required',
            'quantity'=>'required',
            'rateperunit'=>'required',
            'amount'=>'required',
            'piece'=>'required'
        ]);


       $particular = new particular([
            'suplier_id' => $request->get('suplier_id'),
           'particulars' => $request->get('particulars'),
            'quantity' => $request->get('quantity'),
            'rateperunit' => $request->get('rateperunit'),
           'piece' => $request->get('piece'),
            'amount' => $request->get('amount')

            
        ]);
        $particular->save();

        return redirect('/particulars')->with('success', ' updated!');
    }  

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $particular = particular::find($id);
        $particular->delete();

        return redirect('/particulars')->with('success', ' deleted!');
    }


   }