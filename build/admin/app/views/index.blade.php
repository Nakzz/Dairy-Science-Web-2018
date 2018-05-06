@extends('layouts.base')

@section('content')

<style>
.centerdiv {
    display: block;
    margin-left: auto;
    margin-right: auto;
    }
</style>

<div class="row buffer-bottom-30">
    <div class="col-md-8 col-md-offset-2">
        <div class="pull-left">
            <a href="[[ URL::to('http://dairymanagement.wisc.edu/apps/presentations/') ]]" title="Presentations App">Presentations</a>
        <br>
        <!-- </div>

	<div class="centerdiv"> -->
            <a href="[[ URL::to('http://dairymanagement.wisc.edu/apps/publications/') ]]" title="Publications App">Publications</a>
        <br>
	    <a href="[[ URL::to('http://dairymanagement.wisc.edu/apps/links/') ]]" title="Links App">Links</a>
	 <br>
	    <a href="[[ URL::to('http://dairymanagement.wisc.edu/HezeGallery/') ]]" title="Gallery App">Gallery</a>
        <br>
        <a href="[[ URL::to('../../apps/newsfeed?auth') ]]" title="Gallery App">News Feed App</a>
        <br>
        <a href="[[ URL::to('../../apps/filemanager?auth') ]]" title="Gallery App">File Manager App</a>
        </div>
        <a href="[[ URL::to('http://dairymanagement.wisc.edu/oldtools/feedval_12_v2/admin/') ]]" title="FeedVal Admin">FeedVal v6.0 monthly files</a>
        </div>

	<a href="[[ URL::to('http://dairymanagement.wisc.edu/oldtools/feedval_12
_v2/admin/') ]]" title="Gallery App">DS tool admin</a>
        </div>



<!--
 <div class="centerdiv">
            <a href="[[ URL::to('http://dairymanagement.wisc.edu/apps/links/') ]]" title="Links App">&nbsp;&nbsp;Links-App</a>
        </div>

 <div class="centerdiv">
            <a href="[[ URL::to('http://dairymanagement.wisc.edu/HezeGallery/') ]]" title="Links App">&nbsp;&nbsp;Gallery-App</a>
        </div>

-->

        <div class="pull-right">
            <a href="[[ URL::to('/logout') ]]" title="Log out">Log out</a>
        </div>
    </div>
</div>
<!--
<div class="text-right">
    <a href="[[ URL::to('/logout') ]]" title="Log out">Log out</a>
</div>
-->




<div class="row buffer-bottom-30" ng-app="AdminPanel" ng-controller="AdminPanelController">
    <div class="col-md-8 col-md-offset-2">
        <fieldset>
            <legend>Visitor Analytics</legend>
            <form name="analysisForm">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="start-date">Start date</label>

                            <div class="input-group">
                                <input type="text" name="start-date" id="start-date"
                                       class="form-control" ng-required="true" disabled
                                       ng-model="startDatePicker.date"
                                       datepicker-popup="MMMM d, yyyy"
                                       is-open="startDatePicker.opened"
                                       min-date="startDatePicker.minDate"
                                       max-date="startDatePicker.maxDate">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default"
                                            ng-click="startDatePicker.toggle($event)">
                                        <i class="glyphicon glyphicon-calendar"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="end-date">End date</label>

                            <div class="input-group">
                                <input type="text" name="end-date" id="end-date"
                                       class="form-control" ng-required="true" disabled
                                       ng-model="endDatePicker.date" datepicker-popup="MMMM d, yyyy"
                                       is-open="endDatePicker.opened"
                                       min-date="endDatePicker.minDate"
                                       max-date="endDatePicker.maxDate">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default"
                                            ng-click="endDatePicker.toggle($event)">
                                        <i class="glyphicon glyphicon-calendar"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" ng-model="detailed"> Include every visit
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-default"
                                ng-disabled="isStartDateAfterEndDate()"
                                ng-click="getReport()">Get download link
                        </button>
                    </div>
                    <div class="col-md-4">
                        <div ng-show="generatingReport">
                            Generating report ...
                        </div>
                        <div ng-show="!analysisForm.$dirty && reportLink && !generatingReport">
                            <a ng-href="{{reportLink}}" title="Download report">Click here to
                                download report</a>
                        </div>
                    </div>
                    <div class="col-md-5 text-right">
                        <div ng-show="isStartDateAfterEndDate()">
                            <span class="text-danger">Start date is after end date.</span>
                        </div>
                        <div ng-show="isPeriodTooLong()">
                            <span class="text-warning">The selected period is too long. The system may not be able to generate a report.</span>
                        </div>
                    </div>
                </div>
                <div class="row buffer-top-12">
                    <div class="col-sm-12">
                        <div class="alert alert-danger" role="alert"
                             ng-show="!analysisForm.$dirty && errorGeneratingSpreadsheet && !generatingReport">
                            <b>Error!</b> There was a problem generating the report, likely because
                            the period selected was tool long. Please try generating a report for a
                            shorter period and see if that helps.
                        </div>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <fieldset>
            <legend>Last [[ count($lastFewVisits) ]] Visits</legend>
        </fieldset>
        <?php
        function createTable($lastFewVisits)
        {
            $thead = "<thead><tr><th>S. No. </th></th><th>Email</th><th>Tool</th><th>Time</th></tr></thead>";
            $reduced = array_reduce($lastFewVisits, function ($carry, $visit) {
                $rowNum = $carry['rowNum'];
                $tds = '<td>' . $rowNum . '</td><td>' . $visit->email . '</td><td>' . $visit->tool . '</td><td>' . $visit->time . '</td>';
                $tr = '<tr>' . $tds . '</tr>';
                $carry['rowNum'] = $rowNum + 1;
                $carry['trs'] = $carry['trs'] . $tr;
                return $carry;
            }, array('trs' => '', 'rowNum' => 1));
            $tbody = '<tbody>' . $reduced['trs'] . '</tbody>';
            $table = '<table class="table">' . $thead . $tbody . '</table>';
            return $table;
        }

        ?>
        [[ createTable($lastFewVisits) ]]
    </div>
</div>
[[ HTML::script('javascripts/ui-bootstrap-tpls-0.11.0.min.js') ]]
[[ HTML::script('javascripts/angular-resource.min.js') ]]
[[ HTML::script('javascripts/admin.js') ]]
@stop
