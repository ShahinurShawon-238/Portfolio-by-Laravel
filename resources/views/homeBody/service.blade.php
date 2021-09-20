<div class="section animated-row" data-section="slide03">
    <div class="section-inner">
        <div class="row justify-content-center">
            <div class="col-md-8 wide-col-laptop">
                <div class="title-block animate" data-animate="fadeInUp">
                    <span>Services</span>
                    <h2>What I Do?</h2>
                </div>
                <div class="services-section">
                    <div class="services-list owl-carousel">
                        @foreach($services as $service)
                        <div class="item animate" data-animate="fadeInUp">
                            <div class="service-box">
                                <span class="service-icon"><img src="{{asset($service->image)}}" alt=""></span>
                                <h3>{{$service->name}}</h3>
                                <p>{{$service->description}}</p> </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('homeBody.skills')
