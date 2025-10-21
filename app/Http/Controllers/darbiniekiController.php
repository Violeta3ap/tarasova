<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\darbinieki;

class darbiniekiController extends Controller
{
   
    public function showAllData()
    {
            //return view('allData');
            $darbinieki = new darbinieki();
            //return $data->all();
            //dd($data->all());

            return view('darbinieki', ['data' => $darbinieki->orderBy('id', 'asc' )->get()]);

   }

   public function delete($id)
    {
      darbinieki::find($id)->delete();
      return redirect()->to('/data/darbinieki')->with('success', 'Ieraksts dzēsts');
    }



public function details($id)
{
$darbinieki = new darbinieki();
  //dd($data->all());
return view  ('darbiniekidetails',['darbinieki'=>$darbinieki->find($id)]);
}




// public function details($id)
// {
//     $data = Data::find($id);

//     if (!$data) {
//         abort(404, 'Ieraksts netika atrasts.');
//     }

//     return view('details',  ['data' => $data->find($id)]);
// }



public function NewSubmit(Request $darbinieki)
{
    $darbinieki->validate([
        'Vards' => 'required|min:3|max:15',
        'Uzvards' => 'required|email|max:20',
    ]);

    //datu sagl
    $darbinieki = new darbinieki();
    $darbinieki->Vards = $darbinieki->input('Vārds');
    $darbinieki->Uzvards = $darbinieki->input('Uzvārds');
    $darbinieki->save();

    return redirect('/contact')->with('success', 'Ieraksts pievienots');
}





  public function edit($id)
  {
    $darbinieki = new darbinieki;
    return view('darbiniekiedit', ['darbinieki' => $darbinieki->find($id)]);
  }




  public function editSumbit($id,Request $darbinieki)
  {
$darbinieki=darbinieki::find($id);
$darbinieki->Vards = $darbinieki->input('Vārds');
$darbinieki->Uzvards = $darbinieki->input('Uzvārds');
$darbinieki->save();
return redirect()->to('/data/darbinieki')->with('success', 'Ieraksts tika izmainīts');

 }  



public function new()
    {     
      $types = DB::table('type')->get();
      // dd($types->get());


      return view('contacts', ['types' =>$types ]);

     
    }





};




