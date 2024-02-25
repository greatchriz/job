@extends('layouts.dashboard.layout')

@section('upper-title')

<div class="upper-title-box">
    <!--this is a job Application Form -->
    <h4> Make Deposit</h4>
    <div class="text">
        Fill this form to make deposit.
    </div>
</div>

@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <!-- Ls widget -->
        <div class="ls-widget">
            <div class="tabs-box">
                <div class="widget-content" style="padding: 30px 30px 10px;">
                    <form method="POST" action="{{ route('user.deposit') }}" class="default-form">
                        @csrf
                        <div class="row">


                            {{-- hidden input transaction_type --}}
                            <input type="hidden" name="type" value="deposit">

                            <!-- Input -->
                            <div class="form-group col-lg-6 col-md-12">
                                <label>Amount</label>
                                <input type="text" name="amount" placeholder="">
                            </div>

                            <div class="form-group col-lg-6 col-md-12">
                                <label>Crypto Account</label>
                                <select class="chosen-select" name="crypto_account">
                                    <option value="bitcoin">Bitcoin </option>
                                    <option value="usdt">USDT TRC20</option>

                                </select>
                            </div>



                            <!-- Input -->
                            <div class="form-group col-lg-12 col-md-12 text-right">
                                <button type="submit" class="theme-btn btn-style-one">Submits</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
