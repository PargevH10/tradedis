@extends('admin.layouts.app')

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-content">
        <!--begin::Portlet-->
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            {{ $page_description }}
                        </h3>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form class="m-form m-form--fit m-form--label-align-right" method="POST" action="{{ route('symbol.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Symbol Logo
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group">
                                <input type="file" name="logo" class="custom-file-input @error('logo') is-invalid @enderror" id="customFile">
                                <label class="custom-file-label" for="customFile">
                                    Choose file
                                </label>
                                @error('logo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Symbol Name
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="text" class="form-control m-input @error('symbol_name') is-invalid @enderror" name="symbol_name" placeholder="Symbol name">
                            @error('symbol_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Symbol Description
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="text" class="form-control m-input @error('symbol_description') is-invalid @enderror" name="symbol_description" placeholder="Symbol Description" aria-describedby="basic-addon2">
                            @error('symbol_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Bid
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        USD
                                    </span>
                                </div>
                                <input type="text" class="form-control m-input @error('bid') is-invalid @enderror" name="bid" placeholder="Bid" aria-describedby="basic-addon2">
                                @error('bid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Quantity
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group">
                                <input type="number" class="form-control m-input @error('quantity1') is-invalid @enderror" name="quantity1" placeholder="Quantity" aria-describedby="basic-addon2">
                                @error('quantity1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Ask
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        USD
                                    </span>
                                </div>
                                <input type="text" class="form-control m-input @error('ask') is-invalid @enderror" name="ask" placeholder="Ask" aria-describedby="basic-addon2">
                                @error('ask')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Quantity
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group">
                                <input type="number" class="form-control m-input @error('quantity2') is-invalid @enderror" name="quantity2" placeholder="Quantity" aria-describedby="basic-addon2">
                                @error('quantity2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Cost
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        USD
                                    </span>
                                </div>
                                <input type="text" class="form-control m-input @error('cost') is-invalid @enderror" name="cost" placeholder="Cost" aria-describedby="basic-addon2">
                                @error('cost')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Strike
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        USD
                                    </span>
                                </div>
                                <input type="text" class="form-control m-input @error('strike') is-invalid @enderror" name="strike" placeholder="Strike" aria-describedby="basic-addon2">
                                @error('strike')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Last Trade
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        USD
                                    </span>
                                </div>
                                <input type="text" class="form-control m-input @error('last_trade') is-invalid @enderror" name="last_trade" placeholder="Last Trade" aria-describedby="basic-addon2">
                                @error('last_trade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Percent Change from Last Close
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        USD
                                    </span>
                                </div>
                                <input type="text" class="form-control m-input @error('percent') is-invalid @enderror" name="percent" placeholder="Percent Change from Last Close" aria-describedby="basic-addon2">
                                @error('percent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">
                                <button type="submit" class="btn btn-brand">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
@endsection



