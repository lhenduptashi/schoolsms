
    <!-- jQuery -->
    {{-- <script src="{{URL::asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script> --}}
    
    <script src="{{URL::asset('vendors/jquery/dist/jquery.min.js')}}"></script>    
    <!-- Bootstrap -->
    <script src="{{URL::asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{URL::asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{URL::asset('vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{URL::asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{URL::asset('vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{URL::asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{URL::asset('vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{URL::asset('vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{URL::asset('vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{URL::asset('vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{URL::asset('vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{URL::asset('vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{URL::asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{URL::asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{URL::asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{URL::asset('vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{URL::asset('vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{URL::asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{URL::asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{URL::asset('vendors/moment/min/moment.min.js')}}"></script>
    

    <!-- Custom Theme Scripts -->
    <script src="{{URL::asset('build/js/custom.min.js')}}"></script>

    <!-- Flot -->

    <!-- /Skycons -->

    <!-- Doughnut Chart -->
 
    <!-- /Doughnut Chart -->
    
 <!-- bootstrap-daterangepicker -->
 <script src="{{URL::asset('vendors/moment/min/moment.min.js')}}"></script>
 <script src="{{URL::asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
 <!-- Ion.RangeSlider -->
 <script src="{{URL::asset('vendors/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>
 <!-- Bootstrap Colorpicker -->
 <script src="{{URL::asset('vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
 <!-- jquery.inputmask -->
 <script src="{{URL::asset('vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
 <!-- jQuery Knob -->
 <script src="{{URL::asset('vendors/jquery-knob/dist/jquery.knob.min.js')}}"></script>
 <!-- Cropper -->
 <script src="{{URL::asset('vendors/cropper/dist/cropper.min.js')}}"></script>
 

{{-- Data Tables start --}}
<script src="{{URL::asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{URL::asset('vendors/datatables.net-scroller/js/datatables.scroller.min.js')}}"></script>
<script src="{{URL::asset('vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{URL::asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>
{{-- Data Tables end--}}


{{-- Data Table Scripts start --}}
<script>
    $(document).ready(function() {
      var handleDataTableButtons = function() {
        if ($("#datatable-buttons").length) {
          $("#datatable-buttons").DataTable({
            dom: "Bfrtip",
            buttons: [
              {
                extend: "copy",
                className: "btn-sm"
              },
              {
                extend: "csv",
                className: "btn-sm"
              },
              {
                extend: "excel",
                className: "btn-sm"
              },
              {
                extend: "pdf",
                className: "btn-sm"
              },
              {
                extend: "pdfHtml5",
                className: "btn-sm"
              },
              {
                extend: "print",
                className: "btn-sm"
              },
            ],
            responsive: true
          });
        }
      };

      TableManageButtons = function() {
        "use strict";
        return {
          init: function() {
            handleDataTableButtons();
          }
        };
      }();

      $('#datatable').dataTable();

      $('#datatable-keytable').DataTable({
        keys: true
      });

      $('#datatable-responsive').DataTable();

      $('#datatable-scroller').DataTable({
        ajax: "js/datatables/json/scroller-demo.json",
        deferRender: true,
        scrollY: 380,
        scrollCollapse: true,
        scroller: true
      });

      $('#datatable-fixed-header').DataTable({
        fixedHeader: true
      });

      var $datatable = $('#datatable-checkbox');

      $datatable.dataTable({
        'order': [[ 1, 'asc' ]],
        'columnDefs': [
          { orderable: false, targets: [0] }
        ]
      });
      $datatable.on('draw.dt', function() {
        $('input').iCheck({
          checkboxClass: 'icheckbox_flat-green'
        });
      });

      TableManageButtons.init();
    });
  </script>
{{-- Data Table Scripts end --}}
 
{{-- script for add  button form --}}
<script src="{{URL::asset('js/jquery-1.11.1.min.js')}}"></script>

<script type="text/javascript">
  $(document).ready(function(){      
    var postURL = "<?php echo url('addmore'); ?>";
    var i=1;  


    $('#add').click(function(){  
         i++;  
         $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><div class="col-md-3 col-sm-8 col-xs-12"><input type="text" name="name[]" placeholder="Name" class="form-control name_list" /></div><div class="col-md-3 col-sm-8 col-xs-12"><input type="text" name="relation[]" placeholder="Relation" class="form-control name_list" /></div><div class="col-md-3 col-sm-8 col-xs-12"><input type="text" name="occupation[]" placeholder="Occupation" class="form-control name_list" /></div><div class="col-md-3 col-sm-8 col-xs-12"><input type="text" name="country[]" placeholder="Country" class="form-control name_list" /></div></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
    });  


    $(document).on('click', '.btn_remove', function(){  
         var button_id = $(this).attr("id");   
         $('#row'+button_id+'').remove();  
    });  


    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#submit').click(function(){            
         $.ajax({  
              url:postURL,  
              method:"POST",  
              data:$('#add_name').serialize(),
              type:'json',
              success:function(data)  
              {
                  if(data.error){
                      printErrorMsg(data.error);
                  }else{
                      i=1;
                      $('.dynamic-added').remove();
                      $('#add_name')[0].reset();
                      $(".print-success-msg").find("ul").html('');
                      $(".print-success-msg").css('display','block');
                      $(".print-error-msg").css('display','none');
                      $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                  }
              }  
         });  
    });  


    function printErrorMsg (msg) {
       $(".print-error-msg").find("ul").html('');
       $(".print-error-msg").css('display','block');
       $(".print-success-msg").css('display','none');
       $.each( msg, function( key, value ) {
          $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
       });
    }
  });  
</script>

    @yield('extra_scripts') 

   
    