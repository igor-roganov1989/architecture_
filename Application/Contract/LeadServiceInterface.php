<?php
declare(strict_types=1);
interface LeadServiceInterface
{
    public function createAndSendLead(CreateLeadRequest $createLeadRequest):CreateLeadResponce;

    public function findLead(FindLeadRequest $findLeadRequest):FindLeadResponce;

}