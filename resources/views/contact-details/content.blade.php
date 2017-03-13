@extends('master-template')


 @section('content')
<script type="text/javascript" src="../../assets/widgets/textarea/textarea.js"></script>
 <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Manage Contact details</h2>
      <br><br>
          
 @include('contact-details.address-1')  

<hr>

<div class="container-fluid">

   @include('contact-details.address-2') 

   @include('contact-details.address-3') 

</div>

<hr>
@include('contact-details.phNo') 
<hr>
      
@include('contact-details.emailID') 


              </div>
     </div>


  </div>     

 @stop