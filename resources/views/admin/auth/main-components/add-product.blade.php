
<!doctype html>
<html lang="en">


<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="assets/css/dark-theme.css" />
	<link rel="stylesheet" href="assets/css/semi-dark.css" />
	<link rel="stylesheet" href="assets/css/header-colors.css" />
	<title>GED-Intermedia</title>
</head>

    				<div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Add New Product</h5>
					  <hr/>
                       <div class="form-body mt-4">
					    <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">
							<div class="mb-3">
								<label for="inputProductTitle" class="form-label">Product Title</label>
								<input type="text" name="title" value="{{ old('title') }}" class="form-control" id="inputProductTitle" placeholder="Enter product title">
							  </div>
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Description</label>
								<textarea name="description">{{ old('description') }} class="form-control" id="inputProductDescription" rows="3"></textarea>
							  </div>
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Product Images</label>
								<input id="image-uploadify" type="file" name="images[]" multiple>
							  </div>
                            </div>
						   </div>
						   <div class="col-lg-4">
							<div class="border border-3 p-4 rounded">
                              <div class="row g-3">
								<div class="col-md-6">
									<label for="inputPrice" class="form-label">Price</label>
									<input type="number" step="0.01" name="price" value="{{ old('price') }}" class="form-control" id="inputPrice" placeholder="00.00">
								  </div>
								  <div class="col-md-6">
									<label for="inputCompareatprice" class="form-label">Compare at Price</label>
									<input type="number" step="0.01" name="compare_at_price" value="{{ old('compare_at_price') }}" class="form-control" id="inputCompareatprice" placeholder="00.00">
								  </div>
								  <div class="col-md-6">
									<label for="inputCostPerPrice" class="form-label">Cost Per Price</label>
									<input type="number" step="0.01" name="cost_per_price" value="{{ old('cost_per_price') }}" class="form-control" id="inputCostPerPrice" placeholder="00.00">
								  </div>
								  <div class="col-md-6">
									<label for="inputStarPoints" class="form-label">Star Points</label>
									<input type="number" step="0.01" name="star_points" value="{{ old('star_points', 0) }}" class="form-control" id="inputStarPoints" placeholder="00.00">
								  </div>
								  <div class="col-12">
									<label for="inputProductType" class="form-label">Product Type</label>
									<select class="form-select" id="inputProductType">
										<option></option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
									  </select>
								  </div>
								  <div class="col-12">
									<label for="inputVendor" class="form-label">Vendor</label>
									<select class="form-select" id="inputVendor">
										<option></option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
									  </select>
								  </div>
								  <div class="col-12">
									<label for="inputCollection" class="form-label">Collection</label>
									<select class="form-select" id="inputCollection">
										<option></option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
									  </select>
								  </div>
								  <div class="col-12">
									<label for="inputProductTags" class="form-label">Product Tags</label>
									<input type="text" class="form-control" id="inputProductTags" placeholder="Enter Product Tags">
								  </div>
								  <div class="col-12">
									  <div class="d-grid">
                                         <button type="button" class="btn btn-primary">Save Product</button>
									  </div>
								  </div>
							  </div> 
						  </div>
						  </div>
					   </div><!--end row-->
					</div>
				  </div>
			  </div>


	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>

<form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
    @csrf
    <label>Title:</label>
    <input  required><br>

    <label>Description:</label>
    <textarea </textarea><br>

    <label>Images (multiple allowed):</label>
    <input type="file" name="images[]" multiple><br>

    <label>Price:</label>
    <input type="number" step="0.01" name="price" value="{{ old('price') }}" required><br>

    <label>Compare at Price:</label>
    <input type="number" step="0.01" name="compare_at_price" value="{{ old('compare_at_price') }}"><br>

    <label>Cost per Price:</label>
    <input type="number" step="0.01" name="cost_per_price" value="{{ old('cost_per_price') }}"><br>

    <label>Star Points:</label>
    <input type="number" step="0.01" name="star_points" value="{{ old('star_points', 0) }}"><br>

    <label>Product Type:</label>
    <input type="text" name="product_type" value="{{ old('product_type') }}"><br>

    <label>Vendor:</label>
    <input type="text" name="vendor" value="{{ old('vendor') }}"><br>

    <label>Collection:</label>
    <input type="text" name="collection" value="{{ old('collection') }}"><br>

    <label>Product Tags:</label>
    <input type="text" name="product_tags" value="{{ old('product_tags') }}"><br>

    <button type="submit">Add Product</button>
</form>

<p><a href="{{ route('admin.products.index') }}">Back to products</a></p>