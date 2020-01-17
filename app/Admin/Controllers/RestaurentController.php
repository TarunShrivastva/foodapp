<?php

namespace App\Admin\Controllers;

use App\Admin\Models\Restaurent;
use App\Admin\Models\State;
use App\Admin\Models\City;
use App\Admin\Models\Country;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class RestaurentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Restaurent';

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
        $form->textarea('street', __('Street'))->rules('required|min:3');
        $form->number('rating', __('Rating'))->attribute(['max' => '5', 'min' => '0'])->default(0);
        $form->select('country_id', __('Country'))->options(Country::all()->pluck('name', 'id'))->rules('required');
        $form->select('state_id', __('State'))->options(State::all()->pluck('name', 'id'))->rules('required');
        $form->select('city_id', __('City'))->options(City::all()->pluck('name', 'id'))->rules('required');

        $form->display('created_at', 'Created time');
        $form->display('updated_at', 'Updated time');
        return $form;
    }
}
