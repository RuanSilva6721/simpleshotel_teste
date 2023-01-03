<hr />
<div style="overflow-x:auto;">
@if( (isset($cars)) AND ($cars->count()) > 0)
<table id="tab-principal" class="table-responsive table table-bordered table-striped" >
    <thead>
    <tr>
        <th class="text-center">Modelo</th>
        <th class="text-center">Marca</th>
        <th class="text-center">Versão</th>
        <th class="text-center">Itens do Carro</th>
        <th class="text-center">Adicionar Manutenção</th>
        <th class="text-center">Editar</th>
        <th class="text-center">Deletar</th>
    </tr>
    </thead>
    <tbody data-conteudo-tabela class='results'>

        @foreach($cars as $car)

        @include('line')

        @endforeach

    </tbody>

</table>
<br>
    {{ $cars->onEachSide(5)->links() }}
<br>

@else
    <p>Você ainda não possui carros cadastrados, <a href="{{ route('car.create') }}">adicionar carros</a></p>
@endif
</div>
