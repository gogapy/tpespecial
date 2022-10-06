<form action="add" method="POST" class="row g-3 mt-1">
  <div class="col-md-6">
    <label class="form-label">Perfume name</label>
    <input name="perfume" type="text" class="form-control" placeholder="Perfume name">
  </div>
  <div class="col-md-6">
    <label class="form-label">Notes</label>
    <input name="notes" type="text" class="form-control" placeholder="Notes">
  </div>
  <div class="col-6">
    <label class="form-label">Qualification</label>
    <input name="qualification" type="number" class="form-control" placeholder="Qualification">
  </div>
  <div class="col-6">
    <label class="form-label">Longevity</label>
    <input name="longevity" type="text" class="form-control" placeholder="Longevity">
  </div>
  <div class="col-md-6">
    <label class="form-label">Brand</label>
    <select name="brand"  class="form-control">
      {foreach from=$brands item=$brand}
        <option name="brand">{$brand->brand_name}</option>
      {/foreach}
    </select>
  </div>
  <div class="col-6">
    <label class="form-label">Image</label>
    <input name="image" type="text" class="form-control" placeholder="Image">
  </div>
  <div class="col-12">
    <label class="form-label">Description</label>
    <textarea style="max-height: 250px;" name="description" placeholder="Description" class="form-control" cols="30" rows="10"></textarea>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Create</button>
  </div>
</form>