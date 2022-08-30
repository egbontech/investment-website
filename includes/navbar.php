<div class="mainmenu-area"style="background:linear-gradient(to bottom,#032055,#001232);border-bottom:none">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12">                 
					<nav class="navbar navbar-expand-lg navbar-light">
						<?php
						$logo = "SELECT logo FROM settings";
						$logo_query = mysqli_query($con ,$logo);

						if($logo_query)
						{
							$row = mysqli_fetch_array($logo_query);
							$logo_image = $row['logo'];					
						}
						?>
						<a class="navbar-brand" href="index"style="display:flex;align-items:center;justify-content:center;flex-direction:column">
							<img src="uploads/logo/<?= $logo_image  ?>" alt="">							
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse fixed-height" id="main_menu">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link " href="index">Home
											<div class="mr-hover-effect"></div></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="about">About
											<div class="mr-hover-effect"></div></a>
								</li>
								<li class="nav-item">
									<a class="nav-link " href="investment-plans">Investments
											<div class="mr-hover-effect"></div></a>
								</li>
								<li class="nav-item">
									<a class="nav-link " href="faq">FAQ
											<div class="mr-hover-effect"></div></a>
								</li>
								<li class="nav-item">
									<a class="nav-link  " href="team">Investors
											<div class="mr-hover-effect"></div></a>
								</li>
								
							
								<li class="nav-item">
									<a class="nav-link " href="contact">Contact
											<div class="mr-hover-effect"></div></a>
								</li>
							</ul>
							<?php
							if(isset($_SESSION['admin']))
							{ ?>
								<a href="admin/signin" class="base-btn2"style="background: linear-gradient(to bottom, #4A00E0, #8E2DE2);"> Admin</a>							
						  <?php	}						
						
							else if(isset($_SESSION['auth']))
							{ ?>
								<a href="signin" class="base-btn2"style="background: linear-gradient(to bottom, #4A00E0, #8E2DE2);"> Dashboard</a>							
						  <?php	}
						  else
						  { ?>
						  <a href="signin" class="base-btn2"style="background: linear-gradient(to bottom, #4A00E0, #8E2DE2);"> Login</a>
						 <?php }
							?>
							
							
						
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!--Main-Menu Area Start-->
	<div style="margin-top:60px;position:fixed;top:0px;width:100%;z-index:500">
  <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "US 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
</div>