<?php
namespace Controllers;

use Core\View;
use Core\Controller;

/*
 * Welcome controller
 *
 * @author David Carr - dave@simplemvcframework.com
 * @version 2.2
 * @date June 27, 2014
 * @date updated May 18 2015
 */
class Skill extends Controller
{

    /**
     * Call the parent construct
     */
    public function __construct()
    {
        parent::__construct();
        $this->language->load('Skill');
    }

    public function index()
    {
        $data['title'] = $this->language->get('welcome_text');
        $data['welcome_message'] = $this->language->get('welcome_message');

        View::renderTemplate('header', $data);
        View::render('home/home', $data);
        View::renderTemplate('footer', $data);
    }

    /**
     * Define Index page title and load template files
     */
    public function save()
    {
        $postdata = array(
            'user' => 'testUser',
            'skillTile'  => 'skill Test Title',        
            'skillDescription'     => 'skill Test Description'                            
        );
        if $this->skills_model->insert_skill($postdata) > 0 {
            
        }
        $data['title'] = $this->language->get('welcome_text');
        $data['welcome_message'] = $this->language->get('welcome_message');

        View::renderTemplate('header', $data);
        View::render('home/home', $data);
        View::renderTemplate('footer', $data);
    }

}
