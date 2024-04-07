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

    <title>{{ config('app.name', 'Laravel') }} - Assign</title>

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




<br>
<!-- Total Revenue -->
<div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4" style="margin:auto">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Create Your Team</h5>
                        <div class="card">
                <div class="card-header">{{ __('Assign User') }}</div>

                <div class="card-body">
                <form method="POST" action="{{ route('assign.user') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="parent_id" class="col-md-4 col-form-label text-md-right">{{ __('Choose Your Member') }}</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input
                                    id="userSearch"
                                    type="text"
                                    class="form-control @error('parent_id') is-invalid @enderror"
                                    name="parent_id"
                                    required
                                    placeholder="Search user..."
                                    list="userOptions"
                                    autocomplete="off"
                                >
                                <datalist id="userOptions">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </datalist><br>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Assign') }}
                                    </button>
                                </div>
                            </div>
                            @error('parent_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </form>

                </div>
            </div>
                      </div>
                     
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->


                <script>
    const userOptions = document.querySelectorAll('#userOptions option');
    const userSearchInput = document.querySelector('#userSearch');

    function validateUserSelection() {
        const selectedUser = userSearchInput.value;
        const isValidUser = Array.from(userOptions).some(option => option.value === selectedUser);
        if (!isValidUser) {
            alert('Please select a valid user from the dropdown.');
            return false;
        }
        return true;
    }

    document.querySelector('form').addEventListener('submit', validateUserSelection);
</script>