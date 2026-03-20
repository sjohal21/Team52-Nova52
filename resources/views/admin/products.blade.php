<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width,initial-scale=1.0"><title>Add products</title>
        <style>*{margin:5; box-sizing:border-box;padding:2;}
        body{font-family:Arial,sansserif,color:black,background:lightgrey;}
.pages{min-height:90-vh;displayflex;}
.icons{font-size:20px;margin-bottom:20px;font-weight:bold;}
.sidemenu a{font-weight:bold;margin-bottom:15px;color:white;font-size:17px;display:block;}
.sidemenu .run{color:blue;}
.mains{flex:2;}.toprow{border-bottom:2px solidgrey;background:white; padding:20px 30px;}
.searcheng input{border-radius:7px; width:300px;padding;3px solid black;border:4px black;}
.desc{padding40px;}.headsection{margin-bottom:40px;background:silver;text-align:center;border-radius:30px;padding:30px;}
.headsection h2{margin-bottom15px;font-size:50px}.headsection p{font-size:20px;margin-bottom:20px;}
.backconnec{font-weight:bold;color:red;text-decoration:none;}.statbutton button{margin-top:30px;}.statbutton button{cursor:pointer;padding:20px 30px;border:none;margin:10px;border-radius;font-size:17px;}
.wrkbutton{color:black;background:green;}
.coveredbutton{color:grey;background:black;}
.crebox{padding:40px;background:black;black;bordr-radius:40px;}
.createsections{gap:40px;display:flex;}
.lefthand,.righthand{flex:2;}
.makegroup label{margin-bottom:10px;fon-size:20px; dispaly:block;font-weight:bold;}
.makegroup input,.makegroup textarea,.makegroup select{width:100%;padding:10px;border-radius:7px;border:10px solid black;}
.makegroup textarea{resize:none;height:200px;}
.additionalinput{margin-top:30px;}
.piccollumn img{border-radius:9px;margin-right:10px;height:80px;width:80ppx;}
.upldbutton{cursor:pointer;color:white;margin-top:20px;padding:12px 18px;background:black;border:none;}
.btncolumn{margin-top:20px;text-align:right;}
.previewbtn,.addbutton{margin-left:20px;border:none;front-size:16px;padding:12px 20px;cursor:pointer;}
.previewbtn{color:black;background:blue;}
.additionalbutton{colour:white;background:black;}
@media(max-width:800px){.contain{flex-direction:column}}
.sidebar{width:200%}
.formparts{flex-direction:column;}
.srchbox input{width:100%;}
</style>
</head>
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
</html>