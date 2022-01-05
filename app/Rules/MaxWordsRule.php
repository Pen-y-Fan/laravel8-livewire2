<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

/**
 * Source: https://blog.quickadminpanel.com/laravel-custom-validation-rule-max-word-count/
 */
class MaxWordsRule implements Rule
{
    /**
     * @var int
     */
    private $maxWords;
    /**
     * @var int
     */
    private $wordCount;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(int $maxWords = 100)
    {
        $this->maxWords = $maxWords;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        $str_word_count_utf8 = '~[^\p{L}\p{N}\']+~u';
        $this->wordCount = count(preg_split($str_word_count_utf8, $value));
        return $this->wordCount <= $this->maxWords;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return __(
            "The current word count of :count exceeds the maximum allowed of :max words.",
            ["count" => $this->wordCount, "max" => $this->maxWords]
        );
    }
}
