<form class="form-horizontal" method="POST" action="/contact">
  
      
  <div class="form-group">
   <label for="Name">Naam: </label>
   <input type="text" class="form-control" id="name" placeholder="Naam" name="name" required>
  </div>
  <div class="form-group">
   <label for="email">Email: </label>
   <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
  </div>
  <div class="form-group">
   <label for="message">Bericht: </label>
   <textarea type="text" class="form-control" id="message" placeholder="Voer hier uw bericht in" name="message" required></textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary" value="Send">Versturen</button>
  </div>
  <div class="mapouter"><div class="gmap_canvas"><iframe width="400" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Boerhaavelaan%2024&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
  </iframe><br>
  <style>.mapouter{position:relative;text-align:right;height:400px;width:400px;}</style>
  <style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:400px;}</style></div></div>
    
</form>