@extends('backend.layouts.app')

@section('content')
    <section id="widget-grid" class="">

        <!-- START ROW -->

        <div class="row">

            <!-- NEW COL START -->
            <article class="col-sm-12 col-md-12 col-lg-12">

                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
                    <header>
                        <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                        <h2>{{__('backend.create_new')}}</h2>

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

                            <form class="smart-form" method="POST" action="{{route('category.store')}}">
                                <fieldset>

                                    <section>
                                        <label class="label">Select {{__('backend.parent')}}</label>
                                        <label class="select">
                                            <select>
                                                <option value="0">NO.</option>
                                                @foreach($allCategory as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @foreach($category->children as $child)
                                                        <option value="{{$child->id}}">--- {{$child->name}}</option>
                                                    @endforeach
                                                @endforeach
                                            </select> <i></i> </label>
                                    </section>

                                </fieldset>

                                <fieldset>
                                    <section>
                                        <label class="label">{{__('backend.name')}}</label>
                                        <label class="input">
                                            <input type="text" maxlength="10" name="name">
                                        </label>
                                        <div class="note">
                                            @if ($errors->has('name'))
                                                <span class="help-inline block txt-red">{{__('backend.required')}}</span>
                                            @endif
                                        </div>
                                    </section>

                                    <section>
                                        <label class="label">{{__('backend.status')}}</label>
                                        <div class="inline-group">
                                            <label class="radio">
                                                <input type="radio" name="radio-inline" checked="checked">
                                                <i></i>{{__('backend.active')}}</label>
                                            <label class="radio">
                                                <input type="radio" name="radio-inline">
                                                <i></i>{{__('backend.deactive')}}</label>
                                        </div>
                                    </section>

                                    <section>
                                        <label class="label">{{__('backend.to_top')}}</label>
                                        <div class="inline-group">
                                            <label class="radio">
                                                <input type="radio" name="to_top" checked="checked">
                                                <i></i>{{__('backend.no')}}</label>
                                            <label class="radio">
                                                <input type="radio" name="to_top">
                                                <i></i>{{__('backend.yes')}}</label>
                                        </div>
                                        <div class="note">
                                            <strong>Maxlength</strong> is automatically added via the "maxlength='#'" attribute
                                        </div>

                                    </section>
                                </fieldset>

                                <footer>
                                    <button type="submit" class="btn btn-primary">{{__('backend.create')}}</button>
                                    <button type="button" class="btn btn-default" onclick="window.history.back();">{{__('backend.back')}}</button>
                                </footer>
                            </form>

                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
                <!-- end widget -->

            </article>
            <!-- END COL -->
        </div>

        <!-- END ROW -->

    </section>
@endsection
