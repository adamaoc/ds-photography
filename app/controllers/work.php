<?php

class Work extends Controller
{
	public function index()
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

    $worksModel = $this->model('WorksModel');
    $categories = $worksModel->getCategories();

	$this->view('work/index', array(
      'header_data' => $header_data,
      'footer_data' => $footer_data,
      'page_data' => $pageData[0],
      'categories' => $categories
    ));
	}
}