{{-- @extends('layouts._includes.admin.body') --}}
{{-- @section('titulo','Cadastrar Operador') --}}

{{-- @section('conteudo') --}}
    <div class="card shadow mb-4">
        {{-- <div class="card-header">
        <strong class="card-title">Cadastrar Operador</strong>
        </div> --}}
        <form action="{{route('admin.operador.store')}}" method="post">
            @csrf
            <div class="card-body">
                @include('_form.operadorForm.index')
                <button type="submit" class="btn btn-primary w-md">Cadastrar</button>
            </div>
        </form>
    </div>

@if (session('operador.create.success'))
    <script>
        Swal.fire(
            'Operador Cadastrada com sucesso!',
            '',
            'success'
        )
    </script>
@endif
@if (session('operador.create.error'))
    <script>
        Swal.fire(
            'Erro ao Cadastrar Operador!',
            '',
            'error'
        )
    </script>
@endif

{{-- @endsection --}}
