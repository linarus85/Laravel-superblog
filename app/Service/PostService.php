<?php

namespace App\Service;

use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            if (isset($data['tag_id'])) {
                $tagId = $data['tag_id'];
                unset($data['tag_id']);
            }
            if (isset($data['prev_image'])) {
                $data['prev_image'] = Storage::disk('public')->put('/images', $data['prev_image']);
            }
            if (isset($data['main_image'])) {
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            }
            $post =  Post::firstOrCreate($data);
            if (isset($data['tag_id'])) {
                $post->tags()->attach($tagId);
            }
            Db::commit();
        } catch (\Exception $th) {
            Db::rollBack();
            abort(500);
        }
    }

    public function  update($data, $post)
    {
        try {
            DB::beginTransaction();
            if (isset($data['tag_id'])) {
                $tagId = $data['tag_id'];
                unset($data['tag_id']);
            }
            if (isset($data['prev_image'])) {
                $data['prev_image'] = Storage::disk('public')->put('/images', $data['prev_image']);
            }
            if (isset($data['main_image'])) {
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            }
            $post->update($data);
            if (isset($data['tag_id'])) {
                $post->tags()->sync($tagId);
            }
            Db::commit();
        } catch (\Exception $th) {
            Db::rollBack();
            abort(500);
        }
        return $post;
    }
}
