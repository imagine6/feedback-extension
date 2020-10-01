<?php
namespace I6m\Feedback\Tests\Unit\Controller;

/**
 * Test case.
 */
class FeedbackControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \I6m\Feedback\Controller\FeedbackController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\I6m\Feedback\Controller\FeedbackController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllFeedbacksFromRepositoryAndAssignsThemToView()
    {

        $allFeedbacks = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $feedbackRepository = $this->getMockBuilder(\I6m\Feedback\Domain\Repository\FeedbackRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $feedbackRepository->expects(self::once())->method('findAll')->will(self::returnValue($allFeedbacks));
        $this->inject($this->subject, 'feedbackRepository', $feedbackRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('feedbacks', $allFeedbacks);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenFeedbackToView()
    {
        $feedback = new \I6m\Feedback\Domain\Model\Feedback();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('feedback', $feedback);

        $this->subject->showAction($feedback);
    }
}
