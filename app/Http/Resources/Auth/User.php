<?php

namespace App\Http\Resources\Auth;

use App\Http\Resources\Race;
use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                => $this->id,
            'race_id'           => $this->race_id,
            'race'              => new Race($this->whenLoaded('race')),
            'username'          => $this->username,
            'email'             => $this->email,
            'email_verified_at' => $this->email_verified_at,
            'created_at'        => $this->created_at,
            'updated_at'        => $this->updated_at,
        ];
    }
}
