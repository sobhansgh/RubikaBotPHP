<?php

namespace Sobhansgh\Rubikabotphp\Types;

class Poll extends BaseType
{
    public function question(string $question): static
    {
        $this->data['question'] = $question;

        return $this;
    }

    public function options(array $options): static
    {
        $this->data['options'] = $options;

        return $this;
    }

    public function anonymous(bool $anonymous = true): static
    {
        $this->data['is_anonymous'] = $anonymous;

        return $this;
    }

    public function multipleAnswers(bool $multiple = true): static
    {
        $this->data['allows_multiple_answers'] = $multiple;

        return $this;
    }
}