@extends('backend.layouts.app')

@section('content')
    <div class="row-fluid">

        <!-- Session message -->
        @if(session('msg'))
            <div class="alert alert-error">
                <button class="close" data-dismiss="alert">×</button>
                <strong>{{session('msg')}}</strong>
            </div>
        @endif

        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>{{ __('backend.info_category') }}</h5>
            </div>
            <div class="widget-content nopadding">
                <form class="form-horizontal" method="POST" action="{{route('category.store')}}">
                    {{csrf_field()}}
                    <div class="control-group">
                        <label class="control-label">{{ __('backend.parent_id') }}</label>
                        <div class="controls ">
                            <select name="parent_id" class="span11">
                                <option value="0">NO.</option>
                                <option>Second option</option>
                                <option>Third option</option>
                                <option>Fourth option</option>
                                <option>Fifth option</option>
                                <option>Sixth option</option>
                                <option>Seventh option</option>
                                <option>Eighth option</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">{{__('backend.name')}}</label>
                        <div class="controls">
                            <input type="text" name="name" class="span11">
                            @if ($errors->has('name'))
                                <span class="help-inline block txt-red">{{__('backend.required')}}</span>
                            @endif
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">{{__('backend.status')}}</label>
                        <div class="controls">
                            <label >
                                <input type="radio" name="status" checked value="1"/>
                                {{__('backend.active')}}</label>
                            <label>
                                <input type="radio" name="status" value="0"/>
                                {{__('backend.deactive')}}</label>
                            <label>
                                <input type="radio" name="status" value="2"/>
                                {{__('backend.special')}}</label>
                        </div>
                    </div>

                    <div class="form-actions" style="border-top: 1px solid #e5e5e5 !important;">
                        <button type="submit" class="btn btn-success">{{__('backend.create')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
