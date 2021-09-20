<div class="section animated-row" data-section="slide05">
    <div class="section-inner">
        <div class="row justify-content-center">
            <div class="col-md-8 wide-col-laptop">
                <div class="title-block animate" data-animate="fadeInUp">
                    <span>TESTIMONIALS</span>
                    <h2>what THEY SAY? <span><button class="text-dark testimonialButton btn-light" data-toggle="modal"
                        data-target="#exampleModalCenter">
                        <i class="fa fa-plus-circle"></i>
                    </button></span></h2>
                </div>
                <div class="col-md-8 offset-md-2">
                    <div class="testimonials-section">
                        <div class="testimonials-slider owl-carousel testimonialWidth">
                        @foreach($testimonials as $testimonial)
                            <div class="item animate" data-animate="fadeInUp">
                                <div class="testimonial-item">
                                    <div class="client-row">
                                        <img src="{{ asset($testimonial->image) }}"
                                            class="rounded-circle" alt="{{$testimonial->name}}">
                                    </div>
                                    <div class="testimonial-content">
                                        <h4>{{$testimonial->name}}</h4>
                                        <p>"{{$testimonial->message}}"</p>
                                        <span>{{$testimonial->designation}}</span>
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
</div>
@include('homeBody.contact')
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-info " id="exampleModalLongTitle">Add Testimonial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store.testimonial') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Enter your Name: </label>
                        <input type="text" class="form-control" id="name" name="name"
                            aria-describedby="TestimonialHelp" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="designation">Enter your Designation: </label>
                        <input type="text" class="form-control" id="designation" name="designation"
                            aria-describedby="TestimonialHelp" placeholder="Enter your designation">
                    </div>
                    <div class="form-group">
                        <label for="image">Enter your Image: </label>
                        <input type="file" class="form-control" id="image" name="image"
                            aria-describedby="TestimonialHelp">
                    </div>
                    <div class="form-group">
                        <label for="opinion">Enter your Opinion: </label>
                        <textarea name="opinion" id="opinion" class="form-control" rows="2" aria-describedby="TestimonialHelp" placeholder="Enter your opinion"></textarea>
                    </div>
                    <button type="submit" class="btn-success">Add Testimonial</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
