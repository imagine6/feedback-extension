<?php
namespace I6m\Feedback\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class TextelementTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \I6m\Feedback\Domain\Model\Textelement
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \I6m\Feedback\Domain\Model\Textelement();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitel()
        );
    }

    /**
     * @test
     */
    public function setTitelForStringSetsTitel()
    {
        $this->subject->setTitel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'titel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTxtReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTxt()
        );
    }

    /**
     * @test
     */
    public function setTxtForStringSetsTxt()
    {
        $this->subject->setTxt('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'txt',
            $this->subject
        );
    }
}
