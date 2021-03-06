<?php

class ViewTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers \pwf\basic\View
     */
    public function testView()
    {
        $view = Codeception\Util\Stub::make('\pwf\basic\View');

        $renderResult = $view->render(__DIR__.'/../_data/nestedView.php',
            [
            'title' => 'Title',
            'body' => 'Hello, World!',
            'testBlock' => 'blockValue'
        ]);

//        $this->assertEquals(file_get_contents(__DIR__.'/../_data/testViewResult.html'),
//            $renderResult);
//        $this->assertEquals('blockValue', trim($view->getBlock('testBlock')));
    }
}