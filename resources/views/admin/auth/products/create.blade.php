<!DOCTYPE html>
<html>
<head><title>Add Product</title></head>
<body>

<h2>Add New Product</h2>

@if ($errors->any())
    <div style="color:red">
        <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
@endif



</body>
</html>
