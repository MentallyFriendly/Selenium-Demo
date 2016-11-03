<?php

include __DIR__.'/../vendor/autoload.php';

class WhatsMyIPTest extends PHPUnit_Extensions_Selenium2TestCase
{
    private $screenshotDirectory = '/app/screenshots/';
    private $browserType = 'chrome';
    private $baseUrl = 'http://www.whatsmyip.org/';
    private $seleniumHub = 'selenium_hub_1';

    protected function setUp()
    {
        parent::setUp();

        $this->setBrowser($this->browserType);
        $this->setBrowserUrl($this->baseUrl);
        $this->setHost($this->seleniumHub);
        
        if (! file_exists($this->screenshotDirectory)) {
            mkdir($this->screenshotDirectory);
        }
    }

    public function testIsChromeBrowser()
    {
        $this->url($this->baseUrl);
        $this->saveScreenshot(__FUNCTION__, __LINE__);
        $this->assertContains('Chrome', $this->byId('useragent')->text());
        $this->assertNotContains('Firefox', $this->byId('useragent')->text());
    }
    
    protected function saveScreenshot($directory, $filename)
    {
        if (!file_exists($this->screenshotDirectory.$directory))
        {
            mkdir($this->screenshotDirectory.$directory);
        }
        
        file_put_contents($this->screenshotDirectory.$directory.'/'.$filename.'-'.time().'.png', $this->currentScreenshot());
    }
}

//EOF
