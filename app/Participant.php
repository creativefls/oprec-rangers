<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    public function countAll(){
        return $this->count();
    }

    public function countProgram(){
        return $this->where('primary_division', 'Program')->count();
    }

    public function countMarketing(){
        return $this->where('primary_division', 'Marketing')->count();
    }

    public function countCommunication(){
        return $this->where('primary_division', 'Communication')->count();
    }

    public function countLO(){
        return $this->where('primary_division', 'LO')->count();
    }

    public function countGeneralAffairs(){
        return $this->where('primary_division', 'General Affairs')->count();
    }

    public function countPID(){
        return $this->where('primary_division', 'PID')->count();
    }

    public function countCreative(){
        return $this->where('primary_division', 'Creative')->count();
    }

    public function countIT(){
        return $this->where('primary_division', 'IT')->count();
    }

}
