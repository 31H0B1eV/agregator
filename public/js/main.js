function FeedController($scope, $http) {
    $scope.feeds = [];
    $scope.loading = true;
    $scope.dom = /:\/\/(.[^/]+)/;  // regexp for extraction domain from given url
    $scope.murl = /\b((?:[a-z][\w-]+:(?:\/{1,3}|[a-z0-9%])|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:'".,<>?«»“”‘’]))/ig;

    $http.get('/api/v1/show')
        .success(function(feeds) {
            $scope.feeds = feeds;
            $scope.loading = false;
            //console.debug($scope.feeds);
        });

    $http.get('/api/v1/images')
        .success(function(feeds) {
            $scope.images = feeds;
            $scope.loading = false;
            //console.debug($scope.feeds);
        });
}