<?php
namespace App\Repositories;

use App\Models\Channel;

class ChannelRepository
{


    public function index(){
            return Channel::paginate(5);
    }

    public function create(array $attibutes){
        return Channel::create([
            'title'=>data_get($attibutes, 'title'),
        ]); 
    }

    public function show(){
        
    }

    public function update(){
        
    }
}


