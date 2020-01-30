<?php
namespace App\Admin\Repositories\Restaurent;
use App\Admin\Models\Restaurent;

class RestaurentRepository implements RestaurentRepositoryInterface
{
	/**
     * Get's a post by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($post_id)
    {
        return Restaurent::find($post_id);
    }

    /**
     * Get's all posts.
     *
     * @return mixed
     */
    public function all()
    {
        return Restaurent::with('region')->get();
    }

    /**
     * Deletes a post.
     *
     * @param int
     */
    public function delete($post_id)
    {
        Restaurent::destroy($post_id);
    }

    /**
     * Updates a post.
     *
     * @param int
     * @param array
     */
    public function update($post_id, array $post_data)
    {
        Restaurent::find($post_id)->update($post_data);
    }
}