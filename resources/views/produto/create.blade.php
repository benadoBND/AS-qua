<form action="{{ url('produto') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="text" name="preco" placeholder="Preco" required>
    <input type="number" name="estoque" placeholder="Estoque" required>
    <button type="submit">Create Produto</button>

    
</form>