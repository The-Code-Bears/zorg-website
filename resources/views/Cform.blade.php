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
    
</form>