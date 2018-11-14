     <style>
      
     </style>
     <body>
        <?php 
        $data[0]['infoId']='menu-info-a';
        $data[0]['ariaId']='menu-info-a';
        $data[0]['menuIcon']=base_url('assets/images/homePage/bowl.png');
        $data[0]['menuName']='丼饭';
        $data[0]['infoTab']='menu-info-tab-a';
        $data[0]['activeTest']='active';


        $data[0]['menuPic']=base_url('assets/images/homePage/products/bowls.jpg');
        $data[0]['productName']='综合刺身拼盘';
        $data[0]['productPrice']='¥328/份';
        

        $data[1]['infoId']='menu-info-b';
        $data[1]['ariaId']='menu-info-b';
        $data[1]['menuIcon']=base_url('assets/images/homePage/fish.png');
        $data[1]['menuName']='鱼';
        $data[1]['infoTab']='menu-info-tab-b';
        $data[1]['activeTest']='false';


        $data[1]['menuPic']=base_url('assets/images/homePage/products/fish.jpg');
        $data[1]['productName']='醋鲭鱼';
        $data[1]['productPrice']='¥28/份';
        

        ?>

     <?php foreach($data as $key => $value){  ?>
     
        
       

     <?php }?>

     <div class="container-fluid">
          <div class="row ">
            <div class="col-2 p-0" style="background-color:#f1f1f1">
              <div class="nav flex-column nav-tabs" id="menutab" role="tablist" aria-orientation="vertical">
              <?php foreach($data as $key => $value){  ?>
                <a class="nav-link <?php echo $value['activeTest']?>" id="<?echo $value['infoTab']?>" data-toggle="pill" href="#<?echo $value['infoId']?>" role="tab" aria-controls="<?echo $value['ariaId']?>" aria-selected="true">
                    <div class="row justify-content-center">
                      <img id="menuIcon" style="width:50px;height:50px" class="mt-4 mb-3" src="<?echo $value['menuIcon']?>">
                    </div>  
                    <h4 id="menuName" class="row justify-content-center" style="color:#9c9c9c"><?echo $value['menuName']?></h4>
                </a>
               <?php }?>  
              </div>
            </div>

            <!-- 内容 -->
            
            <div class="col-10">
              <div class="tab-content" id="v-pills-tabContent">
               <?php foreach($data as $key => $value){  ?>
                <div class="tab-pane fade show <?php echo $value['activeTest']?>" id="<?echo $value['infoId']?>" role="tabpanel" aria-labelledby="<?echo $value['ariaId']?>">
                  <div class="container-fluid"> 
                      <div class="row border rounded border-dark mt-3">
                        <div class="col-6">
                          <div class="row justify-content-center">
                            <img id="menuPic" class="mt-4 mb-4"  src="<?php echo $value['menuPic']?>" style="height:120px;width:120px;" >
                          </div>
                        </div>
                        <div class="col-6 d-flex align-items-end justify-content-center">
                          <div class="row flex-column mb-4">
                            <div>
                              <h6 id="productName"><?echo $value['productName']?></h6>   
                            </div>
                            <div>
                              <h6 id="productPrice"><?echo $value['productPrice']?></h6> 
                            </div>                 
                          </div>
                        </div>
                      </div>   
                  </div>
                </div>
                 <?php }?>
              </div>
            </div>
          </div>     
        </div>

        
     
    
     </body>