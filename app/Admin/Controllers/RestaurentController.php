<?php

namespace App\Admin\Controllers;

use App\Admin\Models\Restaurent;
use App\Admin\Models\State;
use App\Admin\Models\City;
use App\Admin\Models\Country;
use App\Admin\Models\Food;
use App\Admin\Models\Category;
use App\Admin\Models\SubCategory;
use App\Admin\Models\Region;

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
        $grid->country()->name('Country');
        $grid->state()->name('State');
        $grid->city()->name('City');
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
        $show->field('country_id', __('Country'));
        $show->field('state_id', __('State'));
        $show->field('city_id', __('City'));
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
        $form->tab('Restaurent',function(Form $form){
            $form->text('name', __('Name'));
            $form->textarea('street', __('Street'))->rules('required|min:3');
            $form->select('country_id', __('Country'))->options(Country::all()->pluck('name', 'id'))->rules('required');
            $form->select('state_id', __('State'))->options(State::all()->pluck('name', 'id'))->rules('required');
            $form->select('city_id', __('City'))->options(City::all()->pluck('name', 'id'))->rules('required');
            $form->multipleSelect('region', 'Regions Avaiable')->options(Region::all()->pluck('name', 'id'));
            $form->image('image',__('Image'))->uniqueName()->rules('mimes:jpg,jpeg,png');
        },true);
        $form->tab('Food',function(Form $form){
            $form->hasMany('foods', function (Form\NestedForm $form){
            $form->select('category_id', __('Category'))->options(Category::all()->pluck('name', 'id'))->rules('required');
            $form->select('subcategory_id', __('Sub Category'))->options(SubCategory::all()->pluck('name', 'id'));
            $form->text('name', __('Name'));
            $form->text('price',__('Price'))->  rules('required');
            $form->image('image',__('Image'))->uniqueName()->rules('mimes:jpg,jpeg,png');
            });
        });

        $form->display('created_at', 'Created time');
        $form->display('updated_at', 'Updated time');
        return $form;
    }
}
