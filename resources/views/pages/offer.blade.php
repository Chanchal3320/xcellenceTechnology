@extends('master')

@section('title')
   Xcellence Technology || Offer
@endsection

@section('mainContent')

    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>All Offers</h2>
                        <ul>
                            <li><a href="{{ route('welcomePage') }}">Home</a></li>
                            <li>All Offers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Start About Section -->
    <section class="about-area section-padding">
        <div class="container">
            <div class="row">
                @foreach($allOffers as $allOffer)
                <div class="col-6">
                    <div class="offer_image">
                        <img src="{{ $allOffer->offer_image}}" alt="" width="540px" height="240px">
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- End About Section -->


@endsection
