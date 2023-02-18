<div class="exp">
    <h2 class="year">{{ now()->format('Y') - 2003 }} {{ tr('years') }}</h2>
    <h3 class="experience">{{ $about->title ?? '' }}</h3>
    <p class="exp_sentence">{{ $about->description ?? '' }}</p>
    <a class="more" href="{{ route('pages', $about->id) }}">{{ tr('More') }}</a>
</div>
