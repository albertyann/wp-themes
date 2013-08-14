<div class="blog">
    <div class="row">
        <div class="span12">
          
             <div class="row">
                        <div class="span8">
                           <div class="posts">
                              <div class="entry">
                                 <h2><?php the_title(); ?></h2>
                                 
                                 <!-- Meta details -->
                                 <div class="meta">
                                     <i class="icon-calendar"></i> <?php the_date("Y-m-d");?> 
                                     <i class="icon-user"></i> <?php the_author(); ?> <i class="icon-folder-open"></i> 
                                     <?php the_tags()?>
                                 </div>
                                 <?php the_content();?>
                              </div>
                              
                               
                              
                              
                              
                              <!-- Navigation -->
                              
                              <div class="navigation button">  
                                  <div class="pull-left"> <?php previous_post_link('&laquo; %link','%title', true);?></div>
                                  <div class="pull-right"><?php next_post_link('%link &raquo;','%title', true);?></div>
                                    <div class="clearfix"></div>
                              </div>

                              <div class="clearfix"></div>
                              
                           </div>
                        </div>                        
                        <div class="span4">
                           <div class="sidebar">
                              <!-- Widget -->
                              <div class="widget">
                                 <h4>Search</h4>
                                 <form method="get" id="searchform" action="#" class="form-search">
                                    <input type="text" value="" name="s" id="s" class="input-medium"/>
                                    <button type="submit" class="btn">Search</button>
                                 </form>
                              </div>
                              <div class="widget">
                                 <h4>About</h4>
                                 <p>Nulla facilisi. Sed justo dui, id erat. Morbi auctor adipiscing tempor. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat. Proin rutrum, erat eget posuere semper, <em>arcu mauris posuere tortor</em>,velit at <a href="#">magna sollicitudin cursus</a> ac ultrices magna. Aliquam consequat, purus vitae auctor ullamcorper, sem velit convallis quam, a pharetra justo nunc et mauris. </p>
                              </div>                              
                           </div>                                                
                        </div>
                     </div>
            
        </div>
    </div>
</div>