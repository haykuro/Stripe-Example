{{ $header; }}
<span class="payment-errors"></span>
<form action="" method="POST" id="payment-form">
	<div class="form-row">
		<label>Amount</label>
		$<input type="text" size="20" autocomplete="off" class="amount" value="10" name="amount" /> USD
	</div>
    <div class="form-row">
        <label>Card Number</label>
        <input type="text" size="20" autocomplete="off" class="card-number" />
    </div>
    <div class="form-row">
        <label>CVC</label>
        <input type="text" size="4" autocomplete="off" class="card-cvc" />
    </div>
    <div class="form-row">
        <label>Expiration (MM/YYYY)</label>
        <input type="text" size="2" class="card-expiry-month"/>
        <span> / </span>
        <input type="text" size="4" class="card-expiry-year"/>
    </div>
    <button type="submit" class="submit-button">Submit Payment</button>
</form>
{{ $footer; }}