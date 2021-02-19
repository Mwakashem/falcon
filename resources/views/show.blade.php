
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Qubes Ict | Financial system</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicons/favicon.ico">
    <link rel="manifest" href="/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../js/config.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="../../../vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="../../../vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="../../../vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
    <link href="../../../css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="../../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />

    <link href="../../../css/theme.min.css" rel="stylesheet" id="style-default">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        linkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        linkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
          <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">

              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-toggle="tooltip" data-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

            </div><a class="navbar-brand" href="/">
              <div class="d-flex align-items-center py-3 "><img class="mr-2 rounded-circle" src="/img/qubes.png" alt="" width="40" /><span class="font-sans-serif ">Qubes</span>
              </div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column">
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#home" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="home">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-poll"></span></span><span class="nav-link-text"> Loan Management</span>
                  </div>
                </a>
                <ul class="nav collapse show" id="home" data-parent="#navbarVerticalCollapse">
                  <li class="nav-item"><a class="nav-link" href="/loans">Loan Listings</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="/loans/add">Add New Loans</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link dropdown-indicator" href="#email" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="email">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-fort-awesome-alt"></span></span><span class="nav-link-text">Bank Accounts</span>
                </div>
              </a>
              <ul class="nav collapse" id="email" data-parent="#navbarVerticalCollapse">
                <li class="nav-item"><a class="nav-link" href="/banks">Account Listings</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="/banks/add">Add new Accounts</a>
                </li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#e-commerce" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="e-commerce">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fa fa-user"></span></span><span class="nav-link-text">Manage Customers</span>
              </div>
            </a>
            <ul class="nav collapse" id="e-commerce" data-parent="#navbarVerticalCollapse">
              <li class="nav-item"><a class="nav-link" href="/customers">Customer Listings</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="/customers/add">Add Customers</a>
              </li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link dropdown-indicator" href="#forms" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="forms">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-shipping-fast"></span></span><span class="nav-link-text"> Manage Suppliers</span>
            </div>
          </a>
          <ul class="nav collapse" id="forms" data-parent="#navbarVerticalCollapse">
            <li class="nav-item"><a class="nav-link" href="/suppliers"> Supplier Listings</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="/suppliers/add">Add suppliers</a>
            </li>
          </ul>
        </li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">

            <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand mr-1 mr-sm-3" href="/">
              <div class="d-flex align-items-center"><img class="mr-2" src="/img/illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span>
              </div>
            </a>
            <ul class="navbar-nav align-items-center d-none d-lg-block">
              <li class="nav-item">
                <div class="search-box" data-list='{"valueNames":["title"]}'>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
              <li class="nav-item">
                <a class="nav-link settings-popover" href="#settings-modal" data-toggle="modal">
                <span class="ripple"></span><span class="fa-spin position-absolute all-0 d-flex flex-center">
                  <span class="icon-spin position-absolute all-0 d-flex flex-center">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
                      </svg>
                  </span>
                </span>
              </a>
              </li>
              <li class="nav-item dropdown"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl status-online">
                  <div class="avatar-name rounded-circle"><span>{{ Str::limit(Auth::user()->name, 1,'') }}</span></div>
                </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                  <a class="dropdown-item fw-bold text-warning" href="#!"><span class="far fa-user-circle"></span><span>{{Auth::user()->name}}</span></a>

                      <div class="dropdown-divider"></div>
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Logout') }}
                        </x-jet-dropdown-link>
                    </form>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
          <div class="card bg-light mb-3">
            <div class="card-body p-3">
              <p class="fs--1 mb-0"><a href="#!"><span class="fas fa-exchange-alt mr-2" data-fa-transform="rotate-90"></span>A payout for <strong>$921.42 </strong>was deposited 13 days ago</a>. Your next deposit is expected on <strong>Tuesday, March 13.</strong></p>
            </div>
          </div>
          <div class="card mb-3" id="customersTable" data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;phone&quot;,&quot;address&quot;,&quot;joined&quot;],&quot;page&quot;:10,&quot;pagination&quot;:true}">
            <div class="card-header">
              <div class="row flex-between-center">
                <div class="col-4 col-sm-auto d-flex align-items-center pr-0">
                  <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Loans Management</h5>
                </div>
                <div class="col-8 col-sm-auto text-right pl-2">
                  <div class="d-none" id="table-customers-actions">
                    <div class="d-flex">
                      
                      <button class="btn btn-falcon-default btn-sm ml-2" type="button">Apply</button>
                    </div>
                  </div>
                  <div id="table-customers-replace-element">
                    {{-- <button class="btn btn-falcon-default btn-sm" type="button"><span class="d-none d-sm-inline-block ml-1"><a href="/loans/{$loan->id}/edit">Pay Installment</a></span></button> --}}
                    {{-- <button class="btn btn-falcon-default btn-sm mx-2" type="button"><svg class="svg-inline--fa fa-filter fa-w-16" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.625em;"><g transform="translate(256 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M487.976 0H24.028C2.71 0-8.047 25.866 7.058 40.971L192 225.941V432c0 7.831 3.821 15.17 10.237 19.662l80 55.98C298.02 518.69 320 507.493 320 487.98V225.941l184.947-184.97C520.021 25.896 509.338 0 487.976 0z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span> --><span class="d-none d-sm-inline-block ml-1">Filter</span></button> --}}
                    {{-- <button class="btn btn-falcon-default btn-sm" type="button"><svg class="svg-inline--fa fa-external-link-alt fa-w-16" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="external-link-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.625em;"><g transform="translate(256 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M432,320H400a16,16,0,0,0-16,16V448H64V128H208a16,16,0,0,0,16-16V80a16,16,0,0,0-16-16H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V336A16,16,0,0,0,432,320ZM488,0h-128c-21.37,0-32.05,25.91-17,41l35.73,35.73L135,320.37a24,24,0,0,0,0,34L157.67,377a24,24,0,0,0,34,0L435.28,133.32,471,169c15,15,41,4.5,41-17V24A24,24,0,0,0,488,0Z" transform="translate(-256 -256)"></path></g></g></svg><!-- < class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span> --><span class="d-none d-sm-inline-block ml-1">Export</span></button> --}}
                  </div>
                </div>
              </div>
            </div>
              <div class="card-header">
            <form method="POST" action="/loans/1/repayments" class="row row-cols-lg-4 g-3 align-items-center" >
              @csrf
              <?php 

                       $monthlyRate = ($loans->interestRate)/12*0.01;
                       $payment =($loans->loanAmount) * ($monthlyRate/(1- pow(1+$monthlyRate, -($loans->numberOfInstallments))));
                      //  var payment = var_fla* (monthlyRate/(1-Math.pow(1+monthlyRate, -var_nbr)));
                      $loanAmount = ($loans->loanAmount);
                      $start_date =($loans->startDate);
                      $loans_id =($loans->id);
                      ?>

                      @for ($i = 0; $i <($loans->numberOfInstallments); $i++)
                      <?php $interest = 0;
        
                      //in-loop monthly principal amount holder
                      $monthlyPrincipal = 0;
                      $totalpayment = 0;
                      $scheduled_payment = 0;
                      $ending_balance = 0;
                     
                      ?>
                      <?php $interest = $loanAmount * $monthlyRate;?>
              
                      <div class="col-2">
                        <label class="sr-only" for="inlineFormInputName">LoanId</label>
                        <input class="form-control" value="@php
                        echo ($loans_id)
                    @endphp" name="loans_id[@php echo ($i)@endphp]" type="text" placeholder="" readonly/>
                      </div>
                      <div class="col-2">
                        <label class="sr-only" for="inlineFormInputName">Repayment Number</label>
                        <input class="form-control" value="@php
                        echo ($i+1)
                    @endphp" name="repaymentNumber[@php echo ($i)@endphp]" type="text" placeholder="" readonly/>
                      </div>
              
              <div class="col-2">
                <label class="sr-only" for="inlineFormInputName"> Due Date</label>
                <input class="form-control" value="@php
                echo ($start_date)
            @endphp" name="start_date[@php echo ($i)@endphp]" type="text" placeholder="" readonly/>
              </div>
              
              {{-- <div class="col-2"> --}}
                {{-- <label class="sr-only" for="inlineFormInputName">Beginning Balance</label> --}}
                <input class="form-control" value="@php
                echo round($loanAmount, -2)
            @endphp" name="beginningBalance[@php echo ($i)@endphp]" type="hidden" placeholder=""readonly />
              {{-- </div> --}}
              <?php $interest = $loanAmount * $monthlyRate;?>
              {{-- <div class="col-1"> --}}
                {{-- <label class="sr-only" for="inlineFormInputName">Interest</label> --}}
                <input class="form-control" value="@php
                echo round($interest, -2)
            @endphp" name="interest[@php echo ($i)@endphp]" type="hidden" placeholder="" readonly />
              {{-- </div> --}}
              <?php $monthlyPrincipal = $payment - $interest;?>
              {{-- <div class="col-1"> --}}
                {{-- <label class="sr-only" for="inlineFormInputName">Principal</label> --}}
                <input class="form-control" value="@php
                echo round($monthlyPrincipal, -2)
            @endphp" name="principal[@php echo ($i)@endphp]" type="hidden" placeholder="" readonly/>
              {{-- </div> --}}

              @php
              $totalpayment = $monthlyPrincipal + $interest;
              @endphp
              {{-- <div class="col-2"> --}}
                {{-- <label class="sr-only" for="inlineFormInputName">Scheduled Payment</label> --}}
                <input class="form-control" value="@php
                echo round($totalpayment, -2)
            @endphp" name="scheduledPayment[@php echo ($i)@endphp]" type="hidden" placeholder="" readonly/>
              {{-- </div> --}}
              @php
                        $ending_balance = $loanAmount - $monthlyPrincipal; 
                      @endphp
              {{-- <div class="col-1"> --}}
                {{-- <label class="sr-only" for="inlineFormInputName">Ending Balance</label> --}}
                <input class="form-control" value="@php
                echo round($ending_balance, -2)
            @endphp" name="endingBalance[@php echo ($i)@endphp]" type="hidden" placeholder="" readonly/>
              {{-- </div> --}}
              <div class="col-2">
                <label class="sr-only" for="">Loan Status</label>
                <select class="form-select" name="status[@php echo ($i)@endphp]" id="inlineFormSelectPref">
                  <option value="Not Paid">Not Paid</option>
                  <option value="Paid">Paid</option>
                </select>
              </div>
              @php
                       $loanAmount = $loanAmount - $monthlyPrincipal;   
                      //  $start_date = start_date('Y-m-d', strtotime($date. ' + 30 days'));      
                       $start_date = strtotime($start_date);
                       $start_date = date("Y-m-d", strtotime("+1 month", $start_date))."\n";
                    @endphp
                    
                    @endfor
                    

                <input type="submit" class="btn btn-primary">
              
            </form>
              </div>

          </div>

          <footer>
            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600"> <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy; <a href="https://themewagon.com"><br class="d-sm-none" />Qubes Ict</a></p>
              </div>
              {{-- <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">@ Qubes Ict</p>
              </div> --}}
            </div>
          </footer>
        </div>
        <div class="modal fade modal-fixed-right modal-theme overflow-hidden" id="settings-modal" tabindex="-1" role="dialog" aria-labelledby="settings-modal-label" aria-hidden="true" data-options='{"autoShow":true,"autoShowDelay":3000,"showOnce":true}'>
          <div class="modal-dialog modal-dialog-vertical" role="document">
            <div class="modal-content border-0 vh-100 scrollbar">
              <div class="modal-header modal-header-settings bg-shape">
                <div class="z-index-1 py-1 light">
                  <h5 class="text-white" id="settings-modal-label"> <span class="fas fa-palette mr-2 fs-0"></span>Settings</h5>
                </div>
                <button class="btn-close btn-close-white z-index-1 mt-0" type="button" data-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body px-card" id="themeController">
                <h5 class="fs-0">Color Scheme</h5>
                <div class="btn-group d-block w-100 btn-group-navbar-style">
                  <div class="row gx-2">
                    <div class="col-6">
                      <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="theme" />
                      <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="/img/generic/falcon-mode-default.jpg" alt=""/></span><span class="label-text">Light Mode</span></label>
                    </div>
                    <div class="col-6">
                      <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" />
                      <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="/img/generic/falcon-mode-dark.jpg" alt=""/></span><span class="label-text"> Dark Mode</span></label>
                    </div>
                  </div>
                </div>
                <hr />
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
          <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
              <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                <div class="position-relative z-index-1 light">
                  <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                  <p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
                </div>
                <button class="btn-close btn-close-white position-absolute top-0 right-0 mt-2 mr-2" data-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body py-4 px-5">
                <form>
                  <div class="mb-3">
                    <label class="form-label" for="modal-auth-name">Name</label>
                    <input class="form-control" type="text" id="modal-auth-name" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="modal-auth-email">Email address</label>
                    <input class="form-control" type="email" id="modal-auth-email" />
                  </div>
                  <div class="row gx-3">
                    <div class="mb-3 col-sm-6">
                      <label class="form-label" for="modal-auth-password">Password</label>
                      <input class="form-control" type="password" id="modal-auth-password" />
                    </div>
                    <div class="mb-3 col-sm-6">
                      <label class="form-label" for="modal-auth-confirm-password">Confirm Password</label>
                      <input class="form-control" type="password" id="modal-auth-confirm-password" />
                    </div>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" />
                    <label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">var_ld </a>and <a href="#!">privacy policy</a></label>
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button>
                  </div>
                </form>
                <div class="position-relative mt-5">
                  <hr class="bg-300" />
                  <div class="divider-content-center">or register with</div>
                </div>
                <div class="row g-2 mt-2">
                  <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g mr-2" data-fa-transform="grow-8"></span> google</a></div>
                  <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square mr-2" data-fa-transform="grow-8"></span> facebook</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    {{-- <!-- ===============================================-->
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/chart/Chart.min.js"></script>
    <script src="../../../vendors/leaflet/leaflet.js"></script><script src="../../../js/flatpickr.js"></script>
    <script src="../../../vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="../../../vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="../../../vendors/countup/countUp.umd.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="/js/theme.js"></script>
  
    <script src="../../../vendors/choices/choices.min.js"></script>
    
    <script src="../../../vendors/dropzone/dropzone.min.js"></script> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet"> --}}
  </body>

</html>