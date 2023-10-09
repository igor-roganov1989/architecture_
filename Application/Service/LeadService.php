<?php
declare(strict_types=1);
namespace App\Application\Service;

use App\Application\DTO\CreateLeadRequest;
use App\Application\DTO\CreateLeadResponse;
use App\Model\ArstractLead;
use App\Model\LoanLead;
use App\Domain\Contract\LeadRepositoryInterface;

class LeadService implements LeadServiceInterface
{
    private BankGateWay $bankGateWay;
    private LeadRepositoryInterface $leadRepository;



    /**
     * @param BankGateWay $bankGateWay
     */
    public function __construct(BankGateWay $bankGateWay)
    {
        $this->bankGateWay = $bankGateWay;
    }

    public function createAndSendLead(CreateLeadRequest $createLeadRequest):CreateLeadResponce{
        try{

            $lead = new \App\Domain\Model\LoanLead(
              new Name($createLeadRequest->getName()),
              new Phone($createLeadRequest->getPhone())
            );
        $id = $this->bankGateWay->sendlead($lead);
        return CreateLeadResponce::createWithId($id);
        }catch (\Exception $e){
            CreateLeadResponce::createWithError($e->getMessage());
        }
    }

    public function findLead(FindLeadRequest $findLeadRequest):FindLeadResponce{
        $lead = $this->leadRepository->findLeadById($findLeadRequest->getId());
        return new FindLeadResponce(
            $lead->getName()->getValue,
        );


    }

}