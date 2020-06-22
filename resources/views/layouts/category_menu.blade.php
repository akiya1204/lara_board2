<div id="category">
    <ul class="list-inline">
        <li class="list-inline-item">
            <a href="{{ route('list') }}">全て</a>
        </li>
        @foreach ($category as $value)
            <li class="list-inline-item">
                <a href="{{ route('list', ['id' => $value->ctg_id]) }}">{{$value->category_name}}</a>
            </li>
        @endforeach
    </ul>
</div>