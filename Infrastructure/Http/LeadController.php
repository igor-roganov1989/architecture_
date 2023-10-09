<?php
declare(strict_types=1);

namespace App\Infrastructure\Http;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use App\Application\DTO\CreateLeadRequest;
use App\Application\DTO\CreateLeadResponse;

class LeadController extends AbstractFOSRestController

{
    private LeadServiceInterface $leadService;
    public function __construct(LeadServiceInterface $leadService){
        $this->leadService = $leadService;


    }
    public function createLead(CreateLeadRequest $createLeadRequest):Responce{
        $responce = $this->leadService->createAndSendLead($createLeadRequest);
        $view = $this->view($responce,201);
        return $this->handleView($view);
    }

    public function findLead(string $id): Responce
    {
        $findLeadRequest = new FindLeadRequest($id);
        $findLeadResponse = $this->leadService->findLead($findLeadRequest);
        
    }
}