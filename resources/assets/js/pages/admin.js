(function () {

  Echo
    .channel('admin')
    .listen('.orders.shipped', function (e) {
      console.log(e);
    });

})();
