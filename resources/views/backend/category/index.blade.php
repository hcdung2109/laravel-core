@extends('backend.layouts.app')

@section('content')
<div class="row-fluid">

    <div class="span12">
        <div class="widget-box">
            <div class="widget-content nopadding">
                <table class="table table-bordered table-striped with-check">
                <thead>
                <tr>
                    <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th>
                    <th>{{__('backend.name')}}</th>
                    <th>{{__('backend.status')}}</th>
                    <th>{{__('backend.parent')}}</th>
                    <th class="taskOptions">{{__('backend.action')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $item)
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>{{$item->name}}</td>
                        <td>Row 2</td>
                        <td>Row 3</td>
                        <td class="taskOptions">
                            <a href="#" class="tip-top" data-original-title="Update">
                                <i class="icon-wrench"></i>
                            </a>
                            <a href="#" class="tip-top" data-original-title="Delete">
                                <i class="icon-remove"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
        <div class="pagination">
            <ul>
                <li><a href="#">Prev</a></li>
                <li class="active"> <a href="#">1</a> </li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection