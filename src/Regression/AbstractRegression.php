<?php

namespace Regression;

use Carbon\Carbon;

/**
 * Class AbstractRegression
 *
 * @package Regression
 * @author  robotomize@gmail.com
 */
abstract class AbstractRegression implements InterfaceRegression
{

    /**
     * @var array
     */
    protected $sourceSequence;

    /**
     * @var string
     */
    protected $equation;

    /**
     * @var string
     */
    protected $power;

    /**
     * @var string
     */
    protected $coefficient;

    /**
     * @var array
     */
    protected $resultSequence;

    /**
     * @var RegressionModel
     */
    protected $regressionModel;

    /**
     * @var array
     */
    protected $sumIndex = [];

    /**
     * @var int
     */
    protected $dimension;

    abstract public function calculate();

    protected function push()
    {
        $this->regressionModel = new RegressionModel();
        $this->regressionModel->setCoefficient($this->coefficient);
        $this->regressionModel->setPower($this->power);
        $this->regressionModel->setEquation($this->equation);
        $this->regressionModel->setObjectId(bin2hex(random_bytes(10)));
        $this->regressionModel->setResultSequence($this->resultSequence);
        $this->regressionModel->setSourceSequence($this->sourceSequence);
        $this->regressionModel->setCreateDate(Carbon::now()->toDateTimeString());
    }

    /**
     * @param array $data
     */
    public function setSourceSequence(array $data)
    {
        $this->sourceSequence = $data;
    }

    /**
     * @return string
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @return string
     */
    public function getCoefficient()
    {
        return $this->coefficient;
    }

    /**
     * @return string
     */
    public function getEquation()
    {
        return $this->equation;
    }

    /**
     * @return RegressionModel
     */
    public function getRegressionModel()
    {
        return $this->regressionModel;
    }

    /**
     * @return array
     */
    public function getSourceSequence()
    {
        return $this->sourceSequence;
    }
}
