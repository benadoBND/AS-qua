<form action="{{ url('produto/'.$produto->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" placeholder="Nome" value="{{$produto->nome}}" required>
    <input type="text" name="preco" placeholder="Preco" value="{{$produto->preco}}" required>
    <input type="number" name="estoque" placeholder="Estoque" value="{{$produto->estoque}}" required>
    <button type="submit">Edti Produto</button>
</form>