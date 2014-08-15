@extends('layouts.default')

@section('title')
Page | feed
@stop

@section('content')

<noscript>
  <META HTTP-EQUIV="Refresh" CONTENT="0;URL=/js-is-required">
</noscript>

<div class="row">
<div class="container" style="margin-bottom: 15px;">
    <select class="form-control" ng-model="search" >
      <optgroup label="Выбор источника:">
          <option>lenta.ru</option>
          <option>lifenews.ru</option>
          <option>rusvesna.su</option>
          <option>censor.net.ua</option>
          <option>unian.net</option>
      </optgroup>
      <optgroup label="Очистка выбора(пустой фильтр):">
        <option></option>
      </optgroup>
    </select>
</div>
</div>

<div class="row" ng-controller="FeedController">
<div ng-show="loading">
    <img class="img-loading" src="/img/ajax-loader.gif" id="img" alt=""/>
</div>
    <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3" ng-repeat="feed in feeds | filter:search">
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