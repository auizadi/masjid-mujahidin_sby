@extends('layout.v_template')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-dark p-4">
                    <h3>Form Donasi</h3>
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{ asset('img')}}/kurban.webp" class="img-responsive" alt="..." width="150">
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-dark fw-bold mt-5">Sedekah Daging untuk Yatim, Dhuafa dan Lansia</h5>
                        </div>
                        <form action="">
                            <div class="col-md-12">
                                <div class="col-md-8">
                                    <hr class="my-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nominal</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p class="mb-3">Metode Pembayaran</p>

                                    <div class="my-3">
                                        <div class="form-check">
                                            <input id="credit" name="paymentMethod" type="radio"
                                                class="form-check-input" checked required>
                                            <label class="form-check-label" for="credit">Credit card</label>
                                        </div>
                                        <div class="form-check">
                                            <input id="debit" name="paymentMethod" type="radio"
                                                class="form-check-input" required>
                                            <label class="form-check-label" for="debit">Debit card</label>
                                        </div>
                                        <div class="form-check">
                                            <input id="paypal" name="paymentMethod" type="radio"
                                                class="form-check-input" required>
                                            <label class="form-check-label" for="paypal">PayPal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <label for="cc-number" class="form-label">Detail</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                    
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <button class="w-100 btn btn-success btn-lg fw-semibold" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
