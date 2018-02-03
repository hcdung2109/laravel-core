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
                    <th>Column name</th>
                    <th>Column name</th>
                    <th>Column name</th>
                    <th>Column name</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>Row 1</td>
                    <td>Row 2</td>
                    <td>Row 3</td>
                    <td>Row 4</td>
                </tr>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>Row 1</td>
                    <td>Row 2</td>
                    <td>Row 3</td>
                    <td>Row 4</td>
                </tr>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>Row 1</td>
                    <td>Row 2</td>
                    <td>Row 3</td>
                    <td>Row 4</td>
                </tr>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>Row 1</td>
                    <td>Row 2</td>
                    <td>Row 3</td>
                    <td>Row 4</td>
                </tr>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>Row 1</td>
                    <td>Row 2</td>
                    <td>Row 3</td>
                    <td>Row 4</td>
                </tr>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>Row 1</td>
                    <td>Row 2</td>
                    <td>Row 3</td>
                    <td>Row 4</td>
                </tr>
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