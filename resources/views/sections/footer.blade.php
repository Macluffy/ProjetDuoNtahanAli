<!-- ======= Footer ======= -->
<footer id="footer">
@foreach ($footer as $data)
        

    <div class="footer-top">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>{{$data->nom}}</h3>
                    <p>
                        {{$data->adress}}<br>
                        {{$data->adress2}}<br>
                        {{$data->rue}} <br><br>
                        <strong>{{$data->tel}}</strong> {{$data->numtel}}<br>
                        <strong>{{$data->email}}</strong> {{$data->emailadress}}<br>
                    </p>
                </div>
                
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>{{$data->links}}</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{$data->link1}}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{$data->link2}}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{$data->link3}}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{$data->link4}}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{$data->link5}}</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>{{$data->services}}</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{$data->link6}}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{$data->link7}}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{$data->link8}}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{$data->link9}}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{$data->link10}}</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>{{$data->newsletter}}</h4>
                    <p>{{$data->newsletterdescription}}</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    
    <div class="container d-md-flex py-4">
        
        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy;{{$data->copy1}} <strong><span>{{$data->copy2}}</span></strong>. {{$data->copy3}}
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bikin-free-simple-landing-page-template/ -->
                {{$data->credits}}<a href="https://bootstrapmade.com/">{{$data->credits2}}</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->
@endforeach