<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
        
        <div class="section-title">
            <h2>{{ $data7[3]->titre }}</h2>
            <p>{{ $data7[3]->paragraphe }}</p>
        </div>
        
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>
        
        <div class="row portfolio-container">
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset($portfolio[0]->img)}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{$portfolio[0]->titreimg}}</h4>
                        <p>{{$portfolio[0]->categorie}}</p>
                        <div class="portfolio-links">
                            <a href="{{asset($portfolio[0]->img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$portfolio[0]->titreimg}}"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset($portfolio[1]->img)}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{$portfolio[1]->titreimg}}</h4>
                        <p>{{$portfolio[1]->categorie}}</p>
                        <div class="portfolio-links">
                            <a href="{{asset($portfolio[1]->img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$portfolio[1]->titreimg}}"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset($portfolio[2]->img)}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{$portfolio[2]->titreimg}}</h4>
                        <p>{{$portfolio[2]->categorie}}</p>
                        <div class="portfolio-links">
                            <a href="{{asset($portfolio[2]->img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$portfolio[2]->titreimg}}"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{asset($portfolio[3]->img)}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{$portfolio[3]->titreimg}}</h4>
                        <p>{{$portfolio[3]->categorie}}</p>
                        <div class="portfolio-links">
                            <a href="{{asset($portfolio[3]->img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$portfolio[3]->titreimg}}"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset($portfolio[4]->img)}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{$portfolio[4]->titreimg}}</h4>
                        <p>{{$portfolio[4]->categorie}}</p>
                        <div class="portfolio-links">
                            <a href="{{asset($portfolio[4]->img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$portfolio[4]->titreimg}}"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset($portfolio[5]->img)}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{$portfolio[5]->titreimg}}</h4>
                        <p>{{$portfolio[5]->categorie}}</p>
                        <div class="portfolio-links">
                            <a href="{{asset($portfolio[5]->img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$portfolio[5]->titreimg}}"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{asset($portfolio[6]->img)}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{$portfolio[6]->titreimg}}</h4>
                        <p>{{$portfolio[6]->categorie}}</p>
                        <div class="portfolio-links">
                            <a href="{{asset($portfolio[6]->img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$portfolio[6]->titreimg}}"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{asset($portfolio[7]->img)}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{$portfolio[7]->titreimg}}</h4>
                        <p>{{$portfolio[7]->categorie}}</p>
                        <div class="portfolio-links">
                            <a href="{{asset($portfolio[7]->img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$portfolio[7]->titreimg}}"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset($portfolio[8]->img)}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{$portfolio[8]->titreimg}}</h4>
                        <p>{{$portfolio[8]->categorie}}</p>
                        <div class="portfolio-links">
                            <a href="{{asset($portfolio[8]->img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$portfolio[8]->titreimg}}"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
</section><!-- End Portfolio Section -->    
