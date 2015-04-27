<?php

namespace App\Models\Decorator;

trait Base
{
    public function name()
    {
        return trans('modules.' . $this->name . '.' . str_singular($this->name));
    }

    public function message($success, $message = null)
    {
        $this->success = $success;

        switch ($message) {
            case 'success':
                $this->message = \Message::success($this->name, $this->gender);
                break;

            case 'created':
                $this->message = \Message::created($this->name, $this->gender);
                break;

            case 'updated':
                $this->message = \Message::updated($this->name, $this->gender);
                break;

            case 'removed':
                $this->message = \Message::removed($this->name, $this->gender);
                break;

            case 'try_again':
                $this->message = \Message::try_again($this->name, $this->gender);
                break;

            case 'not_found':
                $this->message = \Message::not_found($this->name, $this->gender);
                break;

            default:
                $this->message = $message;
                break;
        }
    }
}
