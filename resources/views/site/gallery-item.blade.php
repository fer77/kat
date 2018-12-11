@foreach ($shop_items as $item)
<div class="col-sm-6 col-md-6 col-lg-4 col-gallery filtr-item" data-category="1" data-sort="value">
    <figcaption>
        <div class="parent">
            <img src="{{ $item->MainImage->url_570xN }}" class="img-fluid">
                <div class="child ">
                <h3>{{ $item->title }}</h3>
                <p>{{ $item->description }}</p>
                <a href="{{ $item->url }}" class="btn btn-outline-white pill-btn chocolat-image" title="Enter your image caption here">Zoom</a>
            </div>
        </div>
    </figcaption>
</div>
@endforeach