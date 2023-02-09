@extends('frontend.layouts.app')
@section('title')
    {{ $category->title ?? '' }}
@endsection
@section('content')

    <div class="team-main" data-aos="fade-up"
         data-aos-duration="2000">
        <img  width="200px"
              src="http://uzgasoil.realtest.uz/storage/photos/shares/%D0%9D.%D0%90%D0%B3%D0%B7%D0%B0%D0%BC%D0%BE%D0%B2.jpg"
              alt="">
        <div class="info-team">
            <h3>АГЗАМОВ НОДИР ТАХИРОВИЧ</h3>
            <p>"Ўзнефтгазинспекция" бошлиғи - Нефт маҳсулотлари ва газдан фойдаланишни назорат қилиш бўйича давлат бош
                инспектори</p>
            <div class="malumotlar">
                <div>
                    <p>Қабул:</p>
                    <p class="teamContact">Телефон:</p>
                    <p class="teamContact">Email:</p>
                </div>

                <div>
                    <p>Душанба - Жума 09:00 дан 13:00 гача ва 14:00 дан 18:00 гача</p>
                    <p><a href="tell:(71) 232-05-17">(71) 232-05-17 (429)</a>
                    </p>
                    <p><a href="info@uzngi.uz">info@uzngi.uz</a>
                    </p>
                </div>
            </div>
        </div>
    </div>




    <div class="team-main" data-aos="fade-up"
         data-aos-duration="2000">
        <img  width="200px"
              src="http://uzgasoil.realtest.uz/storage/photos/shares/%D0%9D.%D0%90%D0%B3%D0%B7%D0%B0%D0%BC%D0%BE%D0%B2.jpg"
              alt="">
        <div class="info-team">
            <h3>АГЗАМОВ НОДИР ТАХИРОВИЧ</h3>
            <p>"Ўзнефтгазинспекция" бошлиғи - Нефт маҳсулотлари ва газдан фойдаланишни назорат қилиш бўйича давлат бош
                инспектори</p>
            <div class="malumotlar">
                <div>
                    <p>Қабул:</p>
                    <p>Телефон:</p>
                    <p>Email:</p>
                </div>

                <div>
                    <p>Душанба - Жума 09:00 дан 13:00 гача ва 14:00 дан 18:00 гача</p>
                    <p><a href="tell:(71) 232-05-17">(71) 232-05-17 (429)</a>
                    </p>
                    <p><a href="info@uzngi.uz">info@uzngi.uz</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <ul class="pagination" data-aos="fade-up"
    >
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>

    <section class="team">
        <div class="team-one">
            <div class="experienceHeader" data-aos="fade-up-right"  id="team-one">
                <h2 class="experience">Experience</h2>
                <p class="exp_sentence">Red Counsel team has substantial experience in providing full-fledged legal
                    support to its clients with
                    high standard of legal advice and tailor-made business solutions. More than 15 years of successful
                    experience
                    in practicing law, a thorough knowledge of the local business environment, and a clear understanding
                    of
                    clients' needs, puts Delta Law in the right place to add real value to projects of our clients at
                    all stages,
                    from initiation to execution.</p>
            </div>
            <div data-aos="fade-up-left" class="unique" id="team-one">
                <h2 class="unique_h2">Unique Team</h2>
                <p class="unique_p">Our team handles the full range of corporate and commercial law requirements for
                    clients and boasts
                    particular experience in the oil & gas, mining, and banking and finance sectors. Our lawyers have
                    had
                    responsibility for most of the finance projects undertaken by an international law firm in
                    Uzbekistan and
                    has extensive experience working with international financial institutions and multi-lateral
                    development banks. We have strong lawyers with 10-15 years of unprecedented experiences working on
                    virtually
                    all significant financing transactions in Uzbekistan.</p>
            </div>
        </div>
        <div class="practice">
            <h2 style="font-size: 3rem;" class="practice_h2" data-aos="flip-left">Team Practices</h2>
            <div class="practice-rest">
                <div class="practice-one" id="practice">
                    <div data-aos="zoom-in-up" class="practice-one-text" id="text">
                        <p class="practice1_p" >Finance, corporate deals (lendings, joint ventures)</p>
                    </div>
                </div>
                <div class="practice-two" id="practice">
                    <div data-aos="zoom-in-up" class="practice-two-text" id="text">
                        <p class="practice2_p">Finance deals (M&A, financial leasing)</p>
                    </div>
                </div>
                <div class="practice-three" id="practice">
                    <div data-aos="zoom-in-up" class="practice-three-text" id="text">
                        <p class="practice3_p">Bank Transactions, Advisory work (joint ventures, guarantees)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
