@extends('master-template')
 
  @section('content')
  <!-- Sparklines charts -->

<script type="text/javascript" src="assets/widgets/charts/sparklines/sparklines.js"></script>
<script type="text/javascript" src="assets/widgets/charts/sparklines/sparklines-demo.js"></script>

<!-- Data tables -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/datatable/datatable.css">-->
<script type="text/javascript" src="../../assets/widgets/datatable/datatable.js"></script>
<script type="text/javascript" src="../../assets/widgets/datatable/datatable-bootstrap.js"></script>
<script type="text/javascript" src="../../assets/widgets/datatable/datatable-responsive.js"></script>

<script type="text/javascript">

    /* Datatables responsive */

    $(document).ready(function() {
        $('#datatable-responsive').DataTable( {
            responsive: true
        } );
    } );

    $(document).ready(function() {
        $('.dataTables_filter input').attr("placeholder", "Search...");
    });

</script>


    <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Ebook downloads report</h2>
      <br><br>

       

 @include('ebook.report-abstract')  
      


@include('ebook.table')


 

        </div>
     </div>


  </div>      

  
@include('ebook.addContactModal')

@include('ebook.addtoGroupsModal')

@include('ebook.deleteModal')

    @stop