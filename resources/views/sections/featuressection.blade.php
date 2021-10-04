<!-- ======= Features Section ======= -->
<section id="features" class="features" data-aos="fade-up">
    <div class="container">

        <div class="section-title">
            <h2>{{ $data7[1]->titre }}</h2>
            <p>{{ $data7[1]->paragraphe }}</p>
        </div>
        @php
            $i = 1;
        @endphp

        @foreach ($data5 as $value)

            @if ($i % 2)

                <div class="row content">
                    <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('img/' . $value->img1) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
                        <h3>{{ $value->petittitre1 }}</h3>
                        <p class="fst-italic">
                            {{ $value->petitparagraphe1 }}
                        </p>
                        <ul>
                            <li><i class="{{ $value->icon1 }}"></i> {{ $value->phrase1 }}</li>
                            <li><i class="{{ $value->icon2 }}"></i>{{ $value->phrase2 }}</li>
                            <li><i class="{{ $value->icon3 }}"></i> {{ $value->phrase3 }}</li>
                        </ul>
                    </div>
                </div>
            @else
                <div class="row content">
                    <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                        <img src="{{ asset('img/' . $value->img1) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                        <h3>{{ $value->petittitre1 }}</h3>
                        <p class="fst-italic">
                            {{ $value->petitparagraphe1 }}
                        </p>
                        <p>
                            {{ $value->phrase1 }}
                            {{ $value->phrase2 }}
                            {{ $value->phrase3 }}
                        </p>
                    </div>
                </div>
            @endif
            @php
            $i++;
            @endphp
        @endforeach

    </div>
</section><!-- End Features Section -->
