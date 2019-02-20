<?php

namespace MaximGestor\Traits;

use Illuminate\Http\Request;

trait ModelTrait
{
    /**
     * @param Request $request
     * @return mixed
     */
    public static function listing(Request $request)
    {
        $qb = self::query();

        if ($request->has('search'))
            $qb = self::search($qb, $request->search);

        return $qb;
    }

    /**
     * @param array $data
     * @return mixed
     * @throws \Exception
     */
    public static function createCustom(Array $data)
    {
        try {
            \DB::beginTransaction();
            if ($model = self::create($data)) {

                if (!is_null(self::$createEvent)) event(new self::$createEvent($model, $data));

                \DB::commit();

                return $model;
            }

        } catch (\Exception $e) {
            \DB::rollBack();
            throw $e;
        }
    }

    /**
     * @param array $data
     * @param \Illuminate\Database\Eloquent\Model $model
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \Exception
     */
    public static function updateCustom(Array $data, \Illuminate\Database\Eloquent\Model $model, $transaction = true)
    {
        if ($transaction) {

            try {
                \DB::beginTransaction();

                $model->fill($data);

                if ($model->update()) {

                    if (!is_null(self::$updateEvent)) event(new self::$updateEvent($model, $data));

                    \DB::commit();

                    return $model;
                }

            } catch (\Exception $e) {
                \DB::rollBack();
                throw $e;
            }
        } else {

            $model->fill($data);

            if ($model->update()) {

                if (!is_null(self::$updateEvent)) event(new self::$updateEvent($model, $data));

                return $model;
            }
        }
    }

    /**
     * @param \Illuminate\Database\Eloquent\Model $model
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \Exception
     */
    public static function deleteCustom(\Illuminate\Database\Eloquent\Model $model)
    {
        try {
            \DB::beginTransaction();

            if ($model->delete()) {

                if (!is_null(self::$deleteEvent)) event(new self::$deleteEvent($model, []));

                \DB::commit();

                return $model;
            }

        } catch (\Exception $e) {
            \DB::rollBack();
            throw $e;
        }
    }
}