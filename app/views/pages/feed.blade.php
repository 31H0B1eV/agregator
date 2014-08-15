@extends('layouts.default')

@section('title')
Page | feed
@stop

@section('content')

<noscript>
  <META HTTP-EQUIV="Refresh" CONTENT="0;URL=/js-is-required">
</noscript>

<div class="row" ng-controller="FeedController">
<div ng-show="loading">
    <img class="img-loading" src="/img/ajax-loader.gif" id="img" alt=""/>
</div>
    <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3" ng-repeat="feed in feeds">
        <div class="thumbnail">
            <div class="caption">
                <h3 id="tmb-title">
                    <a href=" {{ feed.link }} " target="_blank">
                        {{ feed.title.substr(0, 30) + '...' }}
                    </a>
                </h3><hr/>
                <p> {{ feed.contentSnippet }} </p><hr/>
                <p style="text-align: right"><small>&copy; источник: {{ feed.link.match(r)[1] }}.</small></p>
            </div>
        </div>
    </div>
</div>

@stop