<?php
namespace I6m\Feedback\Controller;


/***
 *
 * This file is part of the "feedback" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 
 *
 ***/
/**
 * FeedbackController
 */
class FeedbackController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * feedbackRepository
     * 
     * @var \I6m\Feedback\Domain\Repository\FeedbackRepository
     */
    protected $feedbackRepository = null;

    /**
     * @param \I6m\Feedback\Domain\Repository\FeedbackRepository $feedbackRepository
     */
    public function injectFeedbackRepository(\I6m\Feedback\Domain\Repository\FeedbackRepository $feedbackRepository)
    {
        $this->feedbackRepository = $feedbackRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $feedbacks = $this->feedbackRepository->findAll();
        $this->view->assign('feedbacks', $feedbacks);
    }

    /**
     * action show
     * 
     * @param \I6m\Feedback\Domain\Model\Feedback $feedback
     * @return void
     */
    public function showAction(\I6m\Feedback\Domain\Model\Feedback $feedback)
    {
        $this->view->assign('feedback', $feedback);
    }
}
