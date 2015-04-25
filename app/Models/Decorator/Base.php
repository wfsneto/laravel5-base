<?php

namespace App\Models\Decorator;

trait Base
{
    public function name()
    {
        return trans('modules.' . $this->name . '.' . str_singular($this->name));
    }

    public function messages($type)
    {
        $translation = 'messages.' . $type;
        $translation .= in_array($this->gender, [ 'f', 'm' ]) ? '.' . $this->gender : null;

        return $this->name() . trans($translation);
    }

    public function message($success, $message = null)
    {
        $this->success = $success;

        switch ($message) {
            case 'success':
                $this->message = $this->messages_success();
                break;

            case 'created':
                $this->message = $this->messages_created();
                break;

            case 'updated':
                $this->message = $this->messages_updated();
                break;

            case 'removed':
                $this->message = $this->messages_removed();
                break;

            case 'try_again':
                $this->message = $this->messages_try_again();
                break;

            case 'not_found':
                $this->message = $this->messages_not_found();
                break;

            default:
                $this->message = $message;
                break;
        }
    }

    # Aliases

    public function messages_success()
    {
        return $this->messages('success');
    }

    public function messages_created()
    {
        return $this->messages('created');
    }
    public function messages_updated()
    {
        return $this->messages('updated');
    }

    public function messages_removed()
    {
        return $this->messages('removed');
    }

    public function messages_try_again()
    {
        return $this->messages('try_again');
    }

    public function messages_not_found()
    {
        return $this->messages('not_found');
    }
}
