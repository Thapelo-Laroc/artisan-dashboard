<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ config('app.name', 'Laravel') }} - Links</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="logo.png" alt="Laroc Learning Logo" width="220">
              </span>
              <!-- <span class="app-brand-text demo menu-text fw-bold ms-2">Sneat</span> -->
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            
            <a href="{{ route('home') }}" class="menu-link " style="margin-left:11px; margin-bottom:16px; margin-top: 16px">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Dashboards</div>
                <!-- <div class="badge bg-danger rounded-pill ms-auto">5</div> -->
              </a>

            <!-- Layouts -->
            <!-- <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Layouts</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="layouts-without-menu.html" class="menu-link">
                    <div data-i18n="Without menu">Without menu</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-without-navbar.html" class="menu-link">
                    <div data-i18n="Without navbar">Without navbar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-container.html" class="menu-link">
                    <div data-i18n="Container">Container</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-fluid.html" class="menu-link">
                    <div data-i18n="Fluid">Fluid</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-blank.html" class="menu-link">
                    <div data-i18n="Blank">Blank</div>
                  </a>
                </li>
              </ul>
            </li> -->


            <!-- <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Apps &amp; Pages</span>
            </li> -->

             <!-- Components -->
             <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Learn</span></li> -->
              <li class="menu-item">
                <a
                  href="{{ route('lessons') }}"
                  class="menu-link">
                  <!-- <i class="">-> </i> -->
                  <div data-i18n="Support"> Videos</div>
                </a>
              </li>

            <!-- Components -->
            <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Software links</span></li> -->
              <li class="menu-item active">
                <a
                  href="{{ route('software') }}"
                  class="menu-link">
                  <!-- <i class=""><img src="assets/img/github1.png" alt="" width="20" style="padding-right:20; padding-left:-10px"></i> -->
                  <div data-i18n="Support">Get Links</div>
                </a>
              </li>

              <li class="menu-item">
                <a
                  href="{{ route('assign.user') }}"
                  class="menu-link">
                  <!-- <i class="">-> </i> -->
                  <div data-i18n="Support"> Add Team Member</div>
                </a>
              </li>

              <li class="menu-item">
                <a
                  href="https://assessments.laroconline.co.za"
                  class="menu-link">
                  <!-- <i class="">-> </i> -->
                  <div data-i18n="Support"> Assessments</div>
                </a>
              </li>
            
            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Accounts</span></li>
            <li class="menu-item">
              <a
                
                class="menu-link">
                <i class=""><img src="assets/img/github1.png" alt="" width="25" style="padding-right:20; padding-left:-10px"></i>
                <div data-i18n="Support"> - {{ Auth::user()->github }}</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                class="menu-link">
                <i class=""><img src="assets/img/twitter.png" alt="" width="20" style="margin-right:20"></i>
                <div data-i18n="Documentation"> - {{ Auth::user()->twitter }}</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                class="menu-link">
                <i class=""><img src="assets/img/slack.png" alt="" width="45" style="padding-right:20"></i>
                <div data-i18n="Documentation"> - {{ Auth::user()->slack }}</div>
              </a>
            </li>

            
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <!-- <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none ps-1 ps-sm-2"
                    placeholder="Search..."
                    aria-label="Search..." />
                </div>
              </div> -->
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a
                    class="github-button"
                    href="#"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star Laroc Learning Dashboard on GitHub"
                    >Star</a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/avatar.jpg" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block">{{ Auth::user()->name }}</span>
                            <small class="text-muted">Participant</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ route('profile.edit')}}">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    {{-- <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle ms-1">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li> --}}
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>

                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                    <!-- <div class="col-lg-8 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                                <div class="card-body">
                                <h5 class="card-title text-primary">Welcome {{ Auth::user()->name }}</h5>
                                <p class="mb-4">
                                    You can submit the project for your personal or your teams' project here
                                </p> -->

                <!-- <div class="card-body">
                    <form method="POST" action="{{ route('upload.file') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="file" >{{ __('Choose File') }}</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control @error('file') is-invalid @enderror" name="file" style="width: 300px;" required>

                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div> <br>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Upload') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                                <form method="POST" action="{{ route('unassign.user') }}">
                                    @csrf
                                    <input type="hidden" name="_method" value="POST">
                                    <button type="submit">Unassign User</button>
                                </form>

                            </div>
                        </div>

                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                            <img
                                src="../assets/img/illustrations/man-with-laptop-light.png"
                                height="140"
                                alt="View Badge User"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 -->













             <br>
               <!-- Bootstrap Table with Header - Light -->
               <div class="card">
                <h5 class="card-header">Your Teammates</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th>Name</th>
                        <th>Link</th>
                        <th>Purpose</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        
                      <tr>
                        <td>
                        <i class="bx"><img src="assets/img/vscode.png" width="50" alt=""></i>
                          <span class="fw-medium">Visual Studio Code</span>
                        </td>
                        <td><a href="https://code.visualstudio.com/download">https://code.visualstudio.com/download</a></td>
                        <td>Coding IDE or simply a platform to code on</td>
                      </tr>

                      <tr>
                        <td>
                        <i class="bx"><img src="assets/img/nodejs.png" width="50" alt=""></i>
                          <span class="fw-medium">Node.js</span>
                        </td>
                        <td><a href="https://nodejs.org/en/download">https://nodejs.org/en/download</a></td>
                        <td>Node.js is designed to build scalable network applications</td>
                      </tr>

                      <tr>
                        <td>
                        <i class="bx"><img src="assets/img/git.png" width="50" alt=""></i>
                          <span class="fw-medium">Git</span>
                        </td>
                        <td><a href="https://git-scm.com/downloads">https://git-scm.com/downloads</a></td>
                        <td>Git is used for version control, enabling collaborative development and tracking 
                            changes in software projects.</td>
                      </tr>

                      <tr>
                        <td>
                        <i class="bx"><img src="assets/img/xampp.png" width="50" alt=""></i>
                          <span class="fw-medium">Xampp</span>
                        </td>
                        <td><a href="https://www.apachefriends.org/download.html">https://www.apachefriends.org/download.html</a></td>
                        <td>Used for creating databases to store information locally</td>
                      </tr>

                      <tr>
                        <td>
                        <i class="bx"><img src="assets/img/composer.png" width="50" alt=""></i>
                          <span class="fw-medium">Composer</span>
                        </td>
                        <td><a href="https://getcomposer.org/download/">https://getcomposer.org/download/</a></td>
                        <td>Composer is a tool for dependency management in PHP. It allows you to declare the libraries 
                            your project depends on and it will manage (install/update) them for you.</td>
                      </tr>

                      <tr>
                        <td>
                          <i class="bx"><img src="assets/img/slack.png" width="50" alt=""></i>
                          <span class="fw-medium">Slack</span>
                        </td>
                        <td><a href="https://slack.com/downloads/windows">https://slack.com/downloads/windows</a></td>
                        <td>Slack is used for team communication, collaboration, and project coordination in programming, facilitating efficient discussions,
                             sharing of code snippets, and integration with various development tools.</td>
                      </tr>
                      

                    </tbody>
                  </table>
                </div>
              </div><br><br>
              <!-- Bootstrap Table with Header - Light -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , developed by 
                  <a href="https://larocit.co.za" target="_blank" class="footer-link fw-medium">Laroc Learning NPC/NPO</a>
                </div>
                <div class="d-none d-lg-inline-block">
                  
                  <a
                    
                    class="footer-link me-4"
                    >{{ config('app.version', 'v1.0') }}</a
                  >

                  <a
                    class="footer-link"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- <div class="buy-now">
      <a
        href="https://themeselection.com/item/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div> -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>







