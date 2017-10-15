<div class="col-lg-4 col-sm-6">
    <a class="portfolio-box" href="{{ $portfolio->url ?: '/img/portfolio/thumbnails/' . $portfolio->image }}">
        <img class="img-fluid" src="/img/portfolio/thumbnails/{{ $portfolio->image }}" alt="">
        <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
                <div class="project-category text-faded">
                    {{ $portfolio->category->category }}
                </div>
                <div class="project-name">
                    {{ $portfolio->title }}
                </div>
            </div>
        </div>
    </a>
</div>
