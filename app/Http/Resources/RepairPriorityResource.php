<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RepairPriorityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'           => $this->id,
            'value'        => $this->value,
            'name'         => $this->name,
            'extra_charge' => $this->extra_charge,
        ];
    }
}
