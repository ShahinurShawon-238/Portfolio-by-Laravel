<div class="section animated-row" data-section="slide07">
    <div class="section-inner">
        <div class="row justify-content-center">
            <div class="col-md-7 wide-col-laptop">
                <div class="title-block animate" data-animate="fadeInUp">
                    <span>Contact</span>
                    <h2>Get In Touch!</h2>
                </div>
                <div class="contact-section">
                    <div class="row">
                        <div class="col-md-6 animate" data-animate="fadeInUp">
                            <div class="contact-box">
                                <div class="contact-row">
                                    <i class="fa fa-map-marker"></i> {{$contacts->address}}
                                </div>
                                <div class="contact-row">
                                    <i class="fa fa-phone"></i> {{$contacts->phone}}
                                </div>
                                <div class="contact-row">
                                    <i class="fa fa-envelope"></i> {{$contacts->email}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate" data-animate="fadeInUp">
                            <form id="ajax-contact" method="post" action="{{ route('store.contact.form') }}">
                            @csrf
                                <div class="input-field">
                                    <input type="text" class="form-control" name="name" id="name" required
                                        placeholder="Name">
                                </div>
                                <div class="input-field">
                                    <input type="email" class="form-control" name="email" id="email" required
                                        placeholder="Email">
                                </div>
                                <div class="input-field">
                                    <textarea class="form-control" name="message" id="message" required
                                        placeholder="Message"></textarea>
                                </div>
                                <button class="btn" type="submit">Submit</button>
                            </form>
                            <div id="form-messages" class="mt-3"></div>
                        </div>
                    </div>
                </div>
                <p class="copyright">
                    Copyright &copy; <span id="copy-year"></span>. All rights reserved by
                    <a class="text-primary" href="#slide01">{{$portfolios->name}}</a>.
                </p>
            </div>
        </div>
    </div>
</div>
</div>
@include('homeBody.socialMedia')
<script>
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;

    </script>