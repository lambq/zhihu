<?php
/**
 * Created by PhpStorm.
 * User: lamb
 * Date: 2017/12/13
 * Time: 下午6:03
 */

namespace App\Repositories;

use App\Question;
use App\Topic;

class QuestionRepository
{
    public function ByIdWithTopicsAndAnswers($id)
    {
        return Question::where('id',$id)->with(['topics','answers'])->first();
    }

    public function create(array $data)
    {
        return Question::create($data);
    }

    public function ById($id)
    {
        return Question::find($id);
    }

    public function getQuestionsFeed()
    {
        return Question::published()->latest('updated_at')->with('user')->get();
    }

    public function normalizeTopic(array $topics)
    {
        return collect($topics)->map(function ($topics) {
            if(is_numeric($topics)) {
                Topic::find($topics)->increment('questions_count');
                return (int) $topics;
            }
            $newTopic = Topic::create(['name' => $topics,'questions_count' => 1]);
            return $newTopic->id;
        })->toArray();
    }
}