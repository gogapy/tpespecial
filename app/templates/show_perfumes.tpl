{include file="app/view/perfume.view.php" assign=name var1=value}
<table class="table">
    <tr>
        <th>Name</th>
        <th>Notes</th>
        <th>Qualification</th>
        <th>Durability</th>
        <th>Brand</th>
    </tr>
    {foreach from=$perfumes item=$perfume}
        <tr>
            <span><td>{$perfume->perfume_name}</td></span>
            <span><td>{$perfume->notes}</td></span>
            <span><td>{$perfume->qualification}</td></span>
            <span><td>{$perfume->durability}</td></span>
            <span><td>{$perfume->brand_name}</td></span>
        </tr>
    {/foreach}

</table>