@include('homeBody.header')
<style>
#video::after{
    content: '';
    opacity: 0.75;
    background: {{{$colors->top}}};
    background: -moz-linear-gradient(top, {{{$colors->top}}} 0%, {{{$colors->bottom}}} 100%);
    background: -webkit-linear-gradient(top, {{{$colors->top}}} 0%,{{{$colors->bottom}}} 100%);
    background: linear-gradient(to bottom, {{{$colors->top}}} 0%,{{{$colors->bottom}}} 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='{{{$colors->top}}}', endColorstr='{{{$colors->bottom}}}',GradientType=0 ); 
    position:fixed;
    left:0;
    top:0;
    right:0;
    bottom: 0;
}
.preloader {
    background: -moz-linear-gradient(top, {{{$colors->top}}} 0%, {{{$colors->bottom}}} 100%);
    background: -webkit-linear-gradient(top, {{{$colors->top}}} 0%,{{{$colors->bottom}}} 100%); 
    background: linear-gradient(to bottom, {{{$colors->top}}} 0%,{{{$colors->bottom}}} 100%); 
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='{{{$colors->top}}}', endColorstr='{{{$colors->bottom}}}',GradientType=0 ); 
    height: 100%;
    left: 0;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 9999;
    text-align: center;
}
</style>
<div id="video">
    <div class="preloader">
        <div class="preloader-bounce">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    @include('homeBody.headerNav')
</div>
@include('homeBody.footer')
