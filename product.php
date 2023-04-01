<!DOCTYPE html>
<html>
    
    <title>Grocery Website</title>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>User Dashboard</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="Picture 2.png" >
        <script src="https://kit.fontawesome.com/49b933679a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


    </head>
    <body>
      <h1> <img src="Picture 2.png" alt="Website logo" style="width:3cm;height:3cm;float:inline-start;top:30px;position:relative;" >Grocery Website </h1>
    
    <!-- <div id="icon">
        <div id="svg">

            <a href="profile.html" class="fa-solid fa-user"></a>
        </div>
    </div> -->

    <div id="broder">
        <img src="Picture 2.png" alt="Website logo" style="width:3cm;height:3cm;float:left" >
        <div class="btn-group">
          <nav>
          <a href=index.php class="button1">HOME</button>  
          <a href=product.php  class="button1">Products</a>
          <a href=contact.php  class="button1">Contact Us</a>
          <div class="container3">
            <a href="logout.php" class="btn btn-warning">Logout</a>
          </div>
          </nav>
          
        </div>
    </div>
        <h4>Products</h4>
        <div class="btn-group">
              <div class="inblock">
              <button class="button1">Oil</button>
              <div class="gap">
                 <form action>
                   <input type="checkbox" id="oil1" name="oil1" value="oil">
                   <label for="vehicle1"> <b>Soya oil</b><img src="https://rukminim2.flixcart.com/image/416/416/ka1e6q80/edible-oil/e/r/w/1-soya-oil-plus-pouch-soyabean-oil-fortune-original-imafrpcjvyfxdtjx.jpeg?q=70" style="width: 50px;height: 50px;"></label><br>
                   <input type="checkbox" id="oil2" name="oil2" value="oil">
                   <label for="vehicle2"> <b>Mustard oil</b><img src="https://m.media-amazon.com/images/I/51nHGKRlrWS._SL1200_.jpg" style="width: 50px;height: 50px;"></label><br>
                   <input type="checkbox" id="oil3" name="oil3" value="oil">
                   <label for="vehicle3"> <b>olive oil</b><img src="https://newassets.apollo247.com/pub/media/catalog/product/i/m/img_20210108_173933__front__olive_oil_250ml_4_.jpg" style="width: 50px;height: 50px;"></label><br><br>
                   <input type="submit" value="Submit">
                 </form>
              </div>
              <button class="button1">Biscuits</button>
              <div class="gap">
                <form action>
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                  <label for="vehicle1"> <b>Bhitannia</b><img src="https://www.bigbasket.com/media/uploads/p/l/40001672_9-britannia-marie-gold-biscuits-light-crisp-tea-time-snack-no-trans-fat.jpg" style="width: 50px;height: 50px;"></label><br>
                  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                  <label for="vehicle2"> <b>GoodDay</b><img src="https://5.imimg.com/data5/BN/OL/GLADMIN-39053171/good-day-biscuit-250x250.png" style="width: 50px;height: 50px;"></label><br>
                  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                  <label for="vehicle3"> <b>Oreo</b><img src="https://m.media-amazon.com/images/I/71yCDAz1RIL._SL1500_.jpg" style="width: 50px;height: 50px;"></label><br><br>
                  <input type="submit" value="Submit">
                </form>
             </div>
              <button class="button1">chocolate</button>
              <div class="gap">
                <form action>
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                  <label for="vehicle1"> <b>DairyMilk</b><img src="https://m.media-amazon.com/images/I/61pj9OP0IQL._SX522_.jpg" style="width: 50px;height: 50px;"></label><br>
                  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                  <label for="vehicle2"> <b>Chocobar</b><img src="https://www.havmor.com/sites/default/files/styles/502x375/public/gallery/Almond%20Chocobar%20%20with%20cover.webp?itok=M2_npUOD" style="width: 50px;height: 50px;"></label><br>
                  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                  <label for="vehicle3"> <b>Kinderjoy</b><img src="https://newassets.apollo247.com/pub/media/catalog/product/k/i/kin0016.jpg" style="width: 50px;height: 50px;"></label><br><br>
                  <input type="submit" value="Submit">
                </form>
             </div>
              <button class="button1">Chips</button>
              <div class="gap">
                <form action>
                  <input type="checkbox" id="chips1" name="chips1" value="chips">
                  <label for="chips1"> <b>Lays</b><img src="https://www.jiomart.com/images/product/original/490003818/lay-s-american-style-cream-onion-potato-chips-52-g-product-images-o490003818-p490003818-0-202203170717.jpg" style="width: 50px;height: 50px;"></label><br>
                  <input type="checkbox" id="chips2" name="chips2" value="chips">
                  <label for="chips2"> <b>Kurkura</b><img src="https://m.media-amazon.com/images/I/71ggrz8FVgL._SY445_PIbundle-3,TopRight,0,0_SX327SY445SH20_.jpg" style="width: 50px;height: 50px;"></label><br>
                  <input type="checkbox" id="chips3" name="chips3" value="chips">
                  <label for="chips3"> <b>Unclechips</b><img src="https://www.bigbasket.com/media/uploads/p/l/40015992-2_6-uncle-chips-uncle-chips-potato-chips-spicy-treat-flavour.jpg" style="width: 50px;height: 50px;"></label><br><br>
                  <input type="submit" value="Submit">
                </form>
             </div>
              <button class="button1">Health drinks</button>
              <div class="gap">
                <form action>
                  <input type="checkbox" id="Drinks1" name="Drinks1" value="Drinks">
                  <label for="Drinks1"> <b>Horlicks</b><img src="https://www.jiomart.com/images/product/original/491276476/horlicks-classic-malt-750-g-product-images-o491276476-p491276476-0-202203150158.jpg" style="width: 50px;height: 50px;"></label><br>
                  <input type="checkbox" id="Drinks2" name="Drinks2" value="Drinks">
                  <label for="Drinks2"> <b>Complan</b><img src="https://m.media-amazon.com/images/I/71X1L6mSLgL._SY450_.jpg" style="width: 50px;height: 50px;"></label><br>
                  <input type="checkbox" id="Drinks3" name="Drinks3" value="Drinks">
                  <label for="Drinks3"> <b>Bornbita</b><img src="https://m.media-amazon.com/images/I/61P+mSAonyL._SY450_.jpg" style="width: 50px;height: 50px;"></label><br><br>
                  <input type="submit" value="Submit">
                </form>
             </div>
              <button class="button1">Washings</button>
              <div class="gap">
                <form action>
                  <input type="checkbox" id="Washings1" name="Washings1" value="washings">
                  <label for="Washings1"> <b>Ditargent</b><img src="https://m.media-amazon.com/images/I/81YakxRZLzL._SY450_.jpg" style="width: 50px;height: 50px;"></label><br>
                  <input type="checkbox" id="Washings2" name="Washings2" value="washings">
                  <label for="Washings2"> <b>Harpic</b><img src="https://m.media-amazon.com/images/I/51KMareLaSL._SL1000_.jpg" style="width: 50px;height: 50px;"></label><br>
                  <input type="checkbox" id="Washings3" name="Washings3" value="washings">
                  <label for="Washings3"> <b>Detol</b><img src="https://m.media-amazon.com/images/I/61UkJcCpFtL._SL1000_.jpg" style="width: 50px;height: 50px;"></label><br><br>
                  <input type="submit" value="Submit">
                </form>
             </div>
              <button class="button1">Spices</button>
              <div class="gap">
                <form action>
                  <input type="checkbox" id="spices1" name="spices1" value="spices">
                  <label for="spices1"> <b>Cardamom</b><img src="https://www.bigbasket.com/media/uploads/p/xxl/40000210_11-bb-royal-cardamomelaichi-green.jpg" style="width: 50px;height: 50px;"></label><br>
                  <input type="checkbox" id="spices2" name="spices2" value="spices">
                  <label for="spices2"> <b>Pepper</b><img src="https://www.spicejungle.com/wp/files/2016/10/where-does-black-pepper-come-from.jpg" style="width: 50px;height: 50px;"></label><br>
                  <input type="checkbox" id="spices3" name="spices3" value="spices">
                  <label for="spices3"> <b>Almonds</b><img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/full-frame-shot-of-raw-almonds-royalty-free-image-683814187-1537885519.jpg?crop=0.66635xw:1xh;center,top&resize=480:*" style="width: 50px;height: 50px;"></label><br><br>
                  <input type="submit" value="Submit">
                </form>
             </div>
            </div>
        </div>
    </body>
    
</html>