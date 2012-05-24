<?php
class video_model extends CI_Model {
    
    // load the file helper
    
    private $video_folder = 'public/videos/';
    
    
    public function get_video_list () {
        
        $this->load->helper('file');
        $this->load->helper('url');
        
        $videos = get_filenames($this->video_folder);
      
        return $videos;
    }
    
    public function get_url() {
        $url = site_url()."/video/view/";
        return $url;
    }
    
    public function get_video($video) {
        $video = base_url().$this->video_folder.$video;
        
        return $video;
    }
    
    /**
     * Extracts the filename without extension
     * "hello.m4v" --> "hello"
     * @param String $video
     * @return String
     */
    
    public function get_video_title($video) {
        
        $title = urldecode($video);
        $title = pathinfo($title);
        return $title['filename'];
        
    }
    
}
?>
