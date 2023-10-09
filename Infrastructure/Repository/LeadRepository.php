<?php
declare(strict_types=1);
namespace App\Infrastructure\Repository;

use App\Domain\Contract\LeadRepositoryInterface;

class LeadRepository implements LeadRepositoryInterface
{
    public function findLeadById(string $id): ?\App\Domain\Model\AbstractLead
    {
        $name = new Name('test');
        $phone = new Phone('8999999999');

        if (((int)$id) % 2){
            $lead = new \App\Domain\Model\LoanLead($name,$phone);
        }else{
            $lead = new \App\Domain\Model\InsuranceLead($name,$phone);
        }
        return $lead;
    }

}