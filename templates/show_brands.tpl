{include 'header.tpl'}

{if isset($smarty.session.USER_ID)}
    {include 'create_brands.tpl'}
{/if}

<table class="table">
    <tr>
        <th>Brand</th>
    </tr>
    {* {if $error} 
        <div class="alert alert-warning mt-3">
            {$error}
        </div>
    {/if} *}
    {if isset($smarty.session.USER_ID)}
        <div class="alert alert-warning mt-3">
            To eliminate a brand first you need to delete all the perfumes with that brand. (THIS IS FOR DATABASE SECURITY)
        </div>
    {/if}
        {foreach from=$brands item=$brand}
            <tr>
                <td>
                    <a href='brands/{$brand->brand_name}' style='text-decoration:none'>
                        {$brand->brand_name}
                    </a>
                </td>
                {if isset($smarty.session.USER_ID)}

                    <td>
                        <a href='deletebrand/{$brand->id_brand}'>
                            <button type="button" class="btn-close" aria-label="Close"></button>
                        </a>
                    </td>
                    <td>
                        <a href='updatebrand/{$brand->id_brand}'>
                            <button type="button" class="btn btn-success">Update</button>
                        </a>
                    </td>
                {/if}
            </tr>
        {/foreach}
</table>


{include 'footer.tpl'}