@extends('master-template')
 
  @section('content')
  <script type="text/javascript" src="../../assets/widgets/textarea/textarea.js"></script>
<script type="text/javascript">
    /* Textarea autoresize */

    $(function() { "use strict";
        $('.textarea-autosize').autosize();
    });
</script>

    <div id="page-content-wrapper" style="padding-bottom: 3%;">
    <div id="page-content" >
                
         <div class="container">

     

      <div style="text-align: right;">
         <a class="btn btn-md btn-info" href="create-blog">Back to editor</a>
      </div>

       <div class="col-sm-10">

       

          <h2 style="color: rgba(62, 72, 85, 0.68);">When our power of choice is untrammelled and when nothing prevents our being able</h2>

          <br>

          <img class="img-responsive lazy img-rounded" src="assets/image-resources/stock-images/img-44.jpg" alt=""  style="height: 400px;" />

          <br>

          <div class="post-meta">
                    <span style="padding-right: 3%;font-size: 15px;">
                        <i class="glyph-icon icon-user"></i>
                        <a href="#" title="" style="text-decoration: none;">Thomas Edison</a>
                    </span>
                    <span style="padding-right: 3%;font-size: 15px;>
                        <i class="glyph-icon icon-clock-o"></i>
                        21 December 2014
                    </span>
                    <span style="padding-right: 3%;font-size: 15px;>
                        <i class="glyph-icon icon-comments-o"></i>
                        <a href="#" title="" style="text-decoration: none;">4 Comments</a>
                    </span>
                </div>

          <br>
          

          <p style="font-size: 16px">
            Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
            <br>
            The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.
            <br>
            For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.
             <br>
            If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.
          </p>      
            
          <hr>

          @include('blog.blogpost-single-page.comments')
         
          <hr>

@include('blog.blogpost-single-page.comment-form')


       </div>
       

       <div class="clearfix"></div>

        </div>
     </div>


  </div>      
    @stop