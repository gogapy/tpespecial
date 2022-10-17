<table class="table">
    <tr>
        <th>Name</th>
        <th>Notes</th>
        <th>Qualification</th>
        <th>Durability</th>
        <th>Brand</th>
        {if isset($smarty.session.USER_ID)}
            <th>Delete</th>
            <th>Update</th>
        {/if}
    </tr>
    {foreach from=$perfumes item=$perfume}
        <tr>
            <span><td>{$perfume->perfume_name}</td></span>
            <span><td>{$perfume->notes}</td></span>
            <span><td>{$perfume->qualification}</td></span>
            <span><td>{$perfume->durability}</td></span>
            <span><td>{$perfume->brand_name}</td></span>
            {if isset($smarty.session.USER_ID)}
                <td><a href='deleteperfume/{$perfume->id_perfume}'><button type="button" class="btn-close" aria-label="Close"></button></a></td>
                <td><a href='updateperfume/{$perfume->id_perfume}'><button type="button" class="btn btn-success">Update</button></a></td>
            {/if}
        </tr>
    {/foreach}
</table>
<p class="mt-3"><small>Perfumes quantity: {$count}</small></p>
