<footer>
    <section class="related-section py-5">
        <div class="container">
            <div class="row ">
                @foreach ($relateds as $item)
                <div class="related col-3 py-3">
                    <div class="related-title">
                        {{$item['title']}}
                    </div>
                    <div class="footer-relateds">
                        @foreach ($item['correlati'] as $relate)
                            <ul class="list-unstyled">
                              <li><a href="#">{{$relate}}</a></li>  
                            </ul>                            
                        @endforeach
                    </div>
                </div>             
                @endforeach
            </div>
        </div>
    </section>
    <section class="footer-bottom">
        <div class="container py-4">
            <div class="row justify-content-between">
                <div class="col-2">
                    <button class="btn ">SIGN UP NOW!</button>
                </div>
                <div class="col-4 d-flex">
                    <div class="footer-social d-flex">
                        <div class="follow-us">
                            FOLLOW US
                        </div>
                        <div class="facebook px-2">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                        <div class="twitter px-2">
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                        <div class="youtube px-2">
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                        <div class="pinterest px-2">
                            <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                        </div>
                        <div class="locker px-2">
                            <a href="#"><i class="fa-solid fa-location-dot"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>