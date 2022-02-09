<div>
    <section class="space min gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-7 col-md-9 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="text-muted mb-0">Our Pricing</h6>
                        <h2 class="ft-bold">Choose Your <span class="text-danger">Package</span></h2>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">

                @foreach($plans as $plan)
               <div class="col-lg-4 col-md-4">
                    <div class="pricing_wrap">
                        <div class="prt_head">
                            <h4 class="ft-medium">{{ $plan -> name }}</h4>
                        </div>
                        <div class="prt_price">
                            <h2 class="ft-bold"><span>{{ $plan -> currency }}</span>{{ $plan -> price }}</h2>
                            <span class="fs-md"> per {{ $plan -> invoice_interval }}</span>
                        </div>
                        <div class="prt_body">
                            <p>
                                {{ $plan -> description }}
                            </p>
                        </div>
                        <div class="prt_footer">
                            @if(auth()->check())
                                <a class="btn btn-warning" href="{{ route('update.plan', ['plan' => $plan->slug]) }}" data-abc="true">Renew Plan</a>
                            @else
                                <a class="btn btn-warning" href="{{ route('auth.merchant', ['plan' => $plan->slug]) }}" data-abc="true">Start Plan</a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
</div>
