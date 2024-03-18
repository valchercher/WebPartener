<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UserResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'prenom'=>$this->prenom,
            'email'=>$this->email,
            'matricule'=>$this->matricule,
            'username'=>$this->username,
            'role'=>RoleResource::make($this->role),
        ];
    }
}
