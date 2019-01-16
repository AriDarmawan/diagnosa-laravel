<?php

namespace App\Admin\Controllers;

use App\Symptom;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class DiagnosaController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        $symptoms = Symptom::all();

        return $content
            ->header('Index')
            ->description('description')
            ->body(view('diagnosa', compact('symptoms')));
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
//    public function show($id, Content $content)
//    {
//        return $content
//            ->header('Detail')
//            ->description('description')
//            ->body($this->detail($id));
//    }
//
//    /**
//     * Edit interface.
//     *
//     * @param mixed $id
//     * @param Content $content
//     * @return Content
//     */
//    public function edit($id, Content $content)
//    {
//        return $content
//            ->header('Edit')
//            ->description('description')
//            ->body($this->form()->edit($id));
//    }
//
//    /**
//     * Create interface.
//     *
//     * @param Content $content
//     * @return Content
//     */
//    public function create(Content $content)
//    {
//        return $content
//            ->header('Create')
//            ->description('description')
//            ->body($this->form());
//    }
//
//    /**
//     * Make a grid builder.
//     *
//     * @return Grid
//     */
//    protected function grid()
//    {
//        $grid = new Grid(new Symptom);
//
//
//
//        $grid->disableActions();
//
//        return $grid;
//    }
//
//    /**
//     * Make a show builder.
//     *
//     * @param mixed $id
//     * @return Show
//     */
//    protected function detail($id)
//    {
//        $show = new Show(Symptom::findOrFail($id));
//
//        $show->symptom_id('Symptom id');
//        $show->symptom_name('Symptom name');
//        $show->created_at('Created at');
//        $show->updated_at('Updated at');
//
//        return $show;
//    }
//
//    /**
//     * Make a form builder.
//     *
//     * @return Form
//     */
//    protected function form()
//    {
//        $form = new Form(new Symptom);
//
//        $form->number('symptom_id', 'Symptom id');
//        $form->text('symptom_name', 'Symptom name');
//
//        $form->select('Diagnosa');
//
//        return $form;
//    }


}
