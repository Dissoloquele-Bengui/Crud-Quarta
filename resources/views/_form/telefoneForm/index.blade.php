<div class="row">
    <div class="col-md-12">
        <div class="form-group mb-3">
            <label for="vc_telefone">Telefone</label>
            <input type="number" name="vc_telefone" class="vc_telefone form-control" value="{{ old('vc_telefone') }}" required>
        </div>
     <div class="form-group mb-3">
            <label for="vc_telefone">Estado do telefone</label>
            <select class="form-control" name="it_estado">
               <option value="1">Activo</option>
               <option value="0">Inactico</option>
            </select>
        </div>
    </div> <!-- /.col -->
</div>
