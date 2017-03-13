@extends('master-template')
 
  @section('content')
  
  <script type="text/javascript" src="../../assets/widgets/textarea/textarea.js"></script>

    <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Manage Search Engine Optimization</h2>
      <br><br>


       <div class="container-fluid">



            @include('seo.default')


            <div class="clearfix"></div>
            <hr>
            <h4 style="color: rgba(132, 101, 101, 0.62);">Select Pages</h4>
            <br>

             @include('seo.all-page')

            


            @include('seo.page')

            @include('seo.page')

            @include('seo.page')
            
            @include('seo.page')

            @include('seo.page')

            @include('seo.page')

            @include('seo.page')


            <div class="clearfix"></div>
            <hr>
            <h4 style="color: rgba(132, 101, 101, 0.62);">Blog</h4>
            <br>

            @include('seo.all-blogpost')
            
            @include('seo.blogpost')

            @include('seo.blogpost')

            @include('seo.blogpost')

            @include('seo.blogpost')
            


</div>


        </div>
     </div>


  </div>  

  @include('seo.formModal')   
      
    @stop

 