@extends('layouts.app')

@section('title', 'Tour Packages')

@section('content')

<main>

    <section class="hero-section hero-50 d-flex justify-content-center align-items-center" id="section_1">

        <div class="section-overlay"></div>

        <svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#3D405B" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#3D405B" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#3D405B" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h1 class="text-white mb-4 pb-2">Popular Tour Packages in Sreemangal</h1>
                </div>
            </div>
        </div>

        <svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#ffffff" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>
    </section>

    <section class="membership-section section-padding" id="section_3">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4">
                    <h2><span>Sreemangal</span> - Tour Packages</h2>
                </div>

                <div class="col-lg-6 col-12 mb-3 mb-lg-0">
                    <h4 class="mb-4 pb-lg-2">Packages Price</h4>

                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th style="width: 34%;">Tour Name</th>
                                    <th style="width: 22%;">1 day</th>
                                    <th style="width: 22%;">2 days</th>
                                    <th style="width: 22%;">3 days</th>
                                    <th style="width: 22%;">Book</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($tours as $tour)
                                    <tr>
                                        <th scope="row" class="text-start">{{ $tour->title }}</th>

                                        <td>
                                            <i class="bi-check-circle-fill">${{ $tour->price }}</i>
                                        </td>

                                        <td>
                                            <i class="bi-check-circle-fill">${{ $tour->price + 10 }}</i>
                                        </td>

                                        <td>
                                            <i class="bi-check-circle-fill">${{ $tour->price + 20 }}</i>
                                        </td>

                                        <td>
                                            @auth
                                                <a href="{{ route('bookings.create', $tour->id) }}" class="btn btn-success">
                                                    Book
                                                </a>
                                            @else
                                                <a href="{{ route('login') }}" class="btn btn-warning">
                                                    Book
                                                </a>
                                            @endauth
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No tour packages found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-5 col-12 mx-auto">
                    <h4 class="mb-4 pb-lg-2">Please Contact with us, For Custom Package!</h4>
                    <form action="#" method="post" class="custom-form membership-form shadow-lg" role="form">
                        <h4 class="text-white mb-4">Custom Tour Package</h4>

                        <div class="form-floating">
                            <input type="text" name="full-name" id="full-name" class="form-control" placeholder="Full Name" required>
                            <label for="full-name">Full Name</label>
                        </div>

                        <div class="form-floating">
                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                            <label for="email">Email address</label>
                        </div>

                        <div class="form-floating">
                            <input type="text" name="tour-date" id="tour-date" class="form-control" placeholder="Select Tour Date" required>
                            <label for="tour-date">Preferred Tour Date</label>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" id="message" name="message" placeholder="Describe message here"></textarea>
                            <label for="message">Comments</label>
                        </div>

                        <button type="submit" class="form-control">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <section class="events-section section-padding" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h2 class="mb-lg-5 mb-4">Latest Tour</h2>
                </div>

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="custom-block-image-wrap">
                        <a href="/tours">
                            <img src="https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/46/f6/60.jpg" class="custom-block-image img-fluid" loading="lazy" alt="Full Day Sreemangal Tea Garden & National Park Hiking Tour">
                            <i class="custom-block-icon bi-link"></i>
                        </a>

                        <div class="custom-block-date-wrap">
                            <strong class="text-white">18 Feb 2025</strong>
                        </div>

                        <div class="custom-btn-wrap">
                            <a href="/tours" class="btn custom-btn">See Packages</a>
                        </div>
                    </div>

                    <div class="custom-block-info">
                        <a href="/tours" class="events-title mb-2">Full Day Sreemangal Tea Garden & National Park Hiking Tour</a>

                        <p class="mb-0">Sreemangal is famous for its tea gardens, which are spread out over miles and provide breathtaking views. Local accompanied guide will show you beautiful tea gardens and you can get to learn about how tea is grown.</p>

                        <div class="border-top mt-4 pt-3">
                            <div class="d-flex flex-wrap align-items-center mb-1">
                                <span class="custom-block-span">Location:</span>
                                <p class="mb-0">National Park</p>
                            </div>

                            <div class="d-flex flex-wrap align-items-center">
                                <span class="custom-block-span">Price:</span>
                                <p class="mb-0">$50</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="custom-block-image-wrap">
                        <a href="#">
                            <img src="https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/11/d5/de/52.jpg" class="custom-block-image img-fluid" loading="lazy" alt="Private Sreemangal Tour Package from Dhaka: Srimangal Nature Tour">
                            <i class="custom-block-icon bi-link"></i>
                        </a>

                        <div class="custom-block-date-wrap">
                            <strong class="text-white">01 June 2025</strong>
                        </div>

                        <div class="custom-btn-wrap">
                            <a href="/tours" class="btn custom-btn">See Packages</a>
                        </div>
                    </div>

                    <div class="custom-block-info">
                        <a href="#" class="events-title mb-2">Private Sreemangal Tour Package from Dhaka: Srimangal Nature Tour</a>

                        <p class="mb-0">The srimangal Tour package from Dhaka is available around the year. Sreemangal Tour is one of the popular tours in Bangladesh for foreigners. In this Tour, lush green tea gardens, diverse wildlife, and traditional lifestyles come together to offer an unforgettable experience. Immerse yourself in the beauty and culture of Sreemangal (Srimangal) as you discover the unique attractions of the region.</p>

                        <div class="border-top mt-4 pt-3">
                            <div class="d-flex flex-wrap align-items-center mb-1">
                                <span class="custom-block-span">Location:</span>
                                <p class="mb-0">Srimangal</p>
                            </div>

                            <div class="d-flex flex-wrap align-items-center">
                                <span class="custom-block-span">Price</span>
                                <p class="mb-0">$60</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@endsection