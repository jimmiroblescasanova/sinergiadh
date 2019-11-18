<div class="yamm navbar basic default">
    <div class="navbar-header">
        <div class="container">
            <div class="basic-wrapper">
                <a class="btn responsive-menu pull-right" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class='icon-menu-1'></i></a>
                <a class="navbar-brand" href="{{ route('home.landing') }}">
                    <img src="{{ asset('images/logo.jpg') }}" alt=""/></a>
            </div>
            <div class="collapse navbar-collapse pull-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="{{ route('home.landing') }}">Inicio</a></li>
                    <li class="dropdown"><a href="{{ route('home.workshops.index') }}">Talleres</a></li>
                    <li class="dropdown"><a href="{{ route('home.photos.index') }}">Galeria</a></li>
                    <li class="dropdown"><a href="{{ route('home.us.index') }}">Nosotros</a></li>
                    <li class="dropdown"><a href="{{ route('home.contact.index') }}">Contacto</a></li>
                    {{-- <li class="dropdown yamm-fullwidth"><a href="#" class="dropdown-toggle js-activated">Mega Menu</a>
                        <ul class="dropdown-menu yamm-dropdown-menu">
                            <li>
                                <div class="yamm-content row">
                                    <div class="col-sm-4">
                                        <h4>Latest Works</h4>
                                        <p>Cum sociis natoque penatibus magnis dis parturient montes, nascetur mus.</p>
                                        <figure class="icon-overlay icn-link"><a href="portfolio-post.html"><img src="{{ asset('style/images/art/p1.jpg') }}" alt="" /></a></figure> </div>
                                    <div class="col-sm-4">
                                        <h4>About Us</h4>
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. </p>
                                        <p>Duis mollis, est non commodo luctus. Nullam quis risus eget urna mollis ornare vel eu leo cras consectetur.</p>
                                        <div class="divide5"></div>
                                        <a href="#" class="btn btn-blue">Read More</a> </div>
                                    <div class="col-sm-4">
                                        <h4>Get In Touch</h4>
                                        <div class="map">
                                            <iframe width="100%" height="180" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?source=embed&amp;msid=207252500814404613616.0004dbcb6e23f7b275953&amp;msa=0&amp;ie=UTF8&amp;ll=51.504175,-0.097504&amp;spn=0.020836,0.066047&amp;t=m&amp;z=15&amp;output=embed"></iframe>
                                        </div>
                                        <div class="divide20"></div>
                                        <i class="icon-location contact"></i> Moonshine St. 14/05 Jupiter <br />
                                        <i class="icon-phone contact"></i>+00 (123) 456 78 90 <br />
                                        <i class="icon-mail contact"></i> <a href="first.last@email.com">first.last@email.com</a> </div>
                                </div>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
    <!--/.nav-collapse -->
</div>
<!--/.navbar -->
<div class="offset"></div>