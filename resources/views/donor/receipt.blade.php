<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#name{
			position: fixed;
			top: 107pt;
			left: 40pt;
		}
		#amt{
			position: fixed;
			top: 135pt;
			left: 40pt;
		}
		#pd{
			position: fixed;
			top: 195pt;
			left: 100pt;
		}
		#bal{
			position: fixed;
			top: 227pt;
			left: 100pt;
		}
	</style>
</head>
<body style="font-family: Arial, Helvetica, sans-serif">
	<center><span style="font-size:24pt; font-weight: bold;">Jowai Presbyterian Church</span><br>
		<img src="{{public_path('images\logo.jpg')}}" height="50"><br><br>
		<i>La ioh pdiang na</i>
	</center><br>
U/Ka ....................................................................................................................................................  <br><br>
Rs. ............................./- (........................................................................................................ Tyngka)<br><br> na ka jingkular na ka bynta u bnai ............................................<br><br>
La siew Rs. &nbsp; &nbsp; _____________________<br><br>
Dang Sah Rs. _____________________ <br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Jingsoi Kyrteng

<div id="name">{{$transaction->Donor->name}}</div>
<div id="bal">{{$bal}}</div>
<div id="amt">{{$transaction->amount}}</div>
<div id="pd">{{($transaction->Donor->amount)-$bal}}</div>
</body>
</html>
