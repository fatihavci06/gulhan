@extends('layouts.app')

@section('content')

    <section>
        <div class="d-flex bg-primary justify-content-center align-items-center py-3 gap-2">
            <h1 class="aniLeft display-1 text-white fw-bold">01</h1>
            <div>
                <h2 class="aniBottom h3 text-white fw-normal mb-0">About Us</h2>
                <h2 class="aniRight fw-bold text-white">Our Company</h2>
            </div>
        </div>
    </section>

    <main class="mb-5 pb-5 mt-3">

        <section class="container text-center">
            <div class="col-md-10 mx-auto">
                <div class="aniBottom">
                    <h1 class="fw-bold mb-4"> We are the go-to company <br> in the world of industrial gaskets</h1>
                    <p class="text-primary fw-bold mb-4 fs-4">Our deep roots give stability to our open and ambitious entrepreneurial outlook!</p>
                </div>

                <div class="headline">
                    <p class="mb-4 fs-5">It all began in 1977 when Francesco and Mario Polini founded the company, inspired by their typically Bergamasco entrepreneurial intuition.</p>
                    <p class="mb-4 fs-5">Today, with the second generation of the family at the helm, we are the no.1 reference point for industrialgaskets around the world, both for first-time use and replacement parts.</p>
                    <p class="fs-5">This has been made possible thanks to the people in World Gasket Ellegi‘s large family, who, with their professionalism, are key to the company’s success.</p>
                </div>
            </div>
        </section>

        <section class="bg-secondary py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="h1 aniBottom fw-bold text-primary mb-5"><span class="text-white">Growth and</span> strategic<br>development</h2>
                        <div class="headline fs-5 text-white mb-3">
                            <p>Our goal is to best meet our customers’ needs by providing comprehensive and reliable service. For this reason, we have separated the management of our products over two locations.</p>
                            <p>The operational headquarters, in Grumello del Monte, houses the administrative offices, the production department and the research and development laboratory. Here we make a wide range of rubber and thermoplastic products for various industries.</p>
                            <p>The logistics headquarters, located in Castelli Calepio, houses the laboratories and a warehouse of more than 20 thousand square meters, where we store our products. Thanks to this facility, we are able to guarantee high product availability and quick delivery service to customers all over the world.</p>
                        </div>

                        <img src="{{ asset('images/ellegi-who-3.jpg') }}" alt="" class="aniTop img-fluid rounded-3" loading="lazy">
                    </div>

                    <div class="col-md-6">
                        <img src="{{ asset('images/ellegi-who-1.jpg') }}" alt="" class="aniTop img-fluid rounded-3 mb-3" loading="lazy">
                        <img src="{{ asset('images/ellegi-who-2.jpg') }}" alt="" class="aniTop img-fluid rounded-3" loading="lazy">
                    </div>
                </div>
            </div>
        </section>

        {{-- timeline --}}
        <section class="container py-5">
            <div class="timeline-area">

                <div class="aniTimeline timeline-content">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6">
                            <p>
                                Ellegi is founded and, since its debut on the market, has offered a full range of products made with all kinds of elastomers and thermoplastic materials. We start our business in Italy, before entering important new markets such as the Middle East, America and Africa.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <div class="card shadow-lg text-center">
                                <div class="card-body">
                                    <img src="{{ asset('images/timeline-1.jpg') }}" alt="" class="img-fluid rounded-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="aniTimeline timeline-content">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6">
                            <p>
                                We created the WORLD GASKET brand which identifies the new range of alternative items to OEMs dedicated to the earth moving machinery industry.
                            </p>
                        </div>
                        <div class="col-lg-6 shadow-lg text-center">
                            <img src="{{ asset('images/timeline-2.jpg') }}" alt="" class="img-fluid rounded-3">
                        </div>
                    </div>
                </div>

                <div class="aniTimeline timeline-content">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6">
                            <p>
                                Innovation and continuous technological research into production processes enable us to achieve quality certification from Dekra and thus to apply the ISO 9001 Quality System to all our production cycle.
                            </p>
                        </div>
                        <div class="col-lg-6 shadow-lg text-center">
                            <img src="{{ asset('images/timeline-3.png') }}" alt="" class="img-fluid rounded-3">
                        </div>
                    </div>
                </div>

            </div>
        </section>

        {{-- ul li --}}
        <section class="container py-5">
            <div class="aniBottom">
                <h3 class="h1 text-center fw-bold">Our vision has specific horizons</h3>
                <h4 class="h3 text-primary text-center fw-bold">These are our guiding values</h4>
            </div>

            {{-- numbers --}}
            <div class="row my-5 pt-5">

                <div class="headline d-flex gap-4 align-items-start col-md-6 mb-5">
                    <img src="{{ asset('images/1.svg') }}" alt="" class="img fluid" loading="lazy">
                    <div>
                        <h3 class="h2 fw-bold">A glocal identity</h3>
                        <p class="fs-5">Our Bergamasco roots, our link with our local region and the Made in Italy philosophy distinguish our presence on the world market.</p>
                    </div>
                </div>

                <div class="headline d-flex gap-4 align-items-start col-md-6 mb-5">
                    <img src="{{ asset('images/2.svg') }}" alt="" class="img fluid" loading="lazy">
                    <div>
                        <h3 class="h2 fw-bold">A sense of belonging</h3>
                        <p class="fs-5">We believe in People Power, and for this reason we involve the members of our team to be active contributors to the company.</p>
                    </div>
                </div>

                <div class="headline d-flex gap-4 align-items-start col-md-6 mb-5">
                    <img src="{{ asset('images/3.svg') }}" alt="" class="img fluid" loading="lazy">
                    <div>
                        <h3 class="h2 fw-bold">Dedication to our clients</h3>
                        <p class="fs-5">“The client at the centre” is not a slogan but a value we have chosen and practised through proactive consultancy and solid partnership.</p>
                    </div>
                </div>

                <div class="headline d-flex gap-4 align-items-start col-md-6 mb-5">
                    <img src="{{ asset('images/4.svg') }}" alt="" class="img fluid" loading="lazy">
                    <div>
                        <h3 class="h2 fw-bold">Recognized know-how</h3>
                        <p class="fs-5">Our reputation goes before us as our know-how is recognized by the world market and all the major players in our business sector.</p>
                    </div>
                </div>

                <div class="headline d-flex gap-4 align-items-start col-md-6 mb-5">
                    <img src="{{ asset('images/5.svg') }}" alt="" class="img fluid" loading="lazy">
                    <div>
                        <h3 class="h2 fw-bold">Integrated expertise</h3>
                        <p class="fs-5">World Gasket Ellegi’s Business Units continuously integrate their respective expertise, thus creating a virtuous circle that results in innovative R&D of products and processes.</p>
                    </div>
                </div>

                <div class="headline d-flex gap-4 align-items-start col-md-6 mb-5">
                    <img src="{{ asset('images/6.svg') }}" alt="" class="img fluid" loading="lazy">
                    <div>
                        <h3 class="h2 fw-bold">Dynamic mindset</h3>
                        <p class="fs-5">Our entrepreneurial approach always aims at being state-of-the-art so as to achieve the highest technical standards and focus on constant improvement.</p>
                    </div>
                </div>




            </div>

            {{-- card --}}
            <div class="aniBottom card">
                <div class="row">
                    <div class="col-md-4">
                        <img style="width: 100%; height: 100%; object-fit:cover;" src="{{ asset('images/numbers-card.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8 p-5">
                        <div class="aniBottom mb-4">
                            <h3 class="h1 fw-bold">Two Business Units</h3>
                            <h4 class="h3 text-primary fw-bold">OEM and Aftermarket: two links in the same chain</h4>
                        </div>

                        <p>We are a singlelarge brand with two Business Units. Two fundamental links in the same chain that work together and strengthen one another: a genuine virtuous circle dedicated to Quality.</p>
                        <p>The OEM Business Unit is the area responsible for the production of technical pieces and industrial gaskets, and the Aftermarket Business Unit is the area dedicated to the supply of replacement parts for earth moving and automotivemachines.</p>

                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-warning w-100 py-3 text-white fw-bold fs-5">OEM</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-warning w-100 py-3 text-white fw-bold fs-5">AFTERMARKET</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection


@section('script')
    <script>
        ScrollReveal().reveal('.aniTimeline', { origin: 'right', distance: '1rem', delay: 550, duration: 2250 });
    </script>
@endsection
