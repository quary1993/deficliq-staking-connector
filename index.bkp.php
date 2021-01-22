<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="style.css">
    <title>Cliq Staking</title>
<!--===============================================================================================-->
</head>

<body class="<?php echo !isset($_GET['pool'])?"diamond":$_GET['pool'];?>">
    <nav style="padding: 10px; border: none;" class="metal-container navbar navbar-expand-md nav-extrapadding navbar-light">
        <div class="container" style="padding: 0; max-width: 100%">
          <span class="navbar-brand abs"><img class="logo_img" src="https://i.imgur.com/f8VDgKc.png" style="max-width:150px;" alt="Logo"></span>
            <button style="margin-left:18px;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div style="z-index:20" class="collapse navbar-collapse" id="navbarNav">
          <div class="navbar-nav me-auto mb-2 mb-lg-0">
        <span class="nav-item">
          <span class="nav-link" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">TRANSACTIONS</span>
        </span>
        <span class="nav-item">
          <span class="nav-link">STAKING OPTIONS</span>
        </span>
      </div>
      <span class="navbar-text">
        <span class="nav-link" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">CONNECT 🔗</button>
      </span>
          </div>
        </div>
      </nav>
      <div class="container-xl content-extrapadding">
          <div class="row col-xs-12">
              <div class="col-md-6 col-xs-12 col-set-height" style="margin-top:20px;">
              <div class="col-md-12 metal-container">
                <img src="diamond.png"  class="diamond-icon" />
                <div>
                  <div class="row" style="margin-top: 10%; margin-bottom: 2%;">
                      <div class="col-7">Your staked balance</div>
                      <div class="col-5" style="font-size: 24px; font-weight: 500;"> 0 CLIQ</div>    
                  </div>
                  <div class="row" style="margin-bottom:2%;">
                      <div class="col-7">Rewards if un-staked today</div>
                      <div class="col-5" style="font-size: 24px; font-weight: 500;"> 0 CLIQ</div>    
                  </div>
                  <div class="row" style="margin-bottom:2%;">
                      <div class="col-7">Rewards at maturity</div>
                      <div class="col-5" style="font-size: 24px; font-weight: 500;"> 0 CLIQ</div>    
                  </div>
                  <div class="row" style="margin-bottom:2%;">
                      <div class="col-7">Early withdraw starts</div>
                      <div class="col-5" style="font-weight: 500;">1/3/2021 4:59:59 PM</div>    
                  </div>
                  <div class="row" style="margin-bottom:2%;">
                      <div class="col-7">Maturity</div>
                      <div class="col-5" style="font-weight: 500;">1/3/2021 5:00:00 PM</div>    
                  </div>
                  <p class="text-center" style="font-size: 24px; margin-top:50px; font-weight: 500; padding-bottom: 20px;">0 months 20 days 2 hours to maturity</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-12 col-set-height" style="padding-left:1vw;margin-top:20px;">
            <div class="col-md-12 metal-container">
                <img class="logo_img" style="max-width:250px;margin-bottom: 25px; margin-top: 20px;" src="https://i.imgur.com/f8VDgKc.png" style="max-width:150px;" alt="Logo">
                
                  
                <div class="wrap-input100 validate-input" data-validate = "Invalid Address">
                  <input class="input100" type="text" name="Wallet Address">
                  <span class="focus-input100" data-placeholder="Address"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Invalid Contract Address">
                  <input class="input100" type="text" name="Contract Address">
                  <span class="focus-input100" data-placeholder="Contract Address"></span>
                </div>  

                  <div>
                  <div class="container-login100-form-btn" style="padding-bottom: 20px;">
                    <div class="wrap-login100-form-btn">
                      <div class="login100-form-bgbtn"></div>
                      <button class="login100-form-btn">
                        Un-Stake
                      </button>
                    </div>
                  </div>
                  </div>
              </div>
              </div>
            </div>
            <div class="row col-xs-12">
            <div class="col-md-12">
              <div class="col-md-12 col-xs-12 col-header-set-height metal-container" style="margin-top:20px; padding-top:10px;">
              My active Stakes
              <svg style="float:right" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
  <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
  <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
