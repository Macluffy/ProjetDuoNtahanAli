<!-- ======= Steps Section ======= -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container" data-aos="fade-up">
        
        <div class="section-title">
            <h2>{{ $data7[2]->titre }}</h2>
            <p>{{ $data7[2]->paragraphe }}</p>
        </div>
        
        <div class="row">
            @foreach ($data6 as $value)
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon"><i class="{{ $value->icon1 }}"></i></div>
                    <h4 class="title"><a href="">{{ $value->link1 }}</a></h4>
                    <p class="description">{{ $value->paragraphelink1 }}</p>
                </div>
            </div>
            @endforeach
            
            
            
            
        </div>
        
    </div>
</section><!-- End Services Section -->
