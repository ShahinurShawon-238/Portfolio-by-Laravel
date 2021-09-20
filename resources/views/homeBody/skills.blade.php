<div class="section animated-row" data-section="slide04">
    <div class="section-inner">
        <div class="row justify-content-center">
            <div class="col-md-7 wide-col-laptop">
                <div class="title-block animate" data-animate="fadeInUp">
                    <span>My Skills</span>
                    <h2>What i’m good?</h2>
                </div>
                <div class="skills-row animate" data-animate="fadeInDown">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                        @foreach($skills as $skill)
                            <div class="skill-item">
                                <h6>{{$skill->name}}</h6>
                                <div class="skill-bar">
                                    <span>{{$skill->percentage}}%</span>
                                    <div style="width: {{{$skill->percentage}}}%;" class="filled-bar"></div>
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
@include('homeBody.works')