</svg>
             </div>
             </div>
            <div class="col-md-12">
              <div class="col-md-12 col-xs-12 col-set-height metal-container" style="margin-top:20px;">
              <div class="row col-xs-12" style="border-bottom: 3px solid; padding-top: 10px; padding-bottom: 10px;">
              <div class="row col-md-6">
                <div class="col-md-3">Start</div>
                <div class="col-md-3">End</div>
                <div class="col-md-3">Staked ID</div>
                <div class="col-md-3">Shares</div>
              </div>
              <div class="row col-md-6">
                <div class="col-md-3">ETH Payout</div>
                <div class="col-md-3">Interest</div>
                <div class="col-md-3">Current Val.</div>
                <div class="col-md-3">Action</div>
              </div>
              </div>
             <div class="row col-xs-12" style="border-bottom: 1px solid; padding-top: 10px; padding-bottom: 10px;">
             <div class="row col-md-6">
                <div style="white-space: pre; font-size: 90%" class="col-md-3">01/01/2021 4:59:59 PM</div>
                <div style="white-space: pre; font-size: 90%" class="col-md-3">01/02/2021 3:59:59 PM</div>
                <div class="col-md-3">x$Ach$#0z</div>
                <div class="col-md-3">5150</div>
              </div>
              <div class="row col-md-6">
                <div class="col-md-3">4.0223411</div>
                <div class="col-md-3">.88</div>
                <div class="col-md-3">27(CLIQ)</div>
                <div class="col-md-3">
                <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 8px;" width="22" height="22" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
  <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z"/>
  <path fill-rule="evenodd" d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z"/>
  <path d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
</svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
  <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
  <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
</svg>
                </div>
              </div>
             </div>
             <div class="row col-xs-12" style="border-bottom: 1px solid; padding-top: 10px; padding-bottom: 10px;">
             <div class="row col-md-6">
                <div style="white-space: pre; font-size: 90%" class="col-md-3">01/01/2021 4:59:59 PM</div>
                <div style="white-space: pre; font-size: 90%" class="col-md-3">01/02/2021 3:59:59 PM</div>
                <div class="col-md-3">x$Ach$#0z</div>
                <div class="col-md-3">251</div>
              </div>
              <div class="row col-md-6">
                <div class="col-md-3">99.0002411</div>
                <div class="col-md-3">10.88</div>
                <div class="col-md-3">552(CLIQ)</div>
                <div class="col-md-3">
                <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 8px;" width="22" height="22" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
  <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z"/>
  <path fill-rule="evenodd" d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z"/>
  <path d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
</svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
  <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
  <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
</svg>
                </div>
              </div>
             </div>
             <div class="row col-xs-12" style="border-bottom: 1px solid; padding-top: 10px; padding-bottom: 10px;">
             <div class="row col-md-6">
                <div style="white-space: pre; font-size: 90%" class="col-md-3">01/01/2021 4:59:59 PM</div>
                <div style="white-space: pre; font-size: 90%" class="col-md-3">01/02/2021 3:59:59 PM</div>
                <div class="col-md-3">x$Ach$#0z</div>
                <div class="col-md-3">87</div>
              </div>
              <div class="row col-md-6">
                <div class="col-md-3">13.01021</div>
                <div class="col-md-3">32.008</div>
                <div class="col-md-3">43(CLIQ)</div>
                <div class="col-md-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
  <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
  <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
</svg>
                </div>
              </div>
             </div>
             <div class="row col-xs-12" style="border-bottom: 1px solid; padding-top: 10px; padding-bottom: 10px;">
             <div class="row col-md-6">
                <div style="white-space: pre; font-size: 90%" class="col-md-3">01/01/2021 4:59:59 PM</div>
                <div style="white-space: pre; font-size: 90%" class="col-md-3">01/02/2021 3:59:59 PM</div>
                <div class="col-md-3">x$Ach$#0z</div>
                <div class="col-md-3">10</div>
              </div>
              <div class="row col-md-6">
                <div class="col-md-3">1.009443</div>
                <div class="col-md-3">2.29</div>
                <div class="col-md-3">27(CLIQ)</div>
                <div class="col-md-3">
                <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 8px;" width="22" height="22" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
  <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z"/>
  <path fill-rule="evenodd" d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z"/>
  <path d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
</svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
  <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"></path>
  <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"></path>
</svg>
                </div>
              </div>
             </div>
             <div class="row col-xs-12" style="border-bottom: 1px solid; padding-top: 10px; padding-bottom: 10px;">
             <div class="row col-md-6">
                <div style="white-space: pre; font-size: 90%" class="col-md-3">01/01/2021 4:59:59 PM</div>
                <div style="white-space: pre; font-size: 90%" class="col-md-3">01/02/2021 3:59:59 PM</div>
                <div class="col-md-3">x$Ach$#0z</div>
                <div class="col-md-3">10</div>
              </div>
              <div class="row col-md-6">
                <div class="col-md-3">1.009443</div>
                <div class="col-md-3">2.29</div>
                <div class="col-md-3">27(CLIQ)</div>
                <div class="col-md-3">
                <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 8px;" width="22" height="22" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
  <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z"/>
  <path fill-rule="evenodd" d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z"/>
  <path d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
</svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
  <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"></path>
  <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"></path>
</svg>
                </div>
              </div>
             </div>
             <div class="row col-xs-12" style="border-bottom: 1px solid; padding-top: 10px; padding-bottom: 10px;">
             <div class="row col-md-6">
                <div style="white-space: pre; font-size: 90%" class="col-md-3">01/01/2021 4:59:59 PM</div>
                <div style="white-space: pre; font-size: 90%" class="col-md-3">01/02/2021 3:59:59 PM</div>
                <div class="col-md-3">x$Ach$#0z</div>
                <div class="col-md-3">10</div>
              </div>
              <div class="row col-md-6">
                <div class="col-md-3">1.009443</div>
                <div class="col-md-3">2.29</div>
                <div class="col-md-3">27(CLIQ)</div>
                <div class="col-md-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
  <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"></path>
  <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"></path>
