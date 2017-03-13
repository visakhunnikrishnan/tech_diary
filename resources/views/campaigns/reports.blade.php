@extends('master-template')
 
  @section('content')
  <!-- Sparklines charts -->

<script type="text/javascript" src="assets/widgets/charts/sparklines/sparklines.js"></script>
<script type="text/javascript" src="assets/widgets/charts/sparklines/sparklines-demo.js"></script>



    <div id="page-content-wrapper" >
    <div id="page-content" >



             <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">All campaigns report</h2>
      <br><br>


      <h1 style="color: rgba(132, 101, 101, 0.8);">Total responses in this week</h1>
       <h3 style="color: rgba(132, 101, 101, 0.8);"><b style="font-size: 70px">3</b>Active campaigns</h3>
    <h3 style="color: rgba(132, 101, 101, 0.8);"><b style="font-size: 40px">2</b>Pending campaigns&nbsp;&nbsp;<b style="font-size: 40px">7</b>Saved campaigns</h3>


     <br>
<div class="container-fluid">
  <div class="col-sm-4">
    <h3 style="color: rgba(132, 101, 101, 0.8);"><b style="font-size: 70px;color:#2ecc71;">87</b>Subscribers</h3>
    <h3 style="color: rgba(132, 101, 101, 0.8);"><b style="font-size: 40px;color: rgba(52, 73, 94, 0.6);">127</b>Opens&nbsp;<b style="font-size: 40px;color: rgba(52, 73, 94, 0.6);">55</b>Clicks</h3>
  </div>
  <div class="col-sm-8">
  
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

</div>      

<div class="clearfix"></div>
        </div>




              
@include('campaigns.reports.individualReports-abstract')
            
@include('campaigns.reports.individualReports-abstract')

@include('campaigns.reports.individualReports-abstract')


     </div>


  </div>      
    @stop