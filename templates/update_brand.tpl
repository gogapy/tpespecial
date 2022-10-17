{include "header.tpl"}
 {foreach from=$brands item=$brand}
  <form action="brandupdated/{$brand->id_brand}" method="POST" class="row g-3 mt-1" enctype="multipart/form-data">
    <div class="col-md-6">
      <label class="form-label">Brand name</label>
      <input name="perfume" type="text" class="form-control" value="{$brand->brand_name}" placeholder="Brand name" required>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
 {/foreach}
{include "footer.tpl"}