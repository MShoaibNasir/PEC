<!DOCTYPE html>

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="PEC">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="PEC">
    <title>PEC </title>
     <link rel="apple-touch-icon" href="{{ asset('assets_website/img/apple-icon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_website/img/PEC-New-LOGO-300x300.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Icons-->
    <link href="{{ asset('css/free.min.css') }}" rel="stylesheet"> <!-- icons -->
    <!--<link href="{{ asset('css/flag-icon.min.css') }}" rel="stylesheet"> <!-- icons -->-->
    <!-- Main styles for this application-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">


    @yield('css')



    <link href="{{ asset('css/coreui-chartjs.css') }}" rel="stylesheet">
    
    
  </head>



  <body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">

      @include('dashboard.shared.nav-builder')

      @include('dashboard.shared.header')

      <div class="c-body">
        @if (\Session::has('profilemsg'))
            <div class="alert alert-danger">
                <ul>
                    <li>{!! \Session::get('profilemsg') !!}</li>
                </ul>
            </div>
        @endif
        <main class="c-main">
        @if (Auth::user()->is_approved || Route::has('consultant_edit_profile') || Route::has('client_edit_profile'))
        @yield('content')
        @else
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card-header">Pending Approval</div>
                    <div class="card">
                        <div class="alert alert-success m-3" role="alert">
                            Your account request is under review process, please wait for the approval by PEC representatives.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        </main>
        @include('dashboard.shared.footer')
      </div>
    </div>

    @yield('body_end')

    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('js/coreui-utils.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>
    <script>"https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js"</script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

    {{-- show alert before delete --}}
    <script>
        $(function(){
            $('.delete-bt').on('click', function (e) {
                e.preventDefault();
                let $form = $(this).closest('form');
                Swal.fire({
                title: 'Are you sure you want to delete?',
                showCancelButton: true,
                confirmButtonText: 'Delete',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $form.submit();
                    }
                })
            });
        })
        
         $('#submitBtn').click(function() {
     $('#project_title_lb').append($('#project_title').val());
     $('#project_disciplines_lb').append($('#project_disciplines').val());
     $('#engineering_lb').append($('#engineering').val());
     $('#allied_lb').append($('#allied').val());
     $('#summary_lb').append($('#summary').val());
     $('#country_assignment_lb').append($('#country_assignment').val());
     $('#technical_queries_lb').append($('#technical_queries').val());
     $('#specific_experience_lb').append($('#specific_experience').val());
     $('#expert_lb').append($('#expert').val());
     $('#schedule_lb').append($('#schedule').val());
     $('#total_inputs_lb').append($('#total_inputs').val());
     $('#contract_lb').append($('#contract').val());
     $('#consultant_services_lb').append($('#currency-field').val());
     $('#estimated_date_lb').append($('#estimated_date').val());
     $('#prequalification_lb').append($('#technical_proposal').val());
     $('#test_lb').append($('#test').val());
     $('#term_condition_lb').append($('#term_condition').val());
     $('#technical_proposal_lb').append($('#technical_proposal').val());
     $('#technical_qualification_lb').append($('#technical_qualification').val());
     $('#upload_experts_lb').append($('#upload_experts').val());
     $('#documents_lb').append($('#documents').val());
     $('#commercial_lb').append($('#commercial').val());
});
$('#submit').click(function(){
    $('#formfield').submit();
});
 $("#cancel_button").click(function() {
     
$('#project_title_lb').html('');
$('#project_disciplines_lb').html('');
$('#engineering_lb').html('');
$('#allied_lb').html('');
$('#summary_lb').html('');
$('#country_assignment_lb').html('');
$('#technical_queries_lb').html('');
$('#specific_experience_lb').html('');
$('#expert_lb').html('');
$('#schedule_lb').html('');
$('#total_inputs_lb').html('');
$('#contract_lb').html('');
$('#consultant_services_lb').html('');
$('#estimated_date_lb').html('');
$('#prequalification_lb').html('');
$('#test_lb').html('');
$('#term_condition_lb').html('');
$('#technical_proposal_lb').html('');
$('#technical_qualification_lb').html('');
$('#upload_experts_lb').html('');
$('#documents_lb').html('');
$('#commercial_lb').html('');

});
 $('#submit').on('click', function() {
    $.alertable.submit('You sure?').then(function() {
      console.log('Confirmation submitted');
    }, function() {
      console.log('Confirmation canceled');      
    });
  });
  
 
     </script>
    @yield('javascript')




  </body>
</html>
