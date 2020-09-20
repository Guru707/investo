<?php 
   include 'header.php';
?>

   <section class="hero_element">
      
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="hero_content-box">
                  <h1 class="text-white">Where you connect with Profit </h1>
                  <h4 class="text-white">Traders in over 160 different continents have made
                     Get Daily Live Forex Signals, Currency trading & much more, with Investo Uni Trade
                     <span class="d-block pt-3">Trade & Earn the profits you desire!</span></h4>
                  <div class="hero-btn-group">
                     <a href="" class="btn btn-hero bg-white rounded-pill">Open Live Account</a>
                     <a href="" class="btn btn-hero-transparent rounded-pill">Open Demo Account</a>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="hero_form">
                  <h4 class="text-primary">Start Trading Now</h4>
                  <form action="">
                     <div class="form-group">
                        <div class="form-box">
                           <span class="icon-form"><i class="fas fa-user"></i></span><input type="text" placeholder="Name">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="form-box">
                           <span class="icon-form"><i class="fas fa-phone-alt"></i></span><input type="text" placeholder="Number">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="form-box">
                           <span class="icon-form"><i class="fas fa-envelope"></i></span><input type="text" placeholder="Email">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="form-box">
                        <span class="icon-form"><i class="fas fa-map-marker-alt"></i></span>
                           <select name="" id="">
                              <option value="1">Delhi</option>
                              <option value="1">Chandigarh</option>
                              <option value="1">Noida</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="form-box">
                           <textarea name="" id="" placeholder="Message"></textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="btn-submit rounded-pill">Submit</button>
                     </div>

                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "Nasdaq 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "BTC/USD"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "ETH/USD"
    }
  ],
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
   <section class="bg-blue pt-5 pb-5">
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="box-wrap">
                  <div class="icon-wrap btn-shadow"> <i class="fas fa-rupee-sign"></i>
                  </div>
                  <h4 class="text-white">Extra 100% to each deposit</h4>
                  <p class="text-white">Trade bigger volumes & increase
                     your profit by double</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box-wrap">
                  <div class="icon-wrap"><i class="fas fa-dollar-sign"></i>
                  </div>
                  <h4 class="text-white">$100 minimum deposit</h4>
                  <p class="text-white">No fees when you make a
                     deposit or withdraw funds</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box-wrap">
                  <div class="icon-wrap"><i class="fas fa-gift"></i>
                  </div>
                  <h4 class="text-white">Exclusive Gifts for Every Trader!</h4>
                  <p class="text-white">Test your investing strategy
                     with a demo accoun</p>
               </div>

            </div>
         </div>
      </div>
   </section>
   <section class="spin-box equal-p">
      <div class="container">
         <div class="row">
            <div class="col-md-5 col-lg-6">
               <div class="spin-content">
                  <h2 class="text-white">Fortune Wheel for FX Traders
                    </h2>
                  <h4>Guaranteed Gifts For All</h4>
                  <h5 class="text-white pt-2">How to play:</h5>
                  <ol class="text-white pl-3">
                  <li>1. Time to get lucky</li>
                  <li>2. Where ever the arrow stops is your price</li>
                  <li>3. Enter your details</li>
                  <li>4. Speak to our executive to claim your Prize.</li>
                  </ol>
                  <button class="btn btn-spin d-none d-md-block" id="spin_button" onClick="startSpin();">Spin Now</button>
               </div>
            </div>
            <div class="col-md-7 col-lg-6">
               <div class="spin-wheel">
                  
                  <canvas id='canvas' data-responsiveMinWidth="180" data-responsiveScaleHeight="true">
                     
                  </canvas>
                  <button class="btn btn-spin d-block d-md-none" id="spin_button" onClick="startSpin();">Spin Now</button>
               </div>
              
            </div>
         </div>
      </div>
   </section>
   <section class="bg-blue equal-p">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-lg-8">
               <div class="video-block">
                  <p class="text-white">Meet our Happy Customers who Invest in 
                     <span class="d-block">Forex & get daily forex trading tips.</span></p>
                  <div class="trade-box">   
                     <p class="text-white">Profitable tips & Personal assistance for all traders!</p>                  
                     <div class="text-white"><span>Join_________________________</span>
                        <h3 class="font-700 mb-0">Investo Trade</h3>
                        <span>______________& Get Profits</span>
                     </div>
                     <a data-fancybox class="play-btn popup-youtube  fancybox video__item video__item--1" href="https://www.youtube.com/watch?v=V__iRctKadU" ><i class="fas fa-play"></i></a>    
                                      
                  </div>
                  <div class="trade-box-one">                     
                     <div class="text-white">
                        <h3 class="font-700 mb-0">Get the Profits
                           <span class="d-block">you deserve!</span></h3>     
                           <p class="font-300 text-white pt-2">Don’t just Work Hard
                              <span class="d-block">Work Smart</span></p>                   
                     </div>
                     <a data-fancybox class="play-btn popup-youtube  fancybox video__item video__item--1" href="https://www.youtube.com/watch?v=V__iRctKadU" ><i class="fas fa-play"></i></a>                         
                  </div>
               </div>
               <div>
               </div>
            </div>
            <div class="col-md-12 col-lg-4">
               <div class="testimonial-block">
                  <h3 class="text-white">Our Happy Customers</h3>
                  <ul class="testimonial-box" id="slider-items">
                     <li class="slide-list ">
                        <figure><img src="images/testi.png" alt=""></figure>
                        <h5>Shilpi Aggarwal</h5>
                        <div class="testimonial-content"><span><img src="images/quots.png" alt=""></span>
                           <p> I was new to trading with bare minimum knowledge. Investo Trade has helped me become an experienced trader!
                           </p><span><img src="images/quots-down.png"
                                 alt=""></span>
                        </div>
                     </li>
                     <li class="slide-list ">
                        <figure><img src="images/testi.png" alt=""></figure>
                        <h5>Shilpi Aggarwal</h5>
                        <div class="testimonial-content"><span><img src="images/quots.png" alt=""></span>
                           <p> The platform is so easy to use and works from any device of choice and such amazing customer service as well.</p><span><img src="images/quots-down.png"
                                 alt=""></span>
                        </div>
                     </li>
                     <li class="slide-list ">
                        <figure><img src="images/testi.png" alt=""></figure>
                        <h5>Shilpi Aggarwal</h5>
                        <div class="testimonial-content"><span><img src="images/quots.png" alt=""></span>
                           <p> Investo provided me with a super easy deposit and withdrawal process with my money credited into my account in 24hrs which made trading easy for me. </p><span><img src="images/quots-down.png"
                                 alt=""></span>
                        </div>
                     </li>
                     <li class="slide-list ">
                        <figure><img src="images/testi.png" alt=""></figure>
                        <h5>Shilpi Aggarwal</h5>
                        <div class="testimonial-content"><span><img src="images/quots.png" alt=""></span>
                           <p> Their trading platform is super easy to use and very intuitive with all the market indicators which I need for my trade. </p><span><img src="images/quots-down.png"
                                 alt=""></span>
                        </div>
                     </li>
                     <li class="slide-list ">
                        <figure><img src="images/testi.png" alt=""></figure>
                        <h5>Shilpi Aggarwal</h5>
                        <div class="testimonial-content"><span><img src="images/quots.png" alt=""></span>
                           <p> Their daily tips provided by them helped me increase my profits tenfold.
                           </p><span><img src="images/quots-down.png"
                                 alt=""></span>
                        </div>
                     </li>
                     <li class="slide-list ">
                        <figure><img src="images/testi.png" alt=""></figure>
                        <h5>Shilpi Aggarwal</h5>
                        <div class="testimonial-content"><span><img src="images/quots.png" alt=""></span>
                           <p>  Investo has given me a great platform to earn. I invested $100 and earned $600 +.
                           </p><span><img src="images/quots-down.png"
                                 alt=""></span>
                        </div>
                     </li>

                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="bg-light-blue equal-p">
      <div class="container">
         <h2 class="text-white font-800 text-center pb-5">Benefits of Investo Uni Trade </h2>
         <div class="row">
            <div class="col-md-4">
               <div class="box-wrap-element ">
                  <figure class="box-figure"><img src="images/money.jpg" class="img-responsive" alt="money"></figure>
                  <div class="box-wrap-block">
                     <div class="box-wrap-icon"><img src="images/icon-1.png" alt="icon"></div>
                     <h4 class="box-wrap-heading mb-0">Extra 100%</h4>
                     <p>Get an extra 100% on each deposit made to your trading account.</p>
                     <a href="#"> Open Account <i class="fas fa-caret-right"></i></a>
                  </div>
               </div>             
            </div>
            <div class="col-md-4">             
               <div class="box-wrap-element">
                  <figure class="box-figure"><img src="images/money.jpg" class="img-responsive" alt="money"></figure>
                  <div class="box-wrap-block">
                     <div class="box-wrap-icon"><img src="images/icon-1.png" alt="icon"></div>
                     <h4 class="box-wrap-heading mb-0">Minimum Trade Account</h4>
                     <p>Minimum Deposit of $100. Start your Trade Journey with minimum investments.</p>
                     <a href="#"> Open Account <i class="fas fa-caret-right"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box-wrap-element">
                  <figure class="box-figure"><img src="images/money.jpg" class="img-responsive" alt="money"></figure>
                  <div class="box-wrap-block">
                     <div class="box-wrap-icon"><img src="images/icon-1.png" alt="icon"></div>
                     <h4 class="box-wrap-heading mb-0">Free Forex Training </h4>
                     <p>Get an extra 100% on each deposit made to your trading account. 
                     </p>
                     <a href="#"> Open Account <i class="fas fa-caret-right"></i></a>
                  </div>
               </div>
            </div>

            <div class="col-md-4">              
               <div class="box-wrap-element">
                  <figure class="box-figure"><img src="images/money.jpg" class="img-responsive" alt="money"></figure>
                  <div class="box-wrap-block">
                     <div class="box-wrap-icon"><img src="images/icon-1.png" alt="icon"></div>
                     <h4 class="box-wrap-heading mb-0">Dedicated Account Manager</h4>
                     <p>Minimum Deposit of $100. Start your Trade Journey with minimum investments.
                     </p>
                     <a href="#"> Open Account <i class="fas fa-caret-right"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box-wrap-element">
                  <figure class="box-figure"><img src="images/money.jpg" class="img-responsive" alt="money"></figure>
                  <div class="box-wrap-block">
                     <div class="box-wrap-icon"><img src="images/icon-1.png" alt="icon"></div>
                     <h4 class="box-wrap-heading mb-0">Free Forex Training</h4>
                     <p>Get online forex training from experts. Learn to trade with ease from the comfort of your home</p>
                     <a href="#"> Open Account <i class="fas fa-caret-right"></i></a>
                  </div>
               </div>
            </div>           
           
            <div class="col-md-4">              
               <div class="box-wrap-element">
                  <figure class="box-figure"><img src="images/money.jpg" class="img-responsive" alt="money"></figure>
                  <div class="box-wrap-block">
                     <div class="box-wrap-icon"><img src="images/icon-1.png" alt="icon"></div>
                     <h4 class="box-wrap-heading mb-0">Exclusive Gifts</h4>
                     <p>Every trader gets an exclusive gift with a minimum deposit of $100.
                     </p>
                     <a href="#"> Open Account <i class="fas fa-caret-right"></i></a>
                  </div>
               </div>
            </div>

            </div>
      </div>
   </section>
   <section class=" bg-blue">
      <div class="trad-element bg-white">
         <div class="trad-block">
            <div class="container">
               <div class="row ">
                  <div class="col-md-12 col-lg-6">
                     <figure>
                        <img src="images/banner-investo.png" class="img-responsive" />
                     </figure>
                  </div>
                  <div class=" col-md-12 col-lg-6">
                     <div class=" cashback-box bg-blue">
                        <h3 class="text-white">InvestmentCaptain <span class="d-block">Cashback</span></h3>
                        <div class="row">
                           <div class="col-md-6">
                              <p>Get Bonus point for the most routine operations</p>
                           </div>
                           <div class="col-md-6">
                              <div class="client-paid">
                                 <h4 class="text-white">11,918,628 USD</h4>
                                 <h5 class="text-uppercase text-white">Paid To Clients</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class=" cashback-box bg-blue">
                        <h3 class="text-white">InvestmentCaptain <span class="d-block">Cashback</span></h3>
                        <div class="row">
                           <div class="col-md-6">
                              <p>Get Bonus point for the most routine operations</p>
                           </div>
                           <div class="col-md-6">
                              <div class="client-paid">
                                 <h4 class="text-white">11,918,628 USD</h4>
                                 <h5 class="text-uppercase text-white">Paid To Clients</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
         <div class="hero_form">
            <h4 class="text-primary text-center pop-heading">Congratulation You have Won Prize</h4>
            <form action="">
               <div class="form-group">
                  <div class="form-box">
                     <span class="icon-form"><i class="fas fa-user"></i></span><input type="text" placeholder="Name">
                  </div>
               </div>
               <div class="form-group">
                  <div class="form-box">
                     <span class="icon-form"><i class="fas fa-phone-alt"></i></span><input type="text" placeholder="Number">
                  </div>
               </div>
               <div class="form-group">
                  <div class="form-box">
                     <span class="icon-form"><i class="fas fa-envelope"></i></span><input type="text" placeholder="Email">
                  </div>
               </div>
               <div class="form-group">
                  <div class="form-box">
                  <span class="icon-form"><i class="fas fa-map-marker-alt"></i></span>
                     <select name="" id="">
                        <option value="1">Delhi</option>
                        <option value="1">Chandigarh</option>
                        <option value="1">Noida</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <div class="form-box">
                     <textarea name="" id="" placeholder="Message"></textarea>
                  </div>
               </div>
               <div class="form-group">
                  <button type="submit" class="btn-submit rounded-pill">Submit</button>
               </div>

            </form>
         </div>
      </div>
    </div>
  </div
<?php 
   include'footer.php'
?>