<?php
class video extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('video_model');
        $this->load->helper('url');
        
    }
    
    public function index() {
        
        $data['video'] = $this->video_model->get_video_list();
        $data['url'] = $this->video_model->get_url();
        $data['title'] = "Video overview";
        $data['base_url'] = base_url();
        
        // Load the templates
        $this->load->view('templates/header.php', $data);
        $this->load->view('video/index.php', $data);
        $this->load->view('templates/footer.php', $data);
        
    }
    
    public function view($slug) {
        
        $data['base_url'] = base_url();
        $data['title'] = $this->video_model->get_video_title($slug);
        $data['video'] = $this->video_model->get_video($slug);
         
        // Load the templates
        $this->load->view('templates/header.php', $data);
        $this->load->view('video/view.php', $data);
        $this->load->view('templates/footer.php', $data);
    }
    
}
?>
