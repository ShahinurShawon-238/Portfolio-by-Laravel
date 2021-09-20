<div class="section animated-row" data-section="slide06">
    <div class="section-inner">
        <div class="row justify-content-center">
            <div class="col-md-8 wide-col-laptop">
                <div class="title-block animate" data-animate="fadeInUp">
                    <span>My Work</span>
                    <h2>what i’ve done?</h2>
                </div>
                <div class="gallery-section">
                    <div class="gallery-list owl-carousel">
                    @foreach($projects as $project)
                        <div class="item animate" data-animate="fadeInUp">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" width="301px" height="350px">
                                </div>
                                <div class="thumb-inner animate" data-animate="fadeInUp">
                                    <h4 class="text-success">{{ $project->title }}</h4>
                                    <p>{{ $project->description }}</p>
                                    @if($project->link == NULL)
                                        <p class="text-danger">Link is not available</p>
                                    @else
                                        <p><a href="{{ $project->link }}" target="_blank" class="text-primary">{{ $project->link }}</a></p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('homeBody.testimonials')