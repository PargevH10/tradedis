@extends('layouts.app')

@section('title')
    Order
@endsection

@section('content')
    <div class="container-fluid order_banner">
        <div class="container_fluid">
        <section id="order">
            <div class="order_container">
                <h2 class="order_title">
                    Order Form
                </h2>
                <p class="order_text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua.
                </p>
            </div>

            <div class="col-md-8 col-12 mx-auto">
                <form action="/order" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <label class="order_label" for="asset">Asset:</label>
                            </div>
                            <div class="col-12 col-md-8">
                                <input type="text" class="form-control" id="asset" name="asset">
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <label class="order_label">Position:</label>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="row">
                                    <label class="col-6 radio-inline" for="buy">
                                        <input type="radio" name="position" id="buy" value="buy" checked>
                                        <span class="order_label_span">Buy</span>
                                    </label>
                                    <label class="col-6 radio-inline" for="sell">
                                        <input type="radio" name="position" id="sell" value="sell">
                                        <span class="order_label_span">Sell</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <label class="order_label">Order Type:</label>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="row">
                                    <label class="col-6 radio-inline" for="market">
                                        <input type="radio" name="orderType" id="market" value="market" checked>
                                        <span class="order_label_span">Market</span>
                                    </label>
                                    <label class="col-6 radio-inline" for="limit">
                                        <input type="radio" name="orderType" id="limit" value="limit">
                                        <span class="order_label_span">Limit</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <label class="order_label" for="limit">Limit:</label>
                            </div>
                            <div class="col-12 col-md-8">
                                <input type="number" class="form-control" name="limit" id="limit">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <label class="order_label" for="quantity">Quantity:</label>
                            </div>
                            <div class="col-12 col-md-8">
                                <input type="number" class="form-control" name="quantity" id="quantity">
                            </div>
                        </div>
                    </div>
                    <small class="order_small">(Note:Each unit is for 1.000$of face value)</small>
                    <div class="order_btn">
                        <button type="submit" class="btn btn_gradient">Place Order</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
    </div>
@endsection
