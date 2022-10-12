{include 'header.tpl'}

{if isset($smarty.session.USER_ID)}
    {include 'create_brands.tpl'}
{/if}

<table class="table">
    <tr>
        <th>Brand</th>
    </tr>
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
                {/if}
            </tr>
        {/foreach}
</table>
{if $error} 
<div class="alert alert-danger mt-3">
    {$error}
</div>
{/if}

{include 'footer.tpl'}