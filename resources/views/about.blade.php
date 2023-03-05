<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>{{$link}}</title>
</head>

<body>
  <!-- Calling Navbar Component -->
  < x-navbar />

  <!-- Calling Crousel Component -->
  < x-crousel />

  <h1>{{$link}}</h1>

  <!-- Print Previous Vsisted Link -->
  <h1>Previous: {{ URL :: previous() }}</h1>
  

  <!-- ABOUT US -->
  <div class="about-section">

    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
      }

      html {
        box-sizing: border-box;
      }

      *,
      *:before,
      *:after {
        box-sizing: inherit;
      }

      .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
      }

      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
      }

      .about-section {
        padding: 50px;
        text-align: center;
        background-color: #474e5d;
        color: white;
      }

      .container {
        padding: 0 16px;
      }

      .container::after,
      .row::after {
        content: "";
        clear: both;
        display: table;
      }

      .title {
        color: grey;
      }



      @media screen and (max-width: 650px) {
        .column {
          width: 100%;
          display: block;
        }
      }
    </style>



    <h1>About Us Page</h1>
    <p>Some text about who we are and what we do.</p>
    <p>Resize the browser window to see that this page is responsive by the way.</p>
  </div>

  <!-- MAP -->
  <div class="row">
    <div class="col">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.3270681184563!2d67.08035941464502!3d24.88682295033031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb339b3bc641523%3A0x7ccfb0c8fba24e95!2sEmerald%20Soft!5e0!3m2!1sen!2s!4v1677869034225!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="col">

    </div>
  </div>


  <h2 style="text-align:center">Our Team</h2>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="https://www.w3schools.com/w3images/team1.jpg" alt="Jane" style="width:100%">
        <div class="container">
          <h2>Jane Doe</h2>
          <p class="title">CEO & Founder</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>jane@example.com</p>
          <!-- <p><button class="btn btn-primary btn-lg">Contact</button></p> -->
          <p><a href="#!" class="btn btn-primary btn-lg">Contact</a></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="https://www.w3schools.com/w3images/team2.jpg" alt="Mike" style="width:100%">
        <div class="container">
          <h2>Mike Ross</h2>
          <p class="title">Art Director</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>mike@example.com</p>
          <!-- <p><button class="btn btn-primary btn-lg">Contact</button></p> -->
          <p><a href="#!" class="btn btn-primary btn-lg">Contact</a></p>

        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="https://www.w3schools.com/w3images/team3.jpg" alt="John" style="width:100%">
        <div class="container">
          <h2>John Doe</h2>
          <p class="title">Designer</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>john@example.com</p>
          <!-- <p><button class="btn btn-primary btn-lg">Contact</button></p> -->
          <p><a href="#!" class="btn btn-primary btn-lg">Contact</a></p>

        </div>
      </div>
    </div>
  </div>


  < x-footer />
  <script>
        var page_data = @json($link);
    var btn = document.getElementById(page_data);
    btn.className += " active";
  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</body>

</html>