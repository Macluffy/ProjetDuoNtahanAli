<main id="main">
    
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            
            <div class="row no-gutters">
                <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
                    <div class="content">
                        <h3>{{ $data7[0]->titre }}</h3>
                        <p>
                            {{ $data7[0]->paragraphe }}
                        </p>
                        <a href="#" class="about-btn">{{ $data4[0]->btn }} <i class="bx bx-chevron-right"></i></a>
                    </div>
                </div>
                
                <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            @foreach ($data3 as $value)
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="{{ $value->icon1 }}"></i>
                                <h4>{{ $value->petittitre1 }}</h4>
                                <p>{{ $value->petitparagraphe1 }}</p>
                            </div>
                            @endforeach
                            
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>
            
        </div>
    </section><!-- End About Section -->