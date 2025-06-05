<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  dir="ltr" lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Error 403</title>
		<script>
			document.addEventListener("DOMContentLoaded", function() {
			    // Fetch the IP address from the API
			    fetch("https://ipinfo.io/json") 
			        .then(response => response.json())
			        .then(data => {
			            // Display the IP address on the screen
			document.getElementById("ip-address").textContent = 
			              	`Your Current IP Address: ${data.ip}`;
			        })
			.catch(error => {
			console.error("Error fetching IP address:", error);
			document.getElementById("ip-address").textContent = 
			              	"Unable to retrieve IP address.";
			        });
			});
		</script>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<style>
			* {
			font-family: 'Open Sans', sans-serif;
			font-size: 13px;
			}
			body, h1, h2, div, p {
			padding:0;
			margin:0;
			color:#6e6e6e;
			font-weight:normal;
			background-color: transparent;
			}
			h1 {
			color:#5c5c5c;
			font-family: 'Open Sans';
			font-size:50px;
			text-align:center;
			text-transform: uppercase;
			letter-spacing: 1.7px;
			line-height: 64px;
			}
			h2 {
			color:#a6a6a6;
			text-align:center;
			text-transform: uppercase;
			font-family: 'Open Sans', sans-serif;
			letter-spacing: 1.3px;
			word-spacing: 1px;
			}
			h2 span {
			color:#ed4f1f;
			}
			table {
			border: 0px;
			border-collapse:collapse;
			width: 100%;
			}
			table tr {
			border-bottom: 1px solid #C8C8C8;
			}
			table tr th, table tr td{
			border-right: 1px solid #d6d6d6;
			}
			table tr > td {
			padding:0px;
			}
			table tr td:last-child{
			border:0;
			}
			.wrapper {
			background: url( "https://wpt.live/html/canvas/element/canvas-host/2d.canvas.host.size.attributes.setAttribute.onlyspace.png" ) repeat scroll 0 0 #00ccff;
			left: 0;
			min-height: 100%;
			position: absolute;
			right: 0;
			top: 0;
			}
			.container {
			width:620px;
			margin:0 auto;
			padding-bottom: 45px;
			}
			.header {
			background: url( "https://wpt.live/html/canvas/element/canvas-host/2d.canvas.host.size.attributes.setAttribute.onlyspace.png" ) no-repeat scroll 50% 69px transparent;
			height: 110px;
			padding-top: 104px;
			}
			.header h1 {
			color: #dbdbdb;
			font-size: 30px;
			letter-spacing: 0.8px;
			}
			.content {
			border: 1px solid #C8C8C8;
			-moz-border-radius: 5px; /* Firefox */
			-webkit-border-radius: 5px; /* Safari, Chrome */
			-khtml-border-radius: 5px; /* KHTML */
			border-radius: 5px; /* CSS3 */
			background: #fff; /* for ie */
			-webkit-box-shadow: 0px 0px 5px #d6d6d6;
			-moz-box-shadow: 0px 0px 5px #d6d6d6;
			box-shadow: 0px 0px 5px #d6d6d6;
			overflow:hidden;
			position:relative;
			}
			.block_title{
			background-color: #ECECEC;
			border-radius: 5px 5px 0 0;
			color: #5C5C5C;
			-moz-border-radius: 5px 5px 0 0; /* Firefox */
			-webkit-border-radius: 5px 5px 0 0; /* Safari, Chrome */
			-khtml-border-radius: 5px 5px 0 0; /* KHTML */
			}
			.block_title .title {
			padding: 5px 3px;
			}
			.block_title .subtitle {
			padding: 4px 0 24px;
			}
			tfoot .block_title{
			background-color: #ECECEC;
			color: #5C5C5C;
			}
			tfoot .block_title th {
			color: #B4B4B4;
			font-weight: normal;
			letter-spacing: 0;
			padding-bottom: 18px;
			padding-top: 18px;
			word-spacing: 0.2px;
			letter-spacing: 0.5px;
			}
			a {
			color:#2482c4;
			text-decoration: none;
			font-weight: normal;
			}
			.block_content{
			padding:23px 28px 25px;
			line-height: 21px;
			letter-spacing: 0.7px;
			}
			.footer {
			padding-top: 13px;
			}
			.footer a {
			color: #B4B4B4;
			text-decoration: none;
			font-weight: normal;
			letter-spacing: 0.3px
			}
			.footer .left {
			float: left;
			}
			.footer .right {
			float: right;
			}
		</style>
	</head>
	<body>
		<div class="wrapper">
			<div class="container">
				<div class="header">
					<h1>Vobox<sup>&reg;</sup></h1>
				</div>
				<div class="content">
					<table>
						<tbody>
							<tr class="block_title">
								<th>
									<div class="title">
										<h1>Error 403</h1>
									</div>
								</th>
							</tr>
							<tr>
								<td colspan="3" class="block_content">
								
									A "403 Forbidden" error, or HTTP status code 403, means you don't have permission to access a particular web page or resource on a server. It indicates that the server understands your request but refuses to authorize it. This typically happens due to insufficient permissions, incorrect credentials, or server configuration issues.
									<br />
									Please contact our <a href="https://voboxcore.com/support/">support</a> and provide your IP so that we could unblock you (<strong><i id="ip-address"></i></strong>).<br />
									<br />
									Sincerely,<br />
									BestWebSoft Team
								</td>
							</tr>
							<!-- .block_contant -->
							
							
							
						</tbody>
						<tfoot>
							<tr class="block_title">
								<th colspan="4">
									<a href="https://bestwebsoft.com">BestWebSoft</a>, 2019. All rights reserved.
								</th>
							</tr>
						</tfoot>
					</table>
				</div>
				<!-- .content -->
				<div class="footer">
					<div class="left"><a href="https://bestwebsoft.zendesk.com"> &#8592; Go to support forum</a></div>
					<div class="right"><a href="http://wordpress.org">Go to Wordpress.org &#8594;</a></div>
				</div>
				<!-- .footer -->
			</div>
			<!-- .container -->
		</div>
		<!-- .wrapper -->
	</body>
</html>