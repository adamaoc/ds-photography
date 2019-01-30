<div class="portfoliopage">
    <?php getHeader($data['header_data']); ?>
</div>
<div class="portfolio">
    <header>
        <h1>WORK</h1>
    </header>
    <main> 
        <?php foreach ($data['categories'] as $category) : ?>
            <div class="work-category-box">
                <?php echo $category['name']; ?>
            </div>
        <?php endforeach; ?>
    </main>
</div>
<?php getFooter($data['footer_data']); ?>
