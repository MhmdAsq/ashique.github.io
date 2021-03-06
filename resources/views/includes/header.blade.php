<!-- Header -->
<header class="header-left">
    <!--Logo-->
    <a class="logo" href="{{ url('/') }}">
        <h1 class="logo-text"><img src="{{ asset('images\1x\Ashique-LOGO.png')}}" alt="logo"></h1>
    </a>
    <!--Hamburger-->
    <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
        <span></span>
        <span></span>
        <span></span>
    </a>
    <!-- Navigation & Social buttons -->
    <div class="site-nav">
        <!-- Main menu -->
        <ul class="site-main-menu alt-font" id="nav">
            <li><!-- href value = data-id without # of .pt-page. Data-goto is the number of section -->
                <a class="pt-trigger text-nowrap"  data-animation="58" data-goto="1" href="#home">
                    <i class="lni-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a class="pt-trigger text-nowrap" data-animation="59" data-goto="5" href="#portfolio">
                    <i class="lni-gallery"></i>
                    <span>Portfolio</span>
                </a>
            </li> 
            <li>
                <a class="pt-trigger text-nowrap" data-animation="59" data-goto="2" href="#about">
                    <i class="lni-user"></i>
                    <span>About</span>
                </a>
            </li>
            <li>
                <a class="pt-trigger text-nowrap" data-animation="61" data-goto="3" href="#education">
                    <i class="lni-graduation"></i>
                    <span>Education</span>
                </a>
            </li>
            <li>
                <a class="pt-trigger text-nowrap" data-animation="60" data-goto="4" href="#services">
                    <i class="lni-first-aid"></i>
                    <span>Skills</span></a>
            </li>
            
            {{-- <li>
                <a class="pt-trigger text-nowrap" data-animation="58" data-goto="6" href="#clients">
                    <i class="lni-emoji-smile"></i>
                    <span>Client</span>
                </a>
            </li> --}}
            <li>
                <a class="pt-trigger text-nowrap" data-animation="61" data-goto="6" href="#contact">
                    <i class="lni-licencse"></i>
                    <span>Contact</span>
                </a>
            </li>
        </ul>
        <!-- /Main menu -->
    </div>
</header>
<!-- Header End -->