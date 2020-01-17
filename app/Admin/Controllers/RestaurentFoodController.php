<?php

namespace App\Admin\Controllers;

use App\Admin\Models\Restaurent;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class RestaurentFoodController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Admin\Models\Restaurent';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Restaurent());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('street', __('Street'));
        $grid->column('rating', __('Rating'));
        $grid->column('country_id', __('Country id'));
        $grid->column('state_id', __('State id'));
        $grid->column('city_id', __('City id'));
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
        $show = new Show(Restaurent::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('street', __('Street'));
        $show->field('rating', __('Rating'));
        $show->field('country_id', __('Country id'));
        $show->field('state_id', __('State id'));
        $show->field('city_id', __('City id'));
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
        $form = new Form(new Restaurent());

        $form->text('name', __('Name'));
        $form->text('street', __('Street'));
        $form->number('rating', __('Rating'));
        $form->number('country_id', __('Country id'));
        $form->number('state_id', __('State id'));
        $form->number('city_id', __('City id'));

        return $form;
    }
}
