@extends('master-template')


 @section('content')
<script type="text/javascript" src="../../assets/widgets/textarea/textarea.js"></script>
 <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Manage Gallery</h2>
      <br><br>
          
     <div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Manage your gallery images
        </h3>
        <div class="example-box-wrapper">
            <div class="row">


              @include('gallery.gallery-abstract')


                  
                    <a href="#"  data-toggle="modal" data-target="#editModal" style="text-decoration: none;"><div class="col-lg-3 col-md-4 col-sm-6" style="border: 1px solid #eee;height: 280px;width: 231.750px;text-align: center;"><!--news modal-->
                        <h1 style="padding-top: 40%;">Add more</h1>
                        <h1><span style="font-size: 75px; color: #46b8da;"  class="glyph-icon icon-files-o"></span></h1>
                     </div><!--news modal--></a>
                 


                
            </div>
        </div>
    </div>
</div>



@include('gallery.editModal')

@include('gallery.deleteModal')


              </div>
     </div>


  </div>     

 @stop