@extends('layouts.HomeLayout')
@section('content')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Content Scroll -->
     <div id="content-scroll">


         <!-- Main -->
         <div id="main">

             <!-- Main Content -->
             <div id="main-content">

               <br>
               <br>
               <div class="vc_row row_padding_top row_padding_bottom">
                   <div class="vc_row">
                     @if (Session::has('success'))
                       
                     @else
                     <h3>Before You Buy:</h3>
                     <ul>
                       <li><strong>Step 1:</strong> You have selected <b>{{ $paymentMethod }}</b> as payment method.</li>
                       <li><strong>Step 2:</strong> Send {{ $price*70 }} -INR to this <b>{{ $AccountNumber }} </b> {{ $paymentMethod }} account.</li>
                       <li><strong>Step 3:</strong> Submit your payment info into the form below for Verification!</li>
                     </ul>
                   @endif
                  <h3>Submit your info for Verification:</h3>
                 <p>Your Code will be automatically sent to your email, When an admin approve your payment(Verification may take time 2-10 mins).</p>

               <form action="{!! route('checkoutRequest') !!}" method="post">
                 @csrf
                 <input type="text" name="product_id" hidden value="{{ $productID }}">
                 <input type="text" name="user_id" hidden value="{{ Auth::id() }}">

                 <label for="paidBy">Enter Payment Method: </label>
                 <input type="text" class="" name="paymentMethod" value="{{ $paymentMethod }}" required placeholder="Enter your payment method here...">
                 <label for="paidBy">Enter your account: </label>
                 <input type="text" class="" name="AccountNumber" placeholder="Enter your account that you paid from..." required>
                 <label for="paidBy">Amount(INR):</label>
                 <input type="text" class="" name="amount" placeholder="Enter Amount (INR)" required>
                 <br>
                 <br>
                 <button type="submit" class="btn btn-warning">BUY NOW</button>
               </form>
               <br>
               <br>
               @if (Session::has('success'))
                 <div class="alert alert-success">
                   Your payment is under review. Please wait! You will get your code by your email address!
                 </div>
               @endif
             </div>
           </div>
             </div>
             <!--/Main Content -->
         </div>
         <!--/Main -->
         <!-- Footer -->
         <footer class="hidden">
             <div id="footer-container">
             </div>
         </footer>
         <!--/Footer -->
   </div>
     <!--/Content Scroll -->
@endsection
