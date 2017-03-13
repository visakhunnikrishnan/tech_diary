@extends('master-template')
 
  @section('content')

<script type="text/javascript" src="../../assets/widgets/textarea/textarea.js"></script>

    <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">New Blog post</h2>
     
      <div style="text-align: right;">

         <a class="btn btn-md btn-primary" data-toggle="modal" data-target="#setTimeModal">Change post time</a>

         <a class="btn btn-md btn-info" href="blog-single-page">Preview</a>
      </div>
      <form>
        <div class="form-group">
                    <div class="col-sm-11" style="margin-top: 1%;">
                        <input type="text" class="form-control" id="" placeholder="Blog title" style="color: rgba(132, 101, 101, 0.9); font-size: 20px;padding: 3%;">
                    </div>
                </div>



          <img class="img-responsive lazy img-rounded" src="assets/image-resources/stock-images/img-44.jpg" alt=""  style="height: 400px; padding: 2%;" />

         <div class="form-group">
                   
                    <div class="col-sm-12">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <span class="btn btn-sm btn-primary btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="...">
                            </span>
                            <span class="fileinput-filename"></span>
                            <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                        </div>
                    </div>
                </div>
          
          @include('blog.create-blog.editor')
   
      <div class="container-fluid" style="padding-bottom: 3%;">
          <a class="btn btn-lg btn-success" style="padding-left: 3%;padding-right: 3%;">Post</a>

          <a class="btn btn-lg btn-info" data-toggle="modal" data-target="#myModal" style="padding-left: 3%;padding-right: 3%;">save</a>
      </div>
      </form>
 

        </div>
     </div>


  </div>   
                   
                    </div>
   

    @include('blog.create-blog.setTimeModal')


    @stop