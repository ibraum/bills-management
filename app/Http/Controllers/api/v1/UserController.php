<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\users\UserRequest;
use App\Http\Requests\users\UserUpdateRequest;
use App\Http\Resources\UserResource;
use App\Usecases\users\UserCreateUsecase;
use App\Usecases\users\UserDeleteUsecase;
use App\Usecases\users\UserFindOneUsecase;
use App\Usecases\users\UserListUsecase;
use App\Usecases\users\UserUpdateUsecase;
use Illuminate\Http\JsonResponse;use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    private UserCreateUsecase $userCreateUsecase;
    private UserListUsecase $userListUsecase;
    private UserFindOneUsecase $userFindOneUsecase;
    private UserUpdateUsecase $userUpdateUsecase;
    private UserDeleteUsecase $userDeleteUsecase;
    public function __construct(
        UserCreateUsecase $userCreateUsecase,
        UserListUsecase $userListUsecase,
        UserFindOneUsecase $userFindOneUsecase,
        UserUpdateUsecase $userUpdateUsecase,
        UserDeleteUsecase $userDeleteUsecase )
    {
        $this->userCreateUsecase = $userCreateUsecase;
        $this->userListUsecase = $userListUsecase;
        $this->userFindOneUsecase = $userFindOneUsecase;
        $this->userUpdateUsecase = $userUpdateUsecase;
        $this->userDeleteUsecase = $userDeleteUsecase;
    }

    public function index() : JsonResponse
    {
        return new JsonResponse(
            data: UserResource::collection($this->userListUsecase->execute()),
            status: Response::HTTP_OK
        );
    }

    public function create(UserRequest $userRequest) : UserResource | JsonResponse
    {

            return new JsonResponse(
                data: new UserResource($this->userCreateUsecase->execute($userRequest)),
                status: Response::HTTP_CREATED
            );
    }

    public function show(int $id) : JsonResponse
    {
        return new JsonResponse(
            data: new UserResource($this->userFindOneUsecase->execute($id)),
            status: Response::HTTP_OK
        );
    }

    public function update(UserUpdateRequest $userUpdateRequest, int $id) : JsonResponse
    {
        return new JsonResponse(
            data: new UserResource( $this->userUpdateUsecase->execute($userUpdateRequest, $id)),
            status: Response::HTTP_OK
        );
    }

    public function destroy(string $id) :  JsonResponse
    {
        $deleteUser = $this->userDeleteUsecase->execute($id);

        return new JsonResponse(
            data: new UserResource($deleteUser),
            status: Response::HTTP_OK
        );
    }
}
