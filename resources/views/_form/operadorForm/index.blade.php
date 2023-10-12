<div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_nome">Nome</label>
            <input type="text" id="vc_nome" name="vc_nome" class="form-control" value="{{isset($operador) ?$operador->vc_nome: old('vc_nome') }}">
        </div>
    </div> <!-- /.col -->


    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_nif">NIF</label>
            <input id="vc_nif" name="vc_nif" class="form-control" value="{{ isset($operador) ? $operador->vc_nif : old('vc_nif') }}">

        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="yr_ano_fundacao">Ano de Fundação</label>
            <input id="yr_ano_fundacao" name="yr_ano_fundacao" class="form-control" value="{{ isset($operador) ? $operador->yr_ano_fundacao : old('yr_ano_fundacao') }}">

        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_zona_geografica_actuacao">Zona de Actuação</label>
            <input id="vc_zona_geografica_actuacao" name="vc_zona_geografica_actuacao" class="form-control" value="{{ isset($operador) ? $operador->vc_zona_geografica_actuacao : old('vc_zona_geografica_actuacao') }}">

        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_tecnologia_usada">Tecnologias Usadas</label>
            <input id="vc_tecnologia_usada" name="vc_tecnologia_usada" class="form-control" value="{{ isset($operador) ? $operador->vc_tecnologia_usada : old('vc_tecnologia_usada') }}">

        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_site_oficial">Sítio Oficial</label>
            <input id="vc_site_oficial" name="vc_site_oficial" class="form-control" value="{{ isset($operador) ? $operador->vc_site_oficial : old('vc_site_oficial') }}">

        </div>
    </div>



</div>
