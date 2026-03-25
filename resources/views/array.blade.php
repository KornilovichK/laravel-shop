@vite(['resources/css/app.css'])
<div class = "everything">
    @foreach($array as $item)
        <div class = "shop-card">
        <img class = img src="{{ $item['path'] }}" alt="{{$item['title']}}">
        <h3 class = "card-title">{{ $item['title'] }}</h3>
        <p class = "price">{{ $item['price'] }} &#8381</p>
        </div>
    @endforeach
</div>

<div class="links">
        <p><a href="/shuffle" class="btn-shuffle">Перемешать массив</a></p>
        <p><a href="/sort" class="btn-sort">Сортировать (по цене)</a></p>
        <p><a href="/filter" class="btn-filter">Фильтр (> 1000)</a></p>
    </div>