@extends('admin.layouts.app')

@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">
                        {{ $page_title }}
                    </h3>
                </div>
                <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                    <a href="{{ route('symbol.create') }}" class="btn btn-primary m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
                        <span>
                            <span>
                                New Symbol
                            </span>
                        </span>
                    </a>
                    <div class="m-separator m-separator--dashed d-xl-none"></div>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <!--Begin::Section-->
            <div>
                <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded" id="local_data" style="">
                    <table class="m-datatable__table" style="display: block; min-height: 300px; overflow-x: auto;">
                        <thead class="m-datatable__head">
                        <tr class="m-datatable__row" style="left: 0px;">
                            <th data-field="symbolLogo" class="m-datatable__cell m-datatable__cell--sort">
                                <span style="width: 132px;">Symbol Logo</span>
                            </th>
                            <th data-field="symbolName" class="m-datatable__cell m-datatable__cell--sort">
                                <span style="width: 132px;">Symbol Name</span>
                            </th>
                            <th data-field="symbolBid" class="m-datatable__cell m-datatable__cell--sort">
                                <span style="width: 132px;">Bid</span>
                            </th>
                            <th data-field="symbolQuantity" class="m-datatable__cell m-datatable__cell--sort">
                                <span style="width: 132px;">Quantity</span>
                            </th>
                            <th data-field="symbolAsk" class="m-datatable__cell m-datatable__cell--sort">
                                <span style="width: 132px;">Ask</span>
                            </th>
                            <th data-field="symbolLastTrade" class="m-datatable__cell m-datatable__cell--sort">
                                <span style="width: 110px;">last Trade</span>
                            </th>
                            <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort">
                                <span style="width: 110px;">Actions</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="m-datatable__body" style="">
                            @foreach($symbols as $symbol)
                                <tr data-row="1" class="m-datatable__row m-datatable__row--even" style="left: 0px;">
                                    <td data-field="symbolLogo" class="m-datatable__cell">
                                        <span style="width: 132px;"><img style="width: 50px;height: 50px" src="{{ asset('/symbol-logo/' . $symbol->logo) }}"></span>
                                    </td>
                                    <td data-field="symbolName" class="m-datatable__cell">
                                        <span style="width: 132px;">{{ $symbol->symbol_name }}</span>
                                    </td>
                                    <td data-field="symbolBid" class="m-datatable__cell">
                                        <span style="width: 132px;">{{ $symbol->bid }}</span>
                                    </td>
                                    <td data-field="symbolQuantity" class="m-datatable__cell">
                                        <span style="width: 132px;">{{ $symbol->quantity1 }}</span>
                                    </td>
                                    <td data-field="symbolAsk" class="m-datatable__cell">
                                        <span style="width: 132px;">{{ $symbol->ask }}</span>
                                    </td>
                                    <td data-field="symbolLastTrade" class="m-datatable__cell">
                                        <span style="width: 132px;">{{ $symbol->last_trade}}</span>
                                    </td>
                                    <td data-field="Actions" class="m-datatable__cell">
                                        <span style="overflow: visible; position: relative; width: 110px;">
                                            <form action="{{ route('symbol.destroy', $symbol->id) }}" method="POST">
                                                @csrf
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill">
                                                    <i class="la la-trash"></i>
                                                </button>
                                                <a href="{{ route('symbol.edit', $symbol->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="View ">
                                                    <i class="la la-edit"></i>
                                                </a>
                                            </form>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
{{--                    <div class="m-datatable__pager m-datatable--paging-loaded clearfix">--}}
{{--                        <ul class="m-datatable__pager-nav">--}}
{{--                            <li>--}}
{{--                                <a title="First" class="m-datatable__pager-link m-datatable__pager-link--first m-datatable__pager-link--disabled" data-page="1" disabled="disabled">--}}
{{--                                    <i class="la la-angle-double-left"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a title="Previous" class="m-datatable__pager-link m-datatable__pager-link--prev m-datatable__pager-link--disabled" data-page="1" disabled="disabled">--}}
{{--                                    <i class="la la-angle-left"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li style="display: none;">--}}
{{--                                <a title="More pages" class="m-datatable__pager-link m-datatable__pager-link--more-prev" data-page="1">--}}
{{--                                    <i class="la la-ellipsis-h"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li style="display: none;">--}}
{{--                                <input type="text" class="m-pager-input form-control" title="Page number">--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="m-datatable__pager-link m-datatable__pager-link-number m-datatable__pager-link--active" data-page="1" title="1">1</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="2" title="2">2</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="3" title="3">3</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="4" title="4">4</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="5" title="5">5</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="6" title="6">6</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a title="More pages" class="m-datatable__pager-link m-datatable__pager-link--more-next" data-page="7">--}}
{{--                                    <i class="la la-ellipsis-h"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a title="Next" class="m-datatable__pager-link m-datatable__pager-link--next" data-page="2">--}}
{{--                                    <i class="la la-angle-right"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a title="Last" class="m-datatable__pager-link m-datatable__pager-link--last" data-page="10">--}}
{{--                                    <i class="la la-angle-double-right"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
            <!--End::Section-->
        </div>
    </div>
@endsection
