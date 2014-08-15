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

    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <div class="thumbnail" ng-repeat="feed in feeds | filter:search">
            <div class="caption">
                <h3 id="tmb-title">
                    <a href=" {{ feed.link }} " target="_blank">
                        {{ feed.title }}
                    </a>
                </h3><hr/>
                <p> {{ feed.contentSnippet }} </p><hr/>
                <p style="text-align: right"><small>&copy; источник: {{ feed.link.match(r)[1] }}.</small></p>
            </div>
        </div>
    </div>

    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
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

        <div class="thumbnail" style="height: 800px;">
            <p>Здесь что -то будет</p>
        </div>
    </div>
</div>

@stop