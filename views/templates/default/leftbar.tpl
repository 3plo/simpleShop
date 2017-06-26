<div class="col-xs-0 col-sm-0 col-md-2 col-lg-2 text-left leftbar">
    <h2>Меню</h2>
    <ul class="category-list">
        {foreach $categories as $category}
            <li class="category"><a href="{$category.link}">{$category.title}</a></li>
        {/foreach}
    </ul>
</div>