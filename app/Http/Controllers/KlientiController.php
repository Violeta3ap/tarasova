<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\klienti;
class KlientiController extends Controller
{
    

    public function showAllData()
    {
            //return view('allData');
            $klienti = new klienti();
            //return $data->all();
            //dd($data->all());

            return view('klienti', ['data' => $klienti->orderBy('id', 'asc' )->get()]);

   }

   public function delete($id)
    {
      klienti::find($id)->delete();
      return redirect()->to('/data/klienti')->with('success', 'Ieraksts dzēsts');
    }



public function details($id)
{
$klienti = new klienti();
  //dd($data->all());
return view  ('klientidetails',['klienti'=>$klienti->find($id)]);
}




// public function details($id)
// {
//     $data = Data::find($id);

//     if (!$data) {
//         abort(404, 'Ieraksts netika atrasts.');
//     }

//     return view('details',  ['data' => $data->find($id)]);
// }



public function NewSubmit(Request $klienti)
{
    $klienti->validate([
        'Vards' => 'required|min:3|max:15',
        'Uzvards' => 'required|email|max:20',
        'Epasts' => 'required|min:3|max:20',
        'TelefonaNumurs' => 'required|min:3|max:2048',
    ]);

    //datu sagl
    $klienti = new klienti();
    $klienti->Vards = $klienti->input('Vārds');
    $klienti->Uzvards = $klienti->input('Uzvārds');
    $klienti->Epasts = $klienti->input('E-pasts');
    $klienti->TelefonaNumurs = $klienti->input('Telefona numurs');
    $klienti->save();

    return redirect('/contact')->with('success', 'Ieraksts pievienots');
}





  public function edit($id)
  {
    $klienti = new klienti;
    return view('klientiedit', ['klienti' => $klienti->find($id)]);
  }




  public function editSumbit($id,Request $klienti)
  {
$klienti=klienti::find($id);
$klienti->Vards = $klienti->input('Vārds');
$klienti->Uzvards = $klienti->input('Uzvārds');
$klienti->Epasts = $klienti->input('E-pasts');
$klienti->TelefonaNumurs = $klienti->input('Telefona numurs');
$klienti->save();
return redirect()->to('/data/klienti')->with('success', 'Ieraksts tika izmainīts');

 }  






};


