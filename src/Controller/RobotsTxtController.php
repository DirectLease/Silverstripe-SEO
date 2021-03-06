<?php

namespace CyberDuck\SEO\Controller;

use SilverStripe\Control\Controller;
use SilverStripe\Control\Director;
use SilverStripe\Control\HTTPRequest;

/**
 * SitemapXML_Controller
 *
 * robots.txt file controller
 *
 * @package silverstripe-seo
 * @license MIT License https://github.com/cyber-duck/silverstripe-seo/blob/master/LICENSE
 * @author  <andrewm@cyber-duck.co.uk>
 **/
class RobotsTxtController extends Controller 
{
    /**
     * Set the required content type header
     *
     * @since version 1.1.0
     *
     * @return void
     **/
    public function init()
    {
        parent::init(); 
        
        $this->response->addHeader('Content-Type','text/plain');
    }

    /**
     * Route request to default index method
     *
     * @param SS_HTTPRequest $request
     *
     * @since version 1.1.0
     *
     * @return ViewableData
     **/
    public function index(HTTPRequest $request)
    {
        return $this->customise([
            'Host' => Director::absoluteBaseUrl()
        ])->renderWith('RobotsTxt');
    }
}
