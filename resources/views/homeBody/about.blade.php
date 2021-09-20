<div class="section animated-row" data-section="slide02">
    <div class="section-inner">
        <div class="about-section">
            <div class="row justify-content-center">
                <div class="col-lg-8 wide-col-laptop">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-contentbox">
                                <div class="animate" data-animate="fadeInUp">
                                    <span>About Me</span>
                                    <h2>Who am i? <span><a href="{{ route('resume') }}" target="_blank"><button class="btn">Download My CV</button></a></span></h2>
                                    <p>{{$aboutMe->description}}</p>
                                </div>
                                <div class="infoSlider">
                                    @foreach($education as $row)
                                    <div class="information">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img src="{{ asset($row->image) }}"
                                                         alt="">
                                                </div>
                                                <div class="vl"></div>
                                                <div class="col-md-8">
                                                    <div>{{$row->name}}</div>
                                                    <div>Education Field: {{$row->fieldOfEducation}}</div>
                                                    <div>GPA: {{$row->gpa}} in scale of {{$row->inScaleOf}}</div>
                                                    <div>Passing year: {{$row->year}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @foreach($working as $row2)
                                    <div class="information">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img src="{{ asset($row2->image) }}"
                                                         alt="">
                                                </div>
                                                <div class="vl"></div>
                                                <div class="col-md-8">
                                                    <div>{{$row2->name}}</div>
                                                    <div>Designation: {{$row2->designation}}</div>
                                                    <div>From: {{$row2->from}} - To: {{$row2->to}}</div>
                                                    <div>Contact: <a href="{{$row2->contact}}" class="text-warning" target="_blank">{{$row2->contact}}</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure class="about-img animate" data-animate="fadeInUp"><img
                                    src="{{ asset($aboutMe->image) }}" class="rounded" alt="" width="520px">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('homeBody.service')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" 
integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script type="text/javascript">
     $('.infoSlider').slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 7500,
    });
 </script>