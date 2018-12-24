@extends ('layouts.app')


@section ('content')

<div class="indexTitle"> Popular Movies</div>
 <!-- Swiper -->
 <div class="swiper-container">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
          <div class="imgBx">
            <img src="http://localhost:8000/images/movies/prestige.jpg" id="slideImage" alt="s1">
        </div>
        <div class="details">
            The Prestige <br>
            2006
        </div>
      </div>

      <div class="swiper-slide">
          <div class="imgBx">
            <img src="http://localhost:8000/images/movies/avatar.jpg" id="slideImage" alt="s1">
        </div>
        <div class="details">
           Avatar <br>
           2009
        </div>
      </div>

      <div class="swiper-slide">
          <div class="imgBx">
            <img src="http://localhost:8000/images/movies/wonderful.jpg" id="slideImage" alt="s1">
        </div>
        <div class="details">
            It's Wonderful Life <br>
            1946
        </div>
      </div>
   
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

<div class="indexTitle"> Latest Movies</div>
 <!-- Swiper -->
 <div class="swiper-container">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
          <div class="imgBx">
            <img src="http://localhost:8000/images/movies/prestige.jpg" id="slideImage" alt="s1">
        </div>
        <div class="details">
            The Prestige <br>
            2006
        </div>
      </div>

      <div class="swiper-slide">
          <div class="imgBx">
            <img src="http://localhost:8000/images/movies/avatar.jpg" id="slideImage" alt="s1">
        </div>
        <div class="details">
           Avatar <br>
           2009
        </div>
      </div>

      <div class="swiper-slide">
          <div class="imgBx">
            <img src="http://localhost:8000/images/movies/wonderful.jpg" id="slideImage" alt="s1">
        </div>
        <div class="details">
            It's Wonderful Life <br>
            1946
        </div>
      </div>
   
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>
@endsection