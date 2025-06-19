@extends('components.master')

@section('content')
    <div class="body-wrapper-inner">
        <div class="container-fluid">
            <div class="row">
                <!-- Kolom Kiri: Logo dan Judul -->
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/images/logos/Polisi App1.jpeg') }}" alt="Shield Icon" class="img-fluid"
                                style="width: 300px;">
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan: Vision dan Mission -->
                <div class="col-lg-4">
                    <div class="row">
                        <!-- Vision -->
                        <div class="col-lg-12">
                            <div class="card overflow-hidden">
                                <div class="card-body p-4">
                                    <h5 class="card-title mb-3 fw-semibold">Vision</h5>
                                    <p class="fs-3">
                                        To build a safer, more transparent society by fostering seamless communication and
                                        trust between citizens and law enforcement.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Mission -->
                        <div class="col-lg-12 mt-3">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h5 class="card-title mb-3 fw-semibold">Mission</h5>
                                    <p class="fs-3">
                                        To empower citizens and law enforcement through a seamless digital platform that
                                        enables real-time reporting, efficient communication, and community
                                        collaboration—promoting safety, transparency, and trust across all
                                        levels of society.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Akhir kolom kanan -->
            </div> <!-- Akhir row -->
        </div> <!-- Akhir container-fluid -->
    </div> <!-- Akhir body-wrapper-inner -->

    @include('components.footer')
@endsection
