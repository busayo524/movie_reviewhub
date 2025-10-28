<form action="" method="">
  <h2>Add a New Movie</h2>

  <!-- ninja Name -->
  <label for="name">Movie Name:</label>
  <input 
    type="text" 
    id="name" 
    name="name" 
    value="{{ old('name') }}" 
    required
  >

  <!-- ninja Strength -->
  <label for="rating">Movie Rating (0,1,0):</label>
  <input 
    type="number" 
    id="rating" 
    name="rating" 
    required
  >

  <!-- ninja Bio -->
  <label for="description">Description:</label>
  <textarea
    rows="5"
    id="description" 
    name="description" 
    required
  ></textarea>

  <!-- select a dojo -->
  <label for="dojo_id">Dojo:</label>
  <select id="dojo_id" name="dojo_id" required>
    <option value="" disabled selected>Select a dojo</option>
    
  </select>

  <button type="submit" class="btn mt-4">Add Movie</button>

  <!-- validation errors -->
  
</form>