<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\PontoFocal;
use App\Models\Logger;
use Illuminate\Http\Request;

class PontoFocalController extends Controller
{


       public function __construct(){

        $this->logger=new Logger();

    }
    public function loggerData($mensagem){

        $this->logger->Log('info',$mensagem);
    }



    public function index(){
        $data['ponto_focals']=PontoFocal::all();
        $this->loggerData("Listou Pontos Focais");
        return view('admin.ponto_focal.index', $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request){

        try{
            $ponto_focal=PontoFocal::create([
                'vc_pNome'=>$request->vc_pNome,
                'vc_nomeMeio' =>$request->vc_nomeMeio,
                'vc_uNome'=>$request->vc_uNome,
                'it_estado' =>$request->it_estado,
            ]);

             $this->loggerData(" Cadastrou Ponto Focal " . $request->vc_pNome." ". $request->vc_nomeMeio." ".$request->vc_uNome);

            return redirect()->back()->with('success', ['status' => '1', 'sms' => 'Cadastrado com sucesso']);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', ['status' => '1', 'sms' => 'Erro ao cadastrar']);
        }


     }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



     public function update(Request $request, int $id)
     {
       try {
             //code...
             $ponto_focal = PontoFocal::find($id);

             PontoFocal::findOrFail($id)->update([
                'vc_pNome'=>$request->vc_pNome,
                'vc_nomeMeio' =>$request->vc_nomeMeio,
                'vc_uNome'=>$request->vc_uNome,
                'it_estado' =>$request->it_estado
             ]);
            
            $this->loggerData("Editou o telefone que possui o id $ponto_focal->id  e nome  $ponto_focal->vc_pNome $ponto_focal->vc_nomeMeio $ponto_focal->vc_uNome");
            return redirect()->back()->with('success', ['status' => '1', 'sms' => 'Editado com sucesso']);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', ['status' => '1', 'sms' => 'Erro ao editar']);
        }
     }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
        try {
            //code...
            $ponto_focal =PontoFocal::findOrFail( $id);

            PontoFocal::findOrFail($id)->delete();
            $this->loggerData(" Eliminou o ponto foval , ($ponto_focal->vc_pNome $ponto_focal->vc_nomeMeio $ponto_focal->vc_uNome)");
            return redirect()->back()->with('success', ['status' => '1', 'sms' => 'Eliminado com sucesso']);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', ['status' => '1', 'sms' => 'Erro ao eliminar']);
        }
    }

    public function purge(int $id)
    {
        //
        try {
            //code...
            $ponto_focal = PontoFocal::findOrFail($id);
            PontoFocal::findOrFail($id)->forceDelete();
            $this->loggerData(" Purgou o ponto foval , ($ponto_focal->vc_pNome $ponto_focal->vc_nomeMeio $ponto_focal->vc_uNome)");
            return redirect()->back()->with('success', ['status' => '1', 'sms' => 'Purgou com sucesso']);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', ['status' => '1', 'sms' => 'Erro ao purgar']);
        }
    }


}
