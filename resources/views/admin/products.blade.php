<x-layout>
    <x-slot:title>
        Product
    </x-slot:title>
<body>
    <div class="sidebar"><div class="container"><div class="logo">Nova52 Logo</div>
    <div class="menu"><a href="#">Dashboard</a><a href="#">Inventory</a><a href="#">Orders</a><a href="#">Customers</a><a href="#">Customer View</a><a href="#">Reviews</a><a href="#">Returns</a><a href="#" class="active">Products</a></div></div>
    <div class="search-box"><div class="main"><div class="topbar"><input type="text" placeholder="search"></div></div>
    <div class="header-box"><div class="header-section"><h1>Add Product</h1><p>Create a new product into the catalogue</p><a href="#" class="black-link">Back To Products</a>
    <div class="hidden-btn">Hidden</button><button class="active-btn">Active</button></div></div>
    <div class="form-group"><div class="left-side"><div class="form-box"><div class="form-sections"><imput type="text"><label>Name</label></div>
    <div class="form-group"><label>Category</label><select><option>Mobiles</option><option>Select Catergory</option><option>Accessories</option><option>Laptops</option></select></div>
    <div class="form-group"><label>Price</label><input type="text"></div>
    <div class="form-group"><label>Tagline:</label><input type="text"></div>
    <div class="form-group"><input type="text"><input type="text" class="extra-input"><input type="text" class="extra-input"><label> Key Feature:</label><div class="form-group"></div>

    <div class="form-group image-row">
    <img src="phone.png" alt="product image">
    <img src="phone.png" alt="product image">
<img src="phone.png" alt="product image">
<img src="phone.png" alt="product image">
<br>
<button class="uploadbtn">Upload New Image</button></div></div>
<div class="right-side"><div class="form-group"><label>Product Description</label><textarea></textarea></div>
<div class="form-group"><label>Product Specification:</label><textarea></textarea></div>
<div class="button-row"><button class="addbutton">Add Product</button><button class="previewbtn">Preview</button></div>
</div></div></div></div></body>
</x-layout>