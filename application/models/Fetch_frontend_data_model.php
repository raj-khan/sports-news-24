<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fetch_frontend_data_model extends CI_Model{


//   main_Slider_news
    public function view_main_Slider_news()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('status', '1');
        $this->db->limit('5');
        $this->db->order_by("id","desc");
        $result_query = $this->db->get();
        $main_slider_news = $result_query->result();

        return $main_slider_news;
    }

    //Find Main Category
    public function find_main_category($id){
        $this->db->select('*');
        $this->db->from('sub_categories');
        $this->db->where('id',$id);
        $result_query = $this->db->get();
        $category_name = $result_query->row();

        return $category_name;
    }



//   view_sidebar_Slider_news
    public function view_sidebar_Slider_news()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('status', '1');
        $this->db->order_by('id', 'RANDOM');
        $this->db->limit('2');
        $result_query = $this->db->get();
        $main_slider_news = $result_query->result();

        return $main_slider_news;
    }


//   view_sub_category
    public function view_sub_category()
    {
        $this->db->select('*');
        $this->db->from('sub_categories');
        $this->db->where('status', '1');
        $this->db->order_by('id', 'RANDOM');
        $this->db->limit('3');
        $result_query = $this->db->get();
        $main_slider_news = $result_query->result();

        return $main_slider_news;
    }


//   view_latest_news_first_item
    public function view_latest_news_first_item()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('status', '1');
        $this->db->order_by('id', 'RANDOM');
        $result_query = $this->db->get();
        $latest_news_first_item = $result_query->row();

        return $latest_news_first_item;
    }


//   view_latest_news_bottom_item
    public function view_latest_news_bottom_item()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('status', '1');
        $this->db->order_by('id', 'RANDOM');
        $this->db->limit('4');
        $result_query = $this->db->get();
        $latest_news_first_item = $result_query->result();

        return $latest_news_first_item;
    }


//   view_trending_news_first_item
    public function view_trending_news_first_item()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('status', '1');
        $this->db->order_by('id', 'RANDOM');
        $result_query = $this->db->get();
        $latest_news_first_item = $result_query->row();

        return $latest_news_first_item;
    }


//   view_trending_news_bottom_item
    public function view_trending_news_bottom_item()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('status', '1');
        $this->db->order_by('id', 'RANDOM');
        $this->db->limit('6');
        $result_query = $this->db->get();
        $latest_news_first_item = $result_query->result();

        return $latest_news_first_item;
    }


//   view_popular_news_first_item
    public function view_popular_news_first_item()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('status', '1');
        $this->db->order_by('id', 'RANDOM');
        $result_query = $this->db->get();
        $latest_news_first_item = $result_query->row();

        return $latest_news_first_item;
    }


//   view_popular_news_bottom_item
    public function view_popular_news_bottom_item()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('status', '1');
        $this->db->order_by('id', 'RANDOM');
        $this->db->limit('3');
        $result_query = $this->db->get();
        $latest_news_first_item = $result_query->result();

        return $latest_news_first_item;
    }

//   view_latest_news
    public function view_latest_news()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('status', '1');
        $this->db->order_by('id', 'DESC');
        $this->db->limit('5');
        $result_query = $this->db->get();
        $latest_news_first_item = $result_query->result();

        return $latest_news_first_item;
    }


//   view_recent_news
    public function view_recent_news()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('status', '1');
        $this->db->order_by('id', 'DESC');
        $this->db->limit('3');
        $result_query = $this->db->get();
        $latest_news_first_item = $result_query->result();

        return $latest_news_first_item;
    }

    //show_news_details_info
    public function show_news_details_info($id){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('id', $id);
        $this->db->where('status', 1);
        $this->db->order_by('created_at', 'desc');
        $query_result = $this->db->get();
        $news_details = $query_result->row();
        return $news_details;
    }



//   view_also_like_this
    public function view_also_like_this()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('status', '1');
        $this->db->order_by('id', 'DESC');
        $this->db->limit('3');
        $result_query = $this->db->get();
        $latest_news_first_item = $result_query->result();

        return $latest_news_first_item;
    }


//   view_recent_stories
    public function view_recent_stories()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('status', '1');
        $this->db->order_by('id', 'RANDOM');
        $this->db->limit('10');
        $result_query = $this->db->get();
        $latest_news_first_item = $result_query->result();

        return $latest_news_first_item;
    }

//   view_recent_stories_common_page
    public function view_recent_stories_common_page()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('status', '1');
        $this->db->order_by('id', 'DESC');
        $this->db->limit('10');
        $result_query = $this->db->get();
        $latest_news_first_item = $result_query->result();

        return $latest_news_first_item;
    }


