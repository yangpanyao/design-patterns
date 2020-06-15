<?php
namespace DesignPatterns\Prototype\V3;
/**
 * 工作经历
 * Class WorkExperience
 * @package DesignPatterns\Prototype\V3
 */
class WorkExperience
{
    private $workDate;
    private $company;

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return mixed
     */
    public function getWorkDate()
    {
        return $this->workDate;
    }

    /**
     * @param $workDate
     * @return mixed
     */
    public function SetWorkDate($workDate)
    {
        $this->workDate = $workDate;
    }


    /**
     * @param $company
     * @return mixed
     */
    public function SetCompany($company)
    {
        $this->company = $company;
    }
}