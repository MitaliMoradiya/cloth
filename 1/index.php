
<?php 
require('top.php');


$resBanner=mysqli_query($con,"select * from banner where status='1' order by order_no asc");

?>
<style>

*{
    scroll-behavior: smooth;
}
</style>

<div class="body__overlay"></div>
<main style="background-image:  url('http://localhost/1/1//images/bg/sustainabilityedit.jpg'); background-size: cover; background-position: center; padding: 50px; color: white;">
<section >
    <h3>THREADED RENEWAL</h3>
    <h1>TRANSFORM YOUR WARDROBE <span class="change_content" style="margin-top: -10px;"> | </span> </h1>
    <p>"From old to bold"</p>
    <a href="#aboutus" class="btnone" style="color: white; padding: 10px 20px; background-color: #333; border-radius: 5px; text-decoration: none;scroll-behavior: smooth;" >About US </a>
    <a href="login.php" class="btntwo" style="color: white; padding: 10px 20px; background-color: #555; border-radius: 5px; text-decoration: none;">signup here</a>
</section>

	</main>
  
        <!-- Start Slider Area -->
        <div class="slider__container slider--one bg__cat--3">
            <div class="slide__container slider__activation__wrap owl-carousel">
                
            <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>Just Arrived</h2>
                                        <?php
                                        $get_product=get_product($con,1);
                                        foreach($get_product as $list){
                                        }?>
                                            <!-- <h1><a href="product.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a></h1> -->
                                            <div class="cr__btn">
                                            <a href="product.php?id=<?php echo $list['id']?>">Shop Now</a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $get_product=get_product($con,2);
                foreach($get_product as $list){
                }?>
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>New Product</h2>
                                        <!-- <h1><h1><a href="product.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a></h1></h1> -->
                                        <div class="cr__btn">
                                        <a href="product.php?id=<?php echo $list['id']?>">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
            </div>
        </div>
        <!-- Start Slider Area -->
		
        <!-- Start Category Area -->
        <section class="htc__category__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                        <h2 class="title__line" style="margin-right: 420px;">New Arrivals</h2>

                        </div>
                    </div>
                </div>
                <div class="htc__product__container">
                    <div class="row">
                        <div class="product__list clearfix mt--30">
							<?php
							$get_product=get_product($con,4);
							foreach($get_product as $list){
							?>
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="product.php?id=<?php echo $list['id']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images" style="object-fit:cover; height:240px; width:250px;">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
										<ul class="product__action">
											<li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')"><i class="icon-heart icons"></i></a></li>
											<li><a href="product.php?id=<?php echo $list['id']?>" ><i class="icon-handbag icons"></i></a></li>
										</ul>
									</div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize"><?php echo $list['mrp']?></li>
                                            <li><?php echo $list['price']?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Category -->
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Category Area -->
        <!-- Start Product Area -->
        <section class="ftr__product__area ptb--20" id="aboutus">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                        <h2 class="title__line" style="margin-right: 430px;">Best Seller</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product__list clearfix mt--30">
							<?php
							$get_product=get_product($con,4,'','','','','yes');
							foreach($get_product as $list){
							?>
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="product.php?id=<?php echo $list['id']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images" style="object-fit:cover; height:240px; width:250px;">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
										<ul class="product__action">
											<li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')"><i class="icon-heart icons"></i></a></li>
											<li><a href="product.php?id=<?php echo $list['id']?>" ><i class="icon-handbag icons"></i></a></li>
										</ul>
									</div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize"><?php echo $list['mrp']?></li>
                                            <li><?php echo $list['price']?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Category -->
							<?php } ?>
                        </div>
                </div>
            </div>
            <br>
            <br>
            <section class="ftr__product__area ptb--20">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                        <h2 class="title__line" style="margin-right: 430px;">About Us</h2>
                        </div>
                    </div>
                </div>
            <!-- <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" /> -->
            <section class="about ">
        <div class="container">
            
            <div class="about__content">
                <div class="about__text">
                    <h2>Who We Are</h2>
                    <p>At Thread Renewal, we are passionate about sustainability and innovation in fashion. Our goal is to reduce textile waste by upcycling clothing, giving it a second chance to shine.</p>
                </div>

                <div class="about__text">
                    <h2>Our Mission</h2>
                    <p>We believe in a world where fashion is responsible. Our mission is to inspire individuals to embrace sustainable choices and support eco-friendly practices in the industry.</p>
                </div>

                <div class="about__text">
                    <h2>Our Journey</h2>
                    <p>Founded in 2024, Thread Renewal started as a small initiative. Today, we are proud to be a community of like-minded individuals working towards a greener future.</p>
                </div>
            </div>

            <div class="about__image">
                <img src="images/bg/sustainabilityedit.jpg" alt="Thread Renewal" class="about__img">
            </div>
        </div>
    </section>

        <!-- End Product Area -->
		<input type="hidden" id="qty" value="1"/>
        <script>
		const containerEl = document.getElementById('hero-rotating-text');
const itTextEl = document.getElementById('hero-it-text');
const textEls =
  Array.from(containerEl.querySelectorAll('[data-hero-rotating-text]'));

const interval = 2000;

let activeElement = 0;

function rotateText() {
  setTimeout(rotateText, interval);

  const oldTextEl = textEls[activeElement];

  activeElement += 1;
  if (activeElement === textEls.length) {
    activeElement = 0;
  }

  const newTextEl = textEls[activeElement];

  const oldTextBeforeBoundingRect = oldTextEl.getBoundingClientRect();
  const itTextBeforeBoundingRect = itTextEl.getBoundingClientRect();
  oldTextEl.classList.add('is-inactive');
  newTextEl.classList.remove('is-inactive');
  newTextEl.classList.remove('is-hidden');
  const oldTextAfterBoundingRect = oldTextEl.getBoundingClientRect();
  const itTextAfterBoundingRect = itTextEl.getBoundingClientRect();

  const oldTextLeftPosition =
    oldTextBeforeBoundingRect.left - oldTextAfterBoundingRect.left;
  const oldTextTopPosition =
    oldTextBeforeBoundingRect.top - oldTextAfterBoundingRect.top;
  const itTextLeftPosition =
    itTextBeforeBoundingRect.left - itTextAfterBoundingRect.left;

  const oldTextAnimationPlayer = oldTextEl.animate([{
    opacity: 1,
    transform: `translateX(${oldTextLeftPosition}px)
      translateY(${oldTextTopPosition}px)`,
  }, {
    opacity: 0,
    transform: `translateX(${oldTextLeftPosition}px) translateY(0)`,
  }], {
    duration: 300,
    fill: 'forwards',
    easing: 'ease-in-out',
  });
  oldTextAnimationPlayer.onfinish = () => {
    oldTextEl.classList.add('is-hidden');
  };

  newTextEl.animate([{
    opacity: 0,
    transform: 'translateY(100%)',
  }, {
    opacity: 1,
    transform: 'translateY(0)',
  }], {
    duration: 300,
    fill: 'both',
    easing: 'ease-in-out',
  });

  itTextEl.animate([{
    transform: `translateX(${itTextLeftPosition}px)`,
  }, {
    transform: 'translateX(0)',
  }], {
    duration: 300,
    fill: 'both',
    easing: 'ease-in-out',
  });
}

rotateText();
</script>
<?php require('footer.php')?>        