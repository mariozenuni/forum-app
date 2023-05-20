<?php
namespace App\Repositories;

use App\Models\Channel;
use Exception;

class ChannelRepository
{
    public function index()
    {
        return Channel::paginate(5);
    }

    public function create(array $attibutes): Channel
    {
        try{

            $channel = Channel::create([
                'title'=>data_get($attibutes, 'title'),
            ]);

        }catch(Exception $e){
            throw new Exception('Something went wrong while updating '. $e->getMessage(),500);
        }
       

        return $channel;
    }
    /*
    public function show()
    {

    }
    */

    public function update(Channel $channel, array $attibutes)
    {
        try{
            $updated = $channel->update([
                'title' => data_get($attibutes,'title')
            ]);

        }catch(Exception $e){
            throw new Exception('Something went wrong while updating '. $e->getMessage(),500);
        }
      

        return $updated ;

    }

    public function destroy(Channel $channel) {
        try{
            $channel->delete($channel); 
        }catch(Exception $e){
            throw new Exception('Something went wrong while deleting '. $e->getMessage(),500);
        }
      
        return response()->json(null, 204);
    }
}