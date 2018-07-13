(function () {

  const USER_ID = document.getElementById('user_id').value;

  Echo
    .channel(`users.${USER_ID}`)
    .listen('.orders.shipped', function (e) {
      console.log(e);
    });

})();
