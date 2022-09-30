<table class="table">
    <tr>
        <th>Brand</th>
    </tr>
    {foreach from=$brands item=$brand}
    <tr>
            <td>
                <a href='{$brand->brand_name}' style='text-decoration:none'>{$brand->brand_name}
                </a>
            </td>
    </tr>
    {/foreach}
</table>
