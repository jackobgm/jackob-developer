@extends('layouts.app')

@section('content')
    <form method="POST" action="{{route('cart.store')}}">
        @csrf
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" name="id" class="form-control" id="id">
        </div>
        <div class="form-group">
            <label for="name">NOMBRE</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="price">PRECIO</label>
            <input type="text" name="price" class="form-control" id="price">
        </div>
        <div class="form-group">
            <label for="quantity">CANTIDAD</label>
            <input type="text" name="quantity" class="form-control" id="quantity">
        </div>
        <div class="form-group">
            <label for="color">COLOR</label>
            <select class="form-control" name="color" id="color">
                <option value="blanco">blanco</option>
                <option value="azul"> azul</option>
            </select>
            <small class="form-text text-muted">Atributo</small>
        </div>

        <div class="form-group">
            <label for="tamano">TAMAÑO</label>
            <select name="tamano" class="form-control" id="tamano">
                <option value="chico">Chico</option>
                <option value="grande">Grande</option>
            </select>
            <small class="form-text text-muted">Atributo</small>
        </div>
        <button type="submit" class="btn btn-primary">Agregar al carrito</button>
    </form>
    @if (!Cart::isEmpty())
        <table class="table">
            <thead>
            <tr>
                <th sc ope="col">Accion</th>
                <th sc ope="col">#ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Atributos</th>
            </tr>
            </thead>
            <tbody>
            @foreach (Cart::getContent() as $item)
                <tr>
                    <th scope="row">
                        <button>Eliminar</button>
                    </th>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>
                        @foreach ($item->attributes as $key => $attribute)
                            {{$key}}: {{$attribute}}.
                        @endforeach
                    </td>
                    <th scope="row">
                        <form method="POST" action="{{route('cart.destroy',$item->id)}}">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Eliminar</button>
                        </form>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
        <table class="table">
            <thead>
            <tr>
                <th sc ope="col">Items</th>
                <th sc ope="col">Sub total</th>
                <th scope="col">Total</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{Cart::getTotalQuantity()}}</th>
                <th scope="row">{{Cart::getSubTotal()}}</th>
                <th scope="row">{{Cart::getTotal()}}</th>
            </tr>
            </tbody>
        </table>
    @endif
@endsection

