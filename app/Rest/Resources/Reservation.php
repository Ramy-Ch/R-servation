<?php

namespace App\Rest\Resources;

use Lomkit\Rest\Http\Resource;
use Lomkit\Rest\Http\Requests\RestRequest;
use App\Models\Reservation as ReservationModel; //J'ai dû rajouter as ReservationModel car bêtement j'avais donné le même nom au fichier modèle qu'au fichier en resource

class Reservation extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    public static $model = ReservationModel::class;

    /**
     * The exposed fields that could be provided
     * @param RestRequest $request
     * @return array
     */
    public function fields(RestRequest $request): array
    {
        return [
            'id',
            'user_id',
            'salle_id',
            'debut',
            'fin'
        ];
    }

    /**
     * The exposed relations that could be provided
     * @param RestRequest $request
     * @return array
     */
    public function relations(RestRequest $request): array
    {
        return [];
    }

    /**
     * The exposed scopes that could be provided
     * @param RestRequest $request
     * @return array
     */
    public function scopes(RestRequest $request): array
    {
        return [];
    }

    /**
     * The exposed limits that could be provided
     * @param RestRequest $request
     * @return array
     */
    public function limits(RestRequest $request): array
    {
        return [
            10,
            25,
            50
        ];
    }

    /**
     * The actions that should be linked
     * @param RestRequest $request
     * @return array
     */
    public function actions(RestRequest $request): array {
        return [];
    }

    /**
     * The instructions that should be linked
     * @param RestRequest $request
     * @return array
     */
    public function instructions(RestRequest $request): array {
        return [];
    }
}
