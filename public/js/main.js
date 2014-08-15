function FeedController($scope, $http) {
    $scope.feeds = [];
    $scope.loading = true;
    $scope.r = /:\/\/(.[^/]+)/;  // regexp for extraction domain from given url

    $http.get('/api/v1/show')
        .success(function(feeds) {
            $scope.feeds = feeds.responseData.feed.entries;
            $scope.loading = false;
            //console.debug($scope.feeds);
        });
}