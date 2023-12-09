function sendAjaxRequestForSuccessfulLogin(url, id, username, time, host, ip) {
  let params = new URLSearchParams();
  params.append("sendMessage", "local");
  params.append("id", id);
  params.append("username", username);
  params.append("time", time);
  params.append("host", host);
  params.append("ip", ip);
  // Use Axios for the AJAX request

  axios
    .post(url, params)
    .then(function (response) {})
    .catch(function (error) {
      console.log(error.message);
    });
}

function sendLoginAttemptAlert(url, username, password, time, host, ip) {
  let params = new URLSearchParams();
  params.append("sendMessage", "attempt");
  params.append("origen", "local");
  params.append("host", host);
  params.append("ip", ip);
  params.append("time", time);
  params.append("username", username);
  params.append("password", password);

  axios
    .post(url, params)
    .then(function (response) {})
    .catch(function (error) {
      console.log(error.message);
    });
}
