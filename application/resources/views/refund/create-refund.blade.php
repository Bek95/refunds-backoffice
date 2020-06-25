@extends('.layouts.master')

@section('content')
<!-- start form -->
<section>
    <div class="message">
        @if(isset($error))
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>

        @endif
        @if(isset($success))
            <div class="alert alert-success" role="alert">
                {{$success}}
            </div>
        @endif
    </div>
    <div class="container">
        <form method="post" action="#">
            @csrf
            <div class="form-row form-input">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name" name="first_name" id="first_name" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Last name" name="last_name" id="last_name" required>
                </div>
            </div>
            <div class="form-row form-input">
                <div class="col">
                    <input type="text" class="form-control" placeholder="phone_number" name="phone_number" id="phone_number" required>
                </div>
                <div class="col">
                    <input type="email" class="form-control" placeholder="email" name="email" id="email" required>
                </div>
            </div>
            <div class="form-row form-input">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Zip code" name="zip_code" id="zip_code" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date of transaction" name="transaction_date" id="transaction_date" required>
                </div>
            </div>
            <div class="form-row form-input">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Reference" name="reference" id="reference" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Amount" name="amount" id="amount" required>
                </div>
            </div>
            <div class="form-row form-input">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Currency" name="amount_currency" id="amount_currency" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Name of Agent" name="order_refund_author" id="order_refund_author" required>
                </div>
            </div>
            <div class="form-submit-input">
                <input type="submit" class="btn btn-primary" value="submit">
            </div>
        </form>
    </div>
</section>
<!-- end form -->

@stop

