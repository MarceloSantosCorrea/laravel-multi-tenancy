<?php

namespace MaximGestor\Traits;

trait ObserverTrait
{
    public function created(\Illuminate\Database\Eloquent\Model $model)
    {
        $original = $model->getAttributes();
        if (\Auth::check()) {
            \Logs::channel("users/" . \Auth::user()->id)->info("Created the {$model->getTable()}: {$model->id}");
            \Logs::channel("{$model->getTable()}-created")->info("User " . \Auth::user()->email . ", registro: {$model->id}, " . json_encode($original));
            //            \Logs::channel("{$model->getTable()}-created", true)->table($original);
        }

        if (!\Auth::check()) {
            \Logs::channel("{$model->getTable()}-created")->info("User System, registro: {$model->id}, " . json_encode($original));
            //            \Logs::channel("{$model->getTable()}-created", true)->table($original);
        }
    }

    public function updated(\Illuminate\Database\Eloquent\Model $model)
    {
        $original = $model->getOriginal();
        $changes  = $model->getChanges();
        unset($changes["updated_at"]);
        $inputs = [];
        if (count($changes)) {
            foreach ($changes as $key => $val) {
                //                $inputs[$key] = [$original[$key] => $val];
                $inputs[] = "Campo: `$key` de: `{$original[$key]}` para: `$val`";
            }
        }

        if (\Auth::check() && count($inputs)) {
            \Logs::channel("users/" . \Auth::user()->id)->info("Updated the {$model->getTable()}: {$model->id}");
            \Logs::channel("{$model->getTable()}-updated")->info("User " . \Auth::user()->email . ", registro: {$model->id}, " . implode(' | ', $inputs));
            //            \Logs::channel("{$model->getTable()}-updated", true)->table($inputs);
        }

        if (!\Auth::check()) {
            \Logs::channel("{$model->getTable()}-updated")->info("User System, registro: {$model->id}, " . implode(' | ', $inputs));
            //            \Logs::channel("{$model->getTable()}-updated", true)->table($inputs);
        }
    }

    public function deleted(\Illuminate\Database\Eloquent\Model $model)
    {
        $original = $model->getOriginal();
        if (\Auth::check()) {
            \Logs::channel("users/" . \Auth::user()->id)->info("Delete the {$model->getTable()}: {$model->id}");
            \Logs::channel("{$model->getTable()}-deleted")->info("User " . \Auth::user()->email . ", registro: {$model->id}, " . json_encode($original));
            //            \Logs::channel("{$model->getTable()}-deleted", true)->table($original);
        }

        if (!\Auth::check()) {
            \Logs::channel("{$model->getTable()}-deleted")->info("User System, registro: {$model->id}, " . json_encode($original));
            //            \Logs::channel("{$model->getTable()}-deleted", true)->table($original);
        }
    }
}