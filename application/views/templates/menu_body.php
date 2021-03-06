<style>
body{
  padding-bottom:0px;
  font-size:12px;
}
  .br5{
    border-radius: 0.2rem;
  }
  .shadow-5{
    box-shadow:1px 1px 4px 1px rgba(0,0,0,.2);
  }
  #productName{
    font-size:0.8rem;
  }
  #productPrice{
    color:#C44442;
    font-size:1.5em;
  }
  #productPrice small{
    font-size:0.8rem;
  }
  .blod5{
    font-weight:500;
  }
  .blod7{
    font-weight:700;
  }
  .nav-link{
    padding:1rem .5rem;
    border-top-left-radius:0 !important;
    border-top-right-radius:0 !important;
    border:none !important;
  }
  .nav-link img{
    width:40px;
    height:40px;
  }
  .nav{
    border-bottom:none !important;
  }
  
  .menu-item{
    flex-direction:row;
    padding:12px;
  }
  .menu-item img{
    width:130px;
    height:90px;
  }
  @media (min-width: 100px) {
    
  }
  @media (min-width: 374px) {
    .nav-link img{
      width:50px;
      height:50px;
    }
    .menu-item img{
      width:152px;
      height:106px;
    }
    body{
      padding-bottom:0px;
      font-size:16px;
    }
  }

</style>
<body>

     
     
  
     <div class="container-fluid">
          <div class="row ">
            <div class="" style="background-color:#f1f1f1">
              <div class="nav flex-column nav-tabs" id="menutab" role="tablist" aria-orientation="vertical">
              <?php foreach($data as $key => $value){  
                $activeTest="";
                  if($key==0)$activeTest="active";
                ?>
                <a class="nav-link <?php echo $activeTest?>" id="menu-info-tab-<?php echo $value['m_id']?>" data-toggle="pill" href="#menu-info-<?php echo $key;?>" role="tab" aria-controls="<?php echo $key;?>" aria-selected="true">
                    <!-- <div class="row justify-content-center"> -->
                      <img id="mPic" class="" src="<?php echo $value['m_pic']?>">
                    <!-- </div>   -->
                    <!-- <h4 id="mName" class="row justify-content-center" style="color:#9c9c9c"><?php echo $value['m_name']?></h4> -->
                </a>
               <?php }?>  
              </div>
            </div>

            <!-- 内容 -->
           
            
            <div class="pr-3 pl-3" style="flex:1;">
                <div class="tab-content" id="v-pills-tabContent">
                <?php foreach($data as $m_key => $m_value){ 
                    $activeTest="";
                    // echo $m_key;
                    if($m_key==0)$activeTest="active";

                    //  echo var_dump($m_value);
                  ?>
                  <div class="tab-pane fade show <?php echo $activeTest ?>" id="menu-info-<?php echo $m_key?>" role="tabpanel" aria-labelledby="menu-info-<?php echo $m_key?>">
                      <div class="pt-3 row justify-content-center"><?php echo $m_value['m_name']?></div>

                    <?php foreach($m_value['product'] as $p_key => $p_value){ ?>
                      
                    <div class="container-fluid"> 
                        <div class="row mt-3 shadow-5 br5 justify-content-between menu-item">
                          
                          
                              <img id="productPic" class=""  src="<?php echo $p_value['p_pic_url']?>" >
                          
                        
                          
                            <div class="d-flex flex-column mr-2 mr-sm-3 justify-content-center" style="flex:1;">
                              <h6 id="productName" class="text-right"><?php echo $p_value['p_name']?></h6>   
                            
                            
                              <h6 id="productPrice" class="blod7 text-right"><small>¥</small> <?php echo $p_value['p_price']?><small>/盘</small></h6> 
                            </div>                 
                            
                          
                        </div> 
                        
                    </div>
                    <?php }?>  
                  </div>
                  <?php }?>
                </div>
            </div>
          </div>     
        </div>
</body>