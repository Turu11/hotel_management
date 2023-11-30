<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> The Marina Hotel"</title>
    <link href="/css/style2.css " rel="stylesheet" >
</head>

<body>

<div class="search-container">
    
    <form id="hotel-search-form">
      <div class="form-group">
        <label for="location"></label>
        <input type="text" id="location" name="location" required>
      </div>
      <div class="from-group">
        <label for="check-in"></label>
        <input type="date" id="check-in" name="check-in" required>
      </div>
      <div class="from-group">
        <label for="check-out"></label>
        <input type="date" id="check-out" name="check-out" required>
      </div>
      <div class="from-group">
        <label for="rooms"></label>
        <input type="number" id="rooms" name="rooms" min="1" required>
      </div>
      <div class="from-group">
        <button class="search" type="submit">Search</button>
      </div>      
    </form>
</div>
  <div class="picture1">
    <div class="image-button">
            <div class="room" id="room1">
              <img src="/css/images/s1.png" alt="Room 1 Image">
              <div class="heading">
                <h1><p> 1 King Bed Standard </p></h1>
              </div>
              
              <img src="" alt="">
              <div id="myModal" class="modal">
              <div class="modal-content">
                  <span class="close" onclick="closeModal()">&times;</span>
                  <form action="{{('submitForm') }}" method="post">
                  @csrf
                  <!-- Your form fields go here -->
                  <button type="submit">View Prices</button>
              </form>
    </div>
</div>

<script>
    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
    }
</script>
              <a href="modal">
                <p class="description">room detailes</p>
              </a>
              <p class="free">Free cancellation available</p>
              <p class="member">MEMBER DISCOUND </p>
              <p class="only">Only 1room left</p>
              <h1><p class="sale">349</p></h1>
              <p class="usd">USD per nigth </p>
              <p class="exc">Excludes taxes and fees</p>
              <a class="price" href="modal">
                <div>View Price</div>
              </a>
            </div>
    </div> 
        <div class="image-button">
          <div class="room" id="room2">
            <img src="/css/images/s2.png" alt="Room 2 Image">
            <h1><p>Standard Room</p></h1>
            <a href="">
              <p class="description">room detailes</p>
            </a>
            <p class="free">Free cancellation available</p>
            <p class="member">MEMBEER DISCOUNT</p>
            <p class="only">Only 1room left</p>
            <h1><p class="sale">349</p></h1>
            <p class="usd">USD per nigth </p>
            <p class="exc">Excludes taxes and fees</p>
            <p class="view">View Prices</p>
          </div>
        </div>
        <div class="image-button">
          <div class="room" id="room3">
            <img src="/css/images/s3.png" alt="Room 3 Image">
            <h1><p>1 King Bed Standard City View</p></h1>
            <a href="">
              <p class="description">room detailes</p>
            </a>
            <p class="free">Free cancellation available</p>
            <p class="member">MEMBER DISCOUNT</p>
            <p class="only">Only 1room left</p>
            <h1><p class="sale">371</p></h1>
            <p class="usd">USD per nigth </p>
            <p class="exc">Excludes taxes and fees</p>
            <p class="view">View Prices</p>
          </div>
        </div>
  </div>



  <!-- resources/views/modal.blade.php -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <form action="{{ route('submitForm') }}" method="post">
            @csrf
            <!-- Your form fields go here -->
            <button type="submit">View Prices</button>
        </form>
    </div>
</div>

<script>
    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
    }
</script>


</body>
</html>