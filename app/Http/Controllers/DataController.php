<?php                                                                                                                   
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
class DataController extends Controller


{
    public function showAllData()
    {
            //return view('allData');
            $Darbinieki = new Data();
            //return $data->all();
            //dd($data->all());

            return view('allData', ['Darbinieki' => $Darbinieki->orderBy('id', 'asc' )->get()]);

   }

   public function delete($id)
    {
      Data::find($id)->delete();
      return redirect()->to('/data/allData')->with('success', 'Ieraksts dzēsts');
    }



public function details($id)
{
$Darbinieki = new Data();
  //dd($data->all());
return view  ('details',['Darbinieki'=>$Darbinieki->find($id)]);
}




// public function details($id)
// {
//     $data = Data::find($id);

//     if (!$data) {
//         abort(404, 'Ieraksts netika atrasts.');
//     }

//     return view('details',  ['data' => $data->find($id)]);
// }



public function NewSubmit(Request $dati)
{

  $dati->validate([
    'Vards' => 'required|min:3|max:15',
    'Uzvards' => 'required|max:20',
  ]);

  //datu saglabāšana
  $Darbinieki = new Data();
  $Darbinieki->Vards = $dati->input('Vards');
  $Darbinieki->Uzvards = $dati->input('Uzvards');
  $Darbinieki->save();

  return redirect('/contact')->with('success', 'Ieraksts pievienots');
}





  public function edit($id)
  {
    $Darbinieki = new Data;
    return view('edit', ['data' => $Darbinieki->find($id)]);
  }





  public function editSumbit($id,Request $dati)
  {
    $Darbinieki = Data::find($id);
    $Darbinieki->Vards = $dati->input('Vards');
    $Darbinieki->Uzvards = $dati->input('Uzvards');
    $Darbinieki->save();
    return redirect()->to('/data/allData')->with('success', 'Ieraksts tika izmainīts');
  }






};









