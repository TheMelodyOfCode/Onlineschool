<?php require_once __DIR__ . "../../../../../mainsrc/Design/header.php"; ?>


<main>
<!------- COOKIE ---------------------------------->

<div style="height: 35rem"  id="cookieBanner"  class="text-center mt-4 bg-transparent ">

<div class="modal modal-alert position-static d-block  py-5" tabindex="-1" role="dialog" id="modalChoice">
  <div class="modal-dialog" role="document">
  <div class="b-example-divider"></div>
    <div class="modal-content rounded-4 shadow">
      <div class="modal-body p-4 text-center bg-white text-primary ">
        <h5 class="mb-0">You don't like Cookie Banners?</h5>
        <p class="mb-0 ">Yes, we 2! - Sorry about that! <br>
         We use Cookies only for functionallity reasons.</p>
         <a href="/onlineschool/mainsrc/Design/impressum.php">Information</a>
      </div>
      <div class="modal-footer flex-nowrap p-0">
        <button type="button" id="cookie-yes-btn"  class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-right"><strong>Yes, enable</strong></button>
        <button type="button" id="cookie-no-btn"  class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0" data-bs-dismiss="modal">No thanks </button>
      </div>
    </div>
    <div class="b-example-divider"></div>
  </div>
</div>

</div>

<!---------------------------------------------->


<div style="margin: 0" id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid" src="/onlineschool/mainsrc/src/img/education2.jpg" alt="education picture" />
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>Heather is a native speaker</h1>
          <p><a class="btn btn-lg btn-dark btn-outline-warning my-4" href="/Register">Sign up today</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="/onlineschool/mainsrc/src/img/scotland2.jpg" alt="scotland picture" />
      <div class="container">
        <div class="carousel-caption text-end">
          <h1>Heather is from Scotland</h1>
          <p><a class="btn btn-lg btn-dark btn-outline-warning" href="/onlineschool/#courses">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="/onlineschool/mainsrc/src/img/scotland3.jpg" alt="scotland3" />
      <div class="container">
        <div class="carousel-caption text-end">
           <h1>That's not Heather :-)</h1>
          <p><a  class="btn btn-lg btn-dark btn-outline-warning" href="/Gallery">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="container col-xxl-8 px-4 py-5">

<!-- Responsive left HERO
================================================== -->

  <!-- Text - ABOUT HEATHER -->
  <a name="tutor"></a>
  <div id="heather" class="row flex-lg-row-reverse align-items-center  py-5">
    <div class="col-10 col-sm-8 col-lg-6">

    <?php  echo $aboutHeather->textcontent; ?>

    </div>
  </div>
 

  <!-- Text - ONLINESCHOOL -->
  <a name="onlineSchool"></a>

  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-lg-6">
          
          <?php  echo $onlineschool->textcontent; ?>
    </div>
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="/onlineschool/mainsrc/src/img/onlineSchool.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
  </div>


  <!-- Text - COURSES -->
  <a name="courses"></a>

  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="/onlineschool/mainsrc/src/img/courses.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">

    <?php  echo $courses->textcontent; ?>


    </div>
  </div>




</div><!-- Hero end -->


<!-- Marketing messaging and featurettes
================================================== -->


<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Courses</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

      <div class="feature col">

        <div class=" btnclr feature-icon  bg-gradient">
          <svg class="bi" width="32" height="32" fill="#FFF">
            <use xlink:href="#balloon-heart"/>
          </svg>
        </div>

        <h2>Writing</h2>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="icon-link">
          Call to action
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>


      <div class="feature col">
        <div class="btnclr feature-icon bg-gradient">

          <svg class="bi" width="1em" height="1em"><use xlink:href="#calender-heart"/></svg>
        </div>

        <h2>Reading</h2>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="icon-link">
          Call to action
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>

      <div class="feature col">

        <div class="btnclr feature-icon  bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#cirlcle-fill"/></svg>
        </div>

        <h2>Speaking</h2>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="icon-link">
          Call to action
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>
    </div>
  </div>


  <!-- START THE FEATURETTES -->


  <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">English for everyone</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/onlineschool/mainsrc/src/img/edinburg1.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">English for travelling</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>Earth</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                <small>3d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/onlineschool/mainsrc/src/img/educationHK3.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Large English librarys in the learning Areas</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>Pakistan</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                <small>4d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/onlineschool/mainsrc/src/img/edinburg3.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">English History</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>California</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                <small>5d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <a name="prices"></a>
  </div>

  <!-- /END THE FEATURETTES -->
  <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-normal">Pricing</h1>
    <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
  </div>
  
  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">Free</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Basic English grammar</li>
            <li>Common English phrases</li>
            <li>Access to the free learning Area</li>
          </ul>

          <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">Pro</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Medium & Pro English</li>
            <li>B2 to A1 Courses</li>
            <li>Access to the Pro learning Area</li>
          </ul>
          <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-primary">
        <div class="card-header py-3 text-white bg-primary border-primary">
          <h4 class="my-0 fw-normal">Enterprise</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Pro & Buisiness English</li>
            <li>A1-A3 - The sky is the limit</li>
            <li>Access to the Enterprise learning Area</li>
          </ul>
          <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
        </div>
      </div>
    </div>
  </div>

  <h2 class="display-6 text-center mb-4">Compare plans</h2>

  <div class="table-responsive">
    <table class="table text-center">
      <thead>
        <tr>
          <th style="width: 34%;"></th>
          <th style="width: 22%;">Free</th>
          <th style="width: 22%;">Pro</th>
          <th style="width: 22%;">Enterprise</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row" class="text-start">Basic English grammar</th>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
        </tr>
        <tr>
          <th scope="row" class="text-start">Access to the free learning Area</th>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
        </tr>
      </tbody>

      <tbody>
        <tr>
          <th scope="row" class="text-start">B2 to A1 Courses</th>
          <td></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
        </tr>
        <tr>
          <th scope="row" class="text-start">Medium & Pro English</th>
          <td></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
        </tr>
        <tr>
          <th scope="row" class="text-start">A1-A3 - The sky is the limit</th>
          <td></td>
          <td></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
        </tr>
        <tr>
          <th scope="row" class="text-start">Access to the Enterprise learning Area</th>
          <td></td>
          <td></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
        </tr>
      </tbody>
    </table>
  </div>

</div><!-- /.container -->
<hr class="featurette-divider">

<?php require_once __DIR__ . "../../../../../mainsrc/Design/footer.php" ?>