<?php
namespace I6m\Feedback\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class FeedbackTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \I6m\Feedback\Domain\Model\Feedback
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \I6m\Feedback\Domain\Model\Feedback();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getFragebogenReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getFragebogen()
        );
    }

    /**
     * @test
     */
    public function setFragebogenForIntSetsFragebogen()
    {
        $this->subject->setFragebogen(12);

        self::assertAttributeEquals(
            12,
            'fragebogen',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSchemaTypReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getSchemaTyp()
        );
    }

    /**
     * @test
     */
    public function setSchemaTypForIntSetsSchemaTyp()
    {
        $this->subject->setSchemaTyp(12);

        self::assertAttributeEquals(
            12,
            'schemaTyp',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSchema1textDdim1ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSchema1textDdim1()
        );
    }

    /**
     * @test
     */
    public function setSchema1textDdim1ForStringSetsSchema1textDdim1()
    {
        $this->subject->setSchema1textDdim1('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'schema1textDdim1',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSchema1textDdim2ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSchema1textDdim2()
        );
    }

    /**
     * @test
     */
    public function setSchema1textDdim2ForStringSetsSchema1textDdim2()
    {
        $this->subject->setSchema1textDdim2('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'schema1textDdim2',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSchema1textDdim3ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSchema1textDdim3()
        );
    }

    /**
     * @test
     */
    public function setSchema1textDdim3ForStringSetsSchema1textDdim3()
    {
        $this->subject->setSchema1textDdim3('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'schema1textDdim3',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSchema1textDdim4ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSchema1textDdim4()
        );
    }

    /**
     * @test
     */
    public function setSchema1textDdim4ForStringSetsSchema1textDdim4()
    {
        $this->subject->setSchema1textDdim4('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'schema1textDdim4',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSchema1textDdim5ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSchema1textDdim5()
        );
    }

    /**
     * @test
     */
    public function setSchema1textDdim5ForStringSetsSchema1textDdim5()
    {
        $this->subject->setSchema1textDdim5('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'schema1textDdim5',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSchema2textDReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSchema2textD()
        );
    }

    /**
     * @test
     */
    public function setSchema2textDForStringSetsSchema2textD()
    {
        $this->subject->setSchema2textD('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'schema2textD',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSchema1textAReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema1textA()
        );
    }

    /**
     * @test
     */
    public function setSchema1textAForObjectStorageContainingTextelementSetsSchema1textA()
    {
        $schema1textum = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema1textA = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema1textA->attach($schema1textum);
        $this->subject->setSchema1textA($objectStorageHoldingExactlyOneSchema1textA);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema1textA,
            'schema1textA',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema1textumToObjectStorageHoldingSchema1textA()
    {
        $schema1textum = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textAObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textAObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema1textum));
        $this->inject($this->subject, 'schema1textA', $schema1textAObjectStorageMock);

        $this->subject->addSchema1textum($schema1textum);
    }

    /**
     * @test
     */
    public function removeSchema1textumFromObjectStorageHoldingSchema1textA()
    {
        $schema1textum = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textAObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textAObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema1textum));
        $this->inject($this->subject, 'schema1textA', $schema1textAObjectStorageMock);

        $this->subject->removeSchema1textum($schema1textum);
    }

    /**
     * @test
     */
    public function getSchema1textBdim1ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema1textBdim1()
        );
    }

    /**
     * @test
     */
    public function setSchema1textBdim1ForObjectStorageContainingTextelementSetsSchema1textBdim1()
    {
        $schema1textBdim1 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema1textBdim1 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema1textBdim1->attach($schema1textBdim1);
        $this->subject->setSchema1textBdim1($objectStorageHoldingExactlyOneSchema1textBdim1);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema1textBdim1,
            'schema1textBdim1',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema1textBdim1ToObjectStorageHoldingSchema1textBdim1()
    {
        $schema1textBdim1 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textBdim1ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textBdim1ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema1textBdim1));
        $this->inject($this->subject, 'schema1textBdim1', $schema1textBdim1ObjectStorageMock);

        $this->subject->addSchema1textBdim1($schema1textBdim1);
    }

    /**
     * @test
     */
    public function removeSchema1textBdim1FromObjectStorageHoldingSchema1textBdim1()
    {
        $schema1textBdim1 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textBdim1ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textBdim1ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema1textBdim1));
        $this->inject($this->subject, 'schema1textBdim1', $schema1textBdim1ObjectStorageMock);

        $this->subject->removeSchema1textBdim1($schema1textBdim1);
    }

    /**
     * @test
     */
    public function getSchema1textEdim1ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema1textEdim1()
        );
    }

    /**
     * @test
     */
    public function setSchema1textEdim1ForObjectStorageContainingTextelementSetsSchema1textEdim1()
    {
        $schema1textEdim1 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema1textEdim1 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema1textEdim1->attach($schema1textEdim1);
        $this->subject->setSchema1textEdim1($objectStorageHoldingExactlyOneSchema1textEdim1);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema1textEdim1,
            'schema1textEdim1',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema1textEdim1ToObjectStorageHoldingSchema1textEdim1()
    {
        $schema1textEdim1 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textEdim1ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textEdim1ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema1textEdim1));
        $this->inject($this->subject, 'schema1textEdim1', $schema1textEdim1ObjectStorageMock);

        $this->subject->addSchema1textEdim1($schema1textEdim1);
    }

    /**
     * @test
     */
    public function removeSchema1textEdim1FromObjectStorageHoldingSchema1textEdim1()
    {
        $schema1textEdim1 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textEdim1ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textEdim1ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema1textEdim1));
        $this->inject($this->subject, 'schema1textEdim1', $schema1textEdim1ObjectStorageMock);

        $this->subject->removeSchema1textEdim1($schema1textEdim1);
    }

    /**
     * @test
     */
    public function getSchema1textCdim1ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema1textCdim1()
        );
    }

    /**
     * @test
     */
    public function setSchema1textCdim1ForObjectStorageContainingTextelementSetsSchema1textCdim1()
    {
        $schema1textCdim1 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema1textCdim1 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema1textCdim1->attach($schema1textCdim1);
        $this->subject->setSchema1textCdim1($objectStorageHoldingExactlyOneSchema1textCdim1);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema1textCdim1,
            'schema1textCdim1',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema1textCdim1ToObjectStorageHoldingSchema1textCdim1()
    {
        $schema1textCdim1 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textCdim1ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textCdim1ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema1textCdim1));
        $this->inject($this->subject, 'schema1textCdim1', $schema1textCdim1ObjectStorageMock);

        $this->subject->addSchema1textCdim1($schema1textCdim1);
    }

    /**
     * @test
     */
    public function removeSchema1textCdim1FromObjectStorageHoldingSchema1textCdim1()
    {
        $schema1textCdim1 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textCdim1ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textCdim1ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema1textCdim1));
        $this->inject($this->subject, 'schema1textCdim1', $schema1textCdim1ObjectStorageMock);

        $this->subject->removeSchema1textCdim1($schema1textCdim1);
    }

    /**
     * @test
     */
    public function getSchema1textBdim2ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema1textBdim2()
        );
    }

    /**
     * @test
     */
    public function setSchema1textBdim2ForObjectStorageContainingTextelementSetsSchema1textBdim2()
    {
        $schema1textBdim2 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema1textBdim2 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema1textBdim2->attach($schema1textBdim2);
        $this->subject->setSchema1textBdim2($objectStorageHoldingExactlyOneSchema1textBdim2);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema1textBdim2,
            'schema1textBdim2',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema1textBdim2ToObjectStorageHoldingSchema1textBdim2()
    {
        $schema1textBdim2 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textBdim2ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textBdim2ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema1textBdim2));
        $this->inject($this->subject, 'schema1textBdim2', $schema1textBdim2ObjectStorageMock);

        $this->subject->addSchema1textBdim2($schema1textBdim2);
    }

    /**
     * @test
     */
    public function removeSchema1textBdim2FromObjectStorageHoldingSchema1textBdim2()
    {
        $schema1textBdim2 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textBdim2ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textBdim2ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema1textBdim2));
        $this->inject($this->subject, 'schema1textBdim2', $schema1textBdim2ObjectStorageMock);

        $this->subject->removeSchema1textBdim2($schema1textBdim2);
    }

    /**
     * @test
     */
    public function getSchema1textBdim3ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema1textBdim3()
        );
    }

    /**
     * @test
     */
    public function setSchema1textBdim3ForObjectStorageContainingTextelementSetsSchema1textBdim3()
    {
        $schema1textBdim3 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema1textBdim3 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema1textBdim3->attach($schema1textBdim3);
        $this->subject->setSchema1textBdim3($objectStorageHoldingExactlyOneSchema1textBdim3);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema1textBdim3,
            'schema1textBdim3',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema1textBdim3ToObjectStorageHoldingSchema1textBdim3()
    {
        $schema1textBdim3 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textBdim3ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textBdim3ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema1textBdim3));
        $this->inject($this->subject, 'schema1textBdim3', $schema1textBdim3ObjectStorageMock);

        $this->subject->addSchema1textBdim3($schema1textBdim3);
    }

    /**
     * @test
     */
    public function removeSchema1textBdim3FromObjectStorageHoldingSchema1textBdim3()
    {
        $schema1textBdim3 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textBdim3ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textBdim3ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema1textBdim3));
        $this->inject($this->subject, 'schema1textBdim3', $schema1textBdim3ObjectStorageMock);

        $this->subject->removeSchema1textBdim3($schema1textBdim3);
    }

    /**
     * @test
     */
    public function getSchema1textBdim4ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema1textBdim4()
        );
    }

    /**
     * @test
     */
    public function setSchema1textBdim4ForObjectStorageContainingTextelementSetsSchema1textBdim4()
    {
        $schema1textBdim4 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema1textBdim4 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema1textBdim4->attach($schema1textBdim4);
        $this->subject->setSchema1textBdim4($objectStorageHoldingExactlyOneSchema1textBdim4);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema1textBdim4,
            'schema1textBdim4',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema1textBdim4ToObjectStorageHoldingSchema1textBdim4()
    {
        $schema1textBdim4 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textBdim4ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textBdim4ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema1textBdim4));
        $this->inject($this->subject, 'schema1textBdim4', $schema1textBdim4ObjectStorageMock);

        $this->subject->addSchema1textBdim4($schema1textBdim4);
    }

    /**
     * @test
     */
    public function removeSchema1textBdim4FromObjectStorageHoldingSchema1textBdim4()
    {
        $schema1textBdim4 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textBdim4ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textBdim4ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema1textBdim4));
        $this->inject($this->subject, 'schema1textBdim4', $schema1textBdim4ObjectStorageMock);

        $this->subject->removeSchema1textBdim4($schema1textBdim4);
    }

    /**
     * @test
     */
    public function getSchema1textBdim5ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema1textBdim5()
        );
    }

    /**
     * @test
     */
    public function setSchema1textBdim5ForObjectStorageContainingTextelementSetsSchema1textBdim5()
    {
        $schema1textBdim5 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema1textBdim5 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema1textBdim5->attach($schema1textBdim5);
        $this->subject->setSchema1textBdim5($objectStorageHoldingExactlyOneSchema1textBdim5);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema1textBdim5,
            'schema1textBdim5',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema1textBdim5ToObjectStorageHoldingSchema1textBdim5()
    {
        $schema1textBdim5 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textBdim5ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textBdim5ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema1textBdim5));
        $this->inject($this->subject, 'schema1textBdim5', $schema1textBdim5ObjectStorageMock);

        $this->subject->addSchema1textBdim5($schema1textBdim5);
    }

    /**
     * @test
     */
    public function removeSchema1textBdim5FromObjectStorageHoldingSchema1textBdim5()
    {
        $schema1textBdim5 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textBdim5ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textBdim5ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema1textBdim5));
        $this->inject($this->subject, 'schema1textBdim5', $schema1textBdim5ObjectStorageMock);

        $this->subject->removeSchema1textBdim5($schema1textBdim5);
    }

    /**
     * @test
     */
    public function getSchema1textCdim2ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema1textCdim2()
        );
    }

    /**
     * @test
     */
    public function setSchema1textCdim2ForObjectStorageContainingTextelementSetsSchema1textCdim2()
    {
        $schema1textCdim2 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema1textCdim2 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema1textCdim2->attach($schema1textCdim2);
        $this->subject->setSchema1textCdim2($objectStorageHoldingExactlyOneSchema1textCdim2);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema1textCdim2,
            'schema1textCdim2',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema1textCdim2ToObjectStorageHoldingSchema1textCdim2()
    {
        $schema1textCdim2 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textCdim2ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textCdim2ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema1textCdim2));
        $this->inject($this->subject, 'schema1textCdim2', $schema1textCdim2ObjectStorageMock);

        $this->subject->addSchema1textCdim2($schema1textCdim2);
    }

    /**
     * @test
     */
    public function removeSchema1textCdim2FromObjectStorageHoldingSchema1textCdim2()
    {
        $schema1textCdim2 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textCdim2ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textCdim2ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema1textCdim2));
        $this->inject($this->subject, 'schema1textCdim2', $schema1textCdim2ObjectStorageMock);

        $this->subject->removeSchema1textCdim2($schema1textCdim2);
    }

    /**
     * @test
     */
    public function getSchema1textCdim3ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema1textCdim3()
        );
    }

    /**
     * @test
     */
    public function setSchema1textCdim3ForObjectStorageContainingTextelementSetsSchema1textCdim3()
    {
        $schema1textCdim3 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema1textCdim3 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema1textCdim3->attach($schema1textCdim3);
        $this->subject->setSchema1textCdim3($objectStorageHoldingExactlyOneSchema1textCdim3);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema1textCdim3,
            'schema1textCdim3',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema1textCdim3ToObjectStorageHoldingSchema1textCdim3()
    {
        $schema1textCdim3 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textCdim3ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textCdim3ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema1textCdim3));
        $this->inject($this->subject, 'schema1textCdim3', $schema1textCdim3ObjectStorageMock);

        $this->subject->addSchema1textCdim3($schema1textCdim3);
    }

    /**
     * @test
     */
    public function removeSchema1textCdim3FromObjectStorageHoldingSchema1textCdim3()
    {
        $schema1textCdim3 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textCdim3ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textCdim3ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema1textCdim3));
        $this->inject($this->subject, 'schema1textCdim3', $schema1textCdim3ObjectStorageMock);

        $this->subject->removeSchema1textCdim3($schema1textCdim3);
    }

    /**
     * @test
     */
    public function getSchema1textCdim4ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema1textCdim4()
        );
    }

    /**
     * @test
     */
    public function setSchema1textCdim4ForObjectStorageContainingTextelementSetsSchema1textCdim4()
    {
        $schema1textCdim4 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema1textCdim4 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema1textCdim4->attach($schema1textCdim4);
        $this->subject->setSchema1textCdim4($objectStorageHoldingExactlyOneSchema1textCdim4);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema1textCdim4,
            'schema1textCdim4',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema1textCdim4ToObjectStorageHoldingSchema1textCdim4()
    {
        $schema1textCdim4 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textCdim4ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textCdim4ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema1textCdim4));
        $this->inject($this->subject, 'schema1textCdim4', $schema1textCdim4ObjectStorageMock);

        $this->subject->addSchema1textCdim4($schema1textCdim4);
    }

    /**
     * @test
     */
    public function removeSchema1textCdim4FromObjectStorageHoldingSchema1textCdim4()
    {
        $schema1textCdim4 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textCdim4ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textCdim4ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema1textCdim4));
        $this->inject($this->subject, 'schema1textCdim4', $schema1textCdim4ObjectStorageMock);

        $this->subject->removeSchema1textCdim4($schema1textCdim4);
    }

    /**
     * @test
     */
    public function getSchema1textCdim5ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema1textCdim5()
        );
    }

    /**
     * @test
     */
    public function setSchema1textCdim5ForObjectStorageContainingTextelementSetsSchema1textCdim5()
    {
        $schema1textCdim5 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema1textCdim5 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema1textCdim5->attach($schema1textCdim5);
        $this->subject->setSchema1textCdim5($objectStorageHoldingExactlyOneSchema1textCdim5);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema1textCdim5,
            'schema1textCdim5',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema1textCdim5ToObjectStorageHoldingSchema1textCdim5()
    {
        $schema1textCdim5 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textCdim5ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textCdim5ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema1textCdim5));
        $this->inject($this->subject, 'schema1textCdim5', $schema1textCdim5ObjectStorageMock);

        $this->subject->addSchema1textCdim5($schema1textCdim5);
    }

    /**
     * @test
     */
    public function removeSchema1textCdim5FromObjectStorageHoldingSchema1textCdim5()
    {
        $schema1textCdim5 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textCdim5ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textCdim5ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema1textCdim5));
        $this->inject($this->subject, 'schema1textCdim5', $schema1textCdim5ObjectStorageMock);

        $this->subject->removeSchema1textCdim5($schema1textCdim5);
    }

    /**
     * @test
     */
    public function getSchema1textEdim2ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema1textEdim2()
        );
    }

    /**
     * @test
     */
    public function setSchema1textEdim2ForObjectStorageContainingTextelementSetsSchema1textEdim2()
    {
        $schema1textEdim2 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema1textEdim2 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema1textEdim2->attach($schema1textEdim2);
        $this->subject->setSchema1textEdim2($objectStorageHoldingExactlyOneSchema1textEdim2);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema1textEdim2,
            'schema1textEdim2',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema1textEdim2ToObjectStorageHoldingSchema1textEdim2()
    {
        $schema1textEdim2 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textEdim2ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textEdim2ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema1textEdim2));
        $this->inject($this->subject, 'schema1textEdim2', $schema1textEdim2ObjectStorageMock);

        $this->subject->addSchema1textEdim2($schema1textEdim2);
    }

    /**
     * @test
     */
    public function removeSchema1textEdim2FromObjectStorageHoldingSchema1textEdim2()
    {
        $schema1textEdim2 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textEdim2ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textEdim2ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema1textEdim2));
        $this->inject($this->subject, 'schema1textEdim2', $schema1textEdim2ObjectStorageMock);

        $this->subject->removeSchema1textEdim2($schema1textEdim2);
    }

    /**
     * @test
     */
    public function getSchema1textEdim3ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema1textEdim3()
        );
    }

    /**
     * @test
     */
    public function setSchema1textEdim3ForObjectStorageContainingTextelementSetsSchema1textEdim3()
    {
        $schema1textEdim3 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema1textEdim3 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema1textEdim3->attach($schema1textEdim3);
        $this->subject->setSchema1textEdim3($objectStorageHoldingExactlyOneSchema1textEdim3);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema1textEdim3,
            'schema1textEdim3',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema1textEdim3ToObjectStorageHoldingSchema1textEdim3()
    {
        $schema1textEdim3 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textEdim3ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textEdim3ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema1textEdim3));
        $this->inject($this->subject, 'schema1textEdim3', $schema1textEdim3ObjectStorageMock);

        $this->subject->addSchema1textEdim3($schema1textEdim3);
    }

    /**
     * @test
     */
    public function removeSchema1textEdim3FromObjectStorageHoldingSchema1textEdim3()
    {
        $schema1textEdim3 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textEdim3ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textEdim3ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema1textEdim3));
        $this->inject($this->subject, 'schema1textEdim3', $schema1textEdim3ObjectStorageMock);

        $this->subject->removeSchema1textEdim3($schema1textEdim3);
    }

    /**
     * @test
     */
    public function getSchema1textEdim4ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema1textEdim4()
        );
    }

    /**
     * @test
     */
    public function setSchema1textEdim4ForObjectStorageContainingTextelementSetsSchema1textEdim4()
    {
        $schema1textEdim4 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema1textEdim4 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema1textEdim4->attach($schema1textEdim4);
        $this->subject->setSchema1textEdim4($objectStorageHoldingExactlyOneSchema1textEdim4);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema1textEdim4,
            'schema1textEdim4',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema1textEdim4ToObjectStorageHoldingSchema1textEdim4()
    {
        $schema1textEdim4 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textEdim4ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textEdim4ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema1textEdim4));
        $this->inject($this->subject, 'schema1textEdim4', $schema1textEdim4ObjectStorageMock);

        $this->subject->addSchema1textEdim4($schema1textEdim4);
    }

    /**
     * @test
     */
    public function removeSchema1textEdim4FromObjectStorageHoldingSchema1textEdim4()
    {
        $schema1textEdim4 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textEdim4ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textEdim4ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema1textEdim4));
        $this->inject($this->subject, 'schema1textEdim4', $schema1textEdim4ObjectStorageMock);

        $this->subject->removeSchema1textEdim4($schema1textEdim4);
    }

    /**
     * @test
     */
    public function getSchema1textEdim5ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema1textEdim5()
        );
    }

    /**
     * @test
     */
    public function setSchema1textEdim5ForObjectStorageContainingTextelementSetsSchema1textEdim5()
    {
        $schema1textEdim5 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema1textEdim5 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema1textEdim5->attach($schema1textEdim5);
        $this->subject->setSchema1textEdim5($objectStorageHoldingExactlyOneSchema1textEdim5);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema1textEdim5,
            'schema1textEdim5',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema1textEdim5ToObjectStorageHoldingSchema1textEdim5()
    {
        $schema1textEdim5 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textEdim5ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textEdim5ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema1textEdim5));
        $this->inject($this->subject, 'schema1textEdim5', $schema1textEdim5ObjectStorageMock);

        $this->subject->addSchema1textEdim5($schema1textEdim5);
    }

    /**
     * @test
     */
    public function removeSchema1textEdim5FromObjectStorageHoldingSchema1textEdim5()
    {
        $schema1textEdim5 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema1textEdim5ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema1textEdim5ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema1textEdim5));
        $this->inject($this->subject, 'schema1textEdim5', $schema1textEdim5ObjectStorageMock);

        $this->subject->removeSchema1textEdim5($schema1textEdim5);
    }

    /**
     * @test
     */
    public function getSchema2textAReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema2textA()
        );
    }

    /**
     * @test
     */
    public function setSchema2textAForObjectStorageContainingTextelementSetsSchema2textA()
    {
        $schema2textum = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema2textA = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema2textA->attach($schema2textum);
        $this->subject->setSchema2textA($objectStorageHoldingExactlyOneSchema2textA);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema2textA,
            'schema2textA',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema2textumToObjectStorageHoldingSchema2textA()
    {
        $schema2textum = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textAObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textAObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema2textum));
        $this->inject($this->subject, 'schema2textA', $schema2textAObjectStorageMock);

        $this->subject->addSchema2textum($schema2textum);
    }

    /**
     * @test
     */
    public function removeSchema2textumFromObjectStorageHoldingSchema2textA()
    {
        $schema2textum = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textAObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textAObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema2textum));
        $this->inject($this->subject, 'schema2textA', $schema2textAObjectStorageMock);

        $this->subject->removeSchema2textum($schema2textum);
    }

    /**
     * @test
     */
    public function getSchema2textBReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema2textB()
        );
    }

    /**
     * @test
     */
    public function setSchema2textBForObjectStorageContainingTextelementSetsSchema2textB()
    {
        $schema2textB = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema2textB = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema2textB->attach($schema2textB);
        $this->subject->setSchema2textB($objectStorageHoldingExactlyOneSchema2textB);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema2textB,
            'schema2textB',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema2textBToObjectStorageHoldingSchema2textB()
    {
        $schema2textB = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textBObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textBObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema2textB));
        $this->inject($this->subject, 'schema2textB', $schema2textBObjectStorageMock);

        $this->subject->addSchema2textB($schema2textB);
    }

    /**
     * @test
     */
    public function removeSchema2textBFromObjectStorageHoldingSchema2textB()
    {
        $schema2textB = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textBObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textBObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema2textB));
        $this->inject($this->subject, 'schema2textB', $schema2textBObjectStorageMock);

        $this->subject->removeSchema2textB($schema2textB);
    }

    /**
     * @test
     */
    public function getSchema2textCReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema2textC()
        );
    }

    /**
     * @test
     */
    public function setSchema2textCForObjectStorageContainingTextelementSetsSchema2textC()
    {
        $schema2textC = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema2textC = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema2textC->attach($schema2textC);
        $this->subject->setSchema2textC($objectStorageHoldingExactlyOneSchema2textC);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema2textC,
            'schema2textC',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema2textCToObjectStorageHoldingSchema2textC()
    {
        $schema2textC = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textCObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textCObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema2textC));
        $this->inject($this->subject, 'schema2textC', $schema2textCObjectStorageMock);

        $this->subject->addSchema2textC($schema2textC);
    }

    /**
     * @test
     */
    public function removeSchema2textCFromObjectStorageHoldingSchema2textC()
    {
        $schema2textC = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textCObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textCObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema2textC));
        $this->inject($this->subject, 'schema2textC', $schema2textCObjectStorageMock);

        $this->subject->removeSchema2textC($schema2textC);
    }

    /**
     * @test
     */
    public function getSchema2textEdim1ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema2textEdim1()
        );
    }

    /**
     * @test
     */
    public function setSchema2textEdim1ForObjectStorageContainingTextelementSetsSchema2textEdim1()
    {
        $schema2textEdim1 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema2textEdim1 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema2textEdim1->attach($schema2textEdim1);
        $this->subject->setSchema2textEdim1($objectStorageHoldingExactlyOneSchema2textEdim1);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema2textEdim1,
            'schema2textEdim1',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema2textEdim1ToObjectStorageHoldingSchema2textEdim1()
    {
        $schema2textEdim1 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textEdim1ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textEdim1ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema2textEdim1));
        $this->inject($this->subject, 'schema2textEdim1', $schema2textEdim1ObjectStorageMock);

        $this->subject->addSchema2textEdim1($schema2textEdim1);
    }

    /**
     * @test
     */
    public function removeSchema2textEdim1FromObjectStorageHoldingSchema2textEdim1()
    {
        $schema2textEdim1 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textEdim1ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textEdim1ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema2textEdim1));
        $this->inject($this->subject, 'schema2textEdim1', $schema2textEdim1ObjectStorageMock);

        $this->subject->removeSchema2textEdim1($schema2textEdim1);
    }

    /**
     * @test
     */
    public function getSchema2textEdim2ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema2textEdim2()
        );
    }

    /**
     * @test
     */
    public function setSchema2textEdim2ForObjectStorageContainingTextelementSetsSchema2textEdim2()
    {
        $schema2textEdim2 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema2textEdim2 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema2textEdim2->attach($schema2textEdim2);
        $this->subject->setSchema2textEdim2($objectStorageHoldingExactlyOneSchema2textEdim2);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema2textEdim2,
            'schema2textEdim2',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema2textEdim2ToObjectStorageHoldingSchema2textEdim2()
    {
        $schema2textEdim2 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textEdim2ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textEdim2ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema2textEdim2));
        $this->inject($this->subject, 'schema2textEdim2', $schema2textEdim2ObjectStorageMock);

        $this->subject->addSchema2textEdim2($schema2textEdim2);
    }

    /**
     * @test
     */
    public function removeSchema2textEdim2FromObjectStorageHoldingSchema2textEdim2()
    {
        $schema2textEdim2 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textEdim2ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textEdim2ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema2textEdim2));
        $this->inject($this->subject, 'schema2textEdim2', $schema2textEdim2ObjectStorageMock);

        $this->subject->removeSchema2textEdim2($schema2textEdim2);
    }

    /**
     * @test
     */
    public function getSchema2textEdim3ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema2textEdim3()
        );
    }

    /**
     * @test
     */
    public function setSchema2textEdim3ForObjectStorageContainingTextelementSetsSchema2textEdim3()
    {
        $schema2textEdim3 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema2textEdim3 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema2textEdim3->attach($schema2textEdim3);
        $this->subject->setSchema2textEdim3($objectStorageHoldingExactlyOneSchema2textEdim3);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema2textEdim3,
            'schema2textEdim3',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema2textEdim3ToObjectStorageHoldingSchema2textEdim3()
    {
        $schema2textEdim3 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textEdim3ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textEdim3ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema2textEdim3));
        $this->inject($this->subject, 'schema2textEdim3', $schema2textEdim3ObjectStorageMock);

        $this->subject->addSchema2textEdim3($schema2textEdim3);
    }

    /**
     * @test
     */
    public function removeSchema2textEdim3FromObjectStorageHoldingSchema2textEdim3()
    {
        $schema2textEdim3 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textEdim3ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textEdim3ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema2textEdim3));
        $this->inject($this->subject, 'schema2textEdim3', $schema2textEdim3ObjectStorageMock);

        $this->subject->removeSchema2textEdim3($schema2textEdim3);
    }

    /**
     * @test
     */
    public function getSchema2textEdim4ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema2textEdim4()
        );
    }

    /**
     * @test
     */
    public function setSchema2textEdim4ForObjectStorageContainingTextelementSetsSchema2textEdim4()
    {
        $schema2textEdim4 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema2textEdim4 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema2textEdim4->attach($schema2textEdim4);
        $this->subject->setSchema2textEdim4($objectStorageHoldingExactlyOneSchema2textEdim4);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema2textEdim4,
            'schema2textEdim4',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema2textEdim4ToObjectStorageHoldingSchema2textEdim4()
    {
        $schema2textEdim4 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textEdim4ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textEdim4ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema2textEdim4));
        $this->inject($this->subject, 'schema2textEdim4', $schema2textEdim4ObjectStorageMock);

        $this->subject->addSchema2textEdim4($schema2textEdim4);
    }

    /**
     * @test
     */
    public function removeSchema2textEdim4FromObjectStorageHoldingSchema2textEdim4()
    {
        $schema2textEdim4 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textEdim4ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textEdim4ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema2textEdim4));
        $this->inject($this->subject, 'schema2textEdim4', $schema2textEdim4ObjectStorageMock);

        $this->subject->removeSchema2textEdim4($schema2textEdim4);
    }

    /**
     * @test
     */
    public function getSchema2textEdim5ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema2textEdim5()
        );
    }

    /**
     * @test
     */
    public function setSchema2textEdim5ForObjectStorageContainingTextelementSetsSchema2textEdim5()
    {
        $schema2textEdim5 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema2textEdim5 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema2textEdim5->attach($schema2textEdim5);
        $this->subject->setSchema2textEdim5($objectStorageHoldingExactlyOneSchema2textEdim5);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema2textEdim5,
            'schema2textEdim5',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema2textEdim5ToObjectStorageHoldingSchema2textEdim5()
    {
        $schema2textEdim5 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textEdim5ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textEdim5ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema2textEdim5));
        $this->inject($this->subject, 'schema2textEdim5', $schema2textEdim5ObjectStorageMock);

        $this->subject->addSchema2textEdim5($schema2textEdim5);
    }

    /**
     * @test
     */
    public function removeSchema2textEdim5FromObjectStorageHoldingSchema2textEdim5()
    {
        $schema2textEdim5 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textEdim5ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textEdim5ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema2textEdim5));
        $this->inject($this->subject, 'schema2textEdim5', $schema2textEdim5ObjectStorageMock);

        $this->subject->removeSchema2textEdim5($schema2textEdim5);
    }

    /**
     * @test
     */
    public function getSchema2textEdim6ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema2textEdim6()
        );
    }

    /**
     * @test
     */
    public function setSchema2textEdim6ForObjectStorageContainingTextelementSetsSchema2textEdim6()
    {
        $schema2textEdim6 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema2textEdim6 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema2textEdim6->attach($schema2textEdim6);
        $this->subject->setSchema2textEdim6($objectStorageHoldingExactlyOneSchema2textEdim6);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema2textEdim6,
            'schema2textEdim6',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema2textEdim6ToObjectStorageHoldingSchema2textEdim6()
    {
        $schema2textEdim6 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textEdim6ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textEdim6ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema2textEdim6));
        $this->inject($this->subject, 'schema2textEdim6', $schema2textEdim6ObjectStorageMock);

        $this->subject->addSchema2textEdim6($schema2textEdim6);
    }

    /**
     * @test
     */
    public function removeSchema2textEdim6FromObjectStorageHoldingSchema2textEdim6()
    {
        $schema2textEdim6 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textEdim6ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textEdim6ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema2textEdim6));
        $this->inject($this->subject, 'schema2textEdim6', $schema2textEdim6ObjectStorageMock);

        $this->subject->removeSchema2textEdim6($schema2textEdim6);
    }

    /**
     * @test
     */
    public function getSchema2textFdim1ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema2textFdim1()
        );
    }

    /**
     * @test
     */
    public function setSchema2textFdim1ForObjectStorageContainingTextelementSetsSchema2textFdim1()
    {
        $schema2textFdim1 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema2textFdim1 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema2textFdim1->attach($schema2textFdim1);
        $this->subject->setSchema2textFdim1($objectStorageHoldingExactlyOneSchema2textFdim1);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema2textFdim1,
            'schema2textFdim1',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema2textFdim1ToObjectStorageHoldingSchema2textFdim1()
    {
        $schema2textFdim1 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textFdim1ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textFdim1ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema2textFdim1));
        $this->inject($this->subject, 'schema2textFdim1', $schema2textFdim1ObjectStorageMock);

        $this->subject->addSchema2textFdim1($schema2textFdim1);
    }

    /**
     * @test
     */
    public function removeSchema2textFdim1FromObjectStorageHoldingSchema2textFdim1()
    {
        $schema2textFdim1 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textFdim1ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textFdim1ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema2textFdim1));
        $this->inject($this->subject, 'schema2textFdim1', $schema2textFdim1ObjectStorageMock);

        $this->subject->removeSchema2textFdim1($schema2textFdim1);
    }

    /**
     * @test
     */
    public function getSchema2textFdim2ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema2textFdim2()
        );
    }

    /**
     * @test
     */
    public function setSchema2textFdim2ForObjectStorageContainingTextelementSetsSchema2textFdim2()
    {
        $schema2textFdim2 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema2textFdim2 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema2textFdim2->attach($schema2textFdim2);
        $this->subject->setSchema2textFdim2($objectStorageHoldingExactlyOneSchema2textFdim2);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema2textFdim2,
            'schema2textFdim2',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema2textFdim2ToObjectStorageHoldingSchema2textFdim2()
    {
        $schema2textFdim2 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textFdim2ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textFdim2ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema2textFdim2));
        $this->inject($this->subject, 'schema2textFdim2', $schema2textFdim2ObjectStorageMock);

        $this->subject->addSchema2textFdim2($schema2textFdim2);
    }

    /**
     * @test
     */
    public function removeSchema2textFdim2FromObjectStorageHoldingSchema2textFdim2()
    {
        $schema2textFdim2 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textFdim2ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textFdim2ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema2textFdim2));
        $this->inject($this->subject, 'schema2textFdim2', $schema2textFdim2ObjectStorageMock);

        $this->subject->removeSchema2textFdim2($schema2textFdim2);
    }

    /**
     * @test
     */
    public function getSchema2textFdim3ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema2textFdim3()
        );
    }

    /**
     * @test
     */
    public function setSchema2textFdim3ForObjectStorageContainingTextelementSetsSchema2textFdim3()
    {
        $schema2textFdim3 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema2textFdim3 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema2textFdim3->attach($schema2textFdim3);
        $this->subject->setSchema2textFdim3($objectStorageHoldingExactlyOneSchema2textFdim3);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema2textFdim3,
            'schema2textFdim3',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema2textFdim3ToObjectStorageHoldingSchema2textFdim3()
    {
        $schema2textFdim3 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textFdim3ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textFdim3ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema2textFdim3));
        $this->inject($this->subject, 'schema2textFdim3', $schema2textFdim3ObjectStorageMock);

        $this->subject->addSchema2textFdim3($schema2textFdim3);
    }

    /**
     * @test
     */
    public function removeSchema2textFdim3FromObjectStorageHoldingSchema2textFdim3()
    {
        $schema2textFdim3 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textFdim3ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textFdim3ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema2textFdim3));
        $this->inject($this->subject, 'schema2textFdim3', $schema2textFdim3ObjectStorageMock);

        $this->subject->removeSchema2textFdim3($schema2textFdim3);
    }

    /**
     * @test
     */
    public function getSchema2textFdim4ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema2textFdim4()
        );
    }

    /**
     * @test
     */
    public function setSchema2textFdim4ForObjectStorageContainingTextelementSetsSchema2textFdim4()
    {
        $schema2textFdim4 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema2textFdim4 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema2textFdim4->attach($schema2textFdim4);
        $this->subject->setSchema2textFdim4($objectStorageHoldingExactlyOneSchema2textFdim4);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema2textFdim4,
            'schema2textFdim4',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema2textFdim4ToObjectStorageHoldingSchema2textFdim4()
    {
        $schema2textFdim4 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textFdim4ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textFdim4ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema2textFdim4));
        $this->inject($this->subject, 'schema2textFdim4', $schema2textFdim4ObjectStorageMock);

        $this->subject->addSchema2textFdim4($schema2textFdim4);
    }

    /**
     * @test
     */
    public function removeSchema2textFdim4FromObjectStorageHoldingSchema2textFdim4()
    {
        $schema2textFdim4 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textFdim4ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textFdim4ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema2textFdim4));
        $this->inject($this->subject, 'schema2textFdim4', $schema2textFdim4ObjectStorageMock);

        $this->subject->removeSchema2textFdim4($schema2textFdim4);
    }

    /**
     * @test
     */
    public function getSchema2textFdim5ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema2textFdim5()
        );
    }

    /**
     * @test
     */
    public function setSchema2textFdim5ForObjectStorageContainingTextelementSetsSchema2textFdim5()
    {
        $schema2textFdim5 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema2textFdim5 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema2textFdim5->attach($schema2textFdim5);
        $this->subject->setSchema2textFdim5($objectStorageHoldingExactlyOneSchema2textFdim5);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema2textFdim5,
            'schema2textFdim5',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema2textFdim5ToObjectStorageHoldingSchema2textFdim5()
    {
        $schema2textFdim5 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textFdim5ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textFdim5ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema2textFdim5));
        $this->inject($this->subject, 'schema2textFdim5', $schema2textFdim5ObjectStorageMock);

        $this->subject->addSchema2textFdim5($schema2textFdim5);
    }

    /**
     * @test
     */
    public function removeSchema2textFdim5FromObjectStorageHoldingSchema2textFdim5()
    {
        $schema2textFdim5 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textFdim5ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textFdim5ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema2textFdim5));
        $this->inject($this->subject, 'schema2textFdim5', $schema2textFdim5ObjectStorageMock);

        $this->subject->removeSchema2textFdim5($schema2textFdim5);
    }

    /**
     * @test
     */
    public function getSchema2textFdim6ReturnsInitialValueForTextelement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchema2textFdim6()
        );
    }

    /**
     * @test
     */
    public function setSchema2textFdim6ForObjectStorageContainingTextelementSetsSchema2textFdim6()
    {
        $schema2textFdim6 = new \I6m\Feedback\Domain\Model\Textelement();
        $objectStorageHoldingExactlyOneSchema2textFdim6 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchema2textFdim6->attach($schema2textFdim6);
        $this->subject->setSchema2textFdim6($objectStorageHoldingExactlyOneSchema2textFdim6);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchema2textFdim6,
            'schema2textFdim6',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSchema2textFdim6ToObjectStorageHoldingSchema2textFdim6()
    {
        $schema2textFdim6 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textFdim6ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textFdim6ObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schema2textFdim6));
        $this->inject($this->subject, 'schema2textFdim6', $schema2textFdim6ObjectStorageMock);

        $this->subject->addSchema2textFdim6($schema2textFdim6);
    }

    /**
     * @test
     */
    public function removeSchema2textFdim6FromObjectStorageHoldingSchema2textFdim6()
    {
        $schema2textFdim6 = new \I6m\Feedback\Domain\Model\Textelement();
        $schema2textFdim6ObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schema2textFdim6ObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schema2textFdim6));
        $this->inject($this->subject, 'schema2textFdim6', $schema2textFdim6ObjectStorageMock);

        $this->subject->removeSchema2textFdim6($schema2textFdim6);
    }
}
