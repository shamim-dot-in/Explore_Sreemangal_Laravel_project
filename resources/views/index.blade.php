@extends('layouts.app')

@section('title', 'Home')

@section('content')

<main>

    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
        <div class="section-overlay"></div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
        </svg>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <h1 class="text-white">Welcome to Sreemangal – The Tea Garden Valley</h1>

                    <h4 class="cd-headline rotate-1 text-white mb-4 pb-2">
                        <span>Sreemangal Famous For</span>
                        <span class="cd-words-wrapper">
                            <b class="is-visible">Tea Fields</b>
                            <b>Rubber</b>
                            <b>Pineapple</b>
                        </span>
                    </h4>

                    <div class="custom-btn-group">
                        <a href="/tours" class="btn custom-btn smoothscroll me-3">Plan Your Visit</a>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="ratio ratio-16x9">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/_GC-cVGtufE?si=H6YTRzEe2mXOFoqW"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>

            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
        </svg>
    </section>

    <section class="about-section section-padding" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">
                    <h2 class="mb-lg-5 mb-4">Sreemangal Tea Capital</h2>
                </div>

                <div class="col-lg-5 col-12 me-auto mb-4 mb-lg-0">
                    <h3 class="mb-3">Tea Capital of Bangladesh History</h3>

                    <p>Sreemangal, known as the Tea Capital of Bangladesh, is famous for its lush tea gardens, serene landscapes, and flavorful seven-layer tea. A must-visit for nature lovers and tea enthusiasts, this charming town offers a refreshing escape into Bangladesh’s green countryside.</p>

                    <p>Sreemangal is often referred to as the "Tea Capital of Bangladesh" because it is famous for its tea.</p>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                    <div class="member-block">
                        <div class="member-block-image-wrap">
                            <img src="https://koryogroup.com/uploads/blog/1636/large-Bangladesh_Sreemangal_Tea_Capital.jpeg?1736528239"
                                 class="member-block-image img-fluid"
                                 loading="lazy"
                                 alt="Tea Gardens">
                        </div>

                        <div class="member-block-info d-flex align-items-center">
                            <h4>Tea Gardens</h4>
                            <p class="ms-auto">Sreemangal</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="member-block">
                        <div class="member-block-image-wrap">
                            <img src="https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/11/d5/de/52.jpg"
                                 class="member-block-image img-fluid"
                                 loading="lazy"
                                 alt="Lush green tea gardens">
                        </div>

                        <div class="member-block-info d-flex align-items-center">
                            <h4>Lush green tea gardens</h4>
                            <p class="ms-auto">Sreemangal</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-bg-image">
        <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg">
            <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1127 0 Z"></path>
        </svg>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <div class="section-bg-image-block">
                        <h2 class="mb-lg-3">Get our newsletter</h2>

                        <p>Stay updated with the latest travel tips, exclusive tour packages, and insider secrets of Sreemangal — the Tea Garden Valley of Bangladesh. Sign up and never miss an adventure!</p>

                        <form action="#" method="get" class="custom-form mt-lg-4 mt-2" role="form">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bi-envelope" id="basic-addon1"></span>

                                <input type="email"
                                       name="email"
                                       id="newsletter-email"
                                       pattern="[^ @]*@[^ @]*"
                                       class="form-control"
                                       placeholder="Email address"
                                       required>

                                <button type="submit" class="form-control">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg">
            <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1127 0 Z"></path>
        </svg>
    </section>

    <section class="events-section section-bg section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h2 class="mb-lg-3">Top Attractions in Sreemangal</h2>
                </div>

                <div class="row custom-block mb-3">
                    <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                        <div class="custom-block-image-wrap">
                            <h2>
                                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/07/db/7b/cc/lowacherra-national-park.jpg?w=1000&h=-1&s=1"
                                     class="custom-block-image img-fluid"
                                     loading="lazy"
                                     alt="Lawachara National Park">
                            </h2>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 order-3 order-lg-0">
                        <div class="custom-block-info mt-2 mt-lg-0">
                            <h2>Lawachara National Park</h2>
                            <p class="mb-0">Explore this tropical forest in <a href="/destinations">Sreemangal</a> where there are wild animals and tribes.</p>
                        </div>
                    </div>
                </div>

                <div class="row custom-block mb-3">
                    <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                        <div class="custom-block-image-wrap">
                            <h2>
                                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/e1/e7/be/photo0jpg.jpg?w=1400&h=800&s=1"
                                     class="custom-block-image img-fluid"
                                     loading="lazy"
                                     alt="Madhabpur Lake">
                            </h2>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 order-3 order-lg-0">
                        <div class="custom-block-info mt-2 mt-lg-0">
                            <h2>Madhabpur Lake</h2>
                            <p class="mb-0">A natural lake inside Madhabpur tea estate. It is surrounded by tea plantation and offers beautiful natural scenery.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="contact-section section-padding" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-12">
                    <h2 class="mb-4 pb-2">Drop Your Message</h2>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="custom-form contact-form" role="form">
                        @csrf

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{ old('name') }}" required>
                                    <label>Full Name</label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" placeholder="Email address" value="{{ old('email') }}" required>
                                    <label>Email address</label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Describe message here">{{ old('message') }}</textarea>
                                    <label>Message</label>
                                </div>

                                <button type="submit" class="form-control">Submit Form</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="contact-info mt-5">
                        <div class="contact-info-item">
                            <div class="contact-info-body">
                                <strong>Sreemangal, Bangladesh</strong>

                                <p class="mt-2 mb-1">
                                    <a href="tel:010-020-0340" class="contact-link">
                                        +420 721604558
                                    </a>
                                </p>

                                <p class="mb-0">
                                    <a href="mailto:info@company.com" class="contact-link">
                                        info@Sreemangal.com
                                    </a>
                                </p>
                            </div>
                        </div>

                        <img src="{{ asset('images/WorldMap.svg') }}" class="img-fluid" loading="lazy" alt="contact page image">
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

@endsection