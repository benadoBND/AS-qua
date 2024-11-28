@extends('layouts.base');

@section('content')
    @foreach($produto as $entity)
        <div>
            <h3>{{ $entity->nome }}</h3>
            <p>{{ $entity->preco }}</p>
            <p>{{ $entity->estoque }}</p>
            <a href="{{ url('produto/'.$entity->id.'/edit') }}">Edit</a>
            <form action="{{ url('produto/'.$entity->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection