<?php

namespace App\Http\Resources;

use App\Models\Sender;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property Sender $resource
 */
class SenderResource extends JsonResource
{


    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);

        return [
            'name'=>$this->resource->name,
            'email'=>$this->resource->email,
            'w'=>$request->user()
            
        ];
    }
}
