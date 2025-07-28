<form method="POST" action="{{ route('userregister') }}" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="phone_number" placeholder="Phone Number" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="company_name" placeholder="Company Name" required>
    <input type="text" name="company_address" placeholder="Company Address" required>

    <label>Chamber of Commerce Certificate (PDF)</label>
    <input type="file" name="chamber_certificate" accept="application/pdf">

    <label>Business Mandate (PDF)</label>
    <input type="file" name="business_mandate" accept="application/pdf">

    <label>Subscription Type</label>
    <div>
        <input type="radio" name="subscription_type" value="monthly" required> Monthly - $39
        <input type="radio" name="subscription_type" value="yearly"> Yearly - $299
    </div>

    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

    <button type="submit">Submit</button>
</form>
