<?php

namespace App\DataTables;

use Yajra\DataTables\Html\Column;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Services\DataTable;

class RoleDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->of($query)
            ->addColumn('permissions', function ($row) {
                return view('datatable.roles.permission-list', compact('row'));
            })
            ->addColumn('action', function ($row) {
                $edit = '<a href="' . route('admin.roles.edit', $row->id) . '" class=\'btn btn-outline-primary\' style="margin-left: 5px;"><i class="fa fa-pencil-alt"></i></a>';
                $delete = '<a data-href="' . route('admin.roles.destroy', $row->id) . '" class=\'btn btn-outline-danger\' data-toggle="modal" data-target="#confirm-delete-modal" style="margin-left: 5px;"><i class="fa fa-trash"></i></a>';
                return (userCan('edit role') ? $edit : '') . (userCan('delete role') ? $delete : '');
            });
    }

    public function query(Role $model)
    {
        return $model->all();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->buttons([
                ['extend' => 'print', 'className' => 'btn xs default m-2', 'text' => '<i class="fa fa-print"></i>'],
                ['extend' => 'excel', 'className' => 'btn xs default m-2', 'text' => '<i class="fa fa-file-excel"></i>'],
                ['extend' => 'reload', 'className' => 'btn xs default m-2', 'text' => '<i class="fa fa-sync"></i>'],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id' => [
                'title' => '#',
                'orderable' => false,
                'searchable' => false,
                'render' => function () {
                    return 'function(data,type,fullData,meta){return meta.settings._iDisplayStart+meta.row+1;}';
                }
            ],
            Column::make('name'),
            Column::make('permissions'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Roles_' . date('YmdHis');
    }
}
