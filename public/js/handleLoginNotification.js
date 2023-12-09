function sendAjaxRequest(url, id, username, time, host, ip) {
  var params = {
    sendMessage: "local",
    id,
    username,
    time,
    host,
    ip,
  };

  $.ajax({
    method: "POST",
    url,
    data: params,
    success: function (response) {
      window.location.href = "index.php?msg=<?= $username ?>";
    },
    error: function (error) {
      window.location.href = "index.php?msg=<?= $username ?>";
    },
  });
}
function sendLoginAttemptAlert(url, username, password, time, host, ip) {
  var data = {
    sendMessage: "attempt",
    origen: "local",
    host,
    ip,
    time,
    username,
    password,
  };

  $.ajax({
    type: "POST",
    url,
    data: data,
    success: function (response) {
      console.log(response);
    },
    error: function (error) {
      console.log(error);
    },
  });
}
