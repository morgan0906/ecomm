<style>

#cookie-div{
	
display:block;
min-height:55px;
background:#232323
	
	}
	
.cookie-text{
	
	padding-top:16px;
	color:#fff;
	
	}
	
.cookie-button{
	
	padding-top:10px;
	
	}
	
.cookie-continue-button{
	
	border:1px solid #fff;
	border-radius:0;
	background:#232323;
	float:right;
	width:80px;
	color:#fff;

	}
	
.cookie-continue-button:hover, .cookie-continue-button:focus{ color:#fff; background:#4D4646 }

.cookie-text a:hover{ text-decoration:underline }

@media (max-width: 990px) {

.cookie-text{
	
	padding-top:4px;
	padding-bottom:4px;
	font-size:14px
	
	}
	
.cookie-button{
	
	padding-top:10px;
	
	}

}

</style>

<div class="container-fluid" id="cookie-div">

	<div class="container">
	
		<div class="row">
		
			<div class="col-md-8 col-sm-8 col-xs-8 cookie-text">
			
			By using the <?= COMPANY_NAME ?> website you agree to our use of cookies. Find out more <a style="text-decoration:underline;color:#fff" href="<?= DOMAIN ?>/cookies">here</a>
			
			</div>
			
			<div class="col-md-4 col-sm-4 col-xs-4 cookie-button">
			
			<a onClick="CookiesAccepted()" class="btn cookie-continue-button">Close</a>
			
			</div>
		
		</div>		
	
	</div>
	
</div>

<script> function setCookie(c_name,value,exdays){ var exdate=new Date(); exdate.setDate(exdate.getDate() + exdays); var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString()); document.cookie=c_name + "=" + c_value; } function getCookie(c_name)
{ var i,x,y,ARRcookies=document.cookie.split(";"); for (i=0;i<ARRcookies.length;i++) { x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("=")); y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1); x=x.replace(/^\s+|\s+$/g,""); if (x==c_name) { return unescape(y); } } } var agree = getCookie("agreed"); if (agree!="10")  { document.write(""); }  else  { document.getElementById('cookie-div').style.display="none"; } function CookiesAccepted()  { setCookie("agreed", "10", 365); document.getElementById('cookie-div').style.display="none"; } </script>