<?php

namespace App\Admin\Controllers;

use App\Model\VideoModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class VideoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '视频添加';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new VideoModel);

        $grid->column('video_id', __('Video id'));
        $grid->column('add_time', __('Add time'));
        $grid->column('video_path', __('Video path'));
        $grid->column('video_name', __('Video name'));

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
        $show = new Show(VideoModel::findOrFail($id));

        $show->field('video_id', __('Video id'));
        $show->field('add_time', __('Add time'));
        $show->field('video_path', __('Video path'));
        $show->field('video_name', __('Video name'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new VideoModel);

       // $form->number('video_id', __('Video id'));
        //$form->number('add_time', __('Add time'));
        $form->file('video_path')->uniqueName();
        $form->text('video_name', __('视频名称'));
        return $form;
    }
}
