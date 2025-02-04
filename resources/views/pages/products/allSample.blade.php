@extends('master')

@section('title')
    Xcellence Technology || All Sample
@endsection

@section('mainContent')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>All Sample</h2>
                        <ul>
                            <li><a href="{{ route('welcomePage') }}">Home</a></li>

                            <li>All Sample</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->


    <!-- Start About Section -->
    <section class="sample-area section-padding">
        <div class="container">
            <div class="row d-flex ">
                @foreach($allSamples as $allSample)
                <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">

                                    <div class="popup-gallery ">

                                        <a href="{{ asset($allSample->sample_file) }}" class="image-popup-no-margins" data-lightbox="image-1" data-title="{{ $allSample->sample_code }}">
                                            <img src="{{ asset($allSample->thumbnail) }}" alt="Sample File" class="example-image" height="300px" width="400px"/>

                                        </a>

                                    </div>

                                </div>
                                <div class="el-card-content">
                                    <h5 class="box-title text-center mt-3">Code : <strong> {{ $allSample->sample_code }} </strong> </h5>
                                    <br/>
                                    <div class="button-container  text-center mb-5">
                                        <a href="{{ asset($allSample->sample_file) }}" class=" btn btn-sm btn-primary image-popup-no-margins" data-lightbox="image-1" data-title="{{ $allSample->sample_code }}">
                                            <i class="fa fa-eye"></i> View
                                        </a>
                                        <a href="{{ asset($allSample->sample_file) }}" download>
                                            <button class=" btn btn-success btn-sm download-button"> <i class="fa fa-download"></i> Download</button>
                                        </a>
                                    </div>
                                </div>



                            </div>
                        </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End About Section -->





@endsection
