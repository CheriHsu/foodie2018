<?php
    if(!isset($_SESSION)) 
    { 
      ob_start();
        session_start(); 
    }
include '../views/header.php';

?>


</head>
<?php
include '../common/Navbar.php';
include '../common/Searchbox.php';
?>
<body>



<!-- ============================================================================= -->

<div id="MapSearch">
        <div class="MapSearch-Container">
          <div id="map" class="MapSearch-Map col-sm-7 col-xs-12">
            <!-- <img src='../assets/images/mapsearch/mapsearch_mapp.png' alt="地圖假圖"/> -->
          </div>
          <div class="MapSearch-Info col-sm-5">
            <div class="MapSearch-Check col-sm-0">
              <label htmlFor="MapSearch-Checkaa"><img src={list} alt="list"/></label>
            </div>
            <input type="checkbox" id="MapSearch-Checkaa"/>
            <!-- <div class="MapSearch-Search">

              <div class="MapSearch-InfoTitle">
                <span>篩選：</span>
              </div>
              <div class="MapSearch-InfoItem">
                <ul>
                  <li><input type="checkbox" id="MapSearch-aa"/><label htmlFor="MapSearch-aa"><img src='../assets/images/mapsearch/mapsearch_checkno.png' alt="no" class="checkno"/><img src='../assets/images/mapsearch/mapsearch_checkyes.png' alt="no" class="checkyes"/>營業中</label></li>
                  <li><input type="checkbox" id="MapSearch-bb"/><label htmlFor="MapSearch-bb"><img src='../assets/images/mapsearch/mapsearch_checkno.png' alt="no" class="checkno"/><img src='../assets/images/mapsearch/mapsearch_checkyes.png' alt="no" class="checkyes"/>營業中</label></li>
                  <li><input type="checkbox" id="MapSearch-cc"/><label htmlFor="MapSearch-cc"><img src='../assets/images/mapsearch/mapsearch_checkno.png' alt="no" class="checkno"/><img src='../assets/images/mapsearch/mapsearch_checkyes.png' alt="no" class="checkyes"/>營業中</label></li>
                  <li><input type="checkbox" id="MapSearch-dd"/><label htmlFor="MapSearch-dd"><img src='../assets/images/mapsearch/mapsearch_checkno.png' alt="no" class="checkno"/><img src='../assets/images/mapsearch/mapsearch_checkyes.png' alt="no" class="checkyes"/>營業中</label></li>
                  <li><input type="checkbox" id="MapSearch-ee"/><label htmlFor="MapSearch-ee"><img src='../assets/images/mapsearch/mapsearch_checkno.png' alt="no" class="checkno"/><img src='../assets/images/mapsearch/mapsearch_checkyes.png' alt="no" class="checkyes"/>營業中</label></li>
                  <li><input type="checkbox" id="MapSearch-ff"/><label htmlFor="MapSearch-ff"><img src='../assets/images/mapsearch/mapsearch_checkno.png' alt="no" class="checkno"/><img src='../assets/images/mapsearch/mapsearch_checkyes.png' alt="no" class="checkyes"/>營業中</label></li>
                  <li><input type="checkbox" id="MapSearch-gg"/><label htmlFor="MapSearch-gg"><img src='../assets/images/mapsearch/mapsearch_checkno.png' alt="no" class="checkno"/><img src='../assets/images/mapsearch/mapsearch_checkyes.png' alt="no" class="checkyes"/>營業中</label></li>
                  <li><input type="checkbox" id="MapSearch-hh"/><label htmlFor="MapSearch-hh"><img src='../assets/images/mapsearch/mapsearch_checkno.png' alt="no" class="checkno"/><img src='../assets/images/mapsearch/mapsearch_checkyes.png' alt="no" class="checkyes"/>營業中</label></li>
                </ul>
              </div>
              <div class="clearfix"></div>
            </div> -->

            <div class="MapSearch-ItemList col-xs-12">
              <p>定位搜索</p>
              <!-- ////////////////////////////////////////////////////////////////// -->
                  <label for="friedrice">
                  <form class="ShopResult-Shoplist" name="ShopResult-Shoplist" method="get" action="ShopResultItemSession.php">
              <!-- ////////////////////////////////////////////////////////////////// -->
                  <div class="MapSearch-Item">

                  <div class="MapSearch-ItemPic">
                    <img src='../assets/images/mapsearch/01.jpg' alt="攤商照片"/>
                  </div>
                  <div class="MapSearch-ItemInfo">
                  <h4>車輪餅</h4>
                  <div class="MapSearch-Score">
                    ★★★★☆
                    <div class="clearfix"></div>
                  </div>
                  <div class="MapSearch-ScoreWord">
                    評價：4
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodTag">
                    餐點：甜點飲料
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodWork">
                    營業中
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodPlace">
                    現在位置：<span>桃園市 中壢區 中央路</span> 
                  </div>
             
                </div>
                <div class="clearfix"></div>
                <!-- ////////////////////////////////////////////////////////////////// -->
                  <input type="submit" id="friedrice" name="ShopResult-submit" class="ShopResult-submit">
                  <input type="hidden" name="ShopResult-submitshopid" value="friedrice">
                  </form>
                  </label>
              <!-- ////////////////////////////////////////////////////////////////// -->
              </div>
              
              <div class="MapSearch-Item">
                <!-- ////////////////////////////////////////////////////////////////// -->
                  <label for="friedrice2">
                  <form class="ShopResult-Shoplist" name="ShopResult-Shoplist" method="get" action="ShopResultItemSession.php">
              <!-- ////////////////////////////////////////////////////////////////// -->
                <div class="MapSearch-ItemPic">
                  <img src='../assets/images/mapsearch/02.jpg' alt="攤商照片"/>
                </div>
                <div class="MapSearch-ItemInfo">
                  <h4>廣東粥</h4>
                  
                  <div class="MapSearch-Score">
                   ★★★★☆
                    <div class="clearfix"></div>
                  </div>
                  <div class="MapSearch-ScoreWord">
                    評價：4
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodTag">
                    餐點：主食類
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodWork">
                    營業中
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodPlace">
                    現在位置：<span>桃園市 中壢區 中央路</span> 
                  </div>
                </div>
                
                <div class="clearfix"></div>
                
                <!-- ////////////////////////////////////////////////////////////////// -->
                  <input type="submit" id="friedrice2" name="ShopResult-submit" class="ShopResult-submit">
                  <input type="hidden" name="ShopResult-submitshopid" value="Tree">
                  </form>
                  </label>
              <!-- ////////////////////////////////////////////////////////////////// -->
              </div>

              <div class="MapSearch-Item">
                <!-- ////////////////////////////////////////////////////////////////// -->
                  <label for="friedrice3">
                  <form class="ShopResult-Shoplist" name="ShopResult-Shoplist" method="get" action="ShopResultItemSession.php">
              <!-- ////////////////////////////////////////////////////////////////// -->
                <div class="MapSearch-ItemPic">
                  <img src='../assets/images/mapsearch/03.jpg' alt="攤商照片"/>
                </div>
                <div class="MapSearch-ItemInfo">
                  <h4>臻功夫</h4>
                  
                  <div class="MapSearch-Score">
                   ★★★★☆
                    <div class="clearfix"></div>
                  </div>
                  <div class="MapSearch-ScoreWord">
                    評價：4
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodTag">
                    餐點：主食類
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodWork">
                    營業中
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodPlace">
                    現在位置：<span>桃園市 中壢區 中央路</span> 
                  </div>
                </div>
                <div class="clearfix"></div>
                <!-- ////////////////////////////////////////////////////////////////// -->
                  <input type="submit" id="friedrice3" name="ShopResult-submit" class="ShopResult-submit">
                  <input type="hidden" name="ShopResult-submitshopid" value="Wolf">
                  </form>
                  </label>
              <!-- ////////////////////////////////////////////////////////////////// -->
              </div>

              <div class="MapSearch-Item">
                <!-- ////////////////////////////////////////////////////////////////// -->
                  <label for="friedrice4">
                  <form class="ShopResult-Shoplist" name="ShopResult-Shoplist" method="get" action="ShopResultItemSession.php">
              <!-- ////////////////////////////////////////////////////////////////// -->
                <div class="MapSearch-ItemPic">
                  <img src='../assets/images/mapsearch/04.jpg' alt="攤商照片"/>
                </div>
                <div class="MapSearch-ItemInfo">
                  <h4>霸王鹹酥雞</h4>
                  
                  <div class="MapSearch-Score">
                   ★★★★☆
                    <div class="clearfix"></div>
                  </div>
                  <div class="MapSearch-ScoreWord">
                    評價：4
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodTag">
                    餐點：主食類/炸物
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodWork">
                    營業中
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodPlace">
                    現在位置：<span>桃園市 中壢區 中央路</span> 
                  </div>
                </div>
                <div class="clearfix"></div>
                <!-- ////////////////////////////////////////////////////////////////// -->
                  <input type="submit" id="friedrice4" name="ShopResult-submit" class="ShopResult-submit">
                  <input type="hidden" name="ShopResult-submitshopid" value="Soy">
                  </form>
                  </label>
              <!-- ////////////////////////////////////////////////////////////////// -->
              </div>

              <div class="MapSearch-Item">
                <!-- ////////////////////////////////////////////////////////////////// -->
                  <label for="friedrice5">
                  <form class="ShopResult-Shoplist" name="ShopResult-Shoplist" method="get" action="ShopResultItemSession.php">
              <!-- ////////////////////////////////////////////////////////////////// -->
                <div class="MapSearch-ItemPic">
                  <img src='../assets/images/mapsearch/01.jpg' alt="攤商照片"/>
                </div>
                <div class="MapSearch-ItemInfo">
                  <h4>車輪餅</h4>
                  
                  <div class="MapSearch-Score">
                    ★★★★☆
                    <div class="clearfix"></div>
                  </div>
                  <div class="MapSearch-ScoreWord">
                    評價：4
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodTag">
                    餐點：甜點飲料
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodWork">
                    營業中
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodPlace">
                    現在位置：<span>桃園市 中壢區 中央路</span> 
                  </div>
                </div>
                <div class="clearfix"></div>
                <!-- ////////////////////////////////////////////////////////////////// -->
                  <input type="submit" id="friedrice5" name="ShopResult-submit" class="ShopResult-submit">
                  <input type="hidden" name="ShopResult-submitshopid" value="ToFu">
                  </form>
                  </label>
              <!-- ////////////////////////////////////////////////////////////////// -->
              </div>

              <div class="MapSearch-Item">
                <!-- ////////////////////////////////////////////////////////////////// -->
                  <label for="friedrice6">
                  <form class="ShopResult-Shoplist" name="ShopResult-Shoplist" method="get" action="ShopResultItemSession.php">
              <!-- ////////////////////////////////////////////////////////////////// -->
                <div class="MapSearch-ItemPic">
                  <img src='../assets/images/mapsearch/02.jpg' alt="攤商照片"/>
                </div>
                <div class="MapSearch-ItemInfo">
                  <h4>廣東粥</h4>
                  
                  <div class="MapSearch-Score">
                   ★★★★☆
                    <div class="clearfix"></div>
                  </div>
                  <div class="MapSearch-ScoreWord">
                    評價：4
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodTag">
                    餐點：主食類
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodWork">
                    營業中
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodPlace">
                    現在位置：<span>桃園市 中壢區 中央路</span> 
                  </div>
                </div>
                <div class="clearfix"></div>
                <!-- ////////////////////////////////////////////////////////////////// -->
                  <input type="submit" id="friedrice6" name="ShopResult-submit" class="ShopResult-submit">
                  <input type="hidden" name="ShopResult-submitshopid" value="Wine">
                  </form>
                  </label>
              <!-- ////////////////////////////////////////////////////////////////// -->
              </div>

            </div>
                  
          </div>
        </div>  
      </div>


</body>
</html>
  <!-- mapApiJS -->
   <script src="../assets/js/MapSearch.js"></script> 
   <script src="../assets/js/classie.js"></script>
   <script src="../assets/js/main3.js"></script>
   <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyDbCq6LI22MT-sNtnBj9GKNv7yH7Awypl0&callback=getGeolocation"></script>
   <script src="../assets/js/snap.svg-min.js"></script>

<?php 
  include '../views/footer.php';
?>