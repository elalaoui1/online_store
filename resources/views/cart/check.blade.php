



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
crossorigin="anonymous" />


<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="col-md-4">
        <div class="border border-3 border-success"></div>
        <div class="card  bg-white shadow p-5">
            <div class="mb-4 text-center">
                <img src="{{asset('/img/Credit card-bro.svg')}}" width="200">
            </div>
            <div class="text-center">
                <h1>Sorry Payment was not successful</h1>
                <p>
                    Your balance is not enough to complete the payment
                </p>
                <a href="{{route('cart.index')}}" class="btn btn-outline-success">Back Cart</a>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
