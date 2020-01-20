<?php

namespace App\Admin\Controllers;

use App\Admin\Models\RestaurentReview;
use App\Admin\Models\Restaurent;
use App\Admin\Models\User;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class RestaurentReviewController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Restaurent Review';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new RestaurentReview());

        $grid->column('id', __('Id'));
        $grid->column('review', __('Review'))->limit(50);
        $grid->user()->name('User Name');
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
        $show = new Show(RestaurentReview::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('review', __('Review'));
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
        $form = new Form(new RestaurentReview());

        $form->textarea('review', __('Review'));
        $form->select('user_id', __('User'))->options(User::all()->pluck('name', 'id'));
        $form->select('restaurent_id', __('Restaurent'))->options(Restaurent::all()->pluck('name', 'id'));

        $form->display('created_at', 'Created time');
        $form->display('updated_at', 'Updated time');
        return $form;
    }
}
