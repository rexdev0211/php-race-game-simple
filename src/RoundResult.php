<?php


class RoundResult
{
    /**
     * @var int
     */
    public $step;

    /**
     * @var array
     */
    public $carsPosition;

    public function __construct(int $step, array $carsPosition)
    {
        $this->step = $step;
        $this->carsPosition = $carsPosition;
    }

    public function setStep(int $step) {
        $this->step = $step;
    }

    public function getStep() {
        return $this->step;
    }

    public function setCarsPosition(array $carsPosition) {
        $this->carsPosition = $carsPosition;
    }

    public function getCarsPosition() {
        return $this->carsPosition;
    }
}
