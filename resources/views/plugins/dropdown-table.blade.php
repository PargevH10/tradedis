<div class="table-responsive">
    <table class="table tablesorter mb-0">
        <thead>
            <tr class="table_header">
                <th class="table_header_name" scope="col">{{ __('Name') }}</th>
                <th class="table_header_name" scope="col">{{ __('Bid') }}</th>
                <th class="table_header_name" scope="col">{{ __('Quantity') }}</th>
                <th class="table_header_name" scope="col">{{ __('Ask') }}</th>
                <th class="table_header_name" scope="col">{{ __('Quantity') }}</th>
                <th class="table_header_name" scope="col">{{ __('Cost') }}</th>
                <th class="table_header_name" scope="col">{{ __('Strike') }}</th>
                <th class="table_header_name" scope="col">{{ __('Last trade') }}</th>
                <th class="table_header_name" scope="col">{{ __('Percent Change from Last Close') }}</th>
            </tr>
        </thead>
            @foreach($daysSymbols as $key=>$day)
                <tbody>
                    <tr>
                        <td colspan="10" class="p-0">
                            <div class="dropdown_table_btn" id="dropdown_table_btn_0">
                                <span>Maturuty {{ $key }}</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tbody class="dropdown_table_maturuty" id="dropdown_table_maturuty_0">
                    @foreach($day as $symbol)
                        <tr class="table_body">
                            <th scope="row" class="align-baseline">
                                <img src="{{ asset('img/table-icons/' . $symbol->logo) }}" class="img-fluid table_img" alt="BNB">
                                <span class="table_row_name">{{ $symbol->symbol_name }}</span>
                                <span class="row_name">{{ $symbol->symbol_description }}</span>
                            </th>
                            <td class="align-baseline">
                                <span class="table_row_change">
                                     {{ $symbol->bid }}$
                                </span>
                            </td>
                            <td class="align-baseline">
                                <span class="table_row_price">
                                     {{ $symbol->quantity1 }}
                                </span>
                            </td>
                            <td class="align-baseline">
                                <span class="table_row_price">
                                     {{ $symbol->ask }}$
                                </span>
                            </td>
                            <td class="align-baseline">
                                <span class="table_row_price">
                                     {{ $symbol->quantity2 }}
                                </span>
                            </td>
                            <td class="align-baseline">
                                <span class="table_row_price">
                                     {{ $symbol->cost }}$
                                </span>
                            </td>
                            <td class="align-baseline">
                                <span class="table_row_price">
                                     {{ $symbol->strike }}$
                                </span>
                            </td>
                            <td class="align-baseline">
                                <span class="table_row_price">
                                     {{ $symbol->last_trade }}$
                                </span>
                            </td>
                            <td class="align-baseline">
                                <span class="table_row_price">
                                     {{ $symbol->percent }}$
                                </span>
                            </td>
                            <td class="align-baseline">
                                @guest
                                    @else
                                    <form action="/" method="get" class="text-center">
                                        <button type="button" class="btn btn_border_gradient_sale" data-toggle="modal" data-target="#orderModal">Sale</button>
                                        <button type="button" class="btn">
                                            <img src="{{ asset('img/icons/x.png') }}" class="img-fluid" alt="Delete">
                                        </button>
                                    </form>
                                @endguest
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @endforeach
    </table>
</div>
<div class="col-12 dropdown_table_btn_container">
    <button type="button" class="btn btn_border_gradient dropdown_table_btn_previouse">
        <span class="table_row_change">{{ __('Previouse') }}</span>
    </button>
    <button type="button" class="btn btn_gradient dropdown_table_btn_next">{{ __('Next') }}</button>
</div>
