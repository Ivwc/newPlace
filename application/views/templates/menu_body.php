<style>
  .br5{
    border-radius: 1rem;
  }
</style>
<body>

     

    <!-- <?php foreach($data as $key1 => $value1){
     echo "第一層key:". $key1."<br>";
     echo "第一層拿到value1<br>";
        var_dump($value1);
         foreach($value1 as $key2 => $value2){
          echo "第二層key2:". $key2;
          echo "第二層拿到value2<br>";
          var_dump($value2);
         }

        echo "<hr>";

    }

    ?> -->

  
     <div class="container-fluid">
          <div class="row ">
            <div class="col-2 p-0" style="background-color:#f1f1f1">
              <div class="nav flex-column nav-tabs" id="menutab" role="tablist" aria-orientation="vertical">
              <?php foreach($data as $key => $value){  
                $activeTest="";
                  if($key==1)$activeTest="active";
                ?>
                <a class="nav-link <?php echo $activeTest?>" id="menu-info-tab-<?echo $value['menu']['m_id']?>" data-toggle="pill" href="#menu-info-<?echo $value['menu']['p_id']?>" role="tab" aria-controls="<?echo $value['menu']['p_id']?>" aria-selected="true">
                    <div class="row justify-content-center">
                      <img id="mPic" style="width:50px;height:50px" class="mt-4 mb-3" src="<?echo base_url($value['menu']['m_pic'])?>">
                    </div>  
                    <h4 id="mName" class="row justify-content-center" style="color:#9c9c9c"><?echo $value['menu']['m_name']?></h4>
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
                      <div class="pt-3 row justify-content-center"><?php echo $m_value['menu']['m_name']?></div>

                    <?php foreach($m_value as $p_key => $p_value){
                      if($p_key==='menu')continue;
                  ?>
                      
                    <div class="container-fluid"> 
                        <div class="row mt-3 shadow-5 ba br5">
                          <div class="col-6">
                            <div class="row justify-content-center">
                                <img id="productPic" class="mt-4 mb-4"  src="<?php echo base_url($p_value['p_pic_url'])?>" style="height:120px;width:120px;" >
                            </div>
                          </div>
                          <div class="col-6 d-flex align-items-end justify-content-center">
                            <div class="row flex-column mb-4">
                              <div>
                                <h6 id="productName"><?echo $p_value['p_name']?></h6>   
                              </div>
                              <div>
                                <h6 id="productPrice"><?echo $p_value['p_price']?></h6> 
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