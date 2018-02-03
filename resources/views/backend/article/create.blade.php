@extends('backend.layouts.app')

@section('content')
<div class="row-fluid">
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>{{ __('backend.info_article') }}</h5>
        </div>
        <div class="widget-content nopadding">
            <form class="form-horizontal" method="POST" action="">
                <div class="control-group">
                    <label class="control-label">Select {{ __('backend.category') }}</label>
                    <div class="controls ">
                        <select name="category_id" class="span11">
                            <option>First option</option>
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
                    <label class="control-label">{{__('backend.title')}}</label>
                    <div class="controls">
                        <input type="text" name="title" class="span11">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">File upload</label>
                    <div class="controls">
                        <input type="file" name="image"/>
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

                <div class="control-group">
                    <label class="control-label" for="inputSuccess">{{__('backend.summary')}}</label>
                    <div class="controls">
                        <textarea class="textarea_editor span11" rows="6"></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="inputSuccess">{{__('backend.content')}}</label>
                    <div class="controls">
                        <textarea class="textarea_editor span11" rows="20" ></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">{{__('backend.tags')}}</label>
                    <div class="controls">
                        <input type="text" name="tags" class="span11">
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
