<?php
namespace App\Repositories;

use App\Models\Channel;
use Exception;
use Illuminate\Support\Facades\DB;

class ChannelRepository
{
    public function index()
    {
        return Channel::paginate(5);
    }

    public function create(array $attibutes): Channel
    {
        return Channel::create([
            'title'=>data_get($attibutes, 'title'),
        ]);
    }
    /*
    public function show()
    {

    }
    */

    public function update(Channel $channel, array $attibutes)
    {
    
        $updated = $channel->update([
            'title' => data_get($attibutes,'title')
        ]);

        return $updated ;

    }

    public function destroy(Channel $channel) {
    
        $channel->delete($channel); 

        return response()->json(null, 204);
    }
}