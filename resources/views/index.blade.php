<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.headerscripts')
</head>

<body class="signle-layout">

<!-- Preloader -->
<div class="preloader">
    <div class="centrize full-width">
        <div class="vertical-center">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
</div>
<!-- Preloader End -->

@include('includes.header')

<!-- Site Main -->
<div class="main-left" id="main">

    <!-- Page changer wrapper -->
    <div class="pt-wrapper">
        <!-- Subpages -->
        <div class="subpages">

            <!-- Home -->
            <section id="home" class="pt-page pt-page-1" data-id="home">
                @include('sections.home')

            </section>

            <!-- About -->
            <section id="about" class="pt-page pt-page-2" data-id="about">
                @include('sections.about')

            </section>
            <!-- Education -->
            <section id="education" class="pt-page pt-page-2" data-id="about">
                @include('sections.education')

            </section>
            <!-- Services -->
            <section id="services" class="pt-page pt-page-3" data-id="services">
                @include('sections.services')

            </section>
            <!-- Portfolio -->
            <section id="portfolio" class="pt-page pt-page-4" data-id="portfolio">
                @include('sections.portfolio')

            </section>
            <!-- Clients -->
            {{-- <section id="clients" class="pt-page pt-page-5" data-id="clients">
                @include('sections.clients')

            </section> --}}
            <!-- Contacts -->
            <section id="contact" class="pt-page pt-page-6" data-id="contact">
                @include('sections.contacts')
            
            </section>

        </div>
        <!-- End of Home Subpage -->

    </div>

</div>
<!-- Site Main End -->


@include('includes.footerscripts')

</body>
</html>