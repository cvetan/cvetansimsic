<?php

namespace App\Presenters;

use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter
{

    /**
     * @return string
     */
    public function adminAccount(): string
    {
        if ($this->entity->is_admin) {
            return '<span class="fa fa-check text-success"></span>';
        }

        return '<span class="fa fa-times text-danger"></span>';
    }
}
