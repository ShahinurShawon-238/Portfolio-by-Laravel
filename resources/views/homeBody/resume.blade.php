<style type="text/css" media="all"> 

</style>
@include('homeBody.header')
<div class="container resume-body">
    <div class="row">
        <div class="cols1">
            <h6>Contact Address</h6>
            <p><i class="fa fa-map-marker"></i> {{$contacts->address}}</p>
            <p><i class="fa fa-phone"></i> {{$contacts->phone}}</p>
            <p><i class="fa fa-envelope"></i> {{$contacts->email}}</p>
            <br>
            <hr>
            <br>
            <h6>Find Me On Social Media</h6>
            <p><i class="fa fa-facebook"></i> -> <a href="{{$socials->facebook}}">{{$socials->facebook}}</a></p>
            <p><i class="fa fa-twitter"></i> -> <a href="{{$socials->twitter}}">{{$socials->twitter}}</a></p>
            <p><i class="fa fa-linkedin"></i> -> <a href="{{$socials->linkedin}}">{{$socials->linkedin}}</a></p>
            <p><i class="fa fa-github"></i> -> <a href="{{$socials->github}}">{{$socials->github}}</a></p>
            <br>
            <hr>
            <br>
            <h6>Skills that I have</h6>
            @foreach($skills as $row)
            <span class="skill">{{$row->name}}</span>
            @endforeach
        </div>
        <div class="cols2">
            <h3>{{$portfolios->name}}</h3>
            <p>{{$portfolios->designation}}</p>
            <br>
            <h6>Summary</h6>
            <p>{{$aboutMe->description}}</p>
            <br>
            <hr>
            <br>
            <h6>Experience</h6>
            @foreach($working as $row)
            <p>{{$row->name}}</p>
            <p>{{$row->designation}}</p>
            <p>{{$row->from}} - {{$row->to}}</p>
            <p><a href="{{$row->contact}}" class="text-primary">{{$row->contact}}</a></p>
            <br>
            @endforeach
            <br>
            <hr>
            <br>
            <h6>Project That I have done</h6>
            @foreach($projects as $row)
            <p>{{$row->title}}</p>
            <p>{{$row->description}}</p>
            <p><a href="{{$row->link}}" class="text-primary">{{$row->link}}</a></p>
            <br>
            @endforeach
            <br>
            <hr>
            <br>
            <h6>Education</h6>
            @foreach($education as $row)
            <p>Institute: {{$row->name}}</p>
            <p>Education Field: {{$row->fieldOfEducation}}</p>
            <p>GPA: {{$row->gpa}} in scale of {{$row->inScaleOf}}</p>
            <p>Passing Year: {{$row->year}}</p>
            <br>
            @endforeach
            <button class="btn-primary float-right"><a href="{{route('resume.download')}}">Download</a></button>
        </div>
    </div>
</div>

@include('homeBody.footer')