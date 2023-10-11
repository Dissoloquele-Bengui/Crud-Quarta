<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Operador;
use App\Models\Logger;
use Illuminate\Http\Request;

class OperadorController extends Controller
{


       public function __construct(){

        $this->logger=new Logger();

    }
    public function loggerData($mensagem){

        $this->logger->Log('info',$mensagem);
    }



    public function index(){
        $data['operadores']=Operador::all();
        $this->loggerData("Listou Operadores");

        return view('admin.operador.index', $data);

    }



    public function create(){


        return view('admin.operador.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request){
        $request->validate([
            'vc_nome'=>'required',
            'vc_nif'=>'required',
            'yr_ano_fundacao'=>'required',

        ],[
            'vc_nome.required'=>'O nome é um campo obrigatório',
            'vc_nif.required'=>'O nif é um campo obrigatório',
            'yr_ano_fundacao.required'=>'O o nao de fundação é um campo obrigatório',

        ]);
        //dd($request);
        try{
            $operador=Operador::create([
                'vc_nome'=>$request->vc_nome,
                'vc_nif'=>$request->vc_nif,
                'yr_ano_fundacao'=>$request->yr_ano_fundacao,
                'vc_zona_geografica_actuacao'=>$request->vc_zona_geografica_actuacao,
                'vc_tecnologia_usada'=>$request->vc_tecnologia_usada,
                'vc_site_oficial'=>$request->vc_site_oficial

            ]);

             $this->loggerData(" Cadastrou a operador " . $request->vc_nome);

            return redirect()->back()->with('operador.create.success',1);

         } catch (\Throwable $th) {
            throw $th;
            dd($th);
            return redirect()->back()->with('operador.create.error',1);
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
        $data["operador"] = Operador::find($id);

        return view('admin.operador.edit.index',$data);
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
            'vc_nome'=>'required',
            'vc_nif'=>'required',
            'yr_ano_fundacao'=>'required',

        ],[
            'vc_nome.required'=>'O nome é um campo obrigatório',
            'vc_nif.required'=>'O nif é um campo obrigatório',
            'yr_ano_fundacao.required'=>'O o nao de fundação é um campo obrigatório'
        ]);
          try {
             //code...
             $operador = operador::find($id);

             $c =Operador::findOrFail($id)->update([
                'vc_nome'=>$request->vc_nome,
                'vc_nif'=>$request->vc_nif,
                'yr_ano_fundacao'=>$request->yr_ano_fundacao,
                'vc_zona_geografica_actuacao'=>$request->vc_zona_geografica_actuacao,
                'vc_tecnologia_usada'=>$request->vc_tecnologia_usada,
                'vc_site_oficial'=>$request->vc_site_oficial
             ]);
            $this->loggerData("Editou a operador que possui o id $operador->id  e nome  $operador->vc_nome");
             return redirect()->back()->with('operador.update.success',1);
          } catch (\Throwable $th) {
             return redirect()->back()->with('operador.update.error',1);
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
            $operador =Operador::findOrFail( $id);

            Operador::findOrFail($id)->delete();
            $this->loggerData(" Eliminou o operador , ($operador->vc_nome)");
            return redirect()->back()->with('operador.destroy.success',1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('operador.destroy.error',1);
        }
    }

    public function purge(int $id)
    {
        //
        try {
            //code...
            $operador = Operador::findOrFail($id);
            Operador::findOrFail($id)->forceDelete();
            $this->loggerData(" Purgou a operador  ($operador->vc_nome)");
            return redirect()->back()->with('operador.purge.success',1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('operador.purge.error',1);
        }
    }


}
