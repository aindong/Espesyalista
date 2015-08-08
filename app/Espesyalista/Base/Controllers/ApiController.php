<?php
namespace App\Espesyalista\Base\Controllers;

use Illuminate\Http\Response as HttpResponse;
use Response;
use App\Espesyalista\Base\Traits\ApiResponseTrait;
use App\Http\Controllers\Controller;

abstract class ApiController extends Controller
{
    use ApiResponseTrait;

    /**
     * Helper function for normal responses of controllers
     *
     * @param $response
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function createResponse($response, $badRequestMessage = ['An error occurred while processing your request'])
    {
        // Check validation errors
        if (isset($response['errors'])) {
            return $this->responseUnproccessedEntity($response['errors']);
        }

        // Check more errors
        if (! $response) {
            return $this->responseBadRequest($badRequestMessage);
        }

        // Response created
        return $this->responseCreated($response);
    }



    /**
     * Helpers
     * -----------------------------------------------
     */

    /**
     * Convert scope string into an array
     * @param $scope
     * @return array
     */
    protected function parseScope($scope)
    {
        return array_filter(explode(' ',str_replace(',',' ',$scope)));
    }

}