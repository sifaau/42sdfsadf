<?php
echo"
      </div>
      <div class='col-md-5 blog_left'>
            <a href='https://www.facebook.com/Media-Kicauboy-202116983749643/'><img src=".base_url("assets/pic/sponsore/find_fb.jpg")." width='50px' height='250px'></img></a>
    	      <h4 style='background-color: #BD8DBF;line-height: 20px;padding: 8px 15px;color: #ffffff; width:30%'>
            		<center>MINGGU INI</center>
          	  </h4>
          	  <hr style='background-color: #BD8DBF; border-bottom: 2px solid #BD8DBF;'>
          	  ";
          	          $data_news = $this->db->query("select * from tb_news where active = 1 order by id desc LIMIT 7");
            foreach($data_news->result() as $news){
              echo"
            <h5><a href='".base_url("index/read_more/".base64_encode($news->id)."")."'>".$news->title." </a></h5>
            <div class='col-sm-3'>
            <a href='".base_url("index/read_more/".base64_encode($news->id)."")."'><img src='".base_url("assets/pic/news/resize/".$news->picture."")."' width='100px' height='50px' alt='' class='blog_img img-responsive'/></a>
            </div>
            <div class='blog_list'>
                <ul class='list-unstyled'>
                  <!-- <li><i class='fa fa-calendar-o'></i><span>".date('d M Y', strtotime('-0 days', strtotime($news->create_date)))."</span></li> -->
                  <!-- <li><a href='#'><i class='fa fa-user'></i><span>".$news->create_user."</span></a></li> -->
                  <!-- <li><a href='#'><i class='fa fa-eye'></i><span>124 views</span></a></li> -->
                </ul>
            </div>
            ";
            if(strlen($news->description) > 250){
              $desc = substr($news->description,0,240)."...";
            }else{
              $desc = $news->description;
            }
            echo"
            <p class='para'>".$desc."</p>
            <!-- <div class='read_more'>
              <a href='".base_url("index/read_more/".base64_encode($news->id)."")."' class='fa-btn btn-1 btn-1e'>view more</a>
            </div> -->
            <hr style='background-color: #b1b1b1; border-bottom:0.5px solid #b1b1b1;'>";
          }
          echo"
      </div>
      <div class='clearfix'></div>
      <hr>
      <div class='col-sm-12' style='margin-top:30px;margin-bottom:30px;align='center'>
        <div class='col-sm-4'>
          <img src=".base_url("assets/pic/sponsore/sponsore_1.jpg")." width='350px' height='350px'></img>
        </div>
        <div class='col-sm-4'>
          <img src=".base_url("assets/pic/sponsore/sponsore_2.jpg")." width='350px' height='350px'></img>
        </div>
        <div class='col-sm-4'>
          <img src=".base_url("assets/pic/sponsore/sponsore_3.jpg")." width='350px' height='350px'></img>
        </div>
      </div>
      <div class='col-sm-12'>
        <div class='col-md-4'>
              <h4 style='background-color: #BD8DBF;line-height: 20px;padding: 8px 15px;color: #ffffff; width:30%'>
                  <center>BERITA TERBARU</center>
                </h4>
                <hr style='background-color: #BD8DBF; border-bottom: 2px solid #BD8DBF;'>
                ";
                        $data_news = $this->db->query("select * from tb_news where active = 1 and flag_news = 0  order by id desc LIMIT 7");
              foreach($data_news->result() as $news){
                echo"
              <h5><a href='".base_url("index/read_more/".base64_encode($news->id)."")."'>".$news->title." </a></h5>
              <a href='".base_url("index/read_more/".base64_encode($news->id)."")."'><img src='".base_url("assets/pic/news/resize/".$news->picture."")."' width='100px' height='50px' alt='' class='blog_img img-responsive'/></a>
              <div class='blog_list'>
                  <ul class='list-unstyled'>
                    <li><i class='fa fa-calendar-o'></i><span>".date('d M Y', strtotime('-0 days', strtotime($news->create_date)))."</span></li>
                    <li><a href='#'><i class='fa fa-user'></i><span>".$news->create_user."</span></a></li>
                    <!-- <li><a href='#'><i class='fa fa-eye'></i><span>124 views</span></a></li> -->
                  </ul>
              </div>";
              if(strlen($news->description) > 250){
                $desc = substr($news->description,0,240)."...";
              }else{
                $desc = $news->description;
              }
              echo"
              <p class='para'>".$desc."</p>
              <div class='read_more'>
                <a href='".base_url("index/read_more/".base64_encode($news->id)."")."' class='fa-btn btn-1 btn-1e'>view more</a>
              </div>";
            }
            echo"
        </div>
        <div class='col-md-4'>
              <h4 style='background-color: #BD8DBF;line-height: 20px;padding: 8px 15px;color: #ffffff; width:30%'>
                  <center>DATA JUARA</center>
                </h4>
                <hr style='background-color: #BD8DBF; border-bottom: 2px solid #BD8DBF;'>
                ";
                        $data_news = $this->db->query("select * from tb_news where active = 1 and flag_news = 1  order by id desc LIMIT 7");
              foreach($data_news->result() as $news){
                echo"
              <h5><a href='".base_url("index/read_more/".base64_encode($news->id)."")."'>".$news->title." </a></h5>
              <a href='".base_url("index/read_more/".base64_encode($news->id)."")."'><img src='".base_url("assets/pic/news/resize/".$news->picture."")."' width='100px' height='50px' alt='' class='blog_img img-responsive'/></a>
              <div class='blog_list'>
                  <ul class='list-unstyled'>
                    <li><i class='fa fa-calendar-o'></i><span>".date('d M Y', strtotime('-0 days', strtotime($news->create_date)))."</span></li>
                    <li><a href='#'><i class='fa fa-user'></i><span>".$news->create_user."</span></a></li>
                    <!-- <li><a href='#'><i class='fa fa-eye'></i><span>124 views</span></a></li> -->
                  </ul>
              </div>";
              if(strlen($news->description) > 250){
                $desc = substr($news->description,0,240)."...";
              }else{
                $desc = $news->description;
              }
              echo"
              <p class='para'>".$desc."</p>
              <div class='read_more'>
                <a href='".base_url("index/read_more/".base64_encode($news->id)."")."' class='fa-btn btn-1 btn-1e'>view more</a>
              </div>";
            }
            echo"
        </div>
        <div class='col-md-4'>
              <h4 style='background-color: #BD8DBF;line-height: 20px;padding: 8px 15px;color: #ffffff; width:30%'>
                  <center>DATA BROSUR</center>
                </h4>
                <hr style='background-color: #BD8DBF; border-bottom: 2px solid #BD8DBF;'>
                ";
                        $data_news = $this->db->query("select * from tb_news where active = 1 and flag_news = 2  order by id desc LIMIT 7");
              foreach($data_news->result() as $news){
                echo"
              <h5><a href='".base_url("index/read_more/".base64_encode($news->id)."")."'>".$news->title." </a></h5>
              <a href='".base_url("index/read_more/".base64_encode($news->id)."")."'><img src='".base_url("assets/pic/news/resize/".$news->picture."")."' width='100px' height='50px' alt='' class='blog_img img-responsive'/></a>
              <div class='blog_list'>
                  <ul class='list-unstyled'>
                    <li><i class='fa fa-calendar-o'></i><span>".date('d M Y', strtotime('-0 days', strtotime($news->create_date)))."</span></li>
                    <li><a href='#'><i class='fa fa-user'></i><span>".$news->create_user."</span></a></li>
                    <!-- <li><a href='#'><i class='fa fa-eye'></i><span>124 views</span></a></li> -->
                  </ul>
              </div>";
              if(strlen($news->description) > 250){
                $desc = substr($news->description,0,240)."...";
              }else{
                $desc = $news->description;
              }
              echo"
              <p class='para'>".$desc."</p>
              <div class='read_more'>
                <a href='".base_url("index/read_more/".base64_encode($news->id)."")."' class='fa-btn btn-1 btn-1e'>view more</a>
              </div>";
            }
            echo"
        </div>
      </div>
    </div>
  </div>
</div><!-- end main -->
";
?>