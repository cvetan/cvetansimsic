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
        $html = [];

        if ($this->entity->is_admin) {
            $html[] = '<span class="badge badge-success">';
            $html[] = __('users.admin_account');
            $html[] = '</span>';
        } else {
            $html[] = '<span class="badge badge-danger">';
            $html[] = __('users.user_account');
            $html[] = '</span>';
        }

        return implode('', $html);
    }
}
