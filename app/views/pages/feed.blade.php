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



    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" ng-hide="loading">
        <div class="thumbnail" ng-repeat="feed in feeds.responseData.feed.entries | filter:search">
            <div class="caption">
                <h3 id="tmb-title">
                    <a href=" {{ feed.link }} " target="_blank">
                        {{ feed.title }}
                    </a>
                </h3><hr/>
                <p> {{ feed.content }} </p><hr/>
                <p style="text-align: right"><small>&copy; источник: {{ feed.link.match(dom)[1] }}.</small></p>
            </div>
        </div>
    </div>

    <div class="col-sm-3 col-md-3 col-lg-3 hidden-xs" ng-hide="loading">
        <label for="select_source">Выбор источника:</label>
        <select class="form-control" id="select_source" ng-model="search" >
          <optgroup label="Выбор источника:">
              <option>rusvesna.su</option>
              <option>unian.net</option>
              <option>lenta.ru</option>
              <option>liga.net</option>
              <option>lifenews.ru</option>
              <option>censor.net.ua</option>
          </optgroup>
          <optgroup label="Очистка выбора(пустой фильтр):">
            <option></option>
          </optgroup>
        </select>

        &nbsp
        <div class="thumbnail" ng-repeat="image in images.responseData.feed.entries">
            <div class="caption">
                <img class="tmbimg" src="{{ image.content.match(murl)[1] }}" alt=""/><hr/>
                <p>{{ image.contentSnippet }}</p>
                <p style="text-align: right"><small>&copy; источник: flickr.com</small></p>
            </div>
        </div>
    </div>
</div>

@stop