<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\numuri;
class numuriController extends Controller
{
    

    public function showAllData()
    {
            //return view('allData');
            $numuri = new numuri();
            //return $data->all();
            //dd($data->all());

            return view('numuri', ['data' => $numuri->orderBy('id', 'asc' )->get()]);

   }

   public function delete($id)
    {
      numuri::find($id)->delete();
      return redirect()->to('/data/numuri')->with('success', 'Ieraksts dzēsts');
    }



public function details($id)
{
$numuri = new numuri();
  //dd($data->all());
return view  ('numuridetails',['numuri'=>$numuri->find($id)]);
}




// public function details($id)
// {
//     $data = Data::find($id);

//     if (!$data) {
//         abort(404, 'Ieraksts netika atrasts.');
//     }

//     return view('details',  ['data' => $data->find($id)]);
// }



public function NewSubmit(Request $numuri)
{
    $numuri->validate([
        'Tips' => 'required|min:3|max:15',
        'CenaParNakti' => 'required|min:3|max:20',
        'Statuss' => 'required|min:3|max:20',
    ]);

    //datu sagl
    $numuri = new numuri();
    $numuri->Tips = $numuri->input('Tips');
    $numuri->CenaParNakti = $numuri->input('Cena par nakti');
    $numuri->Statuss = $numuri->input('Statuss');
  
    $numuri->save();

    return redirect('/contact')->with('success', 'Ieraksts pievienots');
}





  public function edit($id)
  {
    $numuri = new numuri;
    return view('edit', ['numuri' => $numuri->find($id)]);
  }




  public function editSumbit($id,Request $numuri)
  {
$numuri=numuri::find($id);
$numuri->Tips = $numuri->input('Tips');
$numuri->CenaParNakti = $numuri->input('Cena par nakti');
$numuri->Statuss = $numuri->input('Statuss');
$numuri->save();
return redirect()->to('/data/numuri')->with('success', 'Ieraksts tika izmainīts');

 }  


public function new()
    {     
      $types = DB::table('type')->get();
      // dd($types->get());


      return view('contacts', ['types' =>$types ]);

     
    }



};
