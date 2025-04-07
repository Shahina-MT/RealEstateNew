<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="./images/logo-image.png" alt="Bootstrap" class="logo-image">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 nav-list">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="properties.php">Properties</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="career.php">Career</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact us</a>
        </li>
      </ul>
      <button type="button" class="nav-btn" data-bs-toggle="modal" data-bs-target="#enquirypopup">Quick enquiry</button>
    </div>
  </div>
</nav>


<div class="modal modal-enquiry" tabindex="-1" id="enquirypopup">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body rest-mdbody">
        <div class="row">
          <div class="col-lg-4 mdl-leftcol">
            <img src="./images/modal-picture.png" alt="" class="mdl-img">
            <div class="overlay-modal">
              <h1 class="mdl-overlayh1">Get Expert<br>Answers for Your<br> Real Estate Needs</h1>
              <p class="mdl-overlaypr">Fill in the form and our team will review and accept<br>your request</p>
            </div>

          </div>
          <div class="col-lg-8">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="mdl-cntnt">
              <h1 class="modal-hd">Join now</h1>
              <div class="modal-form">
                <form action="">
                  <div class="row mb-3 mb-md-4">
                    <div class="col">
                      <input type="text" class="form-control modal-cntrl" placeholder="Full name*"
                        aria-label="First name">
                    </div>
                    <div class="col">
                      <input type="email" class="form-control modal-cntrl" placeholder="Email address*"
                        aria-label="Last name">
                    </div>
                  </div>
                  <div class="row mb-3 mb-md-4">
                    <div class="col">
                      <input type="tel" class="form-control modal-cntrl" placeholder="Phone number*"
                        aria-label="First name">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control modal-cntrl" placeholder="Subject*" aria-label="Last name">
                    </div>
                  </div>

                  <div class="col mb-md-4 mb-3">
                    <textarea class="form-control modal-cntrl" id="exampleFormControlTextarea1" rows="2"
                      placeholder="Message*"></textarea>
                  </div>
                  <button type="submit" class="enquirymodal-btn">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>

<script src="script.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    let currentPage = window.location.pathname.split("/").pop();

    let navLinks = document.querySelectorAll(".navbar-nav .nav-link");

    navLinks.forEach(link => {
      if (link.getAttribute("href") === currentPage) {
        link.classList.add("active");
      } else {
        link.classList.remove("active");
      }
    });
  });

</script>

<script>
  window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
</script>