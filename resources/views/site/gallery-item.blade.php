@foreach ($shop_items as $item)
<div class="col-sm-6 col-md-6 col-lg-4 col-gallery filtr-item" data-category="{{ $item->category_id }}" data-sort="value">
    <!-- <figcaption>
        <div class="parent">
            <img src="{{ $item->MainImage->url_570xN }}" />
                <div class="child ">
                <h3>{{ $item->title }}</h3>
                <p>{{ $item->description }}</p>
                <a class="btn btn-outline-white pill-btn chocolat-image" href="{{ $item->url }}" target="_blank" title="">Buy</a>
            </div>
        </div>
    </figcaption> -->
</div>
@endforeach