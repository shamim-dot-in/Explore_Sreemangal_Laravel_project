@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<main>

    <section class="contact-section section-padding" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 pt-5">
                    <form action="{{ route('contact.store') }}" method="POST" class="custom-form contact-form" role="form">
                        @csrf

                        <h2 class="mb-4 pb-2">Contact Us</h2>

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
                            
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input 
                                        type="text" 
                                        name="name" 
                                        id="full-name" 
                                        class="form-control" 
                                        placeholder="Full Name" 
                                        value="{{ old('name') }}" 
                                        required
                                    >
                                    <label for="full-name">Full Name</label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12"> 
                                <div class="form-floating">
                                    <input 
                                        type="email" 
                                        name="email" 
                                        id="email" 
                                        class="form-control" 
                                        placeholder="Email address" 
                                        value="{{ old('email') }}" 
                                        required
                                    >
                                    <label for="email">Email address</label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-floating">
                                    <textarea 
                                        class="form-control" 
                                        id="message" 
                                        name="message" 
                                        placeholder="Describe message here"
                                        required
                                    >{{ old('message') }}</textarea>
                                    <label for="message">Message</label>
                                </div>

                                <button type="submit" class="form-control">Submit Form</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="contact-info mt-5">
                        <div class="contact-info-item mb-4">
                            <div class="contact-info-body">
                                <strong>Sreemangal, Bangladesh</strong>

                                <p class="mt-2 mb-1">
                                    <a href="tel:+420721604558" class="contact-link">
                                        +420 721604558
                                    </a>
                                </p>

                                <p class="mb-0">
                                    <a href="mailto:info@Sreemangal.com" class="contact-link">
                                        info@Sreemangal.com
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="mt-5">
                            <h2 class="mb-3">Find Us on Map</h2>

                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4601.151907397756!2d91.72943731405506!3d24.306510784316665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da0fefaa9c2d8b%3A0xf03e60053a0b9afd!2sSreemangal!5e0!3m2!1sen!2sbd!4v1700000000000"
                                width="100%" 
                                height="350" 
                                style="border:0; border-radius:12px;" 
                                allowfullscreen="" 
                                loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

@endsection