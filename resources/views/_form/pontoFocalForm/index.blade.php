<div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_pNome">Primeiro nome</label>
            <input type="text" name="vc_pNome" class="form-control" value="{{isset($item) ?$item->vc_pNome: old('vc_pNome') }}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_nomeMeio">Nome do meio</label>
            <input type="text" name="vc_nomeMeio" class="form-control" value="{{isset($item) ?$item->vc_nomeMeio: old('vc_nomeMeio') }}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_uNome">Último nome</label>
            <input type="text" name="vc_uNome" class="form-control" value="{{isset($item) ?$item->vc_uNome: old('vc_uNome') }}" required>
        </div>
    </div>
</div> <!-- /.col -->

