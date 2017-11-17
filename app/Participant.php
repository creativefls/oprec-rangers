<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    public function countAll(){
        return $this->count();
    }

    public function countProgram(){
        return $this->where('primary_division', 'Program')->orWhere('secondary_division', 'Program')->count();
    }

    public function countMarketing(){
        return $this->where('primary_division', 'Marketing')->orWhere('secondary_division', 'Marketing')->count();
    }

    public function countCommunication(){
        return $this->where('primary_division', 'Communication')->orWhere('secondary_division', 'Communication')->count();
    }

    public function countLO(){
        return $this->where('primary_division', 'LO')->orWhere('secondary_division', 'LO')->count();
    }

    public function countGeneralAffairs(){
        return $this->where('primary_division', 'General Affairs')->orWhere('secondary_division', 'General Affairs')->count();
    }

    public function countPID(){
        return $this->where('primary_division', 'PID')->orWhere('secondary_division', 'PID')->count();
    }

    public function countCreative(){
        return $this->where('primary_division', 'Creative')->orWhere('secondary_division', 'Creative')->count();
    }

    public function countIT(){
        return $this->where('primary_division', 'IT')->orWhere('secondary_division', 'IT')->count();
    }

}
