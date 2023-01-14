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
</footer>