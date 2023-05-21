<?php 
namespace App\Services\Discussion;

use App\Core\ForumInterface;
use App\Repositories\Discussion\DiscussionRepository;
use App\Models\Discussion;
use Illuminate\Database\Eloquent\Collection;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Http\JsonResponse;

class DiscussionService implements ForumInterface {

    protected $repository;

    public function __construct(DiscussionRepository $discussionRepository)
    {
        $this->repository = $discussionRepository;
    }


    public function index(){
        return $this->repository->index();
    }

    public function create(array $attributes, int $id = null){

        return $this->repository->create($attributes);
    }

    public function update(object $collection, array $attrubutes):bool{

        return $this->repository->update($collection,$attrubutes);
     }
    
     
     public function destroy(object $collection):JsonResponse {
         return $this->repository->destroy($collection);
     }
     

     public function search(string $name){
            return $this->repository->search($name);
     }  
}