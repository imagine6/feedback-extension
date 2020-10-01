<?php
namespace I6m\Feedback\Domain\Model;


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
 * Textelement
 */
class Textelement extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * titel
     * 
     * @var string
     */
    protected $titel = '';

    /**
     * txt
     * 
     * @var string
     */
    protected $txt = '';

    /**
     * Returns the txt
     * 
     * @return string $txt
     */
    public function getTxt()
    {
        return $this->txt;
    }

    /**
     * Sets the txt
     * 
     * @param string $txt
     * @return void
     */
    public function setTxt($txt)
    {
        $this->txt = $txt;
    }

    /**
     * Returns the titel
     * 
     * @return string $titel
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * Sets the titel
     * 
     * @param string $titel
     * @return void
     */
    public function setTitel($titel)
    {
        $this->titel = $titel;
    }
}
