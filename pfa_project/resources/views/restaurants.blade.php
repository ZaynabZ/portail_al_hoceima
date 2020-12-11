@extends('layout')

    @section('content')
    
    <div class="hero-wrap js-fullheight" style="background-image: url('app-assets/images/food_cover.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>Restaurant</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Restaurants</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section ftco-degree-bg">

          <div class="col-lg-9" style="margin: auto;" >
          	<div class="row">
          		<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="https://web.facebook.com/Wok.inAlHoceima" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(app-assets/images/workin.jpg);" title="Rue Allal Ben Abdellah, Al Hoceima 32000, Morocco.Service de restauration ouvert tard en soirée.'Restaurant du wok dans le centre de Al Hoceima avec une grand gamme de plats frais! ---- Wokrestaurant in the city centre of Al Hoceima, offering a great variety of fresh dishes! ---- Wokrestaurant in het centrum van Al Hoceima met een groot aanbod aan verse en gevarieerde gerechten!'">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex" >
		    							<div class="one">
				    						<h3><a href="https://web.facebook.com/Wok.inAlHoceima" >Wok.In Al Hoceima</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-half"></i>
				    							<span>(45). Chinoise</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price per-price"><br><small></small></span>
		    							</div>
		    						</div>
									<p>Rue Allal ben Abdellah 14, Al Hoceïma 32000<br/>Argent liquide seulement</p>
									<button onclick="myfonction(1)">more</button>
									<p id="photo1" style="display: none;">Rue Allal Ben Abdellah, Al Hoceima 32000, March
                                    A suitable place for families, friends and children too.
                                     A spacious restaurant with very welcoming hosts. Their elegant interior really stands out and gives the restaurant a warm atmosphere.<br/> Besides that, their fresh produce is also affordable and delicious. Highly recommended!</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Al Hoceïma</span> 
		    							<span class="ml-auto"><a href="https://web.facebook.com/Wok.inAlHoceima">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="http://lunamarexpress.com/" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(app-assets/images/lunamar.jpg);" title="30 Rue Moulay Idriss al Akbar, Al Hoceïma 32000,tel:05399-85400">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="http://lunamarexpress.com/">Lunamar Express</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>(145) . $ . Restaurant</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price per-price"><br><small></small></span>
		    							</div>
		    						</div>
									<p>30 Rue Moulay Idriss al Akbar, Al Hoceïma 32000</p>
									<button onclick="myfonction(2)">more</button>
									<p id="photo2" style="display: none;">Al Hoceima is among the historic cities in Morocco, but if you ask an expert to suggest a good restaurant in AlHoceima - one of the first named will be "LUNAMAR EXPRESS". And it is notably the fact that American and Italian cuisine is treated here no less than Moroccan.

In the "Lunamar Express" restaurant, ideally located in the center of the city, you can enjoy couscous and delicious traditional 100% Moroccan dishes.

The “LUNAMAR EXPRESS Fastfood” restaurant can accommodate 60 people because it has a good terrace on the third floor. The menu is always refreshed and rejoices with its new arrivals.

Love and respect for customers are the sources of strength that motivates staff. Each customer is respected and appreciated here. Smiles and good humor are emitted here.

