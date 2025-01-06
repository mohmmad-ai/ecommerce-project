<!DOCTYPE html>
<html>

<head>
 @include('home.css')
 <style>
  h2{
    align-items: center;
    justify-content: center;
    display: flex;
    padding-top: 2%;
    
  }
 </style>
 
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
   @include('home.header')
    <!-- end header section -->

  </div>
  <!-- end hero area -->


  <!-- contact section -->

  <section class="contact_section">
    <div class="container px-0">
      <div class="heading_container ">
      
        <br>
        <br>
        <h2 class="">
          Contact Us
        </h2>
        
      </div>
    </div>
    
    <div class="container vh-100 d-flex justify-content-center align-items-center">
      <div class="col-md-6 col-lg-5 px-0">
        <form action="{{url('review')}}" method="POST">
          @csrf
          <div>
            <input type="text" placeholder="Name" class="form-control mb-3" name="name" />
          </div>
          <div>
            <input type="email" placeholder="Email" class="form-control mb-3" name="email"/>
          </div>
          <div>
            <input type="text" placeholder="Phone" class="form-control mb-3" name="phone" />
          </div>
          <div>
            <textarea placeholder="Message" class="form-control mb-3" name="message" ></textarea>
          </div>
          <div class="d-flex">
            <button type="submit" class="btn btn-primary w-100">
              SEND
            </button>
          </div>
        </form>
      </div>
    </div>
    
    
  </section>

  <br><br><br>

 

  <!-- end contact section -->

   

  <!-- info section -->

 @include('home.footer')
</body>

</html>