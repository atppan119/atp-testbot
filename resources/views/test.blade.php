<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Info</title>
    </head>
    <body>
        <script src="https://static.line-scdn.net/liff/edge/versions/2.3.0/sdk.js"></script>
        <script>
            function runApp() {
                document.cookie="uid=1150";
            //   liff.getProfile().then(profile => {
            //     document.cookie="uid="profile.userId;
            //   }).catch(err => console.error(err));
            // }
            // liff.init({ liffId: "1656819334-zJP6arE9" }, () => {
            //   if (liff.isLoggedIn()) {
            //     runApp()
            //   } else {
            //     liff.login();
            //   }
            // }, err => console.error(err.code, error.message));
            }
        </script>
        <?php
            $uid = $_COOKIE['uid'];
            $member = App\Models\Member::where('uid',strval($uid))->first();
            if(!is_null($member)){
                if(!isset($name)){
                $name = $member->name;
                }
                if(!isset($tel)){
                $tel = $member->tel;
                }
                if(!isset($email)){
                $email = $member->email;
                }
            }
             ?>
        <div class="row">
            <div class="col-md-6" style="margin:5px">
                <p>NAME: {{ $name }}</p>
                <p>TEL: {{ $tel }}</p>
                <p>EMAIL: {{ $email }}</p>
            </div>
        </div>
    </body>
</html>
