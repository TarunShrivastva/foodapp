<?php

namespace App\Admin\Controllers;

use App\Admin\Models\Food;
use App\Admin\Models\Restaurent;
use App\Admin\Models\State;
use App\Admin\Models\City;
use App\Admin\Models\Country;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FoodController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Food';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Food());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('rating', __('Rating'));
        $grid->column('restaurent_id', __('Restaurent id'));
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
        $show = new Show(Food::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('rating', __('Rating'));
        $show->field('restaurent_id', __('Restaurent id'));
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
        $form = new Form(new Food());

        $form->text('title', __('Title'));
        $form->number('rating', __('Rating'))->attribute(['max' => '5', 'min' => '0'])->default(0);
        $form->select('restaurent_id', __('Restaurent'))->options(Restaurent::all()->pluck('name', 'id'))->rules('required');
        $form->select('country_id', __('Country'))->options(Country::all()->pluck('name', 'id'))->rules('required');
        $form->select('state_id', __('State'))->options(State::all()->pluck('name', 'id'))->rules('required');
        $form->select('city_id', __('City'))->options(City::all()->pluck('name', 'id'))->rules('required');
        $form->display('created_at', 'Created time');
        $form->display('updated_at', 'Updated time');
        return $form;
    }
}