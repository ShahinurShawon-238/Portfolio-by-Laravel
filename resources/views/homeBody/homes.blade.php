<div id="fullpage" class="fullpage-default">

    <div class="section animated-row" data-section="slide01">
        <div class="section-inner">
            <div class="welcome-box">
                <span class="welcome-first animate" data-animate="fadeInUp">Hello, welcome to</span>
                <h1 class="welcome-title ml1 animate" data-animate="fadeInUp">
                    <span class="text-wrapper">
                        <!-- <span class="line line1 text=dark"></span> -->
                        <span class="letters">{{$portfolios->name}}'s</span>
                        <!-- <span class="line line2"></span> -->
                    </span>
                </h1>
                <span class="welcome-first animate" data-animate="fadeInUp">World</span>
                <p class="animate ml12" data-animate="fadeInUp">
                    {{$portfolios->designation}}
                </p>
                <p class="animate" data-animate="fadeInUp">
                    <a href="#slide07"><button class="btn btn-primary">Hire Me</button></a>
                    <a href="#slide05"><button class="btn btn-light">Explore More</button></a>
                </p>
                <div class="scroll-down next-section animate data-animate=" fadeInUp""><img
                        src="{{ asset('frontend/assets/images/mouse-scroll.png') }}" alt=""><span>Scroll Down</span>
                </div>
            </div>
        </div>
    </div>
    @include('homeBody.about')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script type="text/javascript">
        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml1 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: true
            })
            .add({
                targets: '.ml1 .letter',
                scale: [0.3, 1],
                opacity: [0, 1],
                translateZ: 0,
                easing: "easeOutExpo",
                duration: 600,
                delay: (el, i) => 70 * (i + 1)
            }).add({
                targets: '.ml1 .line',
                scaleX: [0, 1],
                opacity: [0.5, 1],
                easing: "easeOutExpo",
                duration: 700,
                offset: '-=875',
                delay: (el, i, l) => 80 * (l - i)
            }).add({
                targets: '.ml1',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
            });

        // Wrap every letter in a span
        var textWrapper2 = document.querySelector('.ml12');
        textWrapper2.innerHTML = textWrapper2.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: true
            })
            .add({
                targets: '.ml12 .letter',
                translateX: [40, 0],
                translateZ: 0,
                opacity: [0, 1],
                easing: "easeOutExpo",
                duration: 1200,
                delay: (el, i) => 500 + 30 * i
            }).add({
                targets: '.ml12 .letter',
                translateX: [0, -30],
                opacity: [1, 0],
                easing: "easeInExpo",
                duration: 1100,
                delay: (el, i) => 100 + 30 * i
            });

    </script>
