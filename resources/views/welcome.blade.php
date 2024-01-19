
@extends('layouts.layout')
@section('content')
<div class="flex-center position-ref full-height">
           
  <main class="main">
      <section class="home section" id="home">
        <div class="shape shape__big"></div>
        <div class="shape shape__small"></div>
        <div class="home__container container grid">
          <h1 class="home__titie">Park System</h1>
          <div class="home__data">
            <h2 class="home__subtitle">system</h2>
            <h3 class="home__elec">
              <i class="ri-flashlight-fill"></i>
            </h3>
          </div>
          <img src="/Images//dash1.png" alt="" srcset="" class="home__img" />
          <div class="home__car">
            <div class="home__car-data">
              <div class="home__Car-icon">
                <i class="ri-temp-hot-line"></i>
              </div>
              <h2 class="home__Car-number">42°</h2>
              <h3 class="home__Car-name">TEMPERATURE</h3>
            </div>
            <div class="home__car-data">
              <div class="home__Car-icon">
                <i class="ri-dashboard-3-line"></i>
              </div>
              <h2 class="home__Car-number">343</h2>
              <h3 class="home__Car-name">MILEAGE</h3>
            </div>
            <div class="home__car-data">
              <div class="home__Car-icon">
                <i class="ri-flashlight-fill"></i>
              </div>
              <h2 class="home__Car-number">94%</h2>
              <h3 class="home__Car-name">BATTERY</h3>
            </div>
          </div>
          <a href="#" class="home__button">START</a>
        </div>
      </section>
      <section class="about section" id="about">
        <div class="about__container container grid">
          <div class="about__group">
            <img src="/Images/about3.jpg" alt="" srcset="" class="about__img" />
            <div class="about__card">
              <h3 class="about__card-title">2.400+</h3>
              <p class="about__card-description">
                Get security updates in your car
              </p>
            </div>
          </div>
          <div class="about__data">
            <h2 class="section__title about__title">
              Modern Cars <br />
              With future tecknology
            </h2>
            <p class="about__description">
              The majority of the cars on the road today include a lot of
              intricate technology. The average modern vehicle contains anywhere
              between 30 and 50 different computers and up to 100 different
              electronic sensors. With the vast amount of technology, the
              opportunity for issues to arise increases. Generally, when
              something goes wrong, the car will alert the driver via indicators
              on the dashboard.
            </p>
            <a href="#" class="button">Read More</a>
          </div>
        </div>
      </section>
      <section class="popular section" id="popular">
        <h2 class="section__titile">
          Latest Arrived Cars
        </h2>
        <div class="popular__container container swiper">
          <div class="swiper-wrapper">
            <article class="popular__card swiper-slide">
              <div class="shape shape__smaller"></div>
              <h1 class="popular__title">Seat Belt</h1>
              <h3 class="popular__subtitle">Alert</h3>
              <img
                src="/Images/popular-removebg-preview.png"
                class="popular__img"
              />
              <div class="popular__data">
                <div class="popular__description">
                  The alert aims to promote seat<br />
                  belt usage, which is crucial for reducing <br />the risk of
                  injury in the event <br />of a sudden stop or collision
                </div>
              </div>

              <button class="button popular__button">Read More</button>
            </article>
            <article class="popular__card swiper-slide">
              <div class="shape shape__smaller"></div>
              <h1 class="popular__title">Tire Pressure</h1>
              <h3 class="popular__subtitle">Warning light</h3>
              <img
                src="/Images/tire-pressure-light-removebg-preview.png"
                class="popular__img"
              />
              <div class="popular__data">
                <div class="popular__description">
                  Also known as the Tire Pressure <br />Monitoring System (TPMS)
                  symbol, <br />this image signals an issue with your tire
                  <br />pressure or the TPMS.
                </div>
              </div>

              <button class="button popular__button">Read More</button>
            </article>

            <article class="popular__card swiper-slide">
              <div class="shape shape__smaller"></div>
              <h1 class="popular__title">Oil Pressure</h1>
              <h3 class="popular__subtitle">Warning light</h3>
              <img
                src="/Images/oil-pressure-light-removebg-preview.png"
                class="popular__img"
              />
              <div class="popular__data">
                <div class="popular__description">
                  This old-fashioned oil car symbol<br />
                  indicates that there is an issue with <br />
                  your cars oil pressure system.<br />
                  Either you’re running low on oil <br />
                  or the system is not functioning <br />
                </div>
              </div>

              <button class="button popular__button">Read More</button>
            </article>

            <article class="popular__card swiper-slide">
              <div class="shape shape__smaller"></div>
              <h1 class="popular__title">Tire Pressure</h1>
              <h3 class="popular__subtitle">Warning light</h3>
              <img
                src="/Images/tire-pressure-light-removebg-preview.png"
                class="popular__img"
              />
              <div class="popular__data">
                <div class="popular__description">
                  Also known as the Tire Pressure <br />Monitoring System (TPMS)
                  symbol, <br />this image signals an issue with your tire
                  <br />pressure or the TPMS.
                </div>
              </div>

              <button class="button popular__button">Read More</button>
            </article>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </section>
      <section class="features section">
        <div class="features__container container grid">
          <div class="features__group">
            <img
              src="/Images/topview-removebg-preview.png"
              alt=""
              srcset=""
              class="features__img"
            />

            <div class="features__card features__card-1">
              <h3 class="features__card-title">350</h3>
              <p class="features__card-description">
                km <br />
                Rnage
              </p>
            </div>
            <div class="features__card features__card-2">
              <h3 class="features__card-title">480</h3>
              <p class="features__card-description">
                Km <br />
                Travel
              </p>
            </div>
            <div class="features__card features__card-3">
              <h3 class="features__card-title">450</h3>
              <p class="features__card-description">Km <br />Chargin</p>
            </div>
          </div>
        </div>
        <img src="/Images/map.jpeg" alt="" srcset="" class="features__map" />
      </section>

      <section class="featured section" id="featured">
        <h2 class="section__title">Featured Luxury Cars</h2>
        <div class="featured__container container">
          <ul class="featured__filters">
            <li>
              <button class="feaatured__item active-featured" data-filter="all">
                <span>All</span>
              </button>
            </li>
            <li>
              <button class="feaatured__item" data-filter=".tesla">
                <img src="/Images/royce-removebg-preview.png" alt="" />
              </button>
            </li>
            <li>
              <button class="feaatured__item" data-filter=".audi">
                <img src="/Images/bmw-removebg-preview.png" alt="" srcset="" />
              </button>
            </li>
            <li>
              <button class="feaatured__item" data-filter=".porsche">
                <img
                  src="/Images/hudai-removebg-preview.png"
                  alt=""
                  srcset=""
                />
              </button>
            </li>
          </ul>
          <div class="featured__content grid">
            <article class="featured__card mix tesla">
              <div class="shape shape__smaller"></div>
              <h1 class="featured__title">Tesla</h1>
              <h3 class="featured__subtit">Model Y</h3>
              <img
                src="/Images//car1-removebg-preview.png"
                class="featured__img"
              />
              <h3 class="featured__price">$7878</h3>
              <button class="button featured__button">
                <i class="ri-shopping-bag-2-line"></i>
              </button>
            </article>

            <article class="featured__card mix tesla">
              <div class="shape shape__smaller"></div>
              <h1 class="featured__title">Tesla</h1>
              <h3 class="featured__subtit">Modal X</h3>
              <img
                src="/Images/car2-removebg-preview.png"
                class="featured__img"
              />
              <h3 class="featured__price">$232.00</h3>
              <button class="button featured__button">
                <i class="ri-money-dollar-circle-line"></i>
              </button>
            </article>

            <article class="featured__card mix audi">
              <div class="shape shape__smaller"></div>
              <h1 class="featured__title">Audi</h1>
              <h3 class="featured__subtit">Modal A</h3>
              <img
                src="/Images/car3-removebg-preview.png"
                class="featured__img"
              />
              <h3 class="featured__price">$121.00</h3>
              <button class="button featured__button">
                <i class="ri-money-dollar-circle-line"></i>
              </button>
            </article>

            <article class="featured__card mix porsche">
              <div class="shape shape__smaller"></div>
              <h1 class="featured__title">Porsche</h1>
              <h3 class="featured__subtit">Boxster 987</h3>
              <img
                src="/Images//car1-removebg-preview.png"
                class="featured__img"
              />
              <h3 class="featured__price">987</h3>
              <button class="button featured__button">
                <i class="ri-money-dollar-circle-line"></i>
              </button>
            </article>

            <article class="featured__card mix porsche">
              <div class="shape shape__smaller"></div>
              <h1 class="featured__title">Porsche</h1>
              <h3 class="featured__subtit">Panamera</h3>
              <img
                src="/Images//car1-removebg-preview.png"
                class="featured__img"
              />
              <h3 class="featured__price">&121.00</h3>
              <button class="button featured__button">
                <i class="ri-money-dollar-circle-line"></i>
              </button>
            </article>
          </div>
        </div>
      </section>
      <section class="offer section">
        <div class="offer__container container grid">
          <img src="/Images/offer2.jpg" alt="" srcset="" class="offer__big" />
          <div class="offer__data">
            <h2 class="section__title offer__title">
              Get daily special <br />
              updates
            </h2>
            <p class="offer__description">
              Be the first to receive all the information about your car and
              track all the security alerts inside.
            </p>
            <a href="#" class="button">Subscribe Now</a>
          </div>
          <img src="/Images//inside2.png" alt="" class="offer__img" />
        </div>
      </section>
      <section class="logos section">
        <div class="logos__container container grid">
          <div class="logos__content">
            <img
              src="/Images/logo1-removebg-preview.png"
              alt=""
              srcset=""
              class="logos__img"
            />
          </div>

          <div class="logos__content">
            <img
              src="/Images/logo2-removebg-preview.png"
              alt=""
              srcset=""
              class="logos__img"
            />
          </div>

          <div class="logos__content">
            <img
              src="/Images/logo3-removebg-preview.png"
              alt=""
              srcset=""
              class="logos__img"
            />
          </div>

          <div class="logos__content">
            <img
              src="/Images/logo5-removebg-preview.png"
              alt=""
              srcset=""
              class="logos__img"
            />
          </div>

          <div class="logos__content">
            <img src="/Images/logo6.jpg" alt="" srcset="" class="logos__img" />
          </div>

          <div class="logos__content">
            <img src="/Images/logo4.jpg" alt="" srcset="" class="logos__img" />
          </div>
        </div>
      </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/mixitup@3"></script>
    <script src=""></script>

 @endsection