<?php 
    $categories = $data['categories'];

    $baseURL = 'https://ampnet.sfo2.cdn.digitaloceanspaces.com/Denilson/';

?>
<?php getHeader($data['header_data']); ?>
<div class="portfolio">
    <header>
        <h1>WORK</h1>
    </header>
    <main> 
        <?php foreach ($categories as $key => $category) : ?>
            <a href="/work/<?= $category['slug'] ?>" class="work-category-box" style="background-image: url(<?= $baseURL . $key . '/' . $category['cover'] ?>)">
                <span><?php echo $category['title']; ?></span>
            </a>
        <?php endforeach; ?>
    </main>
</div>
<?php getFooter($data['footer_data']); ?>
