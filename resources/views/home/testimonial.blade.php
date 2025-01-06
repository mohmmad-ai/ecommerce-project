<!DOCTYPE html>
<html>

<head>
 @include('home.css')
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
   @include('home.header')
    <!-- end header section -->
    <!-- slider section -->
  </div>
   <!-- client section -->
   <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Mohammad
                  </h5>
                  
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                "The products are amazing, and the quality exceeded my expectations! The customer service is top-notch."
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Hassan
                  </h5>
                  
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                "I found everything I was looking for and more. The variety of products here is simply unmatched!"
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Fatima
                  </h5>
                  
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                "Fast delivery and excellent packaging. I’ll definitely shop here again!"
              </p>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>


   

  <!-- info section -->

 @include('home.footer')
</body>

</html>