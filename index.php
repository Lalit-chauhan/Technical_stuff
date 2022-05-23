<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Stuff</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Thechnical stuff</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="width">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/cvv1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Images/ccv.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Images/img4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
 

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">About Us</h3>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="Images/img5.jpg" alt="tech" class="img-fluid" height="10">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-4">Technical stuff</h2>
            <p class="py-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis quisquam amet tenetur, ratione sapiente provident totam dolor ducimus fugit numquam aperiam cumque eius ipsum accusamus pariatur vitae consequatur temporibus rem, odit laboriosam ullam quasi veniam dolore. Impedit ullam velit, inventore tenetur cupiditate aperiam, quam provident repellat dolorum cum perferendis maxime.</p>
            <a href="about.php" class="btn btn-success">check more</a>
        </div>
    </div>
    </div>
</section>


<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">Our Services</h3>
    </div>

<div class="container-fluid">
  <div class="row">
     <div class="col-lg-4 colg-md-4 col-12">
     <div class="card" >
  <img class="card-img-top" src="Images/img7.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Tech Hub :)</h4>
    <p class="card-text">Do something productive</p>
    <a href="#" class="btn btn-success">Explore</a>
  </div>
</div>
     </div>

     <div class="col-lg-4 colg-md-4 col-12">
     <div class="card" >
  <img class="card-img-top" src="Images/img7.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Tech Talks :)</h4>
    <p class="card-text">Do something productive</p>
    <a href="#" class="btn btn-success">Explore</a>
  </div>
</div>
     </div>

     <div class="col-lg-4 colg-md-4 col-12">
     <div class="card" >
  <img class="card-img-top" src="Images/img7.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Tech Zig :)</h4>
    <p class="card-text">Do something productive</p>
    <a href="#" class="btn btn-success">Explore</a>
  </div>
</div>
     </div>
</div>
</div>
</section>

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">Our Gallery</h3>
    </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
       <img src="Images/ccv.jpg" alt="" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
       <img src="Images/ccv1.jpg" alt="" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
       <img src="Images/ccv.jpg" alt="" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
       <img src="Images/ccv1.jpg" alt="" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
       <img src="Images/img4.jpg" alt="" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
       <img src="Images/ccv1.jpg" alt="" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
       <img src="Images/img5.jpg" alt="" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
       <img src="Images/ccv1.jpg" alt="" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
       <img src="Images/img7.jpg" alt="" class="img-fluid pb-4">
    </div>
  </div>

</div>
</section>

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">Contact Us</h3>
    </div>
   <div class="w-50 m-auto">
     <form action="userinfo.php" method="post">
       <div class="form group">
         <label>Username</label>
         <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
         <div class="form group">
         <label>Email</label>
         <input type="text" name="email" autocomplete="off" class="form-control">
         </div>
         <div class="form group">
         <label>Mobile</label>
         <input type="text" name="mobile" autocomplete="off" class="form-control">
       </div>
       <div class="form group">
         <label>Comments</label>
        <textarea class="form-control" name="comments">
        </textarea>
       </div>
       
       <button type="submit" class="btn btn-success">Submit</button>
     </form>
    </section>


    <footer>
      <p class="p-3 bg-dark text-white text-center">Techstuff@gmail.co.in</p> 
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
