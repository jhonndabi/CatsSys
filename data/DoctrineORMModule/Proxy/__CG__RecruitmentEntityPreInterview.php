<?php

namespace DoctrineORMModule\Proxy\__CG__\Recruitment\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PreInterview extends \Recruitment\Entity\PreInterview implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewId', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'registration', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewDate', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewPersonalInfo', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewIncomeProof', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewExpenseReceipt', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewElementarySchoolType', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewHighSchoolType', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewHighSchool', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewHSConclusionYear', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewPreparationSchool', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewLanguageCourse', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewCurrentStudy', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewLiveWithNumber', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewLiveWithYou', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewNumberOfRooms', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewMeansOfTransport', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewMonthlyIncome', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewFatherEducationGrade', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewMotherEducationGrade', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewExpectFromUs');
        }

        return array('__isInitialized__', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewId', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'registration', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewDate', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewPersonalInfo', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewIncomeProof', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewExpenseReceipt', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewElementarySchoolType', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewHighSchoolType', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewHighSchool', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewHSConclusionYear', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewPreparationSchool', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewLanguageCourse', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewCurrentStudy', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewLiveWithNumber', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewLiveWithYou', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewNumberOfRooms', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewMeansOfTransport', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewMonthlyIncome', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewFatherEducationGrade', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewMotherEducationGrade', '' . "\0" . 'Recruitment\\Entity\\PreInterview' . "\0" . 'preInterviewExpectFromUs');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PreInterview $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getPreInterviewId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getPreInterviewId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewId', array());

        return parent::getPreInterviewId();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreInterviewDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewDate', array());

        return parent::getPreInterviewDate();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreInterviewPersonalInfo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewPersonalInfo', array());

        return parent::getPreInterviewPersonalInfo();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreInterviewIncomeProof()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewIncomeProof', array());

        return parent::getPreInterviewIncomeProof();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreInterviewExpenseReceipt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewExpenseReceipt', array());

        return parent::getPreInterviewExpenseReceipt();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreInterviewElementarySchoolType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewElementarySchoolType', array());

        return parent::getPreInterviewElementarySchoolType();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreInterviewHighSchoolType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewHighSchoolType', array());

        return parent::getPreInterviewHighSchoolType();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreInterviewHighSchool()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewHighSchool', array());

        return parent::getPreInterviewHighSchool();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreInterviewHSConclusionYear()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewHSConclusionYear', array());

        return parent::getPreInterviewHSConclusionYear();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreInterviewLanguageCourse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewLanguageCourse', array());

        return parent::getPreInterviewLanguageCourse();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreInterviewCurrentStudy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewCurrentStudy', array());

        return parent::getPreInterviewCurrentStudy();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreInterviewLiveWithNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewLiveWithNumber', array());

        return parent::getPreInterviewLiveWithNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreInterviewLiveWithYou()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewLiveWithYou', array());

        return parent::getPreInterviewLiveWithYou();
    }

    /**
     * {@inheritDoc}
     */
    public function addPreInterviewLiveWithYou(\Doctrine\Common\Collections\Collection $lwyCollection)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPreInterviewLiveWithYou', array($lwyCollection));

        return parent::addPreInterviewLiveWithYou($lwyCollection);
    }

    /**
     * {@inheritDoc}
     */
    public function removePreInterviewLiveWithYou(\Doctrine\Common\Collections\Collection $lwyCollection)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePreInterviewLiveWithYou', array($lwyCollection));

        return parent::removePreInterviewLiveWithYou($lwyCollection);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreInterviewMeansOfTransport()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewMeansOfTransport', array());

        return parent::getPreInterviewMeansOfTransport();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreInterviewMonthlyIncome()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewMonthlyIncome', array());

        return parent::getPreInterviewMonthlyIncome();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreInterviewFatherEducationGrade()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewFatherEducationGrade', array());

        return parent::getPreInterviewFatherEducationGrade();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreInterviewMotherEducationGrade()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewMotherEducationGrade', array());

        return parent::getPreInterviewMotherEducationGrade();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreInterviewExpectFromUs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewExpectFromUs', array());

        return parent::getPreInterviewExpectFromUs();
    }

    /**
     * {@inheritDoc}
     */
    public function setPreInterviewPersonalInfo($preInterviewPersonalInfo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreInterviewPersonalInfo', array($preInterviewPersonalInfo));

        return parent::setPreInterviewPersonalInfo($preInterviewPersonalInfo);
    }

    /**
     * {@inheritDoc}
     */
    public function setPreInterviewIncomeProof($preInterviewIncomeProof)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreInterviewIncomeProof', array($preInterviewIncomeProof));

        return parent::setPreInterviewIncomeProof($preInterviewIncomeProof);
    }

    /**
     * {@inheritDoc}
     */
    public function setPreInterviewExpenseReceipt($preInterviewExpenseReceipt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreInterviewExpenseReceipt', array($preInterviewExpenseReceipt));

        return parent::setPreInterviewExpenseReceipt($preInterviewExpenseReceipt);
    }

    /**
     * {@inheritDoc}
     */
    public function setPreInterviewElementarySchoolType($preInterviewElementarySchoolType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreInterviewElementarySchoolType', array($preInterviewElementarySchoolType));

        return parent::setPreInterviewElementarySchoolType($preInterviewElementarySchoolType);
    }

    /**
     * {@inheritDoc}
     */
    public function setPreInterviewHighSchoolType($preInterviewHighSchoolType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreInterviewHighSchoolType', array($preInterviewHighSchoolType));

        return parent::setPreInterviewHighSchoolType($preInterviewHighSchoolType);
    }

    /**
     * {@inheritDoc}
     */
    public function setPreInterviewHighSchool($preInterviewHighSchool)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreInterviewHighSchool', array($preInterviewHighSchool));

        return parent::setPreInterviewHighSchool($preInterviewHighSchool);
    }

    /**
     * {@inheritDoc}
     */
    public function setPreInterviewHSConclusionYear($preInterviewHSConclusionYear)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreInterviewHSConclusionYear', array($preInterviewHSConclusionYear));

        return parent::setPreInterviewHSConclusionYear($preInterviewHSConclusionYear);
    }

    /**
     * {@inheritDoc}
     */
    public function setPreInterviewLanguageCourse($preInterviewLanguageCourse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreInterviewLanguageCourse', array($preInterviewLanguageCourse));

        return parent::setPreInterviewLanguageCourse($preInterviewLanguageCourse);
    }

    /**
     * {@inheritDoc}
     */
    public function setPreInterviewCurrentStudy($preInterviewCurrentStudy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreInterviewCurrentStudy', array($preInterviewCurrentStudy));

        return parent::setPreInterviewCurrentStudy($preInterviewCurrentStudy);
    }

    /**
     * {@inheritDoc}
     */
    public function setPreInterviewLiveWithNumber($preInterviewLiveWithNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreInterviewLiveWithNumber', array($preInterviewLiveWithNumber));

        return parent::setPreInterviewLiveWithNumber($preInterviewLiveWithNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function setPreInterviewMeansOfTransport($preInterviewMeansOfTransport)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreInterviewMeansOfTransport', array($preInterviewMeansOfTransport));

        return parent::setPreInterviewMeansOfTransport($preInterviewMeansOfTransport);
    }

    /**
     * {@inheritDoc}
     */
    public function setPreInterviewMonthlyIncome($preInterviewMonthlyIncome)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreInterviewMonthlyIncome', array($preInterviewMonthlyIncome));

        return parent::setPreInterviewMonthlyIncome($preInterviewMonthlyIncome);
    }

    /**
     * {@inheritDoc}
     */
    public function setPreInterviewFatherEducationGrade($preInterviewFatherEducationGrade)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreInterviewFatherEducationGrade', array($preInterviewFatherEducationGrade));

        return parent::setPreInterviewFatherEducationGrade($preInterviewFatherEducationGrade);
    }

    /**
     * {@inheritDoc}
     */
    public function setPreInterviewMotherEducationGrade($preInterviewMotherEducationGrade)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreInterviewMotherEducationGrade', array($preInterviewMotherEducationGrade));

        return parent::setPreInterviewMotherEducationGrade($preInterviewMotherEducationGrade);
    }

    /**
     * {@inheritDoc}
     */
    public function setPreInterviewExpectFromUs($preInterviewExpectFromUs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreInterviewExpectFromUs', array($preInterviewExpectFromUs));

        return parent::setPreInterviewExpectFromUs($preInterviewExpectFromUs);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreInterviewPreparationSchool()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewPreparationSchool', array());

        return parent::getPreInterviewPreparationSchool();
    }

    /**
     * {@inheritDoc}
     */
    public function setPreInterviewPreparationSchool($preInterviewPreparationSchool)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreInterviewPreparationSchool', array($preInterviewPreparationSchool));

        return parent::setPreInterviewPreparationSchool($preInterviewPreparationSchool);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreInterviewNumberOfRooms()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreInterviewNumberOfRooms', array());

        return parent::getPreInterviewNumberOfRooms();
    }

    /**
     * {@inheritDoc}
     */
    public function setPreInterviewNumberOfRooms($preInterviewNumberOfRooms)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreInterviewNumberOfRooms', array($preInterviewNumberOfRooms));

        return parent::setPreInterviewNumberOfRooms($preInterviewNumberOfRooms);
    }

    /**
     * {@inheritDoc}
     */
    public function setRegistration(\Recruitment\Entity\Registration $registration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegistration', array($registration));

        return parent::setRegistration($registration);
    }

}