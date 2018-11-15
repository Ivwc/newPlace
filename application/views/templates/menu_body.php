<style>
  .br5{
    border-radius: 0.5rem;
  }
  #productName{
    font-size:1.5rem;
  }
  #productPrice{
    color:red;
    font-size:2rem;
  }
  #productPrice small{
    font-size:1.2rem;
  }
  .blod9{
    font-weight:900;
  }

</style>
<body>

     
     
  
     <div class="container-fluid">
          <div class="row ">
            <div class="col-2 p-0" style="background-color:#f1f1f1">
              <div class="nav flex-column nav-tabs" id="menutab" role="tablist" aria-orientation="vertical">
              <?php foreach($data as $key => $value){  
                $activeTest="";
                  if($key==1)$activeTest="active";
                ?>
                <a class="nav-link <?php echo $activeTest?>" id="menu-info-tab-<?php echo $value['m_id']?>" data-toggle="pill" href="#menu-info-<?php echo $key;?>" role="tab" aria-controls="<?php echo $key;?>" aria-selected="true">
                    <div class="row justify-content-center">
                      <img id="mPic" style="width:50px;height:50px" class="mt-4 mb-3" src="<?php echo $value['m_pic']?>">
                    </div>  
                    <h4 id="mName" class="row justify-content-center" style="color:#9c9c9c"><?php echo $value['m_name']?></h4>
                </a>
               <?php }?>  
              </div>
            </div>

            <!-- 内容 -->
           
            
            <div class="col-10">
                <div class="tab-content" id="v-pills-tabContent">
                <?php foreach($data as $m_key => $m_value){ 
                    $activeTest="";
                    // echo $m_key;
                    if($m_key==1)$activeTest="active";

                    //  echo var_dump($m_value);
                  ?>
                  <div class="tab-pane fade show <?php echo $activeTest ?>" id="menu-info-<?php echo $m_key?>" role="tabpanel" aria-labelledby="menu-info-<?php echo $m_key?>">
                      <div class="pt-3 row justify-content-center"><?php echo $m_value['m_name']?></div>

                    <?php foreach($m_value['product'] as $p_key => $p_value){ ?>
                      
                    <div class="container-fluid"> 
                        <div class="row mt-3 shadow-5 ba br5">
                          <div class="col-6">
                            <div class="row justify-content-center">
                                <img id="productPic" class="mt-4 mb-4"  src="<?php echo $p_value['p_pic_url']?>" style="height:120px;width:120px;" >
                            </div>
                          </div>
                          <div class="col-6 d-flex align-items-center justify-content-center">
                            <div class="row flex-column">
                              <div>
                                <h6 id="productName" class="blod9"><?echo $p_value['p_name']?></h6>   
                              </div>
                              <div>
                                <h6 id="productPrice" class="blod9"><small>¥</small> <?echo $p_value['p_price']?><small>/盘</small></h6> 
                              </div>                 
                            </div>
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