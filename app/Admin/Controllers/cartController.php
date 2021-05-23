<?php

namespace App\Admin\Controllers;

use App\cart;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class cartController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'cart';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new cart());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('product_id', __('Product id'));
        $grid->column('product_name', __('Product name'));
        $grid->column('product_price', __('Product price'));
        $grid->column('product_quantity', __('Product quantity'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(cart::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('product_id', __('Product id'));
        $show->field('product_name', __('Product name'));
        $show->field('product_price', __('Product price'));
        $show->field('product_quantity', __('Product quantity'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new cart());

        $form->number('user_id', __('User id'));
        $form->number('product_id', __('Product id'));
        $form->text('product_name', __('Product name'));
        $form->text('product_price', __('Product price'));
        $form->text('product_quantity', __('Product quantity'));

        return $form;
    }
}
