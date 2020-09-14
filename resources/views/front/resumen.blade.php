<div class="col-sm-2 bg-light mt-4">
    <h2 class="text-center">Resumen</h2>
    @if (count(Cart::getContent()))
        @foreach (Cart::getContent() as $item)
            {{$item->name}}: {{$item->quantity}} x ${{$item->price}} <br>
        @endforeach
        <hr> Total: ${{number_format(Cart::getSubTotal(),2)}}
        <a href="/carrito/checkout" class="btn btn-outline-info rounded-pill btn-block">Ver carrito</a>
    @else
        <p class="text-center">Carrito vacio </p>    
    @endif
</div>