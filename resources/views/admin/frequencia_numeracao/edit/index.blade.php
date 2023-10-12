{{-- @extends('layouts._includes.admin.body')
@section('titulo','Actualizar Operador')

@section('conteudo') --}}
    <div class="card shadow mb-4">
        {{-- <div class="card-header">
        <strong class="card-title">Actualizar Frequência|Numeração</strong>
        </div> --}}
        <form action="{{ route('admin.frequencia_numeracao.update', ['id' => $frequencia_numeracao->id]) }}
" method="post">
            @csrf
            <div class="card-body">
                @include('_form.frequenciaNumeracaoForm.index')
                <button type="submit" class="btn btn-primary w-md">Actualizar</button>
            </div>
        </form>
    </div>

@if (session('frequencia_numeracao.update.success'))
    <script>
        Swal.fire(
            'Frequência|Numeração Actualizada com sucesso!',
            '',
            'success'
        )
    </script>
@endif
@if (session('frequencia_numeracao.update.error'))
    <script>
        Swal.fire(
            'Erro ao Actualizar Frequência|Numeração!',
            '',
            'error'
        )
    </script>
@endif

{{-- @endsection --}}
