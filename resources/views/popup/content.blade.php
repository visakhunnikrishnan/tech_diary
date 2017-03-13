@extends('master-template')
 
  @section('content')
  <script type="text/javascript" src="../../assets/widgets/textarea/textarea.js"></script>



   <!-- Sparklines charts -->

<script type="text/javascript" src="assets/widgets/charts/sparklines/sparklines.js"></script>
<script type="text/javascript" src="assets/widgets/charts/sparklines/sparklines-demo.js"></script>



  
    <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Manage Popup</h2>
      <br><br>

        @include('popup.managePopup')

        @include('popup.report')
       

        </div>
     </div>


  </div>    




@include('popup.preview')



    @stop
