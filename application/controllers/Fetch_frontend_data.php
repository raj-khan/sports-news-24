<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fetch_frontend_data extends CI_Controller {

    //show_details_news
    public function show_details_news($id, $title){
        $data = array();
        $data['currentUrl'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $data['news_details'] = $this->Fetch_frontend_data_model->show_news_details_info($id);
        $data['meta_keywords'] = $this->Fetch_frontend_data_model->show_news_details_info($id)->meta_keywords;
        $data['meta_description'] = $this->Fetch_frontend_data_model->show_news_details_info($id)->meta_description;
        $data['img'] = $this->Fetch_frontend_data_model->show_news_details_info($id)->img;
        $data['news'] = $this->Fetch_frontend_data_model->show_news_details_info($id)->news;
        $data['title'] = $this->Fetch_frontend_data_model->show_news_details_info($id)->title;
        $data['nextNews'] = $this->Fetch_frontend_data_model->fetchNextNews($id);
        $data['prevNews'] = $this->Fetch_frontend_data_model->fetchPrevNews($id);
        $data['mainContent'] = $this->load->view('pages/all_news_details', $data, TRUE);
        $this->load->view('master', $data);
    }



    //show menu page
    public function show_menu_news($id, $title){

        $data = array();
        $data['currentUrl'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $data['title'] = $this->Fetch_frontend_data_model->categoryName($id)->name . ' -mamasports24.com';
        $data['largeNews'] = $this->Fetch_frontend_data_model->showLargeNews($id);
        $data['recentNews'] = $this->Fetch_frontend_data_model->show_recent_news($id);
        $data['commonNews'] = $this->Fetch_frontend_data_model->showCommonNews($id);
        $data['gallery'] = $this->Fetch_frontend_data_model->showGallery($id);
        $data['showFeatures'] = $this->Fetch_frontend_data_model->showFeatures($id);
        $data['showFeaturesTitle'] = $this->Fetch_frontend_data_model->showFeaturesTitle($id);
        $data['mostReadRandom'] = $this->Fetch_frontend_data_model->mostReadRandom($id);
        $data['mainContent'] = $this->load->view('pages/sports', $data, TRUE);
        $this->load->view('master', $data);
    }



}