Long experience allows servers to predict the wish of each customer.</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Al Hoceïma</span> 
		    							<span class="ml-auto"><a href="https://www.tripadvisor.fr/Restaurant_Review-g795889-d9980728-Reviews-Lunamar_Express-Al_Hoceima_Taza_Al_Hoceima_Taounate_Region.html">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="https://web.facebook.com/tacosalhoceima" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(app-assets/images/tacos.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="https://web.facebook.com/tacosalhoceima">Tacos Al Hoceima</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>(65). Restaurant</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price per-price"><br><small></small></span>
		    							</div>
		    						</div>
									<p>Ave Abdelkrim El Khattabi, El Hoceima<br/>Convient aux enfants · Convient aux groupes</p>
									<button onclick="myfonction(3)">more</button>
									<p id="photo3" style="display: none;">The industry in which Tacos Al Hoceima operates is Junk Store. The country where Tacos Al Hoceima is located is Morocco while the company's headquarters is in El Hoceima.

Unfortunately, we do not have detailed information about the company's offer and products, therefore we suggest you to contact by phone: +2125399-81979

You can visit the headquarters of Tacos Al Hoceima. If you want to reach it, go to the address: Avenue Abdelkrim El Khattabi, El Hoceima, المغرب.

Use the geographic coordinates of the company location: 35.244985, -3.930571, to easily reach the given address using GPS navigation.<br/>Opening hours
<br/>
Wednesday:
<br/>
12:30 - 00:00
<br/>
Thursday:
<br/>
12:30 - 00:00
<br/>
Sunday:
<br/>
12:30 - 00:00
<br/>
Saturday:
<br/>
12:30 - 00:00
<br/>
Friday:
<br/>
12:30 - 00:00
<br/>
Tuesday:
<br/>
12:30 - 00:00
<br/>
Monday:
<br/>
12:30 - 00:00<br/></p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Al Hoceïma</span> 
		    							<span class="ml-auto"><a href="https://fr.restaurantguru.com/Tacos-Al-Hoceima-El-Hoceima/menu">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="http://www.findglocal.com/MA/Al-Hoce%C3%AFma/495376943986393/Restaurant-REGAL" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(app-assets/images/regal1.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="https://web.facebook.com/restauregal">Restaurant Regal Al Hoceima</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>(280) .$$ . restaurant</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price per-price"><br><small></small></span>
		    							</div>
		    						</div>
									<p>Formule "à volonté" · Lieu chaleureux · Décontracté</p>
									<button onclick="myfonction(4)">more</button>
									<p id="photo4" style="display: none;">RUE ESSALAM
Al Hoceïma
32000
<br/>
The industry in which Restaurant Regal Al Hoceima operates is Delivery Service. The country where Restaurant Regal Al Hoceima is located is Morocco while the company's headquarters is in Al Hoceïma.

Unfortunately, we do not have detailed information about the company's offer and products, therefore we suggest you to contact by phone: +2125398-40633

You can visit the headquarters of Restaurant Regal Al Hoceima. If you want to reach it, go to the address: شارع السلام, Al Hoceïma, المغرب.

Use the geographic coordinates of the company location: 35.244450, -3.930890, to easily reach the given address using GPS navigation.


<br/>
Opening Hours
<br/>
Monday	11:30 - 01:00
<br/>
Tuesday	11:30 - 01:00
<br/>
Wednesday	11:30 - 01:00
<br/>
Thursday	11:30 - 01:00
<br/>
Friday	11:30 - 01:00
<br/>
Saturday	11:30 - 01:00
<br/>
Sunday	11:30 - 01:00
<br/>
+212 5398-40633
</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Al Hoceïma</span> 
		    							<span class="ml-auto"><a href="https://web.facebook.com/restauregal">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="https://web.facebook.com/Caf%C3%A9-restaurant-Ennakhil-482181098621541" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(app-assets/images/enakil.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="https://web.facebook.com/Caf%C3%A9-restaurant-Ennakhil-482181098621541">Restaurant Café Ennakhil</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>(131) .$ . Restaurant</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price per-price"><br><small></small></span>
		    							</div>
		    						</div>
									<p>79 Ave Abdelkrim El Khattabi, El Hoceima<br/>Argent liquide seulement </p>
									<button onclick="myfonction(5)">more</button>
									<p id="photo5" style="display: none;">79 Avenue Abdelkrim El Khatabi, Al Hoceima 32000 Maroc<br/>+212 5398-40740<br/>
                                                     FOURCHETTE DE PRIX
																			<br/>
																			19 MAD - 58 MAD
																			<br/>
																			CUISINES<br/>
																			Café, Pizza, Restauration rapide, Soupes<br/>
																			REPAS<br/>
																			Petit déjeuner, Déjeuner, Dîner, Boissons<br/>Opening Hours
																			<br/>
																			Mon: 7:00 am - 12:00 am <br/>
																			Tue: 07:00 - 00:00 <br/>
																			Wed: 7:00 am - 12:00 am <br/>
																			Thu: 07:00 - 00:00 <br/>
																			Fri: 7:00 am - 12:00 am <br/>
																			Sat: 07:00 - 00:00 <br/>
																			Sun: 07:00 - 00:00 <br/>

																			</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Al Hoceïma</span> 
		    							<span class="ml-auto"><a href="https://cafe-ennakhil.business.site/">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="https://www.tripadvisor.fr/Restaurant_Review-g795889-d10140180-Reviews-Mb_Food-Al_Hoceima_Taza_Al_Hoceima_Taounate_Region.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(app-assets/images/mbfood7.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="https://www.tripadvisor.fr/Restaurant_Review-g795889-d10140180-Reviews-Mb_Food-Al_Hoceima_Taza_Al_Hoceima_Taounate_Region.html">MB FOOD</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>(64) . Restaurant</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price per-price"><br><small></small></span>
		    							</div>
		    						</div>
									<p>Convient aux enfants <br/> Convient aux groupes<br/> Al Hoceïma<br/>0653-316567</p>
									<button onclick="myfonction(6)">more</button>
									<p id="photo6" style="display: none;">Avenue Mohammed V, Al Hoceima, Taza-Al Hoceima-Taounate, Morocco, 32000
													<br/>
													Special features
													<br/>
													Take away <br/>
													Opening hours <br/>
													Monday 11: 30-00: 30 <br/>
													Tuesday 11: 30-00: 30 <br/>
													Wednesday 11: 30-00: 30 <br/>
													Thursday 11: 30-00: 30 <br/>
													Friday 11: 30-00: 30 <br/>
													Saturday 11: 30-00: 30 <br/>
													Sunday 11: 30-00: 30 <br/></p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i>  Al Hoceïma</span> 
		    							<span class="ml-auto"><a href="https://www.tripadvisor.fr/Restaurant_Review-g795889-d10140180-Reviews-Mb_Food-Al_Hoceima_Taza_Al_Hoceima_Taounate_Region.html">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
          	</div>
          
          </div> <!-- .col-md-8 -->
        </div>
      <!-- .section -->
	<!--**************************************** section 2 ************************************-->
	<div class="col-lg-9" style="margin: auto;">
		<div class="row">
			<div class="col-md-4 ftco-animate">
					  <div class="destination">
						  <a href="https://www.tripadvisor.fr/Restaurant_Review-g795889-d12237534-Reviews-Snack_ok-Al_Hoceima_Taza_Al_Hoceima_Taounate_Region.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(app-assets/images/snack1.jpg);">
							  <div class="icon d-flex justify-content-center align-items-center">
						  <span class="icon-search2"></span>
					  </div>
						  </a>
						  <div class="text p-3">
							  <div class="d-flex" >
								  <div class="one">
									  <h3><a href="https://www.tripadvisor.fr/Restaurant_Review-g795889-d12237534-Reviews-Snack_ok-Al_Hoceima_Taza_Al_Hoceima_Taounate_Region.html" >Snack OK</a></h3>
									  <p class="rate">
										  <i class="icon-star"></i>
										  <i class="icon-star"></i>
										  <i class="icon-star"></i>
										  <i class="icon-star-half"></i>
										  <i class="icon-star-o"></i>
										  <span>(66). Restaurant</span>
									  </p>
								  </div>
								  <div class="two">
									  <span class="price per-price"><br><small></small></span>
								  </div>
							  </div>
							  <p>Lieu chaleureux<br/>Convient <br/> aux enfants <br/> et aux groupes</p>
							  <button onclick="myfonction(7)">more</button>
									<p id="photo7" style="display: none;">6 Reu Al Andalous, Al Hoceima <br/>
												Opening hours <br/>
												Monday 11: 30-23: 00 <br/>
												Tuesday 11: 00-23: 00 <br/>
												Wednesday 11: 00-23: 00 <br/>
												Thursday 11: 00-23: 00 <br/>
												Friday 11: 00-23: 00 <br/>
												Saturday 11: 00-23: 00 <br/>
												Sunday 11: 00-23: 00 <br/>
												Claim your establishment <br/></p>
							  <hr>
							  <p class="bottom-area d-flex">
								  <span><i class="icon-map-o"></i> Al Hoceïma</span> 
								  <span class="ml-auto"><a href="https://www.tripadvisor.fr/Restaurant_Review-g795889-d12237534-Reviews-Snack_ok-Al_Hoceima_Taza_Al_Hoceima_Taounate_Region.html">Book Now</a></span>
							  </p>
						  </div>
					  </div>
				  </div>
				  <div class="col-md-4 ftco-animate">
					  <div class="destination">
						  <a href="https://fr.tripadvisor.ch/Restaurant_Review-g795889-d13190543-Reviews-Cafe_Mediterraneo-Al_Hoceima_Taza_Al_Hoceima_Taounate_Region.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(app-assets/images/cafemed.jpg);">
							  <div class="icon d-flex justify-content-center align-items-center">
						  <span class="icon-search2"></span>
					  </div>
						  </a>
						  <div class="text p-3">
							  <div class="d-flex">
								  <div class="one">
									  <h3><a href="https://fr.tripadvisor.ch/Restaurant_Review-g795889-d13190543-Reviews-Cafe_Mediterraneo-Al_Hoceima_Taza_Al_Hoceima_Taounate_Region.html">Café Mediterráneo</a></h3>
									  <p class="rate">
										  <i class="icon-star"></i>
										  <i class="icon-star"></i>
										  <i class="icon-star"></i>
										  <i class="icon-star"></i>
										  <i class="icon-star-o"></i>
										  <span>(138) . $ . Restaurant</span>
									  </p>
								  </div>
								  <div class="two">
									  <span class="price per-price"><br><small></small></span>
								  </div>
							  </div>
							  <p>03 Rue Mohamed Zarktouni، El Hoceima 32000<br>ouvert tard en soirée</p>
							  <button onclick="myfonction(8)">more</button>
									<p id="photo8" style="display: none;">03 Rue Mohamed Zraktouni, Al Hoceima 32000 Morocco <br/> Special features <br/>
									No delivery <br/> Outdoor terrace <br/> Take away <br/>
									Opening hours <br/>
									Monday 07: 00-01: 00 <br/>
									Tuesday 07: 00-01: 00 <br/>
									Wednesday 07: 00-01: 00 <br/>
									Thursday 07: 00-01: 00 <br/>
									Friday 07: 00-01: 00 <br/>
									Saturday 07: 00-01: 00 <br/>
									Sunday 07: 00-01: 00 <br/></p>
							  <hr>
							  <p class="bottom-area d-flex">
								  <span><i class="icon-map-o"></i> Al Hoceïma</span> 
								  <span class="ml-auto"><a href="https://fr.tripadvisor.ch/Restaurant_Review-g795889-d13190543-Reviews-Cafe_Mediterraneo-Al_Hoceima_Taza_Al_Hoceima_Taounate_Region.html">Book Now</a></span>
							  </p>
						  </div>
					  </div>
				  </div>
				  <div class="col-md-4 ftco-animate">
					  <div class="destination">
						  <a href="https://www.tripadvisor.fr/Restaurant_Review-g795889-d8681335-Reviews-Espace_Mirimar-Al_Hoceima_Taza_Al_Hoceima_Taounate_Region.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(app-assets/images/mirama.jpg);">
							  <div class="icon d-flex justify-content-center align-items-center">
						  <span class="icon-search2"></span>
					  </div>
						  </a>
						  <div class="text p-3">
							  <div class="d-flex">
								  <div class="one">
									  <h3><a href="https://www.tripadvisor.fr/Restaurant_Review-g795889-d8681335-Reviews-Espace_Mirimar-Al_Hoceima_Taza_Al_Hoceima_Taounate_Region.html">Miramar Restaurant Al Hoceima</a></h3>
									  <p class="rate">
										  <i class="icon-star"></i>
										  <i class="icon-star"></i>
										  <i class="icon-star"></i>
										  <i class="icon-star-half"></i>
										  <i class="icon-star-o"></i>
										  <span>(13). Restaurant</span>
									  </p>
								  </div>
								  <div class="two">
									  <span class="price per-price"><br><small></small></span>
								  </div>
							  </div>
							  <p>Rue Abdelmalik Saadi, Al Hoceima 32000 Maroc<br/>convient aux Groups</p>
							  <button onclick="myfonction(9)">more</button>
									<p id="photo9" style="display: none;">Rue Abdelmalik Saadi, Al Hoceima, Taza-Al Hoceima-Taounate, Maroc, 32000</p>
							  <hr>
							  <p class="bottom-area d-flex">
								  <span><i class="icon-map-o"></i> Al Hoceïma</span> 
								  <span class="ml-auto"><a href="https://www.tripadvisor.fr/Restaurant_Review-g795889-d8681335-Reviews-Espace_Mirimar-Al_Hoceima_Taza_Al_Hoceima_Taounate_Region.html">Book Now</a></span>
							  </p>
						  </div>
					  </div>
				  </div>
				  <div class="col-md-4 ftco-animate">
					  <div class="destination">
						  <a href="https://www.tripadvisor.fr/Restaurant_Review-g795889-d15690652-Reviews-The_Palms-Al_Hoceima_Taza_Al_Hoceima_Taounate_Region.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(app-assets/images/palm.jpg);">
							  <div class="icon d-flex justify-content-center align-items-center">
						  <span class="icon-search2"></span>
					  </div>
						  </a>
						  <div class="text p-3">
							  <div class="d-flex">
								  <div class="one">
									  <h3><a href="https://www.tripadvisor.fr/Restaurant_Review-g795889-d15690652-Reviews-The_Palms-Al_Hoceima_Taza_Al_Hoceima_Taounate_Region.html">The Palms</a></h3>
									  <p class="rate">
										  <i class="icon-star"></i>
										  <i class="icon-star"></i>
										  <i class="icon-star"></i>
										  <i class="icon-star"></i>
										  <i class="icon-star-o"></i>
										  <span>(91) .$$ . restaurant</span>
									  </p>
								  </div>
								  <div class="two">
									  <span class="price per-price"><br><small></small></span>
								  </div>
							  </div>
							  <p>Plage Calabonita, Al Hoceïma 32000<br/>Lieu chaleureux<br/> Convient aux enfants </p>
							  <button onclick="myfonction(10)">more</button>
									<p id="photo10" style="display: none;">Services<br/>
													Groups<br/>  Kids<br/>  Outdoor<br/>    Reserve <br/>   Waiter  <br/>  Walkins<br/>
													Specialties<br/>
													Breakfast <br/> Coffee  <br/>Dinner<br/>  Drinks<br/>  Lunch<br/>
													Opening Hours<br/>
													Monday	08:00 - 02:00<br/>
													Tuesday	08:00 - 02:00<br/>
													Wednesday	08:00 - 02:00<br/>
													Thursday	08:00 - 02:00<br/>
													Friday	08:00 - 02:00<br/>
													Saturday	08:00 - 02:00<br/>
													Sunday	08:00 - 02:00<br/></p>
							  <hr>
							  <p class="bottom-area d-flex">
								  <span><i class="icon-map-o"></i> Al Hoceïma</span> 
								  <span class="ml-auto"><a href="https://www.agoda.com/fr-fr/palm-beach-motel/hotel/al-hoceima-ma.html?cid=1844104">Book Now</a></span>
							  </p>
						  </div>
					  </div>
				  </div>
				  <div class="col-md-4 ftco-animate">
					  <div class="destination">
						  <a href="https://fr.restaurantguru.com/Alminar-restaurant-El-Hoceima" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(app-assets/images/alminar.jpg);">
							  <div class="icon d-flex justify-content-center align-items-center">
						  <span class="icon-search2"></span>
					  </div>
						  </a>
						  <div class="text p-3">
							  <div class="d-flex">
								  <div class="one">
									  <h3><a href="https://fr.restaurantguru.com/Alminar-restaurant-El-Hoceima">Alminar restaurant</a></h3>
									  <p class="rate">
										  <i class="icon-star"></i>
										  <i class="icon-star"></i>
										  <i class="icon-star"></i>
										  <i class="icon-star-half"></i>
										  <i class="icon-star-o"></i>
										  <span>(145) .$$ . Restaurant</span>
									  </p>
								  </div>
								  <div class="two">
									  <span class="price per-price"><br><small></small></span>
								  </div>
							  </div>
							  <p>Al Hoceïma<br/>Lieu chaleureux</p>
							  <button onclick="myfonction(11)">more</button>
																		<p id="photo11" style="display: none;">Address: Al Hoceïma <br/>
									Times: <br/>
									Saturday 08: 00–00: 00 <br/>
									Sunday 08: 00–00: 00 <br/>
									Monday 08: 00–00: 00 <br/>
									Tuesday 08: 00–00: 00 <br/>
									Wednesday 08: 00–00: 00 <br/>
									Thursday 08: 00–00: 00 <br/>
									Friday 08: 00–00: 00 <br/>
									0655-934277 <br/>
									Please note: The times or the services offered may vary <br/></p>
							  <hr>
							  <p class="bottom-area d-flex">
								  <span><i class="icon-map-o"></i> Al Hoceïma</span> 
								  <span class="ml-auto"><a href="https://fr.restaurantguru.com/Alminar-restaurant-El-Hoceima">Book Now</a></span>
							  </p>
						  </div>
					  </div>
				  </div>
				  <div class="col-md-4 ftco-animate">
					  <div class="destination">
						  <a href="https://www.tripadvisor.fr/Restaurant_Review-g795889-d13287533-Reviews-Al_Khozama-Al_Hoceima_Taza_Al_Hoceima_Taounate_Region.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(app-assets/images/kozama.jpg);">
							  <div class="icon d-flex justify-content-center align-items-center">
						  <span class="icon-search2"></span>
					  </div>
						  </a>
						  <div class="text p-3">
							  <div class="d-flex">
								  <div class="one">
									  <h3><a href="https://www.tripadvisor.fr/Restaurant_Review-g795889-d13287533-Reviews-Al_Khozama-Al_Hoceima_Taza_Al_Hoceima_Taounate_Region.html">RESTAURANT AL KHOZAMA</a></h3>
									  <p class="rate">
										  <i class="icon-star"></i>
										  <i class="icon-star"></i>
										  <i class="icon-star"></i>
										  <i class="icon-star"></i>
										  <i class="icon-star-o"></i>
										  <span>(11) . Restaurant</span>
									  </p>
								  </div>
								  <div class="two">
									  <span class="price per-price"><br><small></small></span>
								  </div>
							  </div>
							  <p> Avenue Mohamed V, Al Hoceïma 32000<br/>05398-42200</p>
							  <button onclick="myfonction(12)">more</button>
									<p id="photo12" style="display: none;">
																			378/5000
																			Avenue Allal Ben Abdellah
																			Larache
																			Morocco <br/>
																			Opening hours <br/>
																			Mon .: 12:00 - 5:00 PM, 7:00 - 11:00 PM <br/>
																			Tue: 12:00 - 5:00 PM, 7:00 - 11:00 PM <br/>
																			Wed .: 12:00 - 5:00 PM, 7:00 - 11:00 PM <br/>
																			Thu: 12:00 - 5:00 PM, 7:00 - 11:00 PM <br/>
																			Fri: 12:00 - 5:00 PM, 7:00 - 11:00 PM <br/>
																			Sat: 12:00 - 5:00 PM, 7:00 - 11:00 PM <br/>
																			Sun: 12:00 - 5:00 PM, 7:00 - 11:00 PM <br/></p>
							  <hr>
							  <p class="bottom-area d-flex">
								  <span><i class="icon-map-o"></i>  Al Hoceïma</span> 
								  <span class="ml-auto"><a href="https://www.tripadvisor.fr/Restaurant_Review-g795889-d13287533-Reviews-Al_Khozama-Al_Hoceima_Taza_Al_Hoceima_Taounate_Region.html">Book Now</a></span>
							  </p>
						  </div>
					  </div>
				  </div>
		</div>
		<div class="row mt-5">
			
		  </div>
		  <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d26070.985202069067!2d-3.947076804216914!3d35.234527628240954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srestaurant%20%20Al%20Hoce%C3%AFma!5e0!3m2!1sfr!2sma!4v1593042992486!5m2!1sfr!2sma" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div> <!-- .col-md-8 -->
  </div>
 
</div>

</section> <!-- .section -->

	<!--******************************************************************************************-->


<script>
	function myfonction(b)
		{
			
			for (let i = 1; i < 13; i++){
				if(b==i)
				{
					var a=document.getElementById("photo"+i);
		                        	if(a.style.display=="none")
			                              {
                                           a.style.display="block";
			                                 }
			                             else
			                          a.style.display="none";
			                                break;
											 }
				}
		}


</script>
@endsection