<?php 

namespace App\Core;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\JsonResponse;

interface ForumInterface
{
    public function index();
   public function create(array $attributes,int $id);
 public function update(object $collection,array $attributes):bool;
public function destroy(object $collection):JsonResponse;
}