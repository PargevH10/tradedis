@extends('layouts.app')

@section('title')
    Assets Browse
@endsection

@section('content')
    <section id="assets_browse_banner">
        <div class="container-fluid p-0">
            <div class="banner">
                <img src="{{ asset('img/banner.png') }}" class="img-fluid">
                <div class="container_fluid container-fluid">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 col-lg-7">
                            <h2 class="banner_title">{{ __('Assets Browse') }}</h2>
                            <p class="banner_text assets_browse_banner_text">
                                {{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.') }}
                            </p>
                        </div>
                        <div class="col-5 banner_img_money">
                            <img src="{{ asset('img/globe.png') }}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="my_portfolio">
        <div class="container_fluid container-fluid  p-0">
            @guest
                @else
                <h2 class="my_portfolio_title">{{ __('My portfolio') }}</h2>
                <section class="">
                <p class="my_portfolio_sort">{{ __('Sort by') }}</p>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="contract_type">Contract Type</label>
                        <select id="contract_type" name="contract_type" class="form-control form_control">
                            <option selected></option>
                            <option value="Underlying">Underlying</option>
                            <option value="Futures/FRAs">Futures/FRAs</option>
                            <option value="Options">Options</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="asset_type">Asset Type</label>
                        <select id="asset_type" name="asset_type" class="form-control form_control">
                            <option selected></option>
                            <option value="Bonds">Bonds</option>
                            <option value="Equities">Equities</option>
                            <option value="Commodities">Commodities</option>
                            <option value="Currencies">Currencies</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputState"></label>
                        <select id="inputState" class="form-control mt-2" disabled>
                            <option selected></option>
                            <option value="Domestic">Domestic</option>
                            <option value="International">International</option>
                        </select>
                    </div>
                </div>
                <div id="select_two" class="d-none">
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <select name="contract_type" class="form-control form_control mt-2">
                                <option value="pricing_currency_1" selected>Pricing Currency 1</option>
                                <option value="pricing_currency_2">Pricing Currency 2</option>
                                <option value="pricing_currency_3">Pricing Currency 3</option>
                                <option value="pricing_currency_4">Pricing Currency 4</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <select name="asset_type" class="form-control form_control mt-2">
                                <option value="asset_currency_1" selected>Asset Currency 1</option>
                                <option value="asset_currency_2">Asset Currency 2</option>
                                <option value="asset_currency_3">Asset Currency 3</option>
                                <option value="asset_currency_4">Asset Currency 4</option>
                                <option value="asset_currency_5">Asset Currency 5</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <select name="asset_type" class="form-control form_control mt-2">
                                <option value="calls" selected>Calls</option>
                                <option value="calls_1">Calls 1</option>
                                <option value="calls_2">Calls 2</option>
                                <option value="calls_3">Calls 3</option>
                                <option value="calls_4">Calls 4</option>
                            </select>
                        </div>
                    </div>
                </div>
            </section>
            @endguest
            <section id="my_portfolio_table">
                @include('plugins/dropdown-table')
            </section>
        </div>
    </section>
 @endsection
