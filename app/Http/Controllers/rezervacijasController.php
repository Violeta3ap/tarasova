<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rezervacijas;
class rezervacijasController extends Controller
{
    

    public function showAllData()
    {
            //return view('allData');
            $rezervacijas = new rezervacijas();
            //return $data->all();
            //dd($data->all());

            return view('rezervacijas', ['data' => $rezervacijas->orderBy('id', 'asc' )->get()]);

   }

   public function delete($id)
    {
      rezervacijas::find($id)->delete();
      return redirect()->to('/data/rezervacijas')->with('success', 'Ieraksts dzēsts');
    }



public function details($id)
{
$rezervacijas = new rezervacijas();
  //dd($data->all());
return view  ('details',['rezervacijas'=>$rezervacijas->find($id)]);
}




// public function details($id)
// {
//     $data = Data::find($id);

//     if (!$data) {
//         abort(404, 'Ieraksts netika atrasts.');
//     }

//     return view('details',  ['data' => $data->find($id)]);
// }



public function NewSubmit(Request $rezervacijas)
{
    $rezervacijas->validate([
        'NumuraID' => 'required|min:3|max:15',
        'KlientaID' => 'required|email|max:20',
        'IebrauksanasDatums' => 'required|min:3|max:20',
        'IzbrauksanasDatums' => 'required|min:3|max:2048',
          'RezervacijasStatuss' => 'required|min:3|max:20',
        'DarbiniekaID' => 'required|min:3|max:2048',
    ]);

    //datu sagl
    $rezervacijas = new rezervacijas();
    $rezervacijas->NumuraID = $rezervacijas->input('NumuraID');
    $rezervacijas->KlientaID = $rezervacijas->input('KlientaID');
    $rezervacijas->IebrauksanasDatums = $rezervacijas->input('Iebraukšanas datums');
    $rezervacijas->IzbrauksanasDatums = $rezervacijas->input('Izbraukšanas datums');
        $rezervacijas->RezervacijasStatuss = $rezervacijas->input('Rezervācijas statuss');
    $rezervacijas->DarbiniekaID = $rezervacijas->input('DarbiniekaID ');
    $rezervacijas->save();

    return redirect('/contact')->with('success', 'Ieraksts pievienots');
}





  public function edit($id)
  {
    $rezervacijas = new rezervacijas;
    return view('editrezervacijas', ['rezervacijas' => $rezervacijas->find($id)]);
  }




  public function editSumbit($id,Request $numuri)
  {
$rezervacijas=rezervacijas::find($id);
 $rezervacijas->NumuraID = $rezervacijas->input('NumuraID');
    $rezervacijas->KlientaID = $rezervacijas->input('KlientaID');
    $rezervacijas->IebrauksanasDatums = $rezervacijas->input('Iebraukšanas datums');
    $rezervacijas->IzbrauksanasDatums = $rezervacijas->input('Izbraukšanas datums');
        $rezervacijas->RezervacijasStatuss = $rezervacijas->input('Rezervācijas statuss');
    $rezervacijas->DarbiniekaID = $rezervacijas->input('DarbiniekaID ');
    $rezervacijas->save();
return redirect()->to('/data/rezervacijas')->with('success', 'Ieraksts tika izmainīts');

 }  




public function new()
    {     
      $types = DB::table('type')->get();
      // dd($types->get());


      return view('contacts', ['types' =>$types ]);

     
    }

};