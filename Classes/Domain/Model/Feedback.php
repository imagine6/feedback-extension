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
 * Feedback
 */
class Feedback extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * fragebogen
     * 
     * @var int
     */
    protected $fragebogen = 0;

    /**
     * schema1textDdim1
     * 
     * @var string
     */
    protected $schema1textDdim1 = '';

    /**
     * schema1textA
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema1textA = null;

    /**
     * schema1textBdim1
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema1textBdim1 = null;

    /**
     * schema1textEdim1
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema1textEdim1 = null;

    /**
     * schemaTyp
     * 
     * @var int
     */
    protected $schemaTyp = 0;

    /**
     * schema1textDdim2
     * 
     * @var string
     */
    protected $schema1textDdim2 = '';

    /**
     * schema1textDdim3
     * 
     * @var string
     */
    protected $schema1textDdim3 = '';

    /**
     * schema1textDdim4
     * 
     * @var string
     */
    protected $schema1textDdim4 = '';

    /**
     * schema1textDdim5
     * 
     * @var string
     */
    protected $schema1textDdim5 = '';

    /**
     * schema2textD
     * 
     * @var string
     */
    protected $schema2textD = '';

    /**
     * schema1textCdim1
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema1textCdim1 = null;

    /**
     * schema1textBdim2
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema1textBdim2 = null;

    /**
     * schema1textBdim3
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema1textBdim3 = null;

    /**
     * schema1textBdim4
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema1textBdim4 = null;

    /**
     * schema1textBdim5
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema1textBdim5 = null;

    /**
     * schema1textCdim2
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema1textCdim2 = null;

    /**
     * schema1textCdim3
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema1textCdim3 = null;

    /**
     * schema1textCdim4
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema1textCdim4 = null;

    /**
     * schema1textCdim5
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema1textCdim5 = null;

    /**
     * schema1textEdim2
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema1textEdim2 = null;

    /**
     * schema1textEdim3
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema1textEdim3 = null;

    /**
     * schema1textEdim4
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema1textEdim4 = null;

    /**
     * schema1textEdim5
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema1textEdim5 = null;

    /**
     * schema2textA
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema2textA = null;

    /**
     * schema2textB
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema2textB = null;

    /**
     * schema2textC
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema2textC = null;

    /**
     * schema2textEdim1
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema2textEdim1 = null;

    /**
     * schema2textEdim2
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema2textEdim2 = null;

    /**
     * schema2textEdim3
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema2textEdim3 = null;

    /**
     * schema2textEdim4
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema2textEdim4 = null;

    /**
     * schema2textEdim5
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema2textEdim5 = null;

    /**
     * schema2textEdim6
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema2textEdim6 = null;

    /**
     * schema2textFdim1
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema2textFdim1 = null;

    /**
     * schema2textFdim2
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema2textFdim2 = null;

    /**
     * schema2textFdim3
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema2textFdim3 = null;

    /**
     * schema2textFdim4
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema2textFdim4 = null;

    /**
     * schema2textFdim5
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema2textFdim5 = null;

    /**
     * schema2textFdim6
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement>
     */
    protected $schema2textFdim6 = null;

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->schema1textA = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema1textBdim1 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema1textEdim1 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema1textCdim1 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema1textBdim2 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema1textBdim3 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema1textBdim4 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema1textBdim5 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema1textCdim2 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema1textCdim3 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema1textCdim4 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema1textCdim5 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema1textEdim2 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema1textEdim3 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema1textEdim4 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema1textEdim5 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema2textA = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema2textB = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema2textC = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema2textEdim1 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema2textEdim2 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema2textEdim3 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema2textEdim4 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema2textEdim5 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema2textEdim6 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema2textFdim1 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema2textFdim2 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema2textFdim3 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema2textFdim4 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema2textFdim5 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schema2textFdim6 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the fragebogen
     * 
     * @return int $fragebogen
     */
    public function getFragebogen()
    {
        return $this->fragebogen;
    }

    /**
     * Sets the fragebogen
     * 
     * @param int $fragebogen
     * @return void
     */
    public function setFragebogen($fragebogen)
    {
        $this->fragebogen = $fragebogen;
    }

    /**
     * Returns the schema1textDdim1
     * 
     * @return string schema1textDdim1
     */
    public function getSchema1textDdim1()
    {
        return $this->schema1textDdim1;
    }

    /**
     * Sets the schema1textDdim1
     * 
     * @param string $schema1textDdim1
     * @return void
     */
    public function setSchema1textDdim1($schema1textDdim1)
    {
        $this->schema1textDdim1 = $schema1textDdim1;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textum
     * @return void
     */
    public function addSchema1textum(\I6m\Feedback\Domain\Model\Textelement $schema1textum)
    {
        $this->schema1textA->attach($schema1textum);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textumToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema1textum(\I6m\Feedback\Domain\Model\Textelement $schema1textumToRemove)
    {
        $this->schema1textA->detach($schema1textumToRemove);
    }

    /**
     * Returns the schema1textA
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> schema1textA
     */
    public function getSchema1textA()
    {
        return $this->schema1textA;
    }

    /**
     * Sets the schema1textA
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textA
     * @return void
     */
    public function setSchema1textA(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema1textA)
    {
        $this->schema1textA = $schema1textA;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textBdim1
     * @return void
     */
    public function addSchema1textBdim1(\I6m\Feedback\Domain\Model\Textelement $schema1textBdim1)
    {
        $this->schema1textBdim1->attach($schema1textBdim1);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textBdim1ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema1textBdim1(\I6m\Feedback\Domain\Model\Textelement $schema1textBdim1ToRemove)
    {
        $this->schema1textBdim1->detach($schema1textBdim1ToRemove);
    }

    /**
     * Returns the schema1textBdim1
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> schema1textBdim1
     */
    public function getSchema1textBdim1()
    {
        return $this->schema1textBdim1;
    }

    /**
     * Sets the schema1textBdim1
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textBdim1
     * @return void
     */
    public function setSchema1textBdim1(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema1textBdim1)
    {
        $this->schema1textBdim1 = $schema1textBdim1;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textEdim1
     * @return void
     */
    public function addSchema1textEdim1(\I6m\Feedback\Domain\Model\Textelement $schema1textEdim1)
    {
        $this->schema1textEdim1->attach($schema1textEdim1);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textEdim1ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema1textEdim1(\I6m\Feedback\Domain\Model\Textelement $schema1textEdim1ToRemove)
    {
        $this->schema1textEdim1->detach($schema1textEdim1ToRemove);
    }

    /**
     * Returns the schema1textEdim1
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> schema1textEdim1
     */
    public function getSchema1textEdim1()
    {
        return $this->schema1textEdim1;
    }

    /**
     * Sets the schema1textEdim1
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textEdim1
     * @return void
     */
    public function setSchema1textEdim1(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema1textEdim1)
    {
        $this->schema1textEdim1 = $schema1textEdim1;
    }

    /**
     * Returns the schemaTyp
     * 
     * @return int $schemaTyp
     */
    public function getSchemaTyp()
    {
        return $this->schemaTyp;
    }

    /**
     * Sets the schemaTyp
     * 
     * @param int $schemaTyp
     * @return void
     */
    public function setSchemaTyp($schemaTyp)
    {
        $this->schemaTyp = $schemaTyp;
    }

    /**
     * Returns the schema1textDdim2
     * 
     * @return string $schema1textDdim2
     */
    public function getSchema1textDdim2()
    {
        return $this->schema1textDdim2;
    }

    /**
     * Sets the schema1textDdim2
     * 
     * @param string $schema1textDdim2
     * @return void
     */
    public function setSchema1textDdim2($schema1textDdim2)
    {
        $this->schema1textDdim2 = $schema1textDdim2;
    }

    /**
     * Returns the schema1textDdim3
     * 
     * @return string $schema1textDdim3
     */
    public function getSchema1textDdim3()
    {
        return $this->schema1textDdim3;
    }

    /**
     * Sets the schema1textDdim3
     * 
     * @param string $schema1textDdim3
     * @return void
     */
    public function setSchema1textDdim3($schema1textDdim3)
    {
        $this->schema1textDdim3 = $schema1textDdim3;
    }

    /**
     * Returns the schema1textDdim4
     * 
     * @return string $schema1textDdim4
     */
    public function getSchema1textDdim4()
    {
        return $this->schema1textDdim4;
    }

    /**
     * Sets the schema1textDdim4
     * 
     * @param string $schema1textDdim4
     * @return void
     */
    public function setSchema1textDdim4($schema1textDdim4)
    {
        $this->schema1textDdim4 = $schema1textDdim4;
    }

    /**
     * Returns the schema1textDdim5
     * 
     * @return string $schema1textDdim5
     */
    public function getSchema1textDdim5()
    {
        return $this->schema1textDdim5;
    }

    /**
     * Sets the schema1textDdim5
     * 
     * @param string $schema1textDdim5
     * @return void
     */
    public function setSchema1textDdim5($schema1textDdim5)
    {
        $this->schema1textDdim5 = $schema1textDdim5;
    }

    /**
     * Returns the schema2textD
     * 
     * @return string $schema2textD
     */
    public function getSchema2textD()
    {
        return $this->schema2textD;
    }

    /**
     * Sets the schema2textD
     * 
     * @param string $schema2textD
     * @return void
     */
    public function setSchema2textD($schema2textD)
    {
        $this->schema2textD = $schema2textD;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textCdim1
     * @return void
     */
    public function addSchema1textCdim1(\I6m\Feedback\Domain\Model\Textelement $schema1textCdim1)
    {
        $this->schema1textCdim1->attach($schema1textCdim1);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textCdim1ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema1textCdim1(\I6m\Feedback\Domain\Model\Textelement $schema1textCdim1ToRemove)
    {
        $this->schema1textCdim1->detach($schema1textCdim1ToRemove);
    }

    /**
     * Returns the schema1textCdim1
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textCdim1
     */
    public function getSchema1textCdim1()
    {
        return $this->schema1textCdim1;
    }

    /**
     * Sets the schema1textCdim1
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textCdim1
     * @return void
     */
    public function setSchema1textCdim1(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema1textCdim1)
    {
        $this->schema1textCdim1 = $schema1textCdim1;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textBdim2
     * @return void
     */
    public function addSchema1textBdim2(\I6m\Feedback\Domain\Model\Textelement $schema1textBdim2)
    {
        $this->schema1textBdim2->attach($schema1textBdim2);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textBdim2ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema1textBdim2(\I6m\Feedback\Domain\Model\Textelement $schema1textBdim2ToRemove)
    {
        $this->schema1textBdim2->detach($schema1textBdim2ToRemove);
    }

    /**
     * Returns the schema1textBdim2
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textBdim2
     */
    public function getSchema1textBdim2()
    {
        return $this->schema1textBdim2;
    }

    /**
     * Sets the schema1textBdim2
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textBdim2
     * @return void
     */
    public function setSchema1textBdim2(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema1textBdim2)
    {
        $this->schema1textBdim2 = $schema1textBdim2;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textBdim3
     * @return void
     */
    public function addSchema1textBdim3(\I6m\Feedback\Domain\Model\Textelement $schema1textBdim3)
    {
        $this->schema1textBdim3->attach($schema1textBdim3);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textBdim3ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema1textBdim3(\I6m\Feedback\Domain\Model\Textelement $schema1textBdim3ToRemove)
    {
        $this->schema1textBdim3->detach($schema1textBdim3ToRemove);
    }

    /**
     * Returns the schema1textBdim3
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textBdim3
     */
    public function getSchema1textBdim3()
    {
        return $this->schema1textBdim3;
    }

    /**
     * Sets the schema1textBdim3
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textBdim3
     * @return void
     */
    public function setSchema1textBdim3(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema1textBdim3)
    {
        $this->schema1textBdim3 = $schema1textBdim3;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textBdim4
     * @return void
     */
    public function addSchema1textBdim4(\I6m\Feedback\Domain\Model\Textelement $schema1textBdim4)
    {
        $this->schema1textBdim4->attach($schema1textBdim4);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textBdim4ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema1textBdim4(\I6m\Feedback\Domain\Model\Textelement $schema1textBdim4ToRemove)
    {
        $this->schema1textBdim4->detach($schema1textBdim4ToRemove);
    }

    /**
     * Returns the schema1textBdim4
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textBdim4
     */
    public function getSchema1textBdim4()
    {
        return $this->schema1textBdim4;
    }

    /**
     * Sets the schema1textBdim4
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textBdim4
     * @return void
     */
    public function setSchema1textBdim4(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema1textBdim4)
    {
        $this->schema1textBdim4 = $schema1textBdim4;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textBdim5
     * @return void
     */
    public function addSchema1textBdim5(\I6m\Feedback\Domain\Model\Textelement $schema1textBdim5)
    {
        $this->schema1textBdim5->attach($schema1textBdim5);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textBdim5ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema1textBdim5(\I6m\Feedback\Domain\Model\Textelement $schema1textBdim5ToRemove)
    {
        $this->schema1textBdim5->detach($schema1textBdim5ToRemove);
    }

    /**
     * Returns the schema1textBdim5
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textBdim5
     */
    public function getSchema1textBdim5()
    {
        return $this->schema1textBdim5;
    }

    /**
     * Sets the schema1textBdim5
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textBdim5
     * @return void
     */
    public function setSchema1textBdim5(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema1textBdim5)
    {
        $this->schema1textBdim5 = $schema1textBdim5;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textCdim2
     * @return void
     */
    public function addSchema1textCdim2(\I6m\Feedback\Domain\Model\Textelement $schema1textCdim2)
    {
        $this->schema1textCdim2->attach($schema1textCdim2);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textCdim2ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema1textCdim2(\I6m\Feedback\Domain\Model\Textelement $schema1textCdim2ToRemove)
    {
        $this->schema1textCdim2->detach($schema1textCdim2ToRemove);
    }

    /**
     * Returns the schema1textCdim2
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textCdim2
     */
    public function getSchema1textCdim2()
    {
        return $this->schema1textCdim2;
    }

    /**
     * Sets the schema1textCdim2
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textCdim2
     * @return void
     */
    public function setSchema1textCdim2(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema1textCdim2)
    {
        $this->schema1textCdim2 = $schema1textCdim2;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textCdim3
     * @return void
     */
    public function addSchema1textCdim3(\I6m\Feedback\Domain\Model\Textelement $schema1textCdim3)
    {
        $this->schema1textCdim3->attach($schema1textCdim3);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textCdim3ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema1textCdim3(\I6m\Feedback\Domain\Model\Textelement $schema1textCdim3ToRemove)
    {
        $this->schema1textCdim3->detach($schema1textCdim3ToRemove);
    }

    /**
     * Returns the schema1textCdim3
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textCdim3
     */
    public function getSchema1textCdim3()
    {
        return $this->schema1textCdim3;
    }

    /**
     * Sets the schema1textCdim3
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textCdim3
     * @return void
     */
    public function setSchema1textCdim3(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema1textCdim3)
    {
        $this->schema1textCdim3 = $schema1textCdim3;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textCdim4
     * @return void
     */
    public function addSchema1textCdim4(\I6m\Feedback\Domain\Model\Textelement $schema1textCdim4)
    {
        $this->schema1textCdim4->attach($schema1textCdim4);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textCdim4ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema1textCdim4(\I6m\Feedback\Domain\Model\Textelement $schema1textCdim4ToRemove)
    {
        $this->schema1textCdim4->detach($schema1textCdim4ToRemove);
    }

    /**
     * Returns the schema1textCdim4
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textCdim4
     */
    public function getSchema1textCdim4()
    {
        return $this->schema1textCdim4;
    }

    /**
     * Sets the schema1textCdim4
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textCdim4
     * @return void
     */
    public function setSchema1textCdim4(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema1textCdim4)
    {
        $this->schema1textCdim4 = $schema1textCdim4;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textCdim5
     * @return void
     */
    public function addSchema1textCdim5(\I6m\Feedback\Domain\Model\Textelement $schema1textCdim5)
    {
        $this->schema1textCdim5->attach($schema1textCdim5);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textCdim5ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema1textCdim5(\I6m\Feedback\Domain\Model\Textelement $schema1textCdim5ToRemove)
    {
        $this->schema1textCdim5->detach($schema1textCdim5ToRemove);
    }

    /**
     * Returns the schema1textCdim5
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textCdim5
     */
    public function getSchema1textCdim5()
    {
        return $this->schema1textCdim5;
    }

    /**
     * Sets the schema1textCdim5
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textCdim5
     * @return void
     */
    public function setSchema1textCdim5(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema1textCdim5)
    {
        $this->schema1textCdim5 = $schema1textCdim5;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textEdim2
     * @return void
     */
    public function addSchema1textEdim2(\I6m\Feedback\Domain\Model\Textelement $schema1textEdim2)
    {
        $this->schema1textEdim2->attach($schema1textEdim2);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textEdim2ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema1textEdim2(\I6m\Feedback\Domain\Model\Textelement $schema1textEdim2ToRemove)
    {
        $this->schema1textEdim2->detach($schema1textEdim2ToRemove);
    }

    /**
     * Returns the schema1textEdim2
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textEdim2
     */
    public function getSchema1textEdim2()
    {
        return $this->schema1textEdim2;
    }

    /**
     * Sets the schema1textEdim2
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textEdim2
     * @return void
     */
    public function setSchema1textEdim2(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema1textEdim2)
    {
        $this->schema1textEdim2 = $schema1textEdim2;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textEdim3
     * @return void
     */
    public function addSchema1textEdim3(\I6m\Feedback\Domain\Model\Textelement $schema1textEdim3)
    {
        $this->schema1textEdim3->attach($schema1textEdim3);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textEdim3ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema1textEdim3(\I6m\Feedback\Domain\Model\Textelement $schema1textEdim3ToRemove)
    {
        $this->schema1textEdim3->detach($schema1textEdim3ToRemove);
    }

    /**
     * Returns the schema1textEdim3
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textEdim3
     */
    public function getSchema1textEdim3()
    {
        return $this->schema1textEdim3;
    }

    /**
     * Sets the schema1textEdim3
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textEdim3
     * @return void
     */
    public function setSchema1textEdim3(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema1textEdim3)
    {
        $this->schema1textEdim3 = $schema1textEdim3;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textEdim4
     * @return void
     */
    public function addSchema1textEdim4(\I6m\Feedback\Domain\Model\Textelement $schema1textEdim4)
    {
        $this->schema1textEdim4->attach($schema1textEdim4);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textEdim4ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema1textEdim4(\I6m\Feedback\Domain\Model\Textelement $schema1textEdim4ToRemove)
    {
        $this->schema1textEdim4->detach($schema1textEdim4ToRemove);
    }

    /**
     * Returns the schema1textEdim4
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textEdim4
     */
    public function getSchema1textEdim4()
    {
        return $this->schema1textEdim4;
    }

    /**
     * Sets the schema1textEdim4
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textEdim4
     * @return void
     */
    public function setSchema1textEdim4(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema1textEdim4)
    {
        $this->schema1textEdim4 = $schema1textEdim4;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textEdim5
     * @return void
     */
    public function addSchema1textEdim5(\I6m\Feedback\Domain\Model\Textelement $schema1textEdim5)
    {
        $this->schema1textEdim5->attach($schema1textEdim5);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema1textEdim5ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema1textEdim5(\I6m\Feedback\Domain\Model\Textelement $schema1textEdim5ToRemove)
    {
        $this->schema1textEdim5->detach($schema1textEdim5ToRemove);
    }

    /**
     * Returns the schema1textEdim5
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textEdim5
     */
    public function getSchema1textEdim5()
    {
        return $this->schema1textEdim5;
    }

    /**
     * Sets the schema1textEdim5
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema1textEdim5
     * @return void
     */
    public function setSchema1textEdim5(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema1textEdim5)
    {
        $this->schema1textEdim5 = $schema1textEdim5;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textum
     * @return void
     */
    public function addSchema2textum(\I6m\Feedback\Domain\Model\Textelement $schema2textum)
    {
        $this->schema2textA->attach($schema2textum);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textumToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema2textum(\I6m\Feedback\Domain\Model\Textelement $schema2textumToRemove)
    {
        $this->schema2textA->detach($schema2textumToRemove);
    }

    /**
     * Returns the schema2textA
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textA
     */
    public function getSchema2textA()
    {
        return $this->schema2textA;
    }

    /**
     * Sets the schema2textA
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textA
     * @return void
     */
    public function setSchema2textA(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema2textA)
    {
        $this->schema2textA = $schema2textA;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textB
     * @return void
     */
    public function addSchema2textB(\I6m\Feedback\Domain\Model\Textelement $schema2textB)
    {
        $this->schema2textB->attach($schema2textB);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textBToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema2textB(\I6m\Feedback\Domain\Model\Textelement $schema2textBToRemove)
    {
        $this->schema2textB->detach($schema2textBToRemove);
    }

    /**
     * Returns the schema2textB
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textB
     */
    public function getSchema2textB()
    {
        return $this->schema2textB;
    }

    /**
     * Sets the schema2textB
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textB
     * @return void
     */
    public function setSchema2textB(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema2textB)
    {
        $this->schema2textB = $schema2textB;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textC
     * @return void
     */
    public function addSchema2textC(\I6m\Feedback\Domain\Model\Textelement $schema2textC)
    {
        $this->schema2textC->attach($schema2textC);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textCToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema2textC(\I6m\Feedback\Domain\Model\Textelement $schema2textCToRemove)
    {
        $this->schema2textC->detach($schema2textCToRemove);
    }

    /**
     * Returns the schema2textC
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textC
     */
    public function getSchema2textC()
    {
        return $this->schema2textC;
    }

    /**
     * Sets the schema2textC
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textC
     * @return void
     */
    public function setSchema2textC(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema2textC)
    {
        $this->schema2textC = $schema2textC;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textEdim1
     * @return void
     */
    public function addSchema2textEdim1(\I6m\Feedback\Domain\Model\Textelement $schema2textEdim1)
    {
        $this->schema2textEdim1->attach($schema2textEdim1);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textEdim1ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema2textEdim1(\I6m\Feedback\Domain\Model\Textelement $schema2textEdim1ToRemove)
    {
        $this->schema2textEdim1->detach($schema2textEdim1ToRemove);
    }

    /**
     * Returns the schema2textEdim1
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textEdim1
     */
    public function getSchema2textEdim1()
    {
        return $this->schema2textEdim1;
    }

    /**
     * Sets the schema2textEdim1
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textEdim1
     * @return void
     */
    public function setSchema2textEdim1(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema2textEdim1)
    {
        $this->schema2textEdim1 = $schema2textEdim1;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textEdim2
     * @return void
     */
    public function addSchema2textEdim2(\I6m\Feedback\Domain\Model\Textelement $schema2textEdim2)
    {
        $this->schema2textEdim2->attach($schema2textEdim2);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textEdim2ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema2textEdim2(\I6m\Feedback\Domain\Model\Textelement $schema2textEdim2ToRemove)
    {
        $this->schema2textEdim2->detach($schema2textEdim2ToRemove);
    }

    /**
     * Returns the schema2textEdim2
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textEdim2
     */
    public function getSchema2textEdim2()
    {
        return $this->schema2textEdim2;
    }

    /**
     * Sets the schema2textEdim2
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textEdim2
     * @return void
     */
    public function setSchema2textEdim2(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema2textEdim2)
    {
        $this->schema2textEdim2 = $schema2textEdim2;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textEdim3
     * @return void
     */
    public function addSchema2textEdim3(\I6m\Feedback\Domain\Model\Textelement $schema2textEdim3)
    {
        $this->schema2textEdim3->attach($schema2textEdim3);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textEdim3ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema2textEdim3(\I6m\Feedback\Domain\Model\Textelement $schema2textEdim3ToRemove)
    {
        $this->schema2textEdim3->detach($schema2textEdim3ToRemove);
    }

    /**
     * Returns the schema2textEdim3
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textEdim3
     */
    public function getSchema2textEdim3()
    {
        return $this->schema2textEdim3;
    }

    /**
     * Sets the schema2textEdim3
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textEdim3
     * @return void
     */
    public function setSchema2textEdim3(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema2textEdim3)
    {
        $this->schema2textEdim3 = $schema2textEdim3;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textEdim4
     * @return void
     */
    public function addSchema2textEdim4(\I6m\Feedback\Domain\Model\Textelement $schema2textEdim4)
    {
        $this->schema2textEdim4->attach($schema2textEdim4);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textEdim4ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema2textEdim4(\I6m\Feedback\Domain\Model\Textelement $schema2textEdim4ToRemove)
    {
        $this->schema2textEdim4->detach($schema2textEdim4ToRemove);
    }

    /**
     * Returns the schema2textEdim4
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textEdim4
     */
    public function getSchema2textEdim4()
    {
        return $this->schema2textEdim4;
    }

    /**
     * Sets the schema2textEdim4
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textEdim4
     * @return void
     */
    public function setSchema2textEdim4(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema2textEdim4)
    {
        $this->schema2textEdim4 = $schema2textEdim4;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textEdim5
     * @return void
     */
    public function addSchema2textEdim5(\I6m\Feedback\Domain\Model\Textelement $schema2textEdim5)
    {
        $this->schema2textEdim5->attach($schema2textEdim5);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textEdim5ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema2textEdim5(\I6m\Feedback\Domain\Model\Textelement $schema2textEdim5ToRemove)
    {
        $this->schema2textEdim5->detach($schema2textEdim5ToRemove);
    }

    /**
     * Returns the schema2textEdim5
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textEdim5
     */
    public function getSchema2textEdim5()
    {
        return $this->schema2textEdim5;
    }

    /**
     * Sets the schema2textEdim5
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textEdim5
     * @return void
     */
    public function setSchema2textEdim5(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema2textEdim5)
    {
        $this->schema2textEdim5 = $schema2textEdim5;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textEdim6
     * @return void
     */
    public function addSchema2textEdim6(\I6m\Feedback\Domain\Model\Textelement $schema2textEdim6)
    {
        $this->schema2textEdim6->attach($schema2textEdim6);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textEdim6ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema2textEdim6(\I6m\Feedback\Domain\Model\Textelement $schema2textEdim6ToRemove)
    {
        $this->schema2textEdim6->detach($schema2textEdim6ToRemove);
    }

    /**
     * Returns the schema2textEdim6
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textEdim6
     */
    public function getSchema2textEdim6()
    {
        return $this->schema2textEdim6;
    }

    /**
     * Sets the schema2textEdim6
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textEdim6
     * @return void
     */
    public function setSchema2textEdim6(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema2textEdim6)
    {
        $this->schema2textEdim6 = $schema2textEdim6;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textFdim1
     * @return void
     */
    public function addSchema2textFdim1(\I6m\Feedback\Domain\Model\Textelement $schema2textFdim1)
    {
        $this->schema2textFdim1->attach($schema2textFdim1);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textFdim1ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema2textFdim1(\I6m\Feedback\Domain\Model\Textelement $schema2textFdim1ToRemove)
    {
        $this->schema2textFdim1->detach($schema2textFdim1ToRemove);
    }

    /**
     * Returns the schema2textFdim1
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textFdim1
     */
    public function getSchema2textFdim1()
    {
        return $this->schema2textFdim1;
    }

    /**
     * Sets the schema2textFdim1
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textFdim1
     * @return void
     */
    public function setSchema2textFdim1(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema2textFdim1)
    {
        $this->schema2textFdim1 = $schema2textFdim1;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textFdim2
     * @return void
     */
    public function addSchema2textFdim2(\I6m\Feedback\Domain\Model\Textelement $schema2textFdim2)
    {
        $this->schema2textFdim2->attach($schema2textFdim2);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textFdim2ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema2textFdim2(\I6m\Feedback\Domain\Model\Textelement $schema2textFdim2ToRemove)
    {
        $this->schema2textFdim2->detach($schema2textFdim2ToRemove);
    }

    /**
     * Returns the schema2textFdim2
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textFdim2
     */
    public function getSchema2textFdim2()
    {
        return $this->schema2textFdim2;
    }

    /**
     * Sets the schema2textFdim2
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textFdim2
     * @return void
     */
    public function setSchema2textFdim2(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema2textFdim2)
    {
        $this->schema2textFdim2 = $schema2textFdim2;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textFdim3
     * @return void
     */
    public function addSchema2textFdim3(\I6m\Feedback\Domain\Model\Textelement $schema2textFdim3)
    {
        $this->schema2textFdim3->attach($schema2textFdim3);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textFdim3ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema2textFdim3(\I6m\Feedback\Domain\Model\Textelement $schema2textFdim3ToRemove)
    {
        $this->schema2textFdim3->detach($schema2textFdim3ToRemove);
    }

    /**
     * Returns the schema2textFdim3
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textFdim3
     */
    public function getSchema2textFdim3()
    {
        return $this->schema2textFdim3;
    }

    /**
     * Sets the schema2textFdim3
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textFdim3
     * @return void
     */
    public function setSchema2textFdim3(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema2textFdim3)
    {
        $this->schema2textFdim3 = $schema2textFdim3;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textFdim4
     * @return void
     */
    public function addSchema2textFdim4(\I6m\Feedback\Domain\Model\Textelement $schema2textFdim4)
    {
        $this->schema2textFdim4->attach($schema2textFdim4);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textFdim4ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema2textFdim4(\I6m\Feedback\Domain\Model\Textelement $schema2textFdim4ToRemove)
    {
        $this->schema2textFdim4->detach($schema2textFdim4ToRemove);
    }

    /**
     * Returns the schema2textFdim4
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textFdim4
     */
    public function getSchema2textFdim4()
    {
        return $this->schema2textFdim4;
    }

    /**
     * Sets the schema2textFdim4
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textFdim4
     * @return void
     */
    public function setSchema2textFdim4(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema2textFdim4)
    {
        $this->schema2textFdim4 = $schema2textFdim4;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textFdim5
     * @return void
     */
    public function addSchema2textFdim5(\I6m\Feedback\Domain\Model\Textelement $schema2textFdim5)
    {
        $this->schema2textFdim5->attach($schema2textFdim5);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textFdim5ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema2textFdim5(\I6m\Feedback\Domain\Model\Textelement $schema2textFdim5ToRemove)
    {
        $this->schema2textFdim5->detach($schema2textFdim5ToRemove);
    }

    /**
     * Returns the schema2textFdim5
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textFdim5
     */
    public function getSchema2textFdim5()
    {
        return $this->schema2textFdim5;
    }

    /**
     * Sets the schema2textFdim5
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textFdim5
     * @return void
     */
    public function setSchema2textFdim5(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema2textFdim5)
    {
        $this->schema2textFdim5 = $schema2textFdim5;
    }

    /**
     * Adds a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textFdim6
     * @return void
     */
    public function addSchema2textFdim6(\I6m\Feedback\Domain\Model\Textelement $schema2textFdim6)
    {
        $this->schema2textFdim6->attach($schema2textFdim6);
    }

    /**
     * Removes a Textelement
     * 
     * @param \I6m\Feedback\Domain\Model\Textelement $schema2textFdim6ToRemove The Textelement to be removed
     * @return void
     */
    public function removeSchema2textFdim6(\I6m\Feedback\Domain\Model\Textelement $schema2textFdim6ToRemove)
    {
        $this->schema2textFdim6->detach($schema2textFdim6ToRemove);
    }

    /**
     * Returns the schema2textFdim6
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textFdim6
     */
    public function getSchema2textFdim6()
    {
        return $this->schema2textFdim6;
    }

    /**
     * Sets the schema2textFdim6
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\I6m\Feedback\Domain\Model\Textelement> $schema2textFdim6
     * @return void
     */
    public function setSchema2textFdim6(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schema2textFdim6)
    {
        $this->schema2textFdim6 = $schema2textFdim6;
    }
}
