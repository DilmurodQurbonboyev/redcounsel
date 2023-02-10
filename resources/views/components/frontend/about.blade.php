<div class="exp">
    <h2 class="year">{{ now()->format('Y') - 2003 }} {{ tr('years') }}</h2>
    <h3 class="experience">{{ $about->title ?? '' }}</h3>
    <p class="exp_sentence">Red Counsel's team has substantial experience in providing full-fledged legal
        support to its clients with
        high standard of legal advice and tailor-made business solutions. More than 15 years of successful
        experience
        in practicing law, a thorough knowledge of the local business environment, and a clear understanding of
        clients' needs, puts Red Counsel in the right place to add real value to projects of our clients at all
        stages, from initiation to execution.</p>
    <button style="cursor: pointer;" class="more" onclick="aboutus()">more about us</button>
</div>
