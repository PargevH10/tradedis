@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <section id="banner">
        <div class="container-fluid p-0">
            <div class="banner">
                <img src="{{ asset('img/banner.png') }}" class="img-fluid">
                <div class="container_fluid container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <h2 class="banner_title">{{ __('Buy and Sale Crypto in minutes') }}</h2>
                            <p class="banner_text">
                                {{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.') }}
                            </p>
                            <button type="button" class="btn btn_border_gradient" data-toggle="modal" data-target="#registerModal">{{ __('Register Now') }}</button>
                        </div>
                        <div class="col-5 banner_img_money">
                            <img src="{{ asset('img/money.png') }}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="market_trend">
        <div class="container_fluid container-fluid">
            <h2 class="market_trend_title">
                Market trend
            </h2>
            <div class="market_trend_table">
                @include('plugins/table')
            </div>
        </div>
    </section>

    <section id="how_to_join_us">
        <div class="container_fluid container-fluid text-center">
            <h2 class="join_us_title">{{ __('How to Join Us') }}</h2>
            <div class="step">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('img/STEPS/A.png') }}" class="img-fluid" alt="Step 1">
                        <p class="step_text">
                            {{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.') }}
                        </p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('img/STEPS/B.png') }}" class="img-fluid" alt="Step 2">
                        <p class="step_text">
                            {{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.') }}
                        </p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('img/STEPS/C.png') }}" class="img-fluid" alt="Step 3">
                        <p class="step_text">
                            {{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.') }}
                        </p>
                    </div>
                    <div class="col join_us_btn_container">
                        <button type="button" class="btn btn_border_gradient mb-3" data-toggle="modal" data-target="#registerModal">{{ __('Register Now') }}</button>
                        <button type="button" class="btn btn_gradient mb-3">{{ __('Trade Now') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
