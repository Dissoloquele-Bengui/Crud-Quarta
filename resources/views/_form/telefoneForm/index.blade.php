<div class="row">
    <div class="col-md-12">
        <div class="form-group mb-3">
            <label for="vc_numero">Telefone</label>
            <input type="number" name="vc_numero" class="form-control" value="{{isset($item) ?$item->vc_numero: old('vc_numero') }}" required>
        </div>
     <div class="form-group mb-3">
            <label for="it_estado">Estado do telefone</label>
            <select class="form-control" name="it_estado">
               <option value="1">Activo</option>
               <option value="0">Inactico</option>
            </select>
        </div>
    </div> <!-- /.col -->
</div>
