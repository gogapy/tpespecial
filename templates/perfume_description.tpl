{include 'header.tpl'}

{foreach from=$perfumes item=$perfume}
    <img style='width: 300px' class='' src="{$perfume->perfume_image}" alt="">
    <h2>{$perfume->perfume_name} ({$perfume->brand_name})</h2>
    <p>{$perfume->perfume_description}</p>
{/foreach}

{include 'footer.tpl'}
