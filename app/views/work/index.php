<?php 
    $categories = array(
        'portrait' => array(
            'title' => 'Portrait',
            'cover' => 'Kilee5_web.jpg',
            'photos' => array()
        ),
        'cityscape' => array(
            'title' => 'City Scape',
            'cover' => 'IMG_2844%202.jpg',
            'photos' => array(
                'IMG_2844%202.jpg',
                'IMG_2845%202.jpg',
                'IMG_7523.jpg'
            )
        ),
        'confrences' => array(
            'title' => 'Confrences',
            'cover' => 'RefuelDay2-1.08.jpg',
            'photos' => array()
        ),
        'freelife' => array(
            'title' => 'Free Life Church',
            'cover' => 'IMG_3012.jpg',
            'photos' => array()
        ),
        'sports' => array(
            'title' => 'Sports',
            'cover' => 'IMG_4860.jpg',
            'photos' => array()
        )

    );

    $baseURL = 'https://ampnet.sfo2.cdn.digitaloceanspaces.com/Denilson/';

?>
<div class="portfoliopage">
    <?php getHeader($data['header_data']); ?>
</div>
<div class="portfolio">
    <header>
        <h1>WORK</h1>
    </header>
    <main> 
        <?php foreach ($categories as $key => $category) : ?>
            <a href="" class="work-category-box" style="background-image: url(<?= $baseURL . $key . '/' . $category['cover'] ?>)">
                <span><?php echo $category['title']; ?></span>
            </a>
        <?php endforeach; ?>
    </main>
</div>
<?php getFooter($data['footer_data']); ?>
