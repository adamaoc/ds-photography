<?php

class Work extends Controller
{
	public function index($path = 'index')
	{
    $user = new User;
    $user_data = array(
      "user" => $user->data(),
      "loggedin" => $user->isLoggedIn()
    );
    $pageModel = $this->model('PageModel');
    $pageData = $pageModel->getPageData('about');

    $schoolModel = $this->model('SchoolModel');
    $school = $schoolModel->getSchoolData();
    $socialModel = $this->model('SocialModel');
    $social_links = $socialModel->getSocialLinks();

    $header_data = array(
      'bodyclass' => 'portfoliopage',
      'seo_title' => $pageData[0]['seo_title'],
      'seo_desc' => $pageData[0]['seo_desc'],
      'logo' => $school['header_logo']
    );
    $footer_data = array(
      'school' => $school,
      'social_links' => $social_links,
      'user_data' => $user_data
    );

    // ---- //

    // $worksModel = $this->model('WorksModel');
    // $categories = $worksModel->getCategories();

    $categories = array(
      'portrait' => array(
          'title' => 'Portrait',
          'slug' => 'portrait',
          'cover' => 'Kilee5_web.jpg',
          'photos' => array()
      ),
      'cityscape' => array(
          'title' => 'City Scape',
          'slug' => 'cityscape',
          'cover' => 'IMG_2844%202.jpg',
          'photos' => array(
              'IMG_2844%202.jpg',
              'IMG_2845%202.jpg',
              'IMG_7523.jpg'
          )
      ),
      'confrences' => array(
          'title' => 'Confrences',
          'slug' => 'confrences',
          'cover' => 'RefuelDay2-1.08.jpg',
          'photos' => array()
      ),
      'freelife' => array(
          'title' => 'Free Life Church',
          'slug' => 'flc',
          'cover' => 'IMG_3012.jpg',
          'photos' => array()
      ),
      'sports' => array(
          'title' => 'Sports',
          'slug' => 'sports',
          'cover' => 'IMG_4860.jpg',
          'photos' => array()
      )

  );

    $title = '';
    $location = 'work/index';
    if ($path !== 'index') {
      $title = $categories[$path]['title'];
      $location = 'work/single';
    }

	$this->view($location, array(
      'title' => $title,
      'header_data' => $header_data,
      'footer_data' => $footer_data,
      'page_data' => $pageData[0],
      'categories' => $categories
    ));
	}
}
