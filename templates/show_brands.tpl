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
            </tr>
        {/foreach}
</table>

{include 'footer.tpl'}