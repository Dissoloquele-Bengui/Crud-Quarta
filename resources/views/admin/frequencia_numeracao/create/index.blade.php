{{-- @extends('layouts._includes.admin.body') --}}
{{-- @section('titulo','Cadastrar categoriaTituloHabitantes') --}}

{{-- @section('conteudo') --}}
    <div class="card shadow mb-4">
        <div class="card-header">
        <strong class="card-title">Cadastrar Frequencia|Numeração</strong>
        </div>
        <form action="{{route('admin.frequencia_numeracao.store')}}" method="post">
            @csrf
            <div class="card-body">
                @include('_form.frequenciaNumeracaoForm.index')
                <button type="submit" class="btn btn-primary w-md">Cadastrar</button>
            </div>
        </form>
    </div>

@if (session('frequencia_numeracao.create.success'))
    <script>
        Swal.fire(
            'Frequencia|Numeração Cadastrada com sucesso!',
            '',
            'success'
        )
    </script>
@endif
@if (session('frequencia_numeracao.create.error'))
    <script>
        Swal.fire(
            'Erro ao Cadastrar Frequencia|Numeração!',
            '',
            'error'
        )
    </script>
@endif

{{-- @endsection --}}
