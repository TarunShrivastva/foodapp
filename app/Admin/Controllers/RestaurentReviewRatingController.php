<?php

namespace App\Admin\Controllers;

use App\Admin\Models\RestaurentReviewRating;
use App\Admin\Models\Restaurent;
use App\Admin\Models\User;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class RestaurentReviewRatingController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Restaurent Review & Rating';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new RestaurentReviewRating());

        $grid->column('id', __('Id'));
        $grid->column('review', __('Review'))->limit(30);
        $grid->column('rating_id', __('Rating id'));
        $grid->user()->name('User');
        $grid->restaurent()->name('Restaurent');
        
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(RestaurentReviewRating::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('review', __('Review'));
        $show->field('rating_id', __('Rating id'));
        $show->field('user_id', __('User id'));
        $show->field('restaurent_id', __('Restaurent id'));

        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new RestaurentReviewRating());

        $form->textarea('review', __('Review'))->rules('required');
        $form->select('rating_id', __('Rating'))->options([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5'])->rules('required');
        $form->select('user_id', __('User'))->options(User::all()->pluck('name', 'id'))->rules('required')->rules('required');
        $form->select('restaurent_id', __('Restaurent'))->options(Restaurent::all()->pluck('name', 'id'))->rules('required');

        $form->display('created_at', 'Created time');
        $form->display('updated_at', 'Updated time');
        return $form;
    }
}
