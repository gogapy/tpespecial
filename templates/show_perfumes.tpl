{include 'header.tpl'}
{* <div class="col-md-3">
    <form action="filter" method="post">
        <label class="form-label">Brand</label>
        <select name="brand"  class="form-control">
            <option value="#">Select a brand</option>
        {foreach from=$brands item=$brand}
            <option name="{$brand->brand_name}">{$brand->brand_name}</option>
        {/foreach}
        </select>
        <button type="submit" class="btn btn-small">Filtrar</button>
    </form>
</div> *}
{if isset($smarty.session.USER_ID)}
    {include 'show_create.tpl'}
{/if}
<table class="table">
    <tr>
        <th>Name</th>
        <th>Notes</th>
        <th>Qualification</th>
        <th>Longevity</th>
        <th>Brand</th>
        <th></th>
    </tr>
    {foreach from=$perfumes item=$perfume}
        <tr>
            <td><a style="text-decoration: none" href="perfumes/{$perfume->perfume_name}">{$perfume->perfume_name}</a></td>
            <td>{$perfume->notes}</td>
            <td>{$perfume->qualification}</td>
            <td>{$perfume->longevity}</td>
            <td>{$perfume->brand_name}</td>
            {if isset($smarty.session.USER_ID)}
                <td><a href='deleteperfume/{$perfume->id_perfume}'><button type="button" class="btn-close" aria-label="Close"></button></a></td>
                <td><a href='updateperfume/{$perfume->id_perfume}'><button type="button" class="btn btn-success">Update</button></a></td>
            {/if}
        </tr>
    {/foreach}

</table>
<p class="mt-3"><small>Perfumes quantity: {$count}</small></p>

{include 'footer.tpl'}  