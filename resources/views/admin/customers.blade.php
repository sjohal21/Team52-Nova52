<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="VIeWport" content="width=device width, initial-scale=1.0"><title> Customer Page</title>
<style>{padding:0; box-sizing:border-box;margin:0;}
body{background:light grey; font-family:Arial, sans-serif;}
.case{min-height:100vh;display:flex;} 
.sidebar{color:white;display:flex;width:270px;flex-direction:column;background:black;padding:25px 25px;justify-content:space-between;}
.icon{font-weight:bold;margin-bottom:50px;font-size:22px;}
.mainmenu a{color:white;font-weight:19px;display:block;margin-bottom:20px;font-size:19px;}
.mainmenu.run{color:blue;}
.low-link a{font-size:17px; font-weight:bold; margin-top:35px; color:white; display:block;}
.main{flex:1;}
.highbar{padding:0px 30px;display:flex;gap:25px;height:60px;background:white;border-bottom:1px lightgrey;align-items:center;}
.menuimg{font-weight:bold;font-size:29px;}
.search-box{flex:1;}
.search-box input{height:36px;width:100%;padding:0 11px;border-radius:5px;border:2px black;}
.top-imgs{gap:19px;display:flex;font-size:23px;}
.info{padding:26px 36px;}
.headersection{background:lightgrey;margin-bottom:40px;border-radius:25px;text-align:center;position:relative;padding:45px 30px;}
.headersection h1{font-size:50px;margin-bottom:20px;}
.headersection p{font-size:23px;font-weight:bold;}
.addbutton{font-size:17px;cursor:pointer;position:absolute;top:19px;color:white;border:none;border-radius:26px;font-size:17px;padding:13px 29px;background:black;right:25px;}
.topcntrls{gap:16px;margin-bottom:41px;display:flex;}
.tblebox{min-height:600;padding:19px 19px 40px 19px;background:grey;border-radius:25px;}
.fltrselect{height:33px;width:190px;padding:9px;weight:190px;border-radius:9px;border:2px grey;font-size:15px;}
.srchtable{flex:1;}
table{text-align:left;background:transparent;border-radius:9px;width:100%;border-radius:9px;height:33px;font-size:15px;}
.srchtble input{font-size:15px;width:100%;border-radius:9px;border:2px grey;padding:5px 11px;}
table{background:transparent;width:100%;text-allign:left;border-collapse:collapse;}
th{border-right:1px black;padding:1 10px 7px 11px;font-size:19px;border-bottom:1px black;}
td{border-right:2px black;height:170px;padding:19px 10px;vertical-align:top;}
th:last-child,td:last-child{border-right:none;}
.checkcollumn{border-right:none;text-align:center;width:45px;}
.idconec{text-decoration:none;font-weight:bold;color:blue;font-size:18px;}
.stats{margin-top:5px;font-size:15px;}
.red{color:red;}
.green{color:green;}
.dltrow{padding-right:40px;text-align:right;margin-top:20px;}
.veiwbutton{font-size:17px;cursor:pointer;border:none;border-radius:21px;padding:9px 15px;background:black;color:white;}
.dltbutton{font-size:17px;cursor:pointer; border:none;border-radius:20px;padding:11px 18px;background:red;color:white;}
@media(max-width:800px){.case{flex-direction:column;}.sidebar{width:100%;flex-direction:row;justify-content:space-around;}.main{padding:20px;}.highbar{flex-direction:column;gap:15px;height:auto;padding:20px;}.topcntrls{flex-direction:column;gap:15px;}.tblebox{padding:20px;}}
.sdebar{width:200%}
.topcrntls{flex-direction:column;}
.headbox h1{font-size:40px;}
.addbutton{margin-top:21px;position:static;}
</style>
</head>

<body><div class="container"><div class="sidebar"><div><div class="logo">Nova52 Logo</div>
<div class="menu"><a href="#">Dashboard</a><a href="#">Inventory</a><a href="#">Orders</a><a href="#" class="active">Customers</a><a href="#">Customers/a><a href="#">Reviews</a><a href="#">Returns</a><a href="#">Products</a></div></div>
<div class="low-link"><a href="#">logout</a><a href="#">customer view</a></div></div>
<div class ="content"><div class="header-box"><button class="add btn">Add Customer</button><h1>Customers</h1><p>View and Manage Customer's Accounts</p></div>
<div class="topcntrls"><select class="fltrselect"><option>Filter By</option><option>Active</option><option>Inactive</option><div class="tblebox"></select>
<div class="srchtable"><input type="text" placeholder="Search Customer"></div></div>
<table>
    <tr><th class="checkcollumn"></th><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Status</th><th>Actions</th></tr>
    <tr><td class="checkcollumn"><input type="checkbox"></td><td><a href="#"></a><td>
        <td>class="status"<span class="green">Active</span>
        </td><td><button class="veiwbutton">View</button><button class="dltbutton">Delete</button></td></tr>
        <tr><td class="checkcollumn"><input type="checkbox"></td><td><a href="#"></a><td>
            <td>button class="veiwbutton">View</button></td></tr></table>
            <div class="dltrow"><button class="dltbutton">Delete Selected</button></div></div></div></body>
</html>