@extends('master-template')
 
  @section('content')
    <script type="text/javascript" src="../../assets/widgets/textarea/textarea.js"></script>

    <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Manage Ebooks</h2>
      <br><br>

       







       <div class="container-fluid">


@include('ebook.ebook-abstract')

@include('ebook.ebook-abstract')  





  <a href="#" data-toggle="modal" data-target="#new-ebookModal" style="text-decoration: none;"><div class="col-sm-4 card" style="background-color: #fff; color:rgba(31, 9, 9, 0.5);padding: 3%;height: 284px;text-align: center;">
  <h1 class="glyph-icon icon-book " style="font-size: 70px;color: #46b8da;padding-top: 7%;"></h1>
    <h2 style="padding: 12%;"> New Ebook </h2>
  
  </div>
  </a><!--#new ebook-->

 

 <div class="clearfix"></div>  


</div>











 

        </div>
     </div>


  </div>  





@include('ebook.newebookModal')
    
    @stop

 