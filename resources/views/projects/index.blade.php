<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("https://www.w3schools.com/w3images/coffeehouse.jpg");
  min-height: 75%;
}

.menu {
  display: none;
}
</style>
<body>


<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
  @foreach($projects as $project)
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">{{ $project -> title}}</span></h5>
    <p>{{ $project -> aboutText1}}</p>
    <p>{{ $project -> aboutText2}}</p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>{{ $project -> idiomicText}}</i></p>
      <p>{{ $project -> owner}}</p>
    </div>
    <img src="https://www.w3schools.com/w3images/coffeeshop.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
    <p><strong>{{ $project -> openingTitle}}</strong> {{ $project -> openingHours}}</p>
    <p><strong>{{ $project -> addressTitle}}</strong> {{ $project -> address}}</p>
    @endforeach
  </div>
</div>


</body>
</html>