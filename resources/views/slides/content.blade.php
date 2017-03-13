@extends('master-template')


 @section('content')

<script type="text/javascript" src="../../assets/widgets/textarea/textarea.js"></script>
 <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Manage Slides</h2>
      <br><br>
          

          <div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Home page carousels
        </h3>
        
        @include('slides.slides-abstract')

    </div>
</div>




@include('slides.editModal')


@include('slides.deleteModal')







              </div>
     </div>


  </div>     

 @stop