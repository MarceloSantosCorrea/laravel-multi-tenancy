<?php

namespace MaximGestor\Http\Controllers\Api;

use MaximGestor\Http\Requests\UserRequest;
use MaximGestor\Models\User;
use MaximGestor\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    use ControllerTrait;

    protected $relationships = ['roles'];

    public function me()
    {
        return response()->json(\Auth::user());
    }

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    /**
     * Listar todos os usuários
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $limit = $request->all()['limit'] ?? 20;
        $order = $request->all()['order'] ?? null;

        if ($order !== null)
            $order = explode(',', $order);

        $order[0] = $order[0] ?? 'id';
        $order[1] = $order[1] ?? 'asc';

        $where = $request->all()['where'] ?? [];
        $like  = $request->all()['like'] ?? null;

        if ($like) {
            $like    = explode(',', $like);
            $like[1] = '%' . $like[1] . '%';
        }

        $result = $this->model->orderBy($order[0], $order[1])
            ->where(function ($query) use ($like) {
                if ($like)
                    return $query->where($like[0], 'like', $like[1]);

                return $query;
            })
            ->where($where)
            ->with($this->relationships())
            ->acl()
            ->paginate($limit);

        return response()->json($result);
    }

    public function show(User $user)
    {
        return $user;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        try {
            return User::createCustom($request->all());
        } catch (\Exception $e) {
            return response()->json(["errors" => true, "message" => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, $id)
    {
        try {
            $user = User::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(["errors" => true, "message" => "User not found."]);
        }
        try {
            return $user->updateCustom($request->all(), $user);
        } catch (\Exception $e) {
            return response()->json(["errors" => true, "message" => $e->getMessage()]);
        }
    }


    /**
     * Removendo usuário
     *
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Http\JsonResponse|string
     * @throws \Exception
     */
    public function destroy($id)
    {
        try {

            $user = User::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {

            return response()->json([
                'errors'  => $e->getCode(),
                'message' => 'User not found.',
            ]);
        }

        try {

            $user->delete();

            return $user;
        } catch (\Symfony\Component\HttpKernel\Exception\NotFoundHttpException $e) {

            return response()->json([
                'errors'  => $e->getCode(),
                'message' => $e->getMessage(),
            ]);
        }
    }
}
