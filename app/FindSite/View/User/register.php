
<div class="popup-page">
    <div class="form-title">SIGN UP TO FINDSITE</div>
    <div class="container-fluid">
        <form id="form-register" class="form-horizontal popup-form" role="form">
			<div class="form-group">
				<input type="text" data-bind="value: firstName" name="firstName" class="form-control" placeholder="First name">
			</div>
			<div class="form-group">
				<input type="text" data-bind="value: lastName" name="lastName" class="form-control" placeholder="Last name">
			</div>
			<div class="form-group">
				<input type="email" data-bind="value: email" name="email" class="form-control" placeholder="Your email">
			</div>
			<div class="form-group">
				<input type="password" data-bind="value: password" name="password" class="form-control" placeholder="Your password">
			</div>
            <div class="form-group">
                <label class="label">Site preference(option)</label>
            </div>
			<div class="form-group">
				<select data-bind="value: siteType" class="form-control">
                    <option value="0">Type</option>
                    <option value="1">Unit</option>
                    <option value="2">House</option>
                    <option value="3">Apartment</option>
				</select>
			</div>
			<div class="form-group">
				<select data-bind="value: daStatus" class="form-control">
					<option value="0">DA status</option>
					<option value="1">Raw</option>
					<option value="2">Approved</option>
					<option value="3">Pending</option>
				</select>
			</div>
			<div class="form-group">
				<select data-bind="value: sitePrice" class="form-control">
					<option value="0">Price</option>
					<option value="1">&lt 50</option>
					<option value="2">50 - 100</option>
					<option value="3">&gt 100</option>
				</select>
			</div>
			<div class="form-group">
				<p class="declear-section">By submitting your listing you confirm that you accept the <a href="#">Terms of services</a> and <a href="#">Privacy Policy</a></p>
			</div>
			<div class="form-group">
				<button data-bind="click: register" type="submit" class="btn btn-default blubtn-long">Sign up</button>
			</div>
		</form>
    </div>
    <div class="form-footer">
        Aready have an account? <a herf="#">Log in!</a>
    </div>
</div>
