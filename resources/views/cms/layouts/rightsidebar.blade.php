<!-- Right Sidebar -->
<div class="side-bar right-bar nicescroll">
  <h4 class="text-center">Make Payment</h4>
  <div class="contact-list nicescroll">
        
      <div class="card-body">  
        <form role="form" action="{{ route('payment') }}" method="post" class="require-validation" data-cc-on-file="false"  id="payment-form">
            @csrf
       <script 
       src="https://checkout.stripe.com/checkout.js" class="stripe-button"
       data-key="pk_test_MTzAUglTDuLYx4P7aZHdxknn00eqdmZqvp"
       data-amount="200000"
       data-name="Stripe Demo"
       data-description="Testing Payment"
       data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
       data-locale="auto"
       data-currency="sar">
        </script>
        </form>
      </div>

  </div>
</div>
<!-- /Right-bar -->

  
