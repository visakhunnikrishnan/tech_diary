@extends('master-template')
 
  @section('content')
    <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Blog posts</h2>
      <br><br>

       <div class="col-sm-9">

          @include('blog.publish-blog.savedblog-abstract')

          @include('blog.publish-blog.savedblog-abstract')

          @include('blog.publish-blog.savedblog-abstract')

          @include('blog.publish-blog.savedblog-abstract')

          @include('blog.publish-blog.savedblog-abstract')

         <div class="text-center">
            <ul class="pagination pagination-lg">
                <li><a href="#">«</a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
            </ul>
        </div>


       </div>
       

       <div class="clearfix"></div>

        </div>
     </div>


  </div>  


 @include('blog.publish-blog.publishModal')

 @include('blog.publish-blog.deleteModal')


    @stop