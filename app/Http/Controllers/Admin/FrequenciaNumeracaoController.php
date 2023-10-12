<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\FrequenciaNumeracao;
use App\Models\Logger;
use Illuminate\Http\Request;

class FrequenciaNumeracaoController extends Controller
{


       public function __construct(){

        $this->logger=new Logger();

    }
    public function loggerData($mensagem){

        $this->logger->Log('info',$mensagem);
    }



    public function index(){
        $data['frequencia_numeracaos']=FrequenciaNumeracao::all();
        $this->loggerData("Listou Frequencia|Numeração");

        return view('admin.frequencia_numeracao.index', $data);

    }



    public function create(){


        return view('admin.frequencia_numeracao.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request){
        $request->validate([
            'vc_frequencia'=>'required',
            'vc_numeracao'=>'required',
        ],[
            'vc_frequencia.required'=>'Frequência é um campo obrigatório',
            'vc_numeracao.required'=>'Numeração é um campo obrigatório',

        ]);
        //dd($request);
        try{
            $frequencia_numeracao=FrequenciaNumeracao::create([
                'vc_frequencia'=>$request->vc_frequencia,
                'vc_numeracao'=>$request->vc_numeracao,


            ]);

             $this->loggerData(" Cadastrou a frequencia|numeracao " . $request->vc_frequencia);

            return redirect()->back()->with('frequencia_numeracao.create.success',1);

         } catch (\Throwable $th) {
            throw $th;
            dd($th);
            return redirect()->back()->with('frequencia_numeracao.create.error',1);
        }


     }


      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        //
    }

    public function edit(int $id)
    {
        //
        $data["frequencia_numeracao"] = FrequenciaNumeracao::find($id);

        return view('admin.frequencia_numeracao.edit.index',$data);
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
        $request->validate([
            'vc_frequencia'=>'required',
            'vc_numeracao'=>'required',
        ],[
            'vc_frequencia.required'=>'Frequência é um campo obrigatório',
            'vc_numeracao.required'=>'Numeração é um campo obrigatório',

        ]);
          try {
             //code...
             $frequencia_numeracao = FrequenciaNumeracao::find($id);

             $c =FrequenciaNumeracao::findOrFail($id)->update([
                'vc_frequencia'=>$request->vc_frequencia,
                'vc_numeracao'=>$request->vc_numeracao,

             ]);
            $this->loggerData("Editou a frequencia|numeracao que possui o id $frequencia_numeracao->id  e frequencia  $frequencia_numeracao->vc_frequencia");
             return redirect()->back()->with('frequencia_numeracao.update.success',1);
          } catch (\Throwable $th) {
             return redirect()->back()->with('frequencia_numeracao.update.error',1);
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
            $frequencia_numeracao =FrequenciaNumeracao::findOrFail( $id);

            FrequenciaNumeracao::findOrFail($id)->delete();
            $this->loggerData(" Eliminou o frequencia|numeracao , ($frequencia_numeracao->vc_frequencia)");
            return redirect()->back()->with('frequencia_numeracao.destroy.success',1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('frequencia_numeracao.destroy.error',1);
        }
    }

    public function purge(int $id)
    {
        //
        try {
            //code...
            $frequencia_numeracao = FrequenciaNumeracao::findOrFail($id);
            FrequenciaNumeracao::findOrFail($id)->forceDelete();
            $this->loggerData(" Purgou a frequencia|numeracao  ($frequencia_numeracao->vc_frequencia)");
            return redirect()->back()->with('frequencia_numeracao.purge.success',1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('frequencia_numeracao.purge.error',1);
        }
    }


}
