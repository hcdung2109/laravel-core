@extends('backend.layouts.app')

@section('content')
    <ul class="demo-btns">
        <li>
            <a href="{{route('category.create')}}" class="btn btn-labeled bg-color-magenta txt-color-white">
                <span class="btn-label"><i class="glyphicon glyphicon-plus"></i></span>
                {{__('backend.create_new')}}
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="btn btn-labeled btn-info"> <span class="btn-label"><i class="glyphicon glyphicon-refresh"></i></span>Refresh </a>
        </li>
    </ul>
    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1" data-widget-editbutton="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
            <h2>{{__('backend.table_category')}}</h2>

        </header>

        <!-- widget div-->
        <div>

            <!-- widget edit box -->
            <div class="jarviswidget-editbox">
                <!-- This area used as dropdown edit box -->

            </div>
            <!-- end widget edit box -->

            <!-- widget content -->
            <div class="widget-body no-padding">

                <table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%">

                    <thead>
                    <tr>
                        <th class="hasinput" style="width:17%">
                            <input type="text" class="form-control" placeholder="{{__('backend.search')}}" />
                        </th>
                        <th class="hasinput" style="width:16%">
                            <input type="text" class="form-control" placeholder="{{__('backend.search')}}" />
                        </th>
                        <th class="hasinput" style="width:17%">
                            <input type="text" class="form-control" placeholder="{{__('backend.search')}}" />
                        </th>
                        <th class="hasinput" style="width:16%">
                            <input type="text" class="form-control" placeholder="{{__('backend.search')}}" />
                        </th>
                    </tr>

                    <th class="text-center">{{__('backend.name')}}</th>
                    <th class="text-center">{{__('backend.parent')}}</th>
                    <th class="text-center">{{__('backend.status')}}</th>
                    <th class="text-center">{{__('backend.action')}}</th>
                    </thead>

                    <tbody class="smart-form">
                    @foreach($categories as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>
                                @if ($item->parent)
                                    {{$item->parent->name}}
                                @else
                                    Null
                                @endif
                            </td>
                            <td class="text-center">
                                <label class="toggle">
                                    <input type="checkbox" name="checkbox-toggle" checked="checked">
                                    <i data-swchon-text="ON" data-swchoff-text="OFF"></i>
                                </label>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-success btn-sm">
                                    <i class="fa fa-paper-plane"></i>
                                    {{__('backend.to_top')}}
                                </button>
                                <a href="{{route('category.edit',$item)}}" class="btn btn-info btn-sm">
                                    <i class="fa fa-gear fa-spin"></i>
                                    {{__('backend.edit')}}
                                </a>
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash-o"></i>
                                    {{__('backend.delete')}}
                                </button>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>

            </div>
            <!-- end widget content -->

        </div>
        <!-- end widget div -->

    </div>
    <div class="pagination ">
        {{ $categories->links() }}
    </div>

    <script type="text/javascript">
        function ajaxDelCategory() {
            $('#btn-yes-confirm').click(function () {
                $.ajax({
                    type : 'DELETE',
                    
                });
            });
        }
    </script>
@endsection