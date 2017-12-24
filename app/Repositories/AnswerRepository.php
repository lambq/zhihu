<?php
/**
 * Created by PhpStorm.
 * User: lamb
 * Date: 2017/12/24
 * Time: 下午10:16
 */

namespace App\Repositories;

use App\Answer;
class AnswerRepository
{
    public function create(array $data)
    {
        return Answer::create($data);
    }
}