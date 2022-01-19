<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Info</title>
    </head>
    <body onload="document.forms['getinf'].submit()">

        <form action="{{ route('getInfo') }}" method="post" name="getinf">
            <input class="form-control" type="hidden" id="userid" name="userid" value=""/> <br />
        </form>
        <script src="https://static.line-scdn.net/liff/edge/versions/2.3.0/sdk.js"></script>
        <script>
            function runApp() {
              liff.getProfile().then(profile => {
                document.getElementById("userid").value = profile.userId;
              }).catch(err => console.error(err));
            }
            liff.init({ liffId: "1656819334-zJP6arE9" }, () => {
              if (liff.isLoggedIn()) {
                runApp()
              } else {
                liff.login();
              }
            }, err => console.error(err.code, error.message));
        </script>
    </body>
</html>
