@extends('layouts.app')

@section('title')
    All your portfolio
@endsection

@section('content')
    <section id="all-your-portfolio_banner">
        <div class="container-fluid p-0">
            <div class="banner">
                <img src="{{ asset('img/banner.png') }}" class="img-fluid">
                <div class="container_fluid container-fluid">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 col-lg-7">
                            <h2 class="banner_title">{{ __('All your portfolio') }}</h2>
                            <p class="banner_text assets_browse_banner_text">
                                {{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.') }}
                            </p>
                        </div>
                        <div class="col-5 banner_img_money">
                            <img src="{{ asset('img/banner-card.png') }}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @guest
        @else
        <div class="all_your_portfolio_bg">
            <section id="all-your-portfolio">
                <div class="container_fluid container-fluid  p-0">
                    <section id="all-your-portfolio_table">
                        <h2 class="my_portfolio_title">{{ __('My portfolio') }}</h2>
                        @include('plugins/all-your-portfolio-table')
                    </section>
                </div>
            </section>

            <section id="all-your-portfolio">
                <div class="container_fluid container-fluid  p-0">
                    <section id="all-your-portfolio_table">
                        <h2 class="my_portfolio_title">{{ __('My portfolio') }}</h2>
                        @include('plugins/all-your-portfolio-table_two')
                    </section>
                </div>
            </section>
        </div>
    @endguest
@endsection
