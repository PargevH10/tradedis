@extends('layouts.app')

@section('title')
    Contract description
@endsection

@section('content')
    <section id="contract_description_banner">
        <div class="container-fluid p-0">
            <div class="banner">
                <img src="{{ asset('img/banner.png') }}" class="img-fluid">
                <div class="container_fluid container-fluid">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 col-lg-7">
                            <h2 class="banner_title">{{ __('Contract description') }}</h2>
                            <p class="banner_text assets_browse_banner_text">
                                {{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.') }}
                            </p>
                            <a href="#" type="button" class="btn btn_gradient mb-3">{{ __('Place Order') }}</a>
                        </div>
                        <div class="col-5 banner_img_money">
                            <img src="{{ asset('img/banner-computer.png') }}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contract_description_text_container">
        <div class="container_fluid">
            <p class="contract_description_text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and
                I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,
                the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.
                Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,
                but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
                To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some
                advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no
                annoying consequences, or one who avoids a pain that produces no resultant pleasure?
            </p>
            <p class="contract_description_text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate
                velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
            </p>
            <div class="col-12 text-center">
                <span class="btn_border_gradient"  onclick="DownloadFile('{{ asset("example.pdf") }}')">
                    <input type="button" class="btn p-0" value="{{ __('Download PDF') }}" />
                </span>
            </div>
        </div>
    </section>

    <section id="contract_description_tab">
        <div class="container_fluid">


            <div class="tabset">
                <!-- Tab 1 -->
                <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
                <label for="tab1">{{ __('Today prices') }}</label>
                <!-- Tab 2 -->
                <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
                <label for="tab2">{{ __('Monthly prices') }}</label>

                <div class="tab-panels">
                    <section id="marzen" class="tab-panel">
                        <h2>{{ __('Today prices') }}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque impedit necessitatibus pariatur sed tenetur. Atque itaque, possimus? Dignissimos earum, nihil! Animi, explicabo facere laborum laudantium nostrum perspiciatis quibusdam rerum similique.</p>
                    </section>
                    <section id="rauchbier" class="tab-panel">
                        <h2>{{ __('Monthly prices') }}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolor eum in numquam officiis quaerat repellendus reprehenderit repudiandae sunt velit? Consequatur dolore earum eveniet iste molestiae, quae quas qui velit.</p>
                    </section>
                </div>

            </div>


            <div class="col-12 text-center">
                <a href="#" type="button" class="btn btn_gradient mb-3">{{ __('Place Order') }}</a>
            </div>
        </div>
    </section>
 @endsection


