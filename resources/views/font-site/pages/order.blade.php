@extends('font-site')

@section('font-site')

<div class="container">
        <div class="container my-5">
            <h1 class="text-center mb-4 mt-4">Order Food</h1>
            <div class="row pey">
                <div class="col-md-4">
                    <div class="card shadow-sm mb-4" style="max-width: 20rem; border-radius: 8px; overflow: hidden;">
                        <img src="{{ asset($foodItem->foodPicture) }}" class="card-img-top" alt="{{ $foodItem->foodName }}" style="height: 200px; object-fit: cover; padding:15px;">
                        <div class="card-body">
                            <form action="{{ route('place.order') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="foodName">Food Name</label>
                                    <input type="text" class="form-control" id="foodName" name="foodName" value="{{ $foodItem->foodName }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="foodPrice">Food Price</label>
                                    <input type="text" class="form-control" id="foodPrice" name="foodPrice" value="{{ $foodItem->foodPrice }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" required>
                                </div>
                                <input type="hidden" name="food_id" value="{{ $foodItem->id }}">
                    
                                <!-- Payment Method -->
                                <label for="paymentMethod" class="form-label">Select Payment Method</label>
                                <select name="payment_method" id="paymentMethod" class="form-select mb-3" required>
                                    <option value="">-- Select --</option>
                                    <option value="bkash">bKash</option>
                                    <option value="nagad">Nagad</option>
                                    <option value="bank">islamic Bank</option>
                                </select>
                    
                                <div id="paymentDetails"></div>
                                
                                <!-- Submit Button -->
                                @if (Auth::user())
                                <button type="submit" class="btn btn-primary w-100 mt-3">Please Order</button>
                                @else
                                <a href="{{route('login')}}" type="submit" class="btn btn-primary w-100 mt-3">Please Order</a>
                                @endif
                                <a href="{{url('/')}}" class="btn btn-danger w-100 mt-3">Cancel</a>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    
        <script>
            // Display additional input fields based on the selected payment method
            const paymentMethod = document.getElementById('paymentMethod');
            const paymentDetails = document.getElementById('paymentDetails');
        
            paymentMethod.addEventListener('change', function () {
                paymentDetails.innerHTML = ''; // Clear previous fields
                if (this.value === 'bkash' || this.value === 'nagad') {
                    paymentDetails.innerHTML = `
                       <h6>${this.value.charAt(0).toUpperCase() + this.value.slice(1)} Account: 01768692251</h6>
                        <label for="mobileNumber" class="form-label">${this.value.charAt(0).toUpperCase() + this.value.slice(1)} Number</label>
                        <input type="text" id="mobileNumber" name="number" class="form-control" placeholder="Enter your ${this.value} number" required>
                        <label for="transactionID" class="form-label">Transaction ID</label>
                        <input type="text" id="transactionID" name="trx_id" class="form-control" placeholder="Enter transaction ID" required>
                    `;
                } else if (this.value === 'bank') {
                    paymentDetails.innerHTML = `
                        <h6>Bank Account: 20507706700070001</h6>
                        <label for="bankAccount" class="form-label">Account Number</label>
                        <input type="text" id="bankAccount" name="number" class="form-control" placeholder="Enter your Islami Bank account number" required>
                        <label for="bankTrxID" class="form-label">Transaction ID</label>
                        <input type="text" id="bankTrxID" name="trx_id" class="form-control" placeholder="Enter transaction ID" required>
                    `;
                }
            });
        </script>
        
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    
    
    
    
@endsection

