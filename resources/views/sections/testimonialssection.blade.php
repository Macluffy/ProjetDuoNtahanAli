<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">
        
        <div class="section-title">
            <h2>{{ $data7[4]->titre }}</h2>
            <p>{{ $data7[4]->paragraphe }}</p>
        </div>
        
        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{$testimonial[0]->personne}}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{asset($testimonial[0]->imgpersonne)}}" class="testimonial-img" alt="">
                        <h3>{{$testimonial[0]->nompersonne}}</h3>
                        <h4>{{$testimonial[0]->statutpersonne}}</h4>
                    </div>
                </div><!-- End testimonial item -->
                
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{$testimonial[1]->personne}}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{asset($testimonial[1]->imgpersonne)}}" class="testimonial-img" alt="">
                        <h3>{{$testimonial[1]->nompersonne}}</h3>
                        <h4>{{$testimonial[1]->statutpersonne}}</h4>
                    </div>
                </div><!-- End testimonial item -->
                
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{$testimonial[2]->personne}}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{asset($testimonial[2]->imgpersonne)}}" class="testimonial-img" alt="">
                        <h3>{{$testimonial[2]->nompersonne}}</h3>
                        <h4>{{$testimonial[2]->statutpersonne}}</h4>
                    </div>
                </div><!-- End testimonial item -->
                
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{$testimonial[3]->personne}}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{asset($testimonial[3]->imgpersonne)}}" class="testimonial-img" alt="">
                        <h3>{{$testimonial[3]->nompersonne}}</h3>
                        <h4>{{$testimonial[3]->statutpersonne}}</h4>
                    </div>
                </div><!-- End testimonial item -->
                
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{$testimonial[4]->personne}}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{asset($testimonial[4]->imgpersonne)}}" class="testimonial-img" alt="">
                        <h3>{{$testimonial[4]->nompersonne}}</h3>
                        <h4>{{$testimonial[4]->statutpersonne}}</h4>
                    </div>
                </div><!-- End testimonial item -->
                
            </div>
            <div class="swiper-pagination"></div>
        </div>
        
    </div>
</section><!-- End Testimonials Section -->