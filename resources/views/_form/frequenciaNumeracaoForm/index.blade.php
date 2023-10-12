<div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_frequencia">Frequencia</label>
            <input type="text" id="vc_frequencia" name="vc_frequencia" class="form-control" value="{{isset($frequencia_numeracao) ?$frequencia_numeracao->vc_frequencia: old('vc_frequencia') }}">
        </div>
    </div> <!-- /.col -->
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_numeracao">Numeração</label>
            <input type="text" id="vc_numeracao" name="vc_numeracao" class="form-control" value="{{isset($frequencia_numeracao) ?$frequencia_numeracao->vc_numeracao: old('vc_frequencia') }}">
        </div>
    </div> <!-- /.col -->
</div>
