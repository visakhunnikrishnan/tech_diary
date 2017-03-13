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

      <h2 style="color: rgba(132, 101, 101, 0.62);">Campaign report</h2>
      <br><br>

       


      



      <h1 style="color: #3498db;">Cloud app launch</h1>
<h3 style="color: rgba(132, 101, 101, 0.62);">Started at <span style="color: rgba(132, 101, 101, 0.8);">Mar-17</span></h3>
<h3 style="color: rgba(132, 101, 101, 0.62);">Total&nbsp;<b style="font-size: 25px;color: rgba(132, 101, 101, 0.8);">140</b>&nbsp;Recipients</h3>
      <hr><br>
<div class="container-fluid">
  <div class="col-sm-4">
    <h3 style="color: rgba(132, 101, 101, 0.8);"><b style="font-size: 70px;color: #2ecc71;">41</b>Subscribers</h3>
    <h3 style="color: rgba(132, 101, 101, 0.8);"><b style="font-size: 40px;color: rgba(52, 73, 94, 0.6);">72</b>Opens&nbsp;<b style="font-size: 40px;color: rgba(52, 73, 94, 0.6);">13</b>Clicks</h3>
  </div>
  <div class="col-sm-6">
  
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper">
                 <div class="header">
                    34
                    <span>Total Responded<b> in </b> this week</span>
                </div>
                <div class="bs-label bg-red">-14%</div>
                <div class="center-div sparkline-big-alt">21,41,31,50,18,41</div>
                <div class="row list-grade">
                    <div class="col-md-2">M</div>
                    <div class="col-md-2">T</div>
                    <div class="col-md-2">W</div>
                    <div class="col-md-2">T</div>
                    <div class="col-md-2">F</div>
                    <div class="col-md-2">S</div>
                </div>
            </div>
            
        </div>
 
  </div>
  <div class="col-sm-2"></div>
</div>      

<div class="clearfix"></div>


@include('campaigns.reports-individual.table') 

        </div>
     </div>


  </div>      


@include('campaigns.reports-individual.addContactModal')

@include('campaigns.reports-individual.addtoGroupsModal')

@include('campaigns.reports-individual.deleteModal')


    @stop