</svg>
                </div>
              </div>
             </div>
             </div>
             <div class="col-md-12">
              <div class="col-md-12 col-xs-12 col-header-set-height metal-container" style="margin-top:60px; padding-top:10px">
              My Stakes History
              <svg style="float:right" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
  <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
  <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
</svg>
             </div>
             </div>
             <div class="row col-xs-12">
             <div class="col-md-12">
              <div class="col-md-12 col-xs-12 col-set-height metal-container" style="margin-top:20px;">
              <div class="row col-md-12" style="border-bottom: 3px solid; padding-top: 10px; padding-bottom: 10px;">
                <div class="col-md-2">Start</div>
                <div class="col-md-2">End</div>
                <div class="col-md-2">Staked Amt.</div>
                <div class="col-md-2"> Shares</div>
                <div class="col-md-2">PayDay</div>
                <div class="col-md-2">Interest</div>
              </div>
              <div class="row col-md-12" style="border-bottom: 1px solid; padding-top: 10px; padding-bottom: 10px;">
                <div class="col-md-2">01/01/2021 4:59:59 PM</div>
                <div class="col-md-2">01/06/2021 14:59:59 PM</div>
                <div class="col-md-2">23.000(ETH)</div>
                <div class="col-md-2"> 21</div>
                <div class="col-md-2">01/01/2021 4:59:59 PM</div>
                <div class="col-md-2">9.82</div>
              </div>
              <div class="row col-md-12" style="border-bottom: 1px solid; padding-top: 10px; padding-bottom: 10px;">
                <div class="col-md-2">01/01/2021 4:59:59 PM</div>
                <div class="col-md-2">01/06/2021 14:59:59 PM</div>
                <div class="col-md-2">23.000(ETH)</div>
                <div class="col-md-2"> 21</div>
                <div class="col-md-2">01/01/2021 4:59:59 PM</div>
                <div class="col-md-2">9.82</div>
              </div>
              <div class="row col-md-12" style="border-bottom: 1px solid; padding-top: 10px; padding-bottom: 10px;">
                <div class="col-md-2">01/01/2021 4:59:59 PM</div>
                <div class="col-md-2">01/06/2021 14:59:59 PM</div>
                <div class="col-md-2">23.000(ETH)</div>
                <div class="col-md-2"> 21</div>
                <div class="col-md-2">01/01/2021 4:59:59 PM</div>
                <div class="col-md-2">9.82</div>
              </div>
              <div class="row col-md-12" style="border-bottom: 1px solid; padding-top: 10px; padding-bottom: 10px;">
                <div class="col-md-2">01/01/2021 4:59:59 PM</div>
                <div class="col-md-2">01/06/2021 14:59:59 PM</div>
                <div class="col-md-2">23.000(ETH)</div>
                <div class="col-md-2"> 21</div>
                <div class="col-md-2">01/01/2021 4:59:59 PM</div>
                <div class="col-md-2">9.82</div>
              </div>
              <div class="row col-md-12" style="border-bottom: 1px solid; padding-top: 10px; padding-bottom: 10px;">
                <div class="col-md-2">01/01/2021 4:59:59 PM</div>
                <div class="col-md-2">01/06/2021 14:59:59 PM</div>
                <div class="col-md-2">23.000(ETH)</div>
                <div class="col-md-2"> 21</div>
                <div class="col-md-2">01/01/2021 4:59:59 PM</div>
                <div class="col-md-2">9.82</div>
              </div>
             </div>
             </div>
             </div>
        </div>



      <!-- Connect Modal -->

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Connect</h5>
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">✖️</button>
                <!-- <span aria-hidden="true">&times;</span> -->
            </div>
            <div class="modal-body">
                🦊 Connect metamask
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Or close here?</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Transactions modal -->

      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Transactions</h5>
              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">✖️</button>
            </div>
            <div class="modal-body">
                <div class="row" style="margin-bottom:2%;">
                    <div class="col-8">Transaction 1</div>
                    <div class="col-4" style="font-size: 24px; font-weight: 500;"> 0 CLIQ</div>    
                </div>
                <div class="row" style="margin-bottom:2%;">
                    <div class="col-8">Transaction 2</div>
                    <div class="col-4" style="font-size: 24px; font-weight: 500;"> 0 CLIQ</div>    
                </div>
                <div class="row" style="margin-bottom:2%;">
                    <div class="col-8">Transaction 3</div>
                    <div class="col-4" style="font-size: 24px; font-weight: 500;"> 0 CLIQ</div>    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Or close here?</button>
            </div>
          </div>
        </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

    
        
	<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
  
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>