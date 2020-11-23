<ul>
    @foreach ($itemlists as $itemlist)
    <li>商品名:{{ $itemlist->name }} 価格:{{ $itemlist->price }}</li>
    @endforeach
</ul>