//   view_popular_stories_common_page
    public function view_popular_stories_common_page()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('status', '1');
        $this->db->order_by('id', 'RANDOM');
        $this->db->limit('10');
        $result_query = $this->db->get();
        $latest_news_first_item = $result_query->result();

        return $latest_news_first_item;
    }


//   view_most_read_stories
    public function view_most_read_stories()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('status', '1');
        $this->db->order_by('id', 'RANDOM');
        $this->db->limit('10');
        $result_query = $this->db->get();
        $latest_news_first_item = $result_query->result();

        return $latest_news_first_item;
    }

    //view_menu
    public function view_menu(){
        $this->db->select('*');
        $this->db->from('sub_categories');
        $this->db->where('status', '1');
        $this->db->order_by('id', 'DESC');
        $result_query = $this->db->get();
        $menu= $result_query->result();

        return $menu;
    }

    //viewAbout
    public function viewAbout(){
        $this->db->select('*');
        $this->db->from('common_page');
        $this->db->where('category_id', '1');
        $this->db->order_by('id', 'DESC');
        $result_query = $this->db->get();
        $menu = $result_query->row();

        return $menu;
    }

    //viewCopyright
    public function viewCopyright(){
        $this->db->select('*');
        $this->db->from('common_page');
        $this->db->where('category_id', '2');
        $this->db->order_by('id', 'DESC');
        $result_query = $this->db->get();
        $menu = $result_query->row();

        return $menu;
    }

    //viewCopyright
    public function viewPrivacyPolicy(){
        $this->db->select('*');
        $this->db->from('common_page');
        $this->db->where('category_id', '3');
        $this->db->order_by('id', 'DESC');
        $result_query = $this->db->get();
        $menu = $result_query->row();

        return $menu;
    }


    //show_all_news_info
    public function showLargeNews($id){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('category_id', $id);
        $this->db->where('status', '1');
        $this->db->order_by('id', 'DESC');
        $this->db->limit('1');
        $result_query = $this->db->get();
        $allNews = $result_query->row();

        return $allNews;
    }


    //show_recent_news
    public function show_recent_news($id){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('category_id', $id);
        $this->db->where('status', '1');
        $this->db->order_by('id', 'DESC');
        $this->db->limit('9');
        $result_query = $this->db->get();
        $allNews = $result_query->result();

        return $allNews;
    }


    //showCommonNews
    public function showCommonNews($id){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('category_id', $id);
        $this->db->where('status', '1');
        $this->db->order_by('id', 'DESC');
        $this->db->limit('12');
        $result_query = $this->db->get();
        $allNews = $result_query->result();

        return $allNews;
    }


    //showGallery
    public function showGallery($id){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('category_id', $id);
        $this->db->where('status', '1');
        $this->db->order_by('id', 'DESC');
        $this->db->limit('12');
        $result_query = $this->db->get();
        $allNews = $result_query->result();

        return $allNews;
    }

    //showFeatures
    public function showFeatures($id){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('category_id', $id);
        $this->db->where('status', '1');
        $this->db->order_by('id', 'DESC');
        $this->db->limit('7');
        $result_query = $this->db->get();
        $allNews = $result_query->result();

        return $allNews;
    }

    //showFeaturesTitle
    public function showFeaturesTitle($id){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('category_id', $id);
        $this->db->where('status', '1');
        $this->db->order_by('id', 'DESC');
        $this->db->limit('20');
        $result_query = $this->db->get();
        $allNews = $result_query->result();

        return $allNews;
    }

    //mostReadRandom
    public function mostReadRandom($id){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('category_id', $id);
        $this->db->where('status', '1');
        $this->db->order_by('id', 'DESC');
        $this->db->limit('20');
        $result_query = $this->db->get();
        $allNews = $result_query->result();

        return $allNews;
    }

    //Category
    public function categoryName($id){
        $this->db->select('*');
        $this->db->from('sub_categories');
        $this->db->where('id', $id);
        $this->db->where('status', '1');
        $result_query = $this->db->get();
        $allNews = $result_query->row();

        return $allNews;
    }

    //fetchNextNew
    public function fetchNextNews($id){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('id >',  $id);
        $this->db->order_by('id',  "ASC");
        $this->db->limit('1');
        $result_query = $this->db->get();
        $nextNews = $result_query->row();
        return $nextNews;

    }


    //fetchNextNew
    public function fetchPrevNews($id){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('id <',  $id);
        $this->db->order_by('id',  "DESC");
        $this->db->limit('1');
        $result_query = $this->db->get();
        $prevNews = $result_query->row();
        return $prevNews;

    }

}
