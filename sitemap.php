<!DOCTYPE html>
    <html>
    <head>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width'>
      <title>The Global Scholarship</title>
      <style> body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; padding:1em; } p{color: gray;} 
      * { box-sizing: border-box; }
.two { width: 100em; max-width: 100%; }
.two p { display: inline-block; max-width: 100%; }

      </style>
    </head>
    <body style="background-color:rgb(255, 166, 0)">

      <div style="padding-right: 60px; padding-left: 60px;margin: auto; width: 80%;align-items: center; border: 3px solid rgb(255, 166, 0); color: gray; background-color:white ">
        <div style="height: 20px; width: 100%; color: aqua; background-color:rgb(255, 255, 255);"></div>      
        <h1 style="text-align: center;">Sitemap</h1> 
        <div style="height: 8px; width: 100%; color: aqua; background-color:black;"></div> 
        <h3>The Global Scholarship Potral</h3> 
              <div class="two">
                <a href="https://www.theglobalscholarship.org/"><p>Home</p></a> <p> | </p>
                <a href="https://mocktest.theglobalscholarship.org/"><p>Mocktest</p></a> <p>|</p>
                <a href="https://www.amazon.in/b?_encoding=UTF8&tag=137909-21&linkCode=ur2&linkId=6e7e6bd9f310585ddf008ed6b3f291e2&camp=3638&creative=24630&node=4149751031"><p>Books</p></a> <p>| </p>
                <a href="https://www.theglobalscholarship.org/student-login"><p>Login</p></a> <p>| </p>
                <a href="https://www.theglobalscholarship.org/student-register"><p>Register</p></a> <p>| </p>
                <a href="https://www.theglobalscholarship.org/forgot-password"><p>Forgot Password</p></a> <p>| </p>
                <a href="https://www.theglobalscholarship.org/scholarships/Scholarship"><p>Indian Scholarship</p></a> <p>| </p>
                <a href="https://www.theglobalscholarship.org/scholarships/Abroad"><p>Abroad Scholarship</p></a> <p>| </p>
                <a href="https://www.theglobalscholarship.org/scholarships/Competitions%20and%20Awards"><p>Competitions And Awards</p></a> <p>| </p>
                <a href="https://www.theglobalscholarship.org/faq"><p>FAQ</p></a> <p>| </p>
                <a href="https://www.theglobalscholarship.org/about-us"><p>About Us</p></a> <p>| </p>
                <a href="https://www.theglobalscholarship.org/about-us#contact"><p>Why Choose Us</p></a> <p>| </p>
                <a href="https://www.theglobalscholarship.org/Scholarships2023"><p>Scholarships 2023</p></a> <p>| </p>
                <a href="https://www.theglobalscholarship.org/privacy"><p>Privacy</p></a> <p>| </p>
                <a href="https://www.theglobalscholarship.org/disclaimer"><p>Disclaimer</p></a> <p>| </p>
                <a href="https://www.instagram.com/the_global_scholarship/"><p>Reach us on Instagram</p></a> <p>| </p>
                <a href="https://www.youtube.com/c/theglobalscholarshiporg"><p>Reach Us On You Tube</p></a> <p>| </p>
                <a href="https://www.facebook.com/theglobalscholarship/"><p>Reach Us On Facebook</p></a> <p>| </p>
                <a href="https://t.me/theglobalscholarship"><p>Reach Us On Telegram</p></a> <p>| </p>
              </div>
              <h3>Indian Scholarships</h3> 
             
          
       
              <div class="two">
                <?php $index =1; $node=1; foreach($scholarships as $value): 
                if($node == 1){
                $node+=1;
              }?>
          
            <?php $type = $value->scholarship_type;
             $date = $value->application_end_date;?>
             <?php if($value->h_tags !=''){
                        $newname =str_replace(' ', '-', strtolower($value->h_tags));
                        }else{
                        $newname =str_replace(' ', '-', strtolower($value->scholarship_name));
                        }
                      ?>
         
            
                <a href="<?=base_url('page/'.$value->scholarship_id.'/'.$newname)?>"><p><?php echo $value->scholarship_name;?></p></a><p>| </p>
           
           
              
                <?php $index++; endforeach; ?>
              </div>
              <h3>Abroad Scholarships</h3> 
             
          
       
              <div class="two">
                <?php $index =1; $node=1; foreach($Abroad as $value): 
                if($node == 1){
                $node+=1;
              }?>
          
            <?php $type = $value->scholarship_type;
             $date = $value->application_end_date;?>
             <?php if($value->h_tags !=''){
                        $newname =str_replace(' ', '-', strtolower($value->h_tags));
                        }else{
                        $newname =str_replace(' ', '-', strtolower($value->scholarship_name));
                        }
                      ?>
         
            
                <a href="<?=base_url('page/'.$value->scholarship_id.'/'.$newname)?>"><p><?php echo $value->scholarship_name;?></p></a><p>| </p>
           
           
              
                <?php $index++; endforeach; ?>
              </div> 
              <h3>Other Scholarships And Competitions</h3> 
             
          
       
              <div class="two">
                <?php $index =1; $node=1; foreach($others as $value): 
                if($node == 1){
                $node+=1;
              }?>
          
            <?php $type = $value->scholarship_type;
             $date = $value->application_end_date;?>
             <?php if($value->h_tags !=''){
                        $newname =str_replace(' ', '-', strtolower($value->h_tags));
                        }else{
                        $newname =str_replace(' ', '-', strtolower($value->scholarship_name));
                        }
                      ?>
         
            
                <a href="<?=base_url('page/'.$value->scholarship_id.'/'.$newname)?>"><p><?php echo $value->scholarship_name;?></p></a><p>| </p>
           
           
              
                <?php $index++; endforeach; ?>
              </div>   
              <h3>Scholarships 2023</h3> 
             
          
       
              <div class="two">
                <?php $index =1; $node=1; foreach($expired as $value): 
                if($node == 1){
                $node+=1;
              }?>
          
            <?php $type = $value->scholarship_type;
             $date = $value->application_end_date;?>
             <?php if($value->h_tags !=''){
                        $newname =str_replace(' ', '-', strtolower($value->h_tags));
                        }else{
                        $newname =str_replace(' ', '-', strtolower($value->scholarship_name));
                        }
                      ?>
         
            
                <a href="<?=base_url('page/'.$value->scholarship_id.'/'.$newname)?>"><p><?php echo $value->scholarship_name;?></p></a><p>| </p>
          
           
              
                <?php $index++; endforeach; ?>
              </div>       
      </div>
       
    </body>
    </html>
      