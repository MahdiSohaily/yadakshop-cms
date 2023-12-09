function sendAjaxRequestForSuccessfulLogin(url, id, username, time, host, ip) {
  let params = new URLSearchParams();
  params.append("sendMessage", "local");
  params.append("id", id);
  params.append("username", username);
  params.append("time", time);
  params.append("host", host);
  params.append("ip", ip);
  // Use Axios for the AJAX request

  console.log(url);

  // axios
  //   .post(url, params)
  //   .then(function (response) {
  //     console.log(response.data);
  //     // // Handle the success response
  //     // window.location.href = `index.php?msg=${username}`;
  //   })
  //   .catch(function (error) {
  //     // // Handle errors
  //     // window.location.href = `index.php?msg=${username}`;
  //   });
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

  jQuery.ajax({
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
