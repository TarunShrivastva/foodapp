<?php

namespace App\Admin\Controllers;

use App\Admin\Models\Order;
use App\Admin\Models\Restaurent;
use App\Admin\Models\User;
use App\Admin\Models\Food;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Order';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order());

        $grid->column('id', __('Id'));
        $grid->status('status')->display(function ($state) {
            $status = [0 => 'Not Delivered', 1 => 'delivered', 2 => 'canceled'];
                return $status[(int)$state];
        });
        $grid->restaurent()->name('Restaurent');
        $grid->user()->name('User');
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
        $show = new Show(Order::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('status', __('Status'));
        $show->field('restaurent_id', __('Restaurent id'));
        $show->field('user_id', __('User id'));
        $show->field('food_id', __('Food id'));
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
        $form = new Form(new Order());

        $form->select('status', __('Status'))->options([0 => 'Not Delivered', 1 => 'delivered', 2 => 'canceled']);
        $form->select('restaurent_id', __('Restaurent'))->options(Restaurent::all()->pluck('name', 'id'))->rules('required');
        $form->select('user_id', __('User'))->options(User::all()->pluck('name', 'id'))->rules('required');
        $form->multipleSelect('food', 'Food Avaiable')->options(Food::all()->pluck('name', 'id'));

        $form->display('created_at', 'Created time');
        $form->display('updated_at', 'Updated time');
        return $form;
    }
}
