<?php
/*
Template Name: Custom contact
*/
?>

<?php get_template_part('templates/page', 'header'); ?>
    <div class="form-block">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <img src="http://placehold.it/720x850/21b2eb/058dcd" />
          </div>
          <div class="col-md-8 col-sm-6">
            <form method="post" id="custom_form" name="custom_form">
              <div class="form-group">
                <label >Name</label>
                <input  type="text" id="name" name="name" class="form-control">
              </div>
              <div class="form-group">
                <label >Email</label>
                <input type="text" id="email" name="email" class="form-control" >
                </div>
                <div class="form-group">
                <label >Message</label>
                <textarea type="text" id="message" name="message" class="form-control"></textarea>
              </div>
                <div class="form-group">
                <label>Captcha (case sensitive)</label>
                <div id="spambox">
                  <div class="spam"></div>  
                </div> 
              </div>
                <button type="submit" class="btn btn-default" id="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>  
<?php get_template_part('templates/content', 'page'); ?